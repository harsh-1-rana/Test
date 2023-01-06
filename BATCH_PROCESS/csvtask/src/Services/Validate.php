<?php

namespace Drupal\csvtask\Services;

use Drupal\node\Entity\Node;

/**
 * Service to validate a data from a csv file.
 */
class Validate {

  /**
   * Function to validate a data from csv.
   */
  public function validate($item) {
    $nids = \Drupal::entityQuery('node')
      ->condition('title', $item['Title'])
      ->execute();
    $nodes = Node::loadMultiple($nids);

    $college_name = $item['Title'];
    $college_len = strlen($college_name);
    $location = $item['field_location'];
    $location_len = strlen($location);
    $id = $item['id'];
    $foundation_year = $item['field_year_of_foundation'];

    if (
          $college_name == '' ||
          $college_len < 5 ||
          $college_len > 255 ||
          $location == '' ||
          $location_len > 255 ||
          ($foundation_year > 2023 - 01 - 01 ||
              $foundation_year < 1900 - 01 - 01)
      ) {
      $error = [];

      if ($college_name == '' || $college_len > 255) {
        $message1 = \Drupal::messenger()->addMessage(
              "Title field is either empty or greater than 255 characters at id  $id "
          );
        array_push($error, $message1);
      }

      if ($location == '' || $location_len > 255) {
        $message2 = \Drupal::messenger()->addMessage(
              " location field is either empty or greater than 255 characters at id  $id"
          );
        array_push($error, $message2);
      }
      if (
            $foundation_year > 2023 - 01 - 01 ||
            $foundation_year < 1900 - 01 - 01
        ) {
        $message3 = \Drupal::messenger()->addMessage(
              " foundation year must be between 1990 and 2023 at id  $id"
          );
        array_push($error, $message3);
      }
      return $error;
    }
    else {
      if (!$nodes) {
        $b = \Drupal::messenger()->addMessage('New Nodes created ');
        $check = \Drupal::Service('csvtask.create_college_service');
        $check1 = $check->create_college($item);
        return $b;
      }
      else {
        $b = \Drupal::messenger()->addMessage(
              'Nodes updated successfully'
                );
        $check = \Drupal::Service('csvtask.update_college_service');
        $check1 = $check->update($item);
        return $b;
      }
    }
  }

}
