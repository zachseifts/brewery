<?php

/**
 * @file
 * Contains \Drupal\beer\BeerStyleListBuilder.
 */

namespace Drupal\beer;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Beer style entities.
 *
 * @ingroup beer
 */
class BeerStyleListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Beer style ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\beer\Entity\BeerStyle */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $this->getLabel($entity),
      new Url(
        'entity.beer_style.edit_form', array(
          'beer_style' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
