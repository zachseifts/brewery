<?php

/**
 * @file
 * Contains \Drupal\product\ProductListBuilder.
 */

namespace Drupal\product;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Product entities.
 *
 * @ingroup product
 */
class ProductListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['name'] = $this->t('Name');
    $header['style'] = $this->t('Style');
    $header['type'] = $this->t('Type');
    $header['abv'] = $this->t('ABV');
    $header['ibu'] = $this->t('IBUs');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\product\Entity\Product */
    $row['name'] = $this->l(
      $this->getLabel($entity),
      new Url(
        'entity.brewery_product.canonical', array(
          'brewery_product' => $entity->id(),
        )
      )
    );
    $row['style'] = $entity->getStyle()->get('name')->value;
    $row['type'] = $entity->getType()->get('name')->value;
    $row['abv'] = $entity->getABV() . '%';
    $row['ibu'] = $entity->getIBUs();
    return $row + parent::buildRow($entity);
  }

}
