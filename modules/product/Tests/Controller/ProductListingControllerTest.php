<?php

/**
 * @file
 * Contains \Drupal\product\Tests\ProductListingController.
 */

namespace Drupal\product\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the product module.
 */
class ProductListingControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "product ProductListingController's controller functionality",
      'description' => 'Test Unit for module product and controller ProductListingController.',
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
   * Tests product functionality.
   */
  public function testProductListingController() {
    // Check that the basic functions of module product.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
