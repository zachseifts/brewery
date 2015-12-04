<?php

/**
 * @file
 * Contains \Drupal\beer\BeerAccessControlHandler.
 */

namespace Drupal\beer;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Beer entity.
 *
 * @see \Drupal\beer\Entity\Beer.
 */
class BeerAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view beer entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit beer entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete beer entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add beer entities');
  }

}
