<?php

/**
 * @file
 * Contains \Drupal\beer\BeerListBuilder.
 */

namespace Drupal\beer;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Beer entities.
 *
 * @ingroup beer
 */
class BeerListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['name'] = $this->t('Name');
    $header['style'] = $this->t('Style');
    $header['abv'] = $this->t('ABV');
    $header['ibu'] = $this->t('IBUs');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\beer\Entity\Beer */
    $row['name'] = $this->l(
      $this->getLabel($entity),
      new Url(
        'entity.beer.canonical', array(
          'beer' => $entity->id(),
        )
      )
    );
    $row['style'] = $entity->getStyle()->get('name')->value;
    $row['abv'] = $entity->getABV() . '%';
    $row['ibu'] = $entity->getIBUs();
    return $row + parent::buildRow($entity);
  }

}
