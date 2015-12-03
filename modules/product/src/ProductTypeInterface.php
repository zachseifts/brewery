<?php

/**
 * @file
 * Contains \Drupal\product\ProductTypeInterface.
 */

namespace Drupal\product;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Product type entities.
 *
 * @ingroup product
 */
interface ProductTypeInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
