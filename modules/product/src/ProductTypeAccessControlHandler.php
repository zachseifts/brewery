<?php

/**
 * @file
 * Contains \Drupal\product\ProductTypeAccessControlHandler.
 */

namespace Drupal\product;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Product type entity.
 *
 * @see \Drupal\product\Entity\ProductType.
 */
class ProductTypeAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view product type entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit product type entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete product type entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add product type entities');
  }

}
