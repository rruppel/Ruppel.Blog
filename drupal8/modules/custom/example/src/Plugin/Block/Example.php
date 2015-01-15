<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Drupal\example\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Form\FormStateInterface;
/**
 * Description of Example
 *
 * @Block(
 *  id = "example",
 *  admin_label = @Translation("Example"),
 *  category = @Translation("System")
 * )
 */
class Example extends BlockBase implements ContainerFactoryPluginInterface{
  
  protected $calculator;
  
  public function __construct(array $configuration, $plugin_id, $plugin_definition, $calculator) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->calculator = $calculator; 
  }
  
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition){
     $calculator = $container->get('example.example_calculator');
    return new static($configuration, $plugin_id, $plugin_definition, $calculator);
  }
  
  public function defaultConfiguration(){
    return ['enabled' => 1];
  }

  public function blockForm($form, FormStateInterface $form_state){
    $form['enlabed'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Block Enabled'),
      '#default_value' => $this->configuration['enabled'],
    ];
    
    return $form;
  }

  
  public function blockSubmit($form, FormStateInterface $form_state){
    $this->configuration['enabled'] = (bool)$form_state->getValue('enabled');
  }
    
  
  public function build(){
    
    
    $lastSoma = $this->calculator->getLastSoma();
    
    $message =  $this-t('Last soma: @soma', ["@soma" => $lastSoma]);
    return [
      '#markup' => $message,
        ];
  }

 
}
