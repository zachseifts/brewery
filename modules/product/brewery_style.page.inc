<?php

/**
 * @file
 * Contains brewery_style.page.inc..
 *
 * Page callback for Style entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Style templates.
 *
 * Default template: brewery_style.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_brewery_style(array &$variables) {
  // Fetch Style Entity Object.
  $brewery_style = $variables['elements']['#brewery_style'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
