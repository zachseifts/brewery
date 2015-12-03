<?php

/**
 * @file
 * Contains \Drupal\product\ProductInterface.
 */

namespace Drupal\product;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Product entities.
 *
 * @ingroup product
 */
interface ProductInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  /**
   * Gets the product's AVB.
   *
   * @return string
   *   The product's ABV.
   */
   public function getABV();

  /**
   * Gets the product's IBUs.
   *
   * @return string
   *   The product's IBUs.
   */
   public function getIBUs();

  /**
   * Gets the product's type.
   *
   * @return object
   *   The product's type.
   */
   public function getType();

  /**
   * Gets the product's styl.
   *
   * @return object
   *   The product's styl.
   */
   public function getStyle();
}
