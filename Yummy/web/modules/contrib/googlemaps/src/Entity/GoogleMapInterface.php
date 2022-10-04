<?php

namespace Drupal\googlemaps\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Describes the Google Map entity.
 */
interface GoogleMapInterface extends ConfigEntityInterface {

  /**
   * The entity type ID.
   */
  public const ENTITY_TYPE = 'googlemap';

}
