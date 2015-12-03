<?php

/**
 * @file
 * Contains \Drupal\product\ProductTypeListBuilder.
 */

namespace Drupal\product;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Product type entities.
 *
 * @ingroup product
 */
class ProductTypeListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Product type ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\product\Entity\ProductType */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $this->getLabel($entity),
      new Url(
        'entity.brewery_product_type.edit_form', array(
          'brewery_product_type' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
