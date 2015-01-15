<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Drupal\example;

use Drupal\Core\State\StateInterface;

/**
 * Description of ExampleTracker
 *
 * @author rruppel
 */
class ExampleCalculator {
  //put your code here
  
  protected $state;
  
  public function __construct(StateInterface $state) {
    $this->state = $state;
  }
  
  public function add($one, $two){
    $soma = $one+$two;
    $this->state->set('example.last_soma', $soma);
    return $soma;
  }
  
  public function getLastSoma(){
    return $this->state->get('example.last_soma');
  }
  
}
