<?php

/**
 * @file
 * Contains \Drupal\product\Entity\ProductType.
 */

namespace Drupal\product\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Product type entities.
 */
class ProductTypeViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['brewery_product_type']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Product type'),
      'help' => $this->t('The Product type ID.'),
    );

    return $data;
  }

}
