<?php

/**
 * @file
 * Navbar Awesome administration and module settings UI.
 */

/**
 * Configuration form for Navbar Awesome
 */
function navbar_awesome_configuration() {
  $form = array();

  $form['options'] = array(
    '#type' => 'fieldset',
    '#title' => t('General options'),
  );
  $form['options']['navbar_awesome_roboto'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable Roboto Font provided by Google Fonts.'),
    '#default_value' => variable_get('navbar_awesome_roboto', FALSE),
    '#description' => t('Navbar Awesome is influenced by the Google design specification Material Design. By default the module utilizes the Roboto font provided through Google Fonts.'),
  );
  $form['options']['navbar_awesome_cdn'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable loading FontAwesome via BootstrapCDN if library is missing'),
    '#default_value' => variable_get('navbar_awesome_cdn', FALSE),
    '#description' => t('If the FontAwesome library is not present, the module will load it via BootstrapCDN. Disable this if other modules or themes are doing the same.'),
  );

  return system_settings_form($form);
}
