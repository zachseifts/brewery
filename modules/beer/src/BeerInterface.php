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

  /**
   * Get whether the beer is published.
   *
   * Unpublished products are only visible to their authors and administrators.
   *
   * @return bool
   *   TRUE if the product is published, FALSE otherwise.
   */
  public function isPublished();

  /**
   * Sets whether the beer is published.
   *
   * @param bool $published
   *   Whether the product is published.
   *
   * @return $this
   */
  public function setPublished($published);

  /**
   * Gets the beer's AVB.
   *
   * @return string
   *   The product's ABV.
   */
   public function getABV();

  /**
   * Gets the beer's IBUs.
   *
   * @return string
   *   The product's IBUs.
   */
   public function getIBUs();

  /**
   * Gets the beer's style.
   *
   * @return object
   *   The product's style.
   */
   public function getStyle();
}
