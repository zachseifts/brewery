<?php

/**
 * @file
 * Contains \Drupal\product\StyleListBuilder.
 */

namespace Drupal\product;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Style entities.
 *
 * @ingroup product
 */
class StyleListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Style ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\product\Entity\Style */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $this->getLabel($entity),
      new Url(
        'entity.brewery_style.edit_form', array(
          'brewery_style' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
