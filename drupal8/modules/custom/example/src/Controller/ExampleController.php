<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\example\ExampleCalculator;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of ExampleController
 *
 * @author rruppel
 */
class ExampleController extends ControllerBase{
  
  protected $calculator;
  
  public function __construct(ExampleCalculator $calculator) {
    $this->calculator = $calculator;
  }
  
  /**
   * Os controllers não ficam no container pq são muitos
   * então criou-se esse sistema de factory para instancia-los 
   * 
   */
  public static function create(ContainerInterface $container){
    return new static($container->get('example.example_calculator'));
  }
  
  public function add($one, $two){
    $config = $this->config('example.settings');
    if(!$one){
      $one = $config->get('default_one');
    }
    if(!$two){
      $two = $config->get('default_two');
    }
    
    $soma = $this->calculator->add($one, $two);
    
    return ['#theme' => 'example_page',
            '#one' => $one,
            '#two' => $two,
            '#soma' => $soma];
  }
  
}
