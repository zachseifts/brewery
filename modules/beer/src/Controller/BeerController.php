<?php

/**
 * @file
 * Contains \Drupal\beer\Controller\BeerController.
 */

namespace Drupal\beer\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class BeerController.
 *
 * @package Drupal\beer\Controller
 */
class BeerController extends ControllerBase {
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
