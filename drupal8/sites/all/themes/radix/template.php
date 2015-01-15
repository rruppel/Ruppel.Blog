<?php 
/**
 * Implementation of twigified_radix_drush_command function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function twigified_radix_drush_command() {
  $items = array();

  $items['twigified_radix'] = array(
    'description' => 'Create a Radix subtheme.',
    'arguments' => array(
      'name'         => 'The name of your subtheme.',
    ),
    'options' => array(
      'machine_name' => 'The machine-readable name of your subtheme. This will be auto-generated from the human-readable name if ommited.',
      'description' => 'The description of your subtheme.',
      'destination' => 'The destination of your subtheme. Defaults to "all" (sites/all/themes).',
      'bootswatch' => 'The Bootswatch theme to use. See https://github.com/arshad/twigified_radix-bootswatch.',
    ),
    'examples' => array(
      'drush twigified_radix "My Theme"' => 'Creates a Radix subtheme called "My Theme", using the default options.',
      'drush twigified_radix "My Theme" --machine_name=my_theme' => 'Creates a Radix subtheme called "My Theme" with a specific machine name.',
    ),
  );

  return $items;
}

/**
 * Implementation of twigified_radix_drush_help function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function twigified_radix_drush_help($section) {
  switch ($section) {
    case 'drush:twigified_radix':
      return dt('This command will create a Radix subtheme. See examples to get started.');
  }
}

/**
 * Implementation of twigified_radix_file_str_replace function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function twigified_radix_file_str_replace($file_path, $find, $replace) {
  $file_path = drush_normalize_path($file_path);
  $file_contents = file_get_contents($file_path);
  $file_contents = str_replace($find, $replace, $file_contents);
  file_put_contents($file_path, $file_contents);
}

/**
 * Implementation of twigified_radix_preprocess_html function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function twigified_radix_preprocess_html(&$variables) {
  // Add meta for Bootstrap Responsive.
  // <meta name="viewport" content="width=device-width, initial-scale=1.0">
  $element = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1.0',
    ),
  );
  drupal_add_html_head($element, 'bootstrap_responsive');
}

/**
 * Implementation of twigified_radix_css_alter function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function twigified_radix_css_alter(&$css) {
  // Unset some panopoly css.
  $panopoly_admin_path = drupal_get_path('module', 'panopoly_admin');
  if (isset($css[$panopoly_admin_path . '/panopoly-admin.css'])) {
    unset($css[$panopoly_admin_path . '/panopoly-admin.css']);
  }

  // Unset some core css.
  unset($css['modules/system/system.menus.css']);
}

/**
 * Implementation of twigified_radix_preprocess_page function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function twigified_radix_preprocess_page(&$variables) {
  // Add Bootstrap JS.
  drupal_add_js('http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js', 'external');

  // Add CSS for Font Awesome
  // drupal_add_css('//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css', 'external');

  // Determine if the page is rendered using panels.
  $variables['is_panel'] = FALSE;
  if (module_exists('page_manager') && count(page_manager_get_current_page())) {
    $variables['is_panel'] = TRUE;
  }

  // Make sure tabs is empty.
  if (empty($variables['tabs']['#primary']) && empty($variables['tabs']['#secondary'])) {
    $variables['tabs'] = '';
  }

  // Add search_form to theme.
  $variables['search_form'] = '';
  if (module_exists('search') && user_access('search content')) {
    $search_box_form = drupal_get_form('search_form');
    $search_box_form['basic']['keys']['#title'] = '';
    $search_box_form['basic']['keys']['#attributes'] = array('placeholder' => 'Search');
    $search_box_form['basic']['keys']['#attributes']['class'][] = 'search-query';
    $search_box_form['basic']['submit']['#value'] = t('Search');
    $search_box_form['#attributes']['class'][] = 'navbar-form';
    $search_box_form['#attributes']['class'][] = 'pull-right';
    $search_box = drupal_render($search_box_form);
    $variables['search_form'] = (user_access('search content')) ? $search_box : NULL;
  }

  // Format and add main menu to theme.
  $variables['main_menu'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
  $variables['main_menu']['#theme_wrappers'] = array('menu_tree__primary');

  // Add a copyright message.
  $variables['copyright'] = t('Drupal is a registered trademark of Dries Buytaert.');
}

/**
 * Implementation of _twigified_radix_bootstrap_path function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function _twigified_radix_bootstrap_path() {
  // TODO.
}

/**
 * Implementation of twigified_radix_theme function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function twigified_radix_theme(&$existing, $type, $theme, $path) {
  return array(
    'twigified_radix_dropdown' => array(
      'variables' => array(
        'links' => NULL,
        'attributes' => NULL,
        'wrapper' => NULL,
      ),
      'function' => 'theme_twigified_radix_dropdown',
    ),
    'twigified_radix_button_group' => array(
      'variables' => array(
        'buttons' => NULL,
        'attributes' => NULL,
      ),
      'function' => 'theme_twigified_radix_button_group',
    ),
    'twigified_radix_button_dropdown' => array(
      'variables' => array(
        'button' => NULL,
        'links' => NULL,
        'split' => NULL,
        'attributes' => NULL,
      ),
      'function' => 'theme_twigified_radix_button_dropdown',
    ),
  );
}

/**
 * Implementation of twigified_radix_preprocess_comment function.
 *
 * @param array <<any params>>
 *   <<describe the params and what they do here>>
 */
function twigified_radix_preprocess_comment(&$variables) {
  $comment = $variables['comment'];

  // Add proper classes.
  $variables['title_attributes_array']['class'][] = 'media-heading';

  // Use icon for permalink.
  $uri = entity_uri('comment', $comment);
  $uri['options'] += array(
    'attributes' => array(
      'class' => 'permalink muted pull-right',
      'rel' => 'bookmark',
    ),
    'html' => TRUE,
  );
  $icon_html = '<i class="icon-comment"></i>';
  $variables['permalink'] = l($icon_html, $uri['path'], $uri['options']);

  // Use icon for new.
  $variables['new'] = !empty($comment->new) ? '<i class="icon-comment"></i>' : '';
}

/**
 * Prepares variables for [description of link] templates.
 *
 * Default template: link.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_link: the markup outputted by the original radix_link theme function.
 */
function twigified_radix_template_preprocess_link(&$variables) {
  $icons = '';
  if (isset($variables['options']['attributes']['class']) && is_array($variables['options']['attributes']['class'])) {
    $css_classes = $variables['options']['attributes']['class'];
    if ($icon_classes = preg_grep('/^icon\-.*/', $css_classes)) {
      // Render an icon for each class.
      foreach ($icon_classes as $icon_class) {
        $icons .= '<i class="' . $icon_class . '"></i>';
      }
      // Unset icon classes for attributes to prevent double rendering.
      $variables['options']['attributes']['class'] = array_diff($css_classes, $icon_classes);
    }
  }
  $variables['twigified_radix_template_preprocess_link'] = '<a href="' . check_plain(url($variables['path'], $variables['options'])) . '"' . drupal_attributes($variables['options']['attributes']) . '>' . $icons . ($variables['options']['html'] ? $variables['text'] : check_plain($variables['text'])) . '</a>';
}
/**
 * The following could probably be moved to link.html.twig:
 *   10 reference(s) to $variables; NB: just use the array key in the template (without trying to access variables)
 *   approximately 18 strings of markup
 */

/**
 * Prepares variables for [description of table] templates.
 *
 * Default template: table.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_table: the markup outputted by the original radix_table theme function.
 */
function twigified_radix_template_preprocess_table(&$variables) {
  // Add default classes to table elements.
  $variables['attributes']['class'] = (isset($variables['attributes']['class'])) ? $variables['attributes']['class'] : array();
  $variables['attributes']['class'] = (is_array($variables['attributes']['class'])) ? $variables['attributes']['class'] : array($variables['attributes']['class']);
  $variables['attributes']['class'] = array_merge($variables['attributes']['class'], array(
    'table',
    'table-striped',
    'table-bordered',
  ));

  $header = $variables['header'];
  $rows = $variables['rows'];
  $attributes = $variables['attributes'];
  $caption = $variables['caption'];
  $colgroups = $variables['colgroups'];
  $sticky = $variables['sticky'];
  $empty = $variables['empty'];

  // Add sticky headers, if applicable.
  if (count($header) && $sticky) {
    drupal_add_js('misc/tableheader.js');
    // Add 'sticky-enabled' class to the table to identify it for JS.
    // This is needed to target tables constructed by this function.
    $attributes['class'][] = 'sticky-enabled';
  }

  $output = '<table' . drupal_attributes($attributes) . ">\n";

  if (isset($caption)) {
    $output .= '<caption>' . $caption . "</caption>\n";
  }

  // Format the table columns:
  if (count($colgroups)) {
    foreach ($colgroups as $number => $colgroup) {
      $attributes = array();

      // Check if we're dealing with a simple or complex column.
      if (isset($colgroup['data'])) {
        foreach ($colgroup as $key => $value) {
          if ($key == 'data') {
            $cols = $value;
          }
          else {
            $attributes[$key] = $value;
          }
        }
      }
      else {
        $cols = $colgroup;
      }

      // Build colgroup.
      if (is_array($cols) && count($cols)) {
        $output .= ' <colgroup' . drupal_attributes($attributes) . '>';
        $i = 0;
        foreach ($cols as $col) {
          $output .= ' <col' . drupal_attributes($col) . ' />';
        }
        $output .= " </colgroup>\n";
      }
      else {
        $output .= ' <colgroup' . drupal_attributes($attributes) . " />\n";
      }
    }
  }

  // Add the 'empty' row message if available.
  if (!count($rows) && $empty) {
    $header_count = 0;
    foreach ($header as $header_cell) {
      if (is_array($header_cell)) {
        $header_count += isset($header_cell['colspan']) ? $header_cell['colspan'] : 1;
      }
      else {
        $header_count++;
      }
    }
    $rows[] = array(array(
        'data' => $empty,
        'colspan' => $header_count,
        'class' => array('empty', 'message'),
      ));
  }

  // Format the table header:
  if (count($header)) {
    $ts = tablesort_init($header);
    // HTML requires that the thead tag has tr tags in it followed by tbody
    // tags. Using ternary operator to check and see if we have any rows.
    $output .= (count($rows) ? ' <thead><tr>' : ' <tr>');
    foreach ($header as $cell) {
      $cell = tablesort_header($cell, $header, $ts);
      $output .= _theme_table_cell($cell, TRUE);
    }
    // Using ternary operator to close the tags
    // based on whether or not there are rows.
    $output .= (count($rows) ? " </tr></thead>\n" : "</tr>\n");
  }
  else {
    $ts = array();
  }

  // Format the table rows:
  if (count($rows)) {
    $output .= "<tbody>\n";
    $flip = array(
      'even' => 'odd',
      'odd' => 'even',
    );
    $class = 'even';
    foreach ($rows as $number => $row) {
      $attributes = array();

      // Check if we're dealing with a simple or complex row.
      if (isset($row['data'])) {
        foreach ($row as $key => $value) {
          if ($key == 'data') {
            $cells = $value;
          }
          else {
            $attributes[$key] = $value;
          }
        }
      }
      else {
        $cells = $row;
      }
      if (count($cells)) {
        // Add odd/even class.
        if (empty($row['no_striping'])) {
          $class = $flip[$class];
          $attributes['class'][] = $class;
        }

        // Build row.
        $output .= ' <tr' . drupal_attributes($attributes) . '>';
        $i = 0;
        foreach ($cells as $cell) {
          $cell = tablesort_cell($cell, $header, $ts, $i++);
          $output .= _theme_table_cell($cell);
        }
        $output .= " </tr>\n";
      }
    }
    $output .= "</tbody>\n";
  }

  $output .= "</table>\n";
  $variables['twigified_radix_template_preprocess_table'] = $output;
}
/**
 * The following could probably be moved to table.html.twig:
 *   16 reference(s) to $variables; NB: just use the array key in the template (without trying to access variables)
 *   approximately 54 strings of markup
 */

/**
 * Prepares variables for [description of menu_link__management] templates.
 *
 * Default template: menu-link--management.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_menu_link__management: the markup outputted by the original radix_menu_link__management theme function.
 */
function twigified_radix_template_preprocess_menu_link__management(&$variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  $variables['twigified_radix_template_preprocess_menu_link__management'] = '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
/**
 * The following could probably be moved to menu-link--management.html.twig:
 *   1 call(s) to drupal_render()
 *   1 reference(s) to $variables; NB: just use the array key in the template (without trying to access variables)
 *   approximately 10 strings of markup
 */

/**
 * Prepares variables for [description of menu_link] templates.
 *
 * Default template: menu-link.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_menu_link: the markup outputted by the original radix_menu_link theme function.
 */
function twigified_radix_template_preprocess_menu_link(&$variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if (!empty($element['#below'])) {
    // Wrap in dropdown-menu.
    unset($element['#below']['#theme_wrappers']);
    $sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
    $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
    $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';

    // Check if element is nested.
    if ((!empty($element['#original_link']['depth'])) && ($element['#original_link']['depth'] > 1)) {
      $element['#attributes']['class'][] = 'dropdown-submenu';
    }
    else {
      $element['#attributes']['class'][] = 'dropdown';
      $element['#localized_options']['html'] = TRUE;
      $element['#title'] .= '<span class="caret"></span>';
    }

    $element['#localized_options']['attributes']['data-target'] = '#';
  }

  // Fix for active class.
  if (($element['#href'] == current_path() || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']) || $element['#localized_options']['language']->language == $language_url->language)) {
    $element['#attributes']['class'][] = 'active';
  }

  // Add active class to li if active trail.
  if (in_array('active-trail', $element['#attributes']['class'])) {
    $element['#attributes']['class'][] = 'active';
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  $variables['twigified_radix_template_preprocess_menu_link'] = '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
/**
 * The following could probably be moved to menu-link.html.twig:
 *   1 call(s) to drupal_render()
 *   1 reference(s) to $variables; NB: just use the array key in the template (without trying to access variables)
 *   approximately 56 strings of markup
 */

/**
 * Prepares variables for [description of menu_tree__menu_block] templates.
 *
 * Default template: menu-tree--menu-block.html.twig.
 *
 * @param array $
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_menu_tree__menu_block: the markup outputted by the original radix_menu_tree__menu_block theme function.
 */
function twigified_radix_template_preprocess_menu_tree__menu_block(&$) {
  $['twigified_radix_template_preprocess_menu_tree__menu_block'] = '<ul class="menu nav nav-tabs nav-stacked">' . $variables['tree'] . '</ul>';
}
/**
 * The following could probably be moved to menu-tree--menu-block.html.twig:
 *   approximately 3 strings of markup
 */

/**
 * Prepares variables for [description of menu_tree] templates.
 *
 * Default template: menu-tree.html.twig.
 *
 * @param array $
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_menu_tree: the markup outputted by the original radix_menu_tree theme function.
 */
function twigified_radix_template_preprocess_menu_tree(&$) {
  $['twigified_radix_template_preprocess_menu_tree'] = '<ul class="menu nav">' . $variables['tree'] . '</ul>';
}
/**
 * The following could probably be moved to menu-tree.html.twig:
 *   approximately 3 strings of markup
 */

/**
 * Prepares variables for [description of menu_local_tasks] templates.
 *
 * Default template: menu-local-tasks.html.twig.
 *
 * @param array $
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_menu_local_tasks: the markup outputted by the original radix_menu_local_tasks theme function.
 */
function twigified_radix_template_preprocess_menu_local_tasks(&$) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="nav nav-tabs primary">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="nav nav-pills secondary">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  $['twigified_radix_template_preprocess_menu_local_tasks'] = $output;
}
/**
 * The following could probably be moved to menu-local-tasks.html.twig:
 *   2 call(s) to drupal_render()
 *   2 call(s) to t(); can also use t as a filter in Twig
 *   approximately 27 strings of markup
 */

/**
 * Prepares variables for [description of button] templates.
 *
 * Default template: button.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_button: the markup outputted by the original radix_button theme function.
 */
function twigified_radix_template_preprocess_button(&$variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'submit';
  element_set_attributes($element, array('id', 'name', 'value'));

  $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
  $element['#attributes']['class'][] = 'btn';
  if (!empty($element['#attributes']['disabled'])) {
    $element['#attributes']['class'][] = 'form-button-disabled';
  }

  // Add a btn-primary class if submit button.
  if (isset($element['#parents']) && ($element['#parents'][0] == 'submit')) {
    $element['#attributes']['class'][] = 'btn-primary';
  }

  $variables['twigified_radix_template_preprocess_button'] = '<input' . drupal_attributes($element['#attributes']) . ' />';
}
/**
 * The following could probably be moved to button.html.twig:
 *   1 reference(s) to $variables; NB: just use the array key in the template (without trying to access variables)
 *   approximately 27 strings of markup
 */

/**
 * Prepares variables for [description of form_element] templates.
 *
 * Default template: form-element.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - twigified_radix_template_preprocess_form_element: the markup outputted by the original radix_form_element theme function.
 */
function twigified_radix_template_preprocess_form_element(&$variables) {
  $element = &$variables['element'];
  // This is also used in the installer, pre-database setup.
  $t = get_t();

  // This function is invoked as theme wrapper, but the rendered form element
  // may not necessarily have been processed by form_builder().
  $element += array(
    '#title_display' => 'before',
  );

  // Add element #id for #type 'item'.
  if (isset($element['#markup']) && !empty($element['#id'])) {
    $attributes['id'] = $element['#id'];
  }
  // Add element's #type and #name as class to aid with JS/CSS selectors.
  $attributes['class'] = array('form-item');
  if (!empty($element['#type'])) {
    $attributes['class'][] = 'form-type-' . strtr($element['#type'], '_', '-');
  }
  if (!empty($element['#name'])) {
    $attributes['class'][] = 'form-item-' . strtr($element['#name'], array(
      ' ' => '-',
      '_' => '-',
      '[' => '-',
      ']' => '',
    ));
  }
  // Add a class for disabled elements to facilitate cross-browser styling.
  if (!empty($element['#attributes']['disabled'])) {
    $attributes['class'][] = 'form-disabled';
  }
  $output = '<div' . drupal_attributes($attributes) . '>' . "\n";

  // If #title is not set, we don't display any label or required marker.
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }
  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';

  switch ($element['#title_display']) {
    case 'before':
    case 'invisible':
      $output .= ' ' . theme('form_element_label', $variables);
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;

    case 'after':
      $output .= ' ' . $prefix . $element['#children'] . $suffix;
      $output .= ' ' . theme('form_element_label', $variables) . "\n";
      break;

    case 'none':
    case 'attribute':
      // Output no label and no required marker, only the children.
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
  }

  if (!empty($element['#description'])) {
    $output .= '<div class="description">' . $element['#description'] . "</div>\n";
  }

  $output .= "</div>\n";

  $variables['twigified_radix_template_preprocess_form_element'] = $output;
}
/**
 * The following could probably be moved to form-element.html.twig:
 *   3 reference(s) to $variables; NB: just use the array key in the template (without trying to access variables)
 *   approximately 68 strings of markup
 *   2 call(s) to theme() found.  The function call should be removed and changed to simple arrays:
array(
  '#theme' => 'form_element_label',
  0# => ERROR: could not find T_ARRAY,
)
array(
  '#theme' => 'form_element_label',
  0# => ERROR: could not find T_ARRAY,
)
 */

