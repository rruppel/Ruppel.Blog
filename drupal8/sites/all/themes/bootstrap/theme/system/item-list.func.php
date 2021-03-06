<?php
/**
 * @file
 * item-list.func.php
 */

use Drupal\Core\Template\Attribute;

/**
 * Overrides theme_item_list().
 *
 * - Uses an early D8 version of the theme function, which fixes bugs (and was
 *   refused for commit because it was "too late to change theme output)".
 * - Removes first/last, even/odd classes.
 * - Removes useless div.item-list wrapper, allows optional #wrapper_attributes.
 * - Removes hard-coded #title as <h3>, introduce support for #title as an array
 *   containing, text, tag and optional attributes.
 */
function bootstrap_item_list($variables) {
  $items = $variables['items'];
  $title = $variables['title'];
  $type = $variables['type'];
  $list_attributes = $variables['attributes'];

  // Drupal core only supports #title as a string. This implementation supports
  // heading level, and attributes as well.
  $heading = '';
  if (!empty($title)) {
    // If it's a string, normalize into an array.
    if (is_string($title)) {
      $title = array(
        'text' => $title,
      );
    }
    // Set defaults.
    $title += array(
      'level' => 'h3',
      'attributes' => array(),
    );
    // Heading outputs only when it has text.
    if (!empty($title['text'])) {
      $heading .= '<' . $title['level'] . drupal_attributes($title['attributes']) . '>';
      $heading .= empty($title['html']) ? check_plain($title['text']) : $title['text'];
      $heading .= '</' . $title['level'] . '>';
    }
  }

  $output = '';
  if ($items) {
    $output .= '<' . $type . new Attribute($attributes) . '>';
    foreach ($items as $key => $item) {
      $attributes = array();

      if (is_array($item)) {
        $value = '';
        if (isset($item['data'])) {
          // Allow data to be renderable.
          if (is_array($item['data']) && (!empty($item['data']['#type']) || !empty($item['data']['#theme']))) {
            $value .= drupal_render($item['data']);
          }
          else {
            $value .= $item['data'];
          }
        }
        $attributes = array_diff_key($item, array('data' => 0, 'children' => 0));

        // Append nested child list, if any.
        if (isset($item['children'])) {
          // HTML attributes for the outer list are defined in the 'attributes'
          // theme variable, but not inherited by children. For nested lists,
          // all non-numeric keys in 'children' are used as list attributes.
          $child_list_attributes = array();
          foreach ($item['children'] as $child_key => $child_item) {
            if (is_string($child_key)) {
              $child_list_attributes[$child_key] = $child_item;
              unset($item['children'][$child_key]);
            }
          }

          $list = array(
            '#theme' => 'item_list',
            '#items' => $item['children'],
            '#list_type' => $type,
            '#attributes' => $child_list_attributes,
          );

          $value .= drupal_render($list);
        }
      }
      else {
        $value = $item;
      }

      $output .= '<li' . new Attribute($attributes) . '>' . $value . "</li>\n";
    }
    $output .= "</$type>";
  }

  // Output the list and title only if there are any list items.
  if (!empty($output)) {
    $output = $heading . $output;
  }

  return $output;
}
