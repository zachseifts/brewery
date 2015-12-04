<?php

/**
 * @file
 * Contains \Drupal\beer\Entity\BeerStyle.
 */

namespace Drupal\beer\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Beer style entities.
 */
class BeerStyleViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['beer_style']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Beer style'),
      'help' => $this->t('The Beer style ID.'),
    );

    return $data;
  }

}
