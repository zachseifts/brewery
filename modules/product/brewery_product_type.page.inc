<?php

/**
 * @file
 * Contains brewery_product_type.page.inc..
 *
 * Page callback for Product type entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Product type templates.
 *
 * Default template: brewery_product_type.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_brewery_product_type(array &$variables) {
  // Fetch ProductType Entity Object.
  $brewery_product_type = $variables['elements']['#brewery_product_type'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
