<?php

namespace Drupal\csvtask\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity\File;

/**
 * The ImportForm Class Extends The FormBase class.
 */
class ImportForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'csv_import_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['description'] = [
      '#markup' => '<p>Use this form to upload a CSV file of Data</p>',
    ];

    $form['import_csv'] = [
      '#type' => 'managed_file',
      '#title' => t('Upload file here'),
      '#upload_location' => 'public://importcsv/',
      '#default_value' => '',
      '#upload_validators' => ['file_validate_extensions' => ['csv']],
      '#states' => [
        'visible' => [
          ':input[name="File_type"]' => [
            'value' => t('Upload Your File'),
          ],
        ],
      ],
    ];

    $form['actions']['#type'] = 'actions';

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Upload CSV'),
      '#button_type' => 'primary',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    /* Fetch the array of the file stored temporarily in database */
    $csv_file = $form_state->getValue('import_csv');

    /* Load the object of the file by it's fid */
    $file = File::load($csv_file[0]);

    /* Set the status flag permanent of the file object */
    $file->setPermanent();

    /* Save the file in database */
    $file->save();

    // You can use any sort of function to process your data.
    $data = $this->csvtoarray($file->getFileUri(), ',');
    foreach ($data as $row) {
      $operations[] = [
        '\Drupal\csvtask\ImportData::ImportDataItem',
            [$row],
      ];
    }

    $batch = [
      'title' => t('Importing Data...'),
      'operations' => $operations,
      'init_message' => t('Import is starting.'),
      'finished' => '\Drupal\csvtask\ImportData::ImportDataItemCallback',
    ];
    batch_set($batch);
  }

  /**
   * Converts the csv data to arrays.
   */
  public function csvtoarray($filename = '', $delimiter) {
    if (!file_exists($filename) || !is_readable($filename)) {
      return FALSE;
    }
    $header = NULL;
    $data = [];

    if (($handle = fopen($filename, 'r')) !== FALSE) {
      while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
        if (!$header) {
          $header = $row;
        }
        else {
          $data[] = array_combine($header, $row);
        }
      }
      fclose($handle);
    }

    return $data;
  }

}
