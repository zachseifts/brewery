<?php

/**
 * @file
 * Contains \Drupal\product\StyleAccessControlHandler.
 */

namespace Drupal\product;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Style entity.
 *
 * @see \Drupal\product\Entity\Style.
 */
class StyleAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view style entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit style entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete style entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add style entities');
  }

}
