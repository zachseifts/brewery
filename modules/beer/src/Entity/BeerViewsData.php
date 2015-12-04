<?php

/**
 * @file
 * Contains \Drupal\beer\Entity\Beer.
 */

namespace Drupal\beer\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Beer entities.
 */
class BeerViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['beer']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Beer'),
      'help' => $this->t('The Beer ID.'),
    );

    return $data;
  }

}
