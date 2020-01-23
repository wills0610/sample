<?php

/**
 * @file
 * Contains \Drupal\taco\Plugin\TacoTaste\BeefTaco.
 */

namespace Drupal\taco\Plugin\TacoTaste;

use Drupal\taco\TacoTasteBase;

/**
 * Provides a 'beef taco' taste.
 *
 * @TacoTaste(
 *   id = "beef_taco",
 *   name = @Translation("Beef Taco"),
 *   price = 3.25,
 *   calories = 260
 * )
 */
class BeefTaco extends TacoTasteBase {
  public function slogan() {
    return t('The beef taste.');
  }

  public function ingredient() {

	  
    $ingredient=parent::ingredient();
    $ingredient="Beef,".$ingredient;
    return $ingredient;
  }
}
