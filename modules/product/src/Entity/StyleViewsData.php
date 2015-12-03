<?php

/**
 * @file
 * Contains \Drupal\product\Entity\Style.
 */

namespace Drupal\product\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Style entities.
 */
class StyleViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['brewery_style']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Style'),
      'help' => $this->t('The Style ID.'),
    );

    return $data;
  }

}
