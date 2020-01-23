<?php

/**
 * @file
 * Contains \Drupal\taco\Plugin\TacoTaste\FishTaco.
 */

namespace Drupal\taco\Plugin\TacoTaste;

use Drupal\taco\TacoTasteBase;

/**
 * Provides a 'fish taco' taste.
 *
 * @TacoTaste(
 *   id = "fish_taco",
 *   name = @Translation("Fish Taco"),
 *   price = 2.85,
 *   calories = 180
 * )
 */
class FishTaco extends TacoTasteBase {
  public function slogan() {
    return t('The fish taste.');
  }

  public function ingredient() {

    $ingredient=parent::ingredient();
    $ingredient="White Fish ,".$ingredient;
    return $ingredient;
  }

}
