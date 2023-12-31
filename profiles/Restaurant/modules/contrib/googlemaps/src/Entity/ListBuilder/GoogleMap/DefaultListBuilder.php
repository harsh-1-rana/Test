<?php

namespace Drupal\googlemaps\Entity\ListBuilder\GoogleMap;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * The list builder.
 */
class DefaultListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader(): array {
    $header = [];

    $header['label'] = $this->t('Label');
    $header['key'] = $this->t('API key');
    $header['libraries'] = $this->t('Libraries');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity): array {
    $row = [];

    foreach (['label', 'key', 'libraries'] as $property) {
      $row[$property] = empty($entity->{$property}) ? '-' : \implode(', ', (array) $entity->{$property});
    }

    return $row + parent::buildRow($entity);
  }

}
