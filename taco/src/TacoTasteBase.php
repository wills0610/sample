<?php
/**
 * @file
 * Provides Drupal\taco\TacoTasteBase.
 */

namespace Drupal\taco;

use Drupal\Component\Plugin\PluginBase;

class TacoTasteBase extends PluginBase implements TacoTasteInterface {

  public function getName() {
    return $this->pluginDefinition['name'];
  }

  public function getPrice() {
    return $this->pluginDefinition['price'];
  }

  public function getCalories() {
    return $this->pluginDefinition['calories'];
  }

  public function slogan() {
    return t('Best taste ever.');
  }

  public function ingredient() {
    return t('Ground corn, vegetable oil, oat fiber');
  }
}
