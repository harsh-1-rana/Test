<?php

namespace Drupal\csvtask\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * The Import Controller Class extends the ControllerBase.
 */
class ImportController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   A string containing a URL that may be used to access the file.
   */
  public function content(Request $request) {
    $form = \Drupal::formBuilder()->getForm(
          'Drupal\csvtask\Form\ImportForm'
      );

    return $form;
  }

}
