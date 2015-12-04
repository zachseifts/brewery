<?php

/**
 * @file
 * Contains beer.page.inc..
 *
 * Page callback for Beer entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Beer templates.
 *
 * Default template: beer.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_beer(array &$variables) {
  // Fetch Beer Entity Object.
  $beer = $variables['elements']['#beer'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
