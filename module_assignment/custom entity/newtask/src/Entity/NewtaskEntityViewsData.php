<?php

namespace Drupal\newtask\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Newtask entity entities.
 */
class NewtaskEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
