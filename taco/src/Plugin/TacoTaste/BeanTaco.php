<?php

/**
 * @file
 * Contains \Drupal\taco\Plugin\TacoTaste\BeanTaco.
 */

namespace Drupal\taco\Plugin\TacoTaste;

use Drupal\taco\TacoTasteBase;

/**
 * Provides a 'bean taco' taste.
 *
 * @TacoTaste(
 *   id = "bean_taco",
 *   name = @Translation("Bean Taco"),
 *   price = 2.00,
 *   calories = 130
 * )
 */
class BeanTaco extends TacoTasteBase {
  public function slogan() {
    return t('The healthy bean taste.');
  }

  public function ingredient() {

	  
    $ingredient=parent::ingredient();
    $ingredient="Black bean ,".$ingredient;
    return $ingredient;
  }
}
