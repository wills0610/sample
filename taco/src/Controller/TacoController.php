<?php

namespace Drupal\taco\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Controller\ControllerInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TacoController extends ControllerBase implements ContainerInjectionInterface {

  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  public function page() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Delicious Tacos'),
    );

    $manager = \Drupal::service('plugin.manager.taco');
    $plugins = $manager->getDefinitions();
    drupal_set_message(print_r($plugins, TRUE));

    foreach ($plugins as $tacotaste) {
      $instance = $manager->createInstance($tacotaste['id']);
      $build[] = array(
        '#type' => 'markup',
        '#markup' => t('<p>Taco Taste:  @name, cost $@price, calories @calories, ingredient[ @ingredient ].</p>', array('@name' => $instance->getName(), '@price' => $instance->getPrice(), '@calories' => $instance->getCalories(), '@ingredient' => $instance->ingredient())),
      );
    }

    return $build;
  }
}
