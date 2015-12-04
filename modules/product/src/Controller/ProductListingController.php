<?php

/**
 * @file
 * Contains \Drupal\product\Controller\ProductListingController.
 */

namespace Drupal\product\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ProductListingController.
 *
 * @package Drupal\product\Controller
 */
class ProductListingController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Implement method: index')
    ];
  }

}
