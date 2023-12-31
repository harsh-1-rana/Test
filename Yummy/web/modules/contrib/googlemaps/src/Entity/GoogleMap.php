<?php

namespace Drupal\googlemaps\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Url;

/**
 * Defines the configuration entity.
 *
 * @ConfigEntityType(
 *   id = "googlemap",
 *   label = @Translation("Google Map"),
 *   config_prefix = "googlemap",
 *   admin_permission = "administer google maps",
 *   handlers = {
 *     "list_builder" = "Drupal\googlemaps\Entity\ListBuilder\GoogleMap\DefaultListBuilder",
 *     "form" = {
 *       "default" = "Drupal\googlemaps\Entity\Form\GoogleMap\DefaultForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *   },
 *   entity_keys = {
 *     "id" = "name",
 *     "label" = "label",
 *   },
 *   config_export = {
 *     "label",
 *     "name",
 *     "key",
 *     "libraries",
 *     "callback",
 *   },
 *   links = {
 *     "collection" = "/admin/config/services/google-maps",
 *     "edit-form" = "/admin/config/services/google-maps/{googlemap}",
 *     "delete-form" = "/admin/config/services/google-maps/{googlemap}/delete",
 *   },
 * )
 */
class GoogleMap extends ConfigEntityBase implements GoogleMapInterface {

  /**
   * Human-readable label of an entry.
   *
   * @var string
   */
  public $label = '';

  /**
   * Machine-readable name of an entry.
   *
   * @var string
   */
  public $name = '';

  /**
   * Google API key.
   *
   * @var string
   */
  public $key = '';

  /**
   * Google Maps libraries.
   *
   * @var string[]
   */
  public $libraries = [];

  /**
   * Name of JS initialization callback.
   *
   * @var string
   */
  public $callback = '';

  /**
   * {@inheritdoc}
   */
  public function __construct(array $values) {
    parent::__construct($values, static::ENTITY_TYPE);
  }

  /**
   * {@inheritdoc}
   */
  public function save(): int {
    if (empty($this->label)) {
      throw new \InvalidArgumentException('The "label" property is required!');
    }

    if (empty($this->name)) {
      $this->name = \preg_replace(['/[^a-z0-9_]+/', '/_+/'], '_', \strtolower(
        \Drupal::service('transliteration')->transliterate($this->label, LanguageInterface::LANGCODE_DEFAULT, '_'))
      );
    }

    return parent::save();
  }

  /**
   * {@inheritdoc}
   */
  public function id(): ?string {
    return $this->{$this->getEntityType()->getKey('id')};
  }

  /**
   * {@inheritdoc}
   */
  public function toUrl($rel = 'canonical', array $options = []): Url {
    // The default value for "$rel" is changed.
    return parent::toUrl($rel, $options);
  }

}
