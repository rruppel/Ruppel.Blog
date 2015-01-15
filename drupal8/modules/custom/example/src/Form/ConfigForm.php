<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Drupal\example\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Description of ConfigForm
 *
 * @author rruppel
 */
class ConfigForm extends ConfigFormBase{
  
  public function getFormId(){
    return 'example_config';
  }
  
  public function buildForm(array $form, FormStateInterface $form_state){
    $config = $this->config('example.settings');
    
    $form['default_one'] = [
      '#type' => 'number',
      '#title' => $this->t('Default number one'),
      '#default_value' => $config->get('default_one'),
    ];
    $form['default_two'] = [
      '#type' => 'number',
      '#title' => $this->t('Default number two'),
      '#default_value' => $config->get('default_two'),
    ];
    
    return parent::buildForm($form, $form_state);
  }
  
  public function submitForm(array &$form, FormStateInterface $form_state){
    parent::submitForm($form, $form_state);
    $config = $this->config('example.settings');
    $config->set('default_one', $form_state->getValue('default_one'));
    $config->set('default_two', $form_state->getValue('default_two'));
    $config->save();
  }
  
  //put your code here
}
