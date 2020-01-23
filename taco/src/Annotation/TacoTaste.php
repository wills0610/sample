<?php

/**
 * @file
 * Contains \Drupal\taco\Annotation\TacoTaste.
 */

namespace Drupal\taco\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a flavor item annotation object.
 *
 * Plugin Namespace: Plugin\taco\TacoTaste
 *
 * @see \Drupal\taco\Plugin\TacoManager
 * @see plugin_api
 *
 * @Annotation
 */
class TacoTaste extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The name of the taco taste.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $name;

  /**
   * The price of one taco in dollars.
   *
   * @var float
   */
  public $price;

  /**
   * The calories of one taco .
   *
   * @var float
   */
  public $calories;

}
