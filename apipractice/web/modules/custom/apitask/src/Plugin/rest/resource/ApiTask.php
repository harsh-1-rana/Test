<?php
/**
 * {@inheritdoc}
 */
namespace Drupal\apitask\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\node\Entity\Node;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\Core\Entity\EntityStorageBase;
use Drupal\paragraphs\ParagraphInterface;
use Drupal\paragraphs\Entity\Paragraph;
/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "demo_resource",
 *   label = @Translation("Demo Resource"),
 *   uri_paths = {
 *     "canonical" = "/profile_rest_api/{uid}",
 *   }
 * )
 */
class ApiTask extends ResourceBase
{
    /**
     * Responds to entity GET requests.
     * @return \Drupal\rest\ResourceResponse
     */
    public function get($uid)
    {
        $User_service = \Drupal::service('apitask.user_service');
        $data['User'] = $User_service->get($uid);
        $About_service = \Drupal::service('apitask.about_service');
        $data['About'] = $About_service->get($uid);
        $Education_service = \Drupal::service('apitask.education_service');
        $data['Education'][] = $Education_service->get($uid);
        $Doc_service = \Drupal::service('apitask.doc_service');
        $data['Docs'][] = $Doc_service->get($uid);
        $Test_service = \Drupal::service('apitask.test_service');
        $data['Tests'][] = $Test_service->get($uid);

        $data = new ModifiedResourceResponse($data, 200);
        return $data;
    }
}
