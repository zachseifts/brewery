<?php

/**
 * @file
 * Contains \Drupal\beer\Controller\BeerController.
 */

namespace Drupal\beer\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class BeerController.
 *
 * @package Drupal\beer\Controller
 */
class BeerController extends ControllerBase {

  protected $beerService;

  /**
   * Constructor.
   */
  public function __construct($beerService) {
    $this->beerService = $beerService;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('beer.service')
    );
  }

  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
        '#theme' => 'beers',
        '#beers' => $this->beerService->getAllBeers(),
    );
  }

}
