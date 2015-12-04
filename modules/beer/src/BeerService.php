<?php

/**
 * @file
 * Contains \Drupal\beer\BeerService.
 */

namespace Drupal\beer;


/**
 * Class BeerService.
 *
 * @package Drupal\beer
 */
class BeerService implements BeerServiceInterface {

  protected $beers;

  /**
   * Constructor.
   */
  public function __construct() {
    $beer_nids = \Drupal::entityQuery('beer')->execute();
    $beer_storage = \Drupal::entityManager()->getStorage('beer');
    $this->beers = $beer_storage->loadMultiple($beer_nids);
  }

  /**
   * Returns a listing of all of the beers.
   */
  public function getAllBeers() {
    return $this->beers;
  }

}
