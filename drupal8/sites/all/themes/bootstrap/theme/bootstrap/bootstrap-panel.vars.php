<?php
/**
 * @file
 * bootstrap-panel.vars.php
 */

use Drupal\Core\Template\Attribute;

/**
 * Implements hook_preprocess_bootstrap_panel().
 */
function bootstrap_preprocess_bootstrap_panel(&$variables) {
  $element = &$variables['element'];
  $attributes = !empty($element['#attributes']) ? $element['#attributes'] : array();
  $attributes['class'][] = 'panel';
  $attributes['class'][] = 'panel-default';
  // states.js requires form-wrapper on fieldset to work properly.
  $attributes['class'][] = 'form-wrapper';
  $variables['collapsible'] = FALSE;
  if (isset($element['#collapsible'])) {
    $variables['collapsible'] = $element['#collapsible'];
  }
  $variables['collapsed'] = FALSE;
  if (isset($element['#collapsed'])) {
    $variables['collapsed'] = $element['#collapsed'];
  }
  // Force grouped fieldsets to not be collapsible (for vertical tabs).
  if (!empty($element['#group'])) {
    $variables['collapsible'] = FALSE;
    $variables['collapsed'] = FALSE;
  }
  if (!isset($element['#id']) && $variables['collapsible']) {
    $element['#id'] = drupal_html_id('bootstrap-panel');
  }
  $variables['target'] = NULL;
  if (isset($element['#id'])) {
    $attributes['id'] = $element['#id'];
    $variables['target'] = '#' . $element['#id'] . ' > .collapse';
  }
  $variables['content'] = $element['#children'];
  if (isset($element['#value'])) {
    $variables['content'] .= $element['#value'];
  }

  // Iterate over optional variables.
  $keys = array(
    'description',
    'prefix',
    'suffix',
    'title',
  );
  foreach ($keys as $key) {
    $variables[$key] = !empty($element["#$key"]) ? $element["#$key"] : FALSE;
  }
  $variables['attributes'] = $attributes;
}

/**
 * Implements hook_process_bootstrap_panel().
 */
function bootstrap_process_bootstrap_panel(&$variables) {
  $variables['attributes'] = new Attribute($variables['attributes']);
}
