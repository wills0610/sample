<?php

/**
 * @file
 * Contains \Drupal\taco\Plugin\TacoTaste\ChickenTaco.
 */

namespace Drupal\taco\Plugin\TacoTaste;

use Drupal\taco\TacoTasteBase;

/**
 * Provides a 'chicken taco' taste.
 *
 * @TacoTaste(
 *   id = "chicken_taco",
 *   name = @Translation("Chicken Taco"),
 *   price = 3.00,
 *   calories = 200
 * )
 */
class ChickenTaco extends TacoTasteBase {
  public function slogan() {
    return t('The healthy chicken taste.');
  }

  public function ingredient() {

	  
    $ingredient=parent::ingredient();
    $ingredient="Chicken ,".$ingredient;
    return $ingredient;
  }
}
