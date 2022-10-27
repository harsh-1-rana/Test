<?php

/**
 * @file
 * Contains newtask_entity.page.inc.
 *
 * Page callback for Newtask entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Newtask entity templates.
 *
 * Default template: newtask_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_newtask_entity(array &$variables) {
  // Fetch NewtaskEntity Entity Object.
  $newtask_entity = $variables['elements']['#newtask_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
