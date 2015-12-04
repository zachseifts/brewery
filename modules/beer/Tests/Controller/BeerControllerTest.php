<?php

/**
 * @file
 * Contains \Drupal\beer\Tests\BeerController.
 */

namespace Drupal\beer\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the beer module.
 */
class BeerControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "beer BeerController's controller functionality",
      'description' => 'Test Unit for module beer and controller BeerController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests beer functionality.
   */
  public function testBeerController() {
    // Check that the basic functions of module beer.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
