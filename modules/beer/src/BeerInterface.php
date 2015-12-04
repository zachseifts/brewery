<?php

/**
 * @file
 * Contains \Drupal\beer\BeerInterface.
 */

namespace Drupal\beer;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Beer entities.
 *
 * @ingroup beer
 */
interface BeerInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
