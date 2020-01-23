<?php

/**
 * @file
 * Provides Drupal\taco\TacoTasteInterface
 */

namespace Drupal\taco;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for taco taste plugins.
 */
interface TacoTasteInterface extends PluginInspectionInterface {

  /**
   * Return the name of the taco taste.
   *
   * @return string
   */
  public function getName();

  /**
   * Return the price per taco.
   *
   * @return float
   */
  public function getPrice();

  /**
   * Return the calories per taco.
   *
   * @return float
   */
  public function getCalories();

  /**
   * A slogan for the taco taste
   *
   * @return string
   */
  public function slogan();

  /**
   * A ingredient for the taco taste
   *
   * @return string
   */
  public function ingredient();

}
