<?php

namespace Drupal\csvtask\Services;

use Drupal\paragraphs\Entity\Paragraph;
use Drupal\node\Entity\Node;

/**
 * Service to Create New Nodes From CSv.
 */
class CreateNode {

  /**
   * Function to Import data from csv file.
   */
  public function create_college($item) {
    $course = 'field_course_name';
    $p = 0;
    foreach ($item as $key => $value) {
      if (str_contains($key, $course)) {
        $p++;
      }
    }
    $node_data['type'] = 'csv_type';
    $node_data['title'] = $item['Title'];
    $node_data['field_college_name'] = $item['field_college_name'];
    $node_data['field_location'] = $item['field_location'];
    $node_data['field_year_of_foundation'] =
            $item['field_year_of_foundation'];

    for ($i = 0; $i < $p; $i++) {
      if ($item['field_course_name' . $i] !== ' ') {
        $courseparagraph[$i] = Paragraph::create([
          'type' => 'intake_para',
          'field_course_name' => $item['field_course_name' . $i],
          'field_college_location' =>
          $item['field_college_location' . $i],
          'field_start_date' => $item['field_start_date' . $i],
          'field_end_date' => $item['field_end_date' . $i],
        ]);

        $courseparagraph[$i]->save();
        $node_data['field_intake'][$i] = $courseparagraph[$i];
      }
      else {
        break;
      }
    }

    $node = Node::create($node_data);
    $node->setPublished(TRUE);
    $node->save();
  }

}
