<?php

/**
 * @file
 * Contains beer_style.page.inc..
 *
 * Page callback for Beer style entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Beer style templates.
 *
 * Default template: beer_style.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_beer_style(array &$variables) {
  // Fetch BeerStyle Entity Object.
  $beer_style = $variables['elements']['#beer_style'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
