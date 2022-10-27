<?php

namespace Drupal\newtask\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Newtask entity type entity.
 *
 * @ConfigEntityType(
 *   id = "newtask_entity_type",
 *   label = @Translation("Newtask entity type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\newtask\NewtaskEntityTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\newtask\Form\NewtaskEntityTypeForm",
 *       "edit" = "Drupal\newtask\Form\NewtaskEntityTypeForm",
 *       "delete" = "Drupal\newtask\Form\NewtaskEntityTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\newtask\NewtaskEntityTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_export = {
 *     "id",
 *     "label"
 *   },
 *   config_prefix = "newtask_entity_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "newtask_entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/newtask_entity_type/{newtask_entity_type}",
 *     "add-form" = "/admin/structure/newtask_entity_type/add",
 *     "edit-form" = "/admin/structure/newtask_entity_type/{newtask_entity_type}/edit",
 *     "delete-form" = "/admin/structure/newtask_entity_type/{newtask_entity_type}/delete",
 *     "collection" = "/admin/structure/newtask_entity_type"
 *   }
 * )
 */
class NewtaskEntityType extends ConfigEntityBundleBase implements NewtaskEntityTypeInterface {

  /**
   * The Newtask entity type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Newtask entity type label.
   *
   * @var string
   */
  protected $label;

}
