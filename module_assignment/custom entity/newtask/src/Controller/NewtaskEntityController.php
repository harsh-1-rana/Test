<?php

namespace Drupal\newtask\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\newtask\Entity\NewtaskEntityInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class NewtaskEntityController.
 *
 *  Returns responses for Newtask entity routes.
 */
class NewtaskEntityController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * The date formatter.
   *
   * @var \Drupal\Core\Datetime\DateFormatter
   */
  protected $dateFormatter;

  /**
   * The renderer.
   *
   * @var \Drupal\Core\Render\Renderer
   */
  protected $renderer;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    $instance = parent::create($container);
    $instance->dateFormatter = $container->get('date.formatter');
    $instance->renderer = $container->get('renderer');
    return $instance;
  }

  /**
   * Displays a Newtask entity revision.
   *
   * @param int $newtask_entity_revision
   *   The Newtask entity revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($newtask_entity_revision) {
    $newtask_entity = $this->entityTypeManager()->getStorage('newtask_entity')
      ->loadRevision($newtask_entity_revision);
    $view_builder = $this->entityTypeManager()->getViewBuilder('newtask_entity');

    return $view_builder->view($newtask_entity);
  }

  /**
   * Page title callback for a Newtask entity revision.
   *
   * @param int $newtask_entity_revision
   *   The Newtask entity revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($newtask_entity_revision) {
    $newtask_entity = $this->entityTypeManager()->getStorage('newtask_entity')
      ->loadRevision($newtask_entity_revision);
    return $this->t('Revision of %title from %date', [
      '%title' => $newtask_entity->label(),
      '%date' => $this->dateFormatter->format($newtask_entity->getRevisionCreationTime()),
    ]);
  }

  /**
   * Generates an overview table of older revisions of a Newtask entity.
   *
   * @param \Drupal\newtask\Entity\NewtaskEntityInterface $newtask_entity
   *   A Newtask entity object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(NewtaskEntityInterface $newtask_entity) {
    $account = $this->currentUser();
    $newtask_entity_storage = $this->entityTypeManager()->getStorage('newtask_entity');

    $langcode = $newtask_entity->language()->getId();
    $langname = $newtask_entity->language()->getName();
    $languages = $newtask_entity->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $newtask_entity->label()]) : $this->t('Revisions for %title', ['%title' => $newtask_entity->label()]);

    $header = [$this->t('Revision'), $this->t('Operations')];
    $revert_permission = (($account->hasPermission("revert all newtask entity revisions") || $account->hasPermission('administer newtask entity entities')));
    $delete_permission = (($account->hasPermission("delete all newtask entity revisions") || $account->hasPermission('administer newtask entity entities')));

    $rows = [];

    $vids = $newtask_entity_storage->revisionIds($newtask_entity);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\newtask\Entity\NewtaskEntityInterface $revision */
      $revision = $newtask_entity_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = $this->dateFormatter->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $newtask_entity->getRevisionId()) {
          $link = Link::fromTextAndUrl($date, new Url('entity.newtask_entity.revision', [
            'newtask_entity' => $newtask_entity->id(),
            'newtask_entity_revision' => $vid,
          ]))->toString();
        }
        else {
          $link = $newtask_entity->toLink($date)->toString();
        }

        $row = [];
        $column = [
          'data' => [
            '#type' => 'inline_template',
            '#template' => '{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}',
            '#context' => [
              'date' => $link,
              'username' => $this->renderer->renderPlain($username),
              'message' => [
                '#markup' => $revision->getRevisionLogMessage(),
                '#allowed_tags' => Xss::getHtmlTagList(),
              ],
            ],
          ],
        ];
        $row[] = $column;

        if ($latest_revision) {
          $row[] = [
            'data' => [
              '#prefix' => '<em>',
              '#markup' => $this->t('Current revision'),
              '#suffix' => '</em>',
            ],
          ];
          foreach ($row as &$current) {
            $current['class'] = ['revision-current'];
          }
          $latest_revision = FALSE;
        }
        else {
          $links = [];
          if ($revert_permission) {
            $links['revert'] = [
              'title' => $this->t('Revert'),
              'url' => $has_translations ?
              Url::fromRoute('entity.newtask_entity.translation_revert', [
                'newtask_entity' => $newtask_entity->id(),
                'newtask_entity_revision' => $vid,
                'langcode' => $langcode,
              ]) :
              Url::fromRoute('entity.newtask_entity.revision_revert', [
                'newtask_entity' => $newtask_entity->id(),
                'newtask_entity_revision' => $vid,
              ]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.newtask_entity.revision_delete', [
                'newtask_entity' => $newtask_entity->id(),
                'newtask_entity_revision' => $vid,
              ]),
            ];
          }

          $row[] = [
            'data' => [
              '#type' => 'operations',
              '#links' => $links,
            ],
          ];
        }

        $rows[] = $row;
      }
    }

    $build['newtask_entity_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
