<?php

namespace Drupal\csvtask\Services;

use Drupal\node\Entity\Node;

/**
 * Service to update data of node from csv data.
 */
class Update {

  /**
   * Function to update data.
   */
  public function update($item) {
    $nids = \Drupal::entityQuery('node')
      ->condition('title', $item['Title'])
      ->execute();
    $nodes = Node::loadMultiple($nids);

    foreach ($nodes as $node) {
      $title = $item['Title'];
      $nid = $node->nid->value;
      $para = $node->field_intake;
      foreach ($para as $value) {
        $id[] = $value->entity->id->value;
      }
      for ($i = 0; $i < count($id); $i++) {
        $paragraph = \Drupal::entityTypeManager()
          ->getStorage('paragraph')
          ->load($id[$i]);
        // $paragraph = $node->field_para_of_details->entity;
        $paragraph->set(
              'field_course_name',
              $item['field_course_name' . $i]
          );
        // $paragraph->set(
        // 'field_college_location    ',
        // $item['field_college_location' . $i]
        // );
        $paragraph->set(
              'field_start_date',
              $item['field_start_date' . $i]
          );
        $paragraph->set('field_end_date', $item['field_end_date' . $i]);
        $paragraph->save();
      }

      $node->set('field_college_name', $item['field_college_name']);
      $node->set('field_location', $item['field_location']);
      $node->set(
            'field_year_of_foundation',
            $item['field_year_of_foundation']
        );
      $node->save();
    }
  }

}
