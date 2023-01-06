<?php

namespace Drupal\csvtask;

/**
 * Processing of batches.
 */
class ImportData {

  /**
   * Here The validation service is being called.
   */
  public static function ImportDataItem($item, &$context) {
    $context['sandbox']['current_item'] = $item;
    $message = 'Creating ' . $item['Title'];
    \Drupal::service('csvtask.validate_college_service')->validate($item);
    $context['message'] = $message;
    $context['results'][] = $item;
  }

  /**
   * Callback of function takes place.
   */
  public function ImportDataItemCallback($success, $results, $operations) {
    if ($success) {
      $message = \Drupal::translation()->formatPlural(
            count($results),
            'One item processed.',
            '@count items processed.'
        );
    }
    else {
      $message = t('Finished with an error.');
    }
    drupal_set_message($message);
  }

}
