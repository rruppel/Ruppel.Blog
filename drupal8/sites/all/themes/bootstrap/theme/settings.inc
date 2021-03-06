<?php
/**
 * @file
 * settings.inc
 */

/**
 * Contains the form for the theme settings.
 *
 * @param array $form
 *   The form array, passed by reference.
 * @param array $form_state
 *   The form state array, passed by reference.
 */
function _bootstrap_settings_form(&$form, $form_state) {
  $config = \Drupal::config('bootstrap.settings');
  // Do not add Bootstrap specific settings to non-bootstrap based themes.
  $theme = !empty($form_state['build_info']['args'][0]) ? $form_state['build_info']['args'][0] : FALSE;

  // Global or non Bootstrap based theme settings.
  if ($theme === FALSE || !in_array('bootstrap', _bootstrap_get_base_themes($theme, TRUE))) {
    return;
  }

  // Get defined regions.
  $regions = system_region_list($theme);

  // Wrap global setting details in vertical tabs.
  $form['general'] = array(
    '#type' => 'vertical_tabs',
    '#prefix' => '<h2><small>' . t('Override Global Settings') . '</small></h2>',
    '#weight' => -9,
  );
  $form['theme_settings']['#group'] = 'global';
  $form['logo']['#group'] = 'global';
  $form['favicon']['#group'] = 'global';

  // Do not add Bootstrap specific settings to global settings.
  if (empty($form_state['build_info']['args'][0])) {
    unset($form['general']['#prefix']);
    return;
  }

  $form['bootstrap'] = array(
    '#type' => 'vertical_tabs',
    '#attached' => array(
      'js'  => array(drupal_get_path('theme', 'bootstrap') . '/js/bootstrap.admin.js'),
    ),
    '#prefix' => '<h2><small>' . t('Bootstrap Settings') . '</small></h2>',
    '#weight' => -10,
  );

  // General.
  $form['general'] = array(
    '#type' => 'details',
    '#title' => t('General'),
    '#group' => 'bootstrap',
  );

  // Grid.
  $form['general']['grid'] = array(
    '#type' => 'details',
    '#title' => t('Grid system'),
    '#description' => t('Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns (default) as the device or viewport size increases. It includes <a href="!bootstrap_url">predefined classes</a> for easy layout options.', array(
      '!bootstrap_url' => 'http://getbootstrap.com/css/#grid-example-basic',
    )),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  // Grid column.
  $grid_columns = theme_get_setting('bootstrap_grid_columns');
  $form['general']['grid']['bootstrap_grid_columns'] = array(
    '#type' => 'textfield',
    '#title' => t('Columns'),
    '#default_value' => $grid_columns,
    '#description' => t('The number of columns used in this theme.<br /><br /><strong>NOTE:</strong> this setting only facilitates the correlation between the generated theme grid and Drupal. It does not actually change the grid in the theme and must be manually configured, see: <a href="!bootstrap_url" target="_blank">Less mixins and variables</a>.', array(
      '!bootstrap_url' => 'http://getbootstrap.com/css/#grid-less',
    )),
  );

  $grid_prefix = theme_get_setting('bootstrap_grid_class_prefix');
  $form['general']['grid']['bootstrap_grid_class_prefix'] = array(
    '#type' => 'select',
    '#title' => t('Class prefix'),
    '#description' => t('Defines the default prefix to use through out Drupal when dealing with column classes. See: <a href="!bootstrap_url" target="_blank">Grid options</a>.', array(
      '!bootstrap_url' => 'http://getbootstrap.com/css/#grid-options',
    )),
    '#default_value' => $grid_prefix,
    '#options' => array(
      'col-xs' => t('Extra Small'),
      'col-sm' => t('Small'),
      'col-md' => t('Medium'),
      'col-lg' => t('Large'),
    ),
  );

  // Grid region columns.
  $form['general']['grid']['grid_region_columns'] = array(
    '#type' => 'details',
    '#title' => t('Region column size'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $grid_regions = array();
  foreach (range(1, $grid_columns) as $column) {
    $grid_regions[$column] = format_plural($column, '@count column', '@count columns');
  }
  foreach ($regions as $name => $title) {
    $form['general']['grid']['grid_region_columns']['bootstrap_region_grid-' . $name] = array(
      '#title' => $title,
      '#type' => 'select',
      '#empty_option' => t('None'),
      '#attributes' => array(
        'class' => array('input-sm'),
      ),
      '#prefix' => '<div class="col-sm-3 form-group">',
      '#suffix' => '</div>',
      '#options' => $grid_regions,
    );
    if ($default_value = theme_get_setting('bootstrap_region_grid-' . $name)) {
      $form['general']['grid']['grid_region_columns']['bootstrap_region_grid-' . $name]['#default_value'] = $default_value;
    }
  }

  // Grid region dynamic.
  $form['general']['grid']['grid_region_dynamic'] = array(
    '#type' => 'details',
    '#title' => t('Dynamic regions'),
    '#description' => t('Select the regions below that should be used when calculating dynamic region columns. If the selected region(s) are present on the page, then the column widths will be subtracted from the region it affects. The best example of what this feature entails is determining the column size of the "content" region when sidebars are or are not present (see: <a href="!url" target="_blank">!url</a>).<br /><br /><strong>NOTE:</strong> When a region is considered "dynamic", it is assumed (and enforced) that the region will be the maximum "Region column size" (above setting) when none of its selected regions are present. This helps to ensure that the subtracted column size (if any) will always be a positive number.</strong>', array(
      '!url' => 'https://drupal.org/node/2128129',
    )),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  foreach ($regions as $name => $title) {
    $form['general']['grid']['grid_region_dynamic']['bootstrap_region_grid_dynamic-' . $name] = array(
      '#title' => $title,
      '#type' => 'select',
      '#multiple' => TRUE,
      '#prefix' => '<div class="col-sm-3 form-group">',
      '#suffix' => '</div>',
      '#options' => $regions,
    );
    if ($default_value = theme_get_setting('bootstrap_region_grid_dynamic-' . $name)) {
      $form['general']['grid']['grid_region_dynamic']['bootstrap_region_grid_dynamic-' . $name]['#default_value'] = $default_value;
    }
  }

  // Buttons.
  $form['general']['buttons'] = array(
    '#type' => 'details',
    '#title' => t('Buttons'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['general']['buttons']['bootstrap_button_size'] = array(
    '#type' => 'select',
    '#title' => t('Default button size'),
    '#default_value' => theme_get_setting('bootstrap_button_size'),
    '#empty_option' => t('Normal'),
    '#options' => array(
      'btn-xs' => t('Extra Small'),
      'btn-sm' => t('Small'),
      'btn-lg' => t('Large'),
    ),
  );
  $form['general']['buttons']['bootstrap_button_colorize'] = array(
    '#type' => 'checkbox',
    '#title' => t('Colorize Buttons'),
    '#default_value' => theme_get_setting('bootstrap_button_colorize'),
    '#description' => t('Adds classes to buttons based on their text value. See: <a href="!bootstrap_url" target="_blank">Buttons</a> and <a href="!api_url" target="_blank">hook_bootstrap_colorize_text_alter()</a>', array(
      '!bootstrap_url' => 'http://getbootstrap.com/css/#buttons',
      '!api_url' => 'http://drupalcode.org/project/bootstrap.git/blob/refs/heads/7.x-3.x:/bootstrap.api.php#l13',
    )),
  );
  $form['general']['buttons']['bootstrap_button_iconize'] = array(
    '#type' => 'checkbox',
    '#title' => t('Iconize Buttons'),
    '#default_value' => theme_get_setting('bootstrap_button_iconize'),
    '#description' => t('Adds icons to buttons based on the text value. See: <a href="!api_url" target="_blank">hook_bootstrap_iconize_text_alter()</a>', array(
      '!api_url' => 'http://drupalcode.org/project/bootstrap.git/blob/refs/heads/7.x-3.x:/bootstrap.api.php#l37',
    )),
  );

  // Images.
  $form['general']['images'] = array(
    '#type' => 'details',
    '#title' => t('Images'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['general']['images']['bootstrap_image_shape'] = array(
    '#type' => 'select',
    '#title' => t('Default image shape'),
    '#description' => t('Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project. Note: Internet Explorer 8 lacks support for rounded corners. See: <a href="!bootstrap_url" target="_blank">Image Shapes</a>', array(
      '!bootstrap_url' => 'http://getbootstrap.com/css/#images-shapes',
    )),
    '#default_value' => theme_get_setting('bootstrap_image_shape'),
    '#empty_option' => t('None'),
    '#options' => array(
      'img-rounded' => t('Rounded'),
      'img-circle' => t('Circle'),
      'img-thumbnail' => t('Thumbnail'),
    ),
  );
  $form['general']['images']['bootstrap_image_responsive'] = array(
    '#type' => 'checkbox',
    '#title' => t('Responsive Images'),
    '#default_value' => theme_get_setting('bootstrap_image_responsive'),
    '#description' => t('Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.'),
  );

  // Tables.
  $form['general']['tables'] = array(
    '#type' => 'details',
    '#title' => t('Tables'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['general']['tables']['bootstrap_table_bordered'] = array(
    '#type' => 'checkbox',
    '#title' => t('Bordered table'),
    '#default_value' => theme_get_setting('bootstrap_table_bordered'),
    '#description' => t('Add borders on all sides of the table and cells.'),
  );
  $form['general']['tables']['bootstrap_table_condensed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Condensed table'),
    '#default_value' => theme_get_setting('bootstrap_table_condensed'),
    '#description' => t('Make tables more compact by cutting cell padding in half.'),
  );
  $form['general']['tables']['bootstrap_table_hover'] = array(
    '#type' => 'checkbox',
    '#title' => t('Hover rows'),
    '#default_value' => theme_get_setting('bootstrap_table_hover'),
    '#description' => t('Enable a hover state on table rows.'),
  );
  $form['general']['tables']['bootstrap_table_striped'] = array(
    '#type' => 'checkbox',
    '#title' => t('Striped rows'),
    '#default_value' => theme_get_setting('bootstrap_table_striped'),
    '#description' => t('Add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>. <strong>Note:</strong> Striped tables are styled via the <code>:nth-child</code> CSS selector, which is not available in Internet Explorer 8.'),
  );
  $form['general']['tables']['bootstrap_table_responsive'] = array(
    '#type' => 'checkbox',
    '#title' => t('Responsive tables'),
    '#default_value' => theme_get_setting('bootstrap_table_responsive'),
    '#description' => t('Makes tables responsive by wrapping them in <code>.table-responsive</code> to make them scroll horizontally up to small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.'),
  );

  // Components.
  $form['components'] = array(
    '#type' => 'details',
    '#title' => t('Components'),
    '#group' => 'bootstrap',
  );

  // Breadcrumbs.
  $form['components']['breadcrumbs'] = array(
    '#type' => 'details',
    '#title' => t('Breadcrumbs'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['components']['breadcrumbs']['breadcrumb'] = array(
    '#type' => 'select',
    '#title' => t('Breadcrumb visibility'),
    '#default_value' => $config->get('breadcrumb'),
    '#options' => array(
      0 => t('Hidden'),
      1 => t('Visible'),
      2 => t('Only in admin areas'),
    ),
  );
  $form['components']['breadcrumbs']['breadcrumb_home'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show "Home" breadcrumb link'),
    '#default_value' => $config->get('breadcrumb_home'),
    '#description' => t('If your site has a module dedicated to handling breadcrumbs already, ensure this setting is enabled.'),
    '#states' => array(
      'invisible' => array(
        ':input[name="breadcrumb"]' => array('value' => 0),
      ),
    ),
  );
  $form['components']['breadcrumbs']['breadcrumb_title'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show current page title at end'),
    '#default_value' => $config->get('breadcrumb_title'),
    '#description' => t('If your site has a module dedicated to handling breadcrumbs already, ensure this setting is disabled.'),
    '#states' => array(
      'invisible' => array(
        ':input[name="breadcrumb"]' => array('value' => 0),
      ),
    ),
  );

  // Navbar.
  $form['components']['navbar'] = array(
    '#type' => 'details',
    '#title' => t('Navbar'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['components']['navbar']['navbar_position'] = array(
    '#type' => 'select',
    '#title' => t('Navbar Position'),
    '#description' => t('Select your Navbar position.'),
    '#default_value' => $config->get('navbar_position'),
    '#options' => array(
      'static-top' => t('Static Top'),
      'fixed-top' => t('Fixed Top'),
      'fixed-bottom' => t('Fixed Bottom'),
    ),
    '#empty_option' => t('Normal'),
  );
  $form['components']['navbar']['navbar_inverse'] = array(
    '#type' => 'checkbox',
    '#title' => t('Inverse navbar style'),
    '#description' => t('Select if you want the inverse navbar style.'),
    '#default_value' => $config->get('navbar_inverse'),
  );

  // Region wells.
  $wells = array(
    '' => t('None'),
    'well' => t('.well (normal)'),
    'well well-sm' => t('.well-sm (small)'),
    'well well-lg' => t('.well-lg (large)'),
  );
  $form['components']['region_wells'] = array(
    '#type' => 'details',
    '#title' => t('Region wells'),
    '#description' => t('Enable the <code>.well</code>, <code>.well-sm</code> or <code>.well-lg</code> classes for specified regions. See: documentation on !wells.', array(
      '!wells' => l(t('Bootstrap Wells'), 'http://getbootstrap.com/components/#wells'),
    )),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  foreach ($regions as $name => $title) {
    $form['components']['region_wells']['region_well-' . $name] = array(
      '#title' => $title,
      '#type' => 'select',
      '#attributes' => array(
        'class' => array('input-sm'),
      ),
      '#options' => $wells,
      '#default_value' => $config->get('region_well-' . $name),
    );
  }

  // JavaScript settings.
  $form['javascript'] = array(
    '#type' => 'details',
    '#title' => t('JavaScript'),
    '#group' => 'bootstrap',
  );

  // Anchors.
  $form['javascript']['anchors'] = array(
    '#type' => 'details',
    '#title' => t('Anchors'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['javascript']['anchors']['anchors_fix'] = array(
    '#type' => 'checkbox',
    '#title' => t('Fix anchor positions'),
    '#default_value' => $config->get('anchors_fix'),
    '#description' => t('Ensures anchors are correctly positioned only when there is margin or padding detected on the BODY element. This is useful when fixed navbar or administration menus are used.'),
  );
  $form['javascript']['anchors']['anchors_smooth_scrolling'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable smooth scrolling'),
    '#default_value' => $config->get('anchors_smooth_scrolling'),
    '#description' => t('Animates page by scrolling to an anchor link target smoothly when clicked.'),
    '#states' => array(
      'invisible' => array(
        ':input[name="anchors_fix"]' => array('checked' => FALSE),
      ),
    ),
  );

  // Popovers.
  $form['javascript']['popovers'] = array(
    '#type' => 'details',
    '#title' => t('Popovers'),
    '#description' => t('Add small overlays of content, like those on the iPad, to any element for housing secondary information.'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['javascript']['popovers']['popover_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable popovers.'),
    '#description' => t('Elements that have the !code attribute set will automatically initialize the popover upon page load. !warning', array(
      '!code' => '<code>data-toggle="popover"</code>',
      '!warning' => '<strong class="error text-error">WARNING: This feature can sometimes impact performance. Disable if pages appear to "hang" after initial load.</strong>',
    )),
    '#default_value' => $config->get('popover_enabled'),
  );
  $form['javascript']['popovers']['options'] = array(
    '#type' => 'details',
    '#title' => t('Options'),
    '#description' => t('These are global options. Each popover can independently override desired settings by appending the option name to !data. Example: !data-animation.', array(
      '!data' => '<code>data-</code>',
      '!data-animation' => '<code>data-animation="false"</code>',
    )),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#states' => array(
      'visible' => array(
        ':input[name="popover_enabled"]' => array('checked' => TRUE),
      ),
    ),
  );
  $form['javascript']['popovers']['options']['popover_animation'] = array(
    '#type' => 'checkbox',
    '#title' => t('animate'),
    '#description' => t('Apply a CSS fade transition to the popover.'),
    '#default_value' => $config->get('popover_animation'),
  );
  $form['javascript']['popovers']['options']['popover_html'] = array(
    '#type' => 'checkbox',
    '#title' => t('HTML'),
    '#description' => t("Insert HTML into the popover. If false, jQuery's text method will be used to insert content into the DOM. Use text if you're worried about XSS attacks."),
    '#default_value' => $config->get('popover_html'),
  );
  $form['javascript']['popovers']['options']['popover_placement'] = array(
    '#type' => 'select',
    '#title' => t('placement'),
    '#description' => t('Where to position the popover. When "auto" is specified, it will dynamically reorient the popover. For example, if placement is "auto left", the popover will display to the left when possible, otherwise it will display right.'),
    '#default_value' => $config->get('popover_placement'),
    '#options' => array(
      'top' => 'top',
      'bottom' => 'bottom',
      'left' => 'left',
      'right' => 'right',
      'auto' => 'auto',
      'auto top' => 'auto top',
      'auto bottom' => 'auto bottom',
      'auto left' => 'auto left',
      'auto right' => 'auto right',
    ),
  );
  $form['javascript']['popovers']['options']['popover_selector'] = array(
    '#type' => 'textfield',
    '#title' => t('selector'),
    '#description' => t('If a selector is provided, tooltip objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have popovers added. See !this and !example.', array(
      '!this' => l(t('this'), 'https://github.com/twbs/bootstrap/issues/4215'),
      '!example' => l(t('an informative example'), 'http://jsfiddle.net/fScua/'),
    )),
    '#default_value' => $config->get('popover_selector'),
  );
  $form['javascript']['popovers']['options']['popover_trigger'] = array(
    '#type' => 'checkboxes',
    '#title' => t('trigger'),
    '#description' => t('How a popover is triggered.'),
    '#default_value' => $config->get('popover_trigger'),
    '#options' => array(
      'click' => 'click',
      'hover' => 'hover',
      'focus' => 'focus',
      'manual' => 'manual',
    ),
  );
  $form['javascript']['popovers']['options']['popover_trigger_autoclose'] = array(
    '#type' => 'checkbox',
    '#title' => t('Auto-close on document click'),
    '#description' => t('Will automatically close the current popover if a click occurs anywhere else other than the popover element.'),
    '#default_value' => $config->get('popover_trigger_autoclose'),
  );
  $form['javascript']['popovers']['options']['popover_title'] = array(
    '#type' => 'textfield',
    '#title' => t('title'),
    '#description' => t("Default title value if \"title\" attribute isn't present."),
    '#default_value' => $config->get('popover_title'),
  );
  $form['javascript']['popovers']['options']['popover_content'] = array(
    '#type' => 'textfield',
    '#title' => t('content'),
    '#description' => t('Default content value if "data-content" or "data-target" attributes are not present.'),
    '#default_value' => $config->get('popover_content'),
  );
  $form['javascript']['popovers']['options']['popover_delay'] = array(
    '#type' => 'textfield',
    '#title' => t('delay'),
    '#description' => t('The amount of time to delay showing and hiding the popover (in milliseconds). Does not apply to manual trigger type.'),
    '#default_value' => $config->get('popover_delay'),
  );
  $form['javascript']['popovers']['options']['popover_container'] = array(
    '#type' => 'textfield',
    '#title' => t('container'),
    '#description' => t('Appends the popover to a specific element. Example: "body". This option is particularly useful in that it allows you to position the popover in the flow of the document near the triggering element - which will prevent the popover from floating away from the triggering element during a window resize.'),
    '#default_value' => $config->get('popover_container'),
  );

  // Tooltips.
  $form['javascript']['tooltips'] = array(
    '#type' => 'details',
    '#title' => t('Tooltips'),
    '#description' => t("Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage. See !link for more documentation.", array(
      '!link' => l(t('Bootstrap tooltips'), 'http://getbootstrap.com/javascript/#tooltips'),
    )),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['javascript']['tooltips']['tooltip_enabled'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable tooltips'),
    '#description' => t('Elements that have the !code attribute set will automatically initialize the tooltip upon page load. !warning', array(
      '!code' => '<code>data-toggle="tooltip"</code>',
      '!warning' => '<strong class="error text-error">WARNING: This feature can sometimes impact performance. Disable if pages appear to "hang" after initial load.</strong>',
    )),
    '#default_value' => $config->get('tooltip_enabled'),
  );
  $form['javascript']['tooltips']['tooltip_descriptions'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use Tooltips for simple form descriptions'),
    '#description' => t('Form items that contain simple descriptions (no HTML, no title attribute and are less than the specified length below) will be converted into tooltips. This helps reduce the sometimes unnecessary noise of form item descriptions. Descriptions that contain longer text or HTML as actionable descriptions (user needs to click) will not be converted. This ensures it is always visible so its usability remains intact.'),
    '#default_value' => $config->get('tooltip_descriptions'),
    '#states' => array(
      'visible' => array(
        ':input[name="tooltip_enabled"]' => array('checked' => TRUE),
      ),
    ),
  );
  $form['javascript']['tooltips']['tooltip_descriptions_length'] = array(
    '#type' => 'textfield',
    '#title' => t('Simple form description length'),
    '#description' => t('The character length limit used to determine when a description makes a sense to be used as a tooltip.'),
    '#default_value' => $config->get('tooltip_descriptions_length'),
    '#states' => array(
      'visible' => array(
        ':input[name="bootstrap_tooltip_enabled"]' => array('checked' => TRUE),
        ':input[name="bootstrap_tooltip_descriptions"]' => array('checked' => TRUE),
      ),
    ),
  );
  $form['javascript']['tooltips']['options'] = array(
    '#type' => 'details',
    '#title' => t('Options'),
    '#description' => t('These are global options. Each tooltip can independently override desired settings by appending the option name to !data. Example: !data-animation.', array(
      '!data' => '<code>data-</code>',
      '!data-animation' => '<code>data-animation="false"</code>',
    )),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#states' => array(
      'visible' => array(
        ':input[name="tooltip_enabled"]' => array('checked' => TRUE),
      ),
    ),
  );
  $form['javascript']['tooltips']['options']['tooltip_animation'] = array(
    '#type' => 'checkbox',
    '#title' => t('animate'),
    '#description' => t('Apply a CSS fade transition to the tooltip.'),
    '#default_value' => $config->get('tooltip_animation'),
  );
  $form['javascript']['tooltips']['options']['tooltip_html'] = array(
    '#type' => 'checkbox',
    '#title' => t('HTML'),
    '#description' => t("Insert HTML into the tooltip. If false, jQuery's text method will be used to insert content into the DOM. Use text if you're worried about XSS attacks."),
    '#default_value' => $config->get('tooltip_html'),
  );
  $form['javascript']['tooltips']['options']['tooltip_placement'] = array(
    '#type' => 'select',
    '#title' => t('placement'),
    '#description' => t('Where to position the tooltip. When "auto" is specified, it will dynamically reorient the tooltip. For example, if placement is "auto left", the tooltip will display to the left when possible, otherwise it will display right.'),
    '#default_value' => $config->get('tooltip_placement'),
    '#options' => array(
      'top' => 'top',
      'bottom' => 'bottom',
      'left' => 'left',
      'right' => 'right',
      'auto' => 'auto',
      'auto top' => 'auto top',
      'auto bottom' => 'auto bottom',
      'auto left' => 'auto left',
      'auto right' => 'auto right',
    ),
  );
  $form['javascript']['tooltips']['options']['tooltip_selector'] = array(
    '#type' => 'textfield',
    '#title' => t('selector'),
    '#description' => t('If a selector is provided, tooltip objects will be delegated to the specified targets.'),
    '#default_value' => $config->get('tooltip_selector'),
  );
  $form['javascript']['tooltips']['options']['tooltip_trigger'] = array(
    '#type' => 'checkboxes',
    '#title' => t('trigger'),
    '#description' => t('How a tooltip is triggered.'),
    '#default_value' => $config->get('tooltip_trigger'),
    '#options' => array(
      'click' => 'click',
      'hover' => 'hover',
      'focus' => 'focus',
      'manual' => 'manual',
    ),
  );
  $form['javascript']['tooltips']['options']['tooltip_delay'] = array(
    '#type' => 'textfield',
    '#title' => t('delay'),
    '#description' => t('The amount of time to delay showing and hiding the tooltip (in milliseconds). Does not apply to manual trigger type.'),
    '#default_value' => $config->get('tooltip_delay'),
  );
  $form['javascript']['tooltips']['options']['tooltip_container'] = array(
    '#type' => 'textfield',
    '#title' => t('container'),
    '#description' => t('Appends the tooltip to a specific element. Example: "body"'),
    '#default_value' => $config->get('tooltip_container'),
  );

  // Advanced settings.
  $form['bootstrap_library'] = array(
    '#type' => 'details',
    '#title' => t('Bootstrap Library'),
    '#group' => 'bootstrap',
  );

  // BootstrapCDN.
  $form['bootstrap_library']['bootstrap_cdn'] = array(
    '#type' => 'details',
    '#title' => t('BootstrapCDN'),
    '#description' => t('Use !bootstrapcdn to serve the Bootstrap framework files. Enabling this setting will prevent this theme from attempting to load any Bootstrap framework files locally. !warning', array(
      '!bootstrapcdn' => l(t('BootstrapCDN'), 'http://bootstrapcdn.com', array(
        'external' => TRUE,
      )),
      '!warning' => '<div class="alert alert-info messages info"><strong>' . t('NOTE') . ':</strong> ' . t('While BootstrapCDN (content distribution network) is the preferred method for providing huge performance gains in load time, this method does depend on using this third party service. BootstrapCDN is under no obligation or commitment to provide guaranteed up-time or service quality for this theme. If you choose to disable this setting, you must provide your own Bootstrap source and/or optional CDN delivery implementation.') . '</div>',
    )),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['bootstrap_library']['bootstrap_cdn']['cdn'] = array(
    '#type' => 'select',
    '#title' => t('BootstrapCDN version'),
    '#options' => array(
      '3.1.1' => '3.1.1',
      '3.1.0' => '3.1.0',
      '3.0.3' => '3.0.3',
      '3.0.2' => '3.0.2',
      '3.0.1' => '3.0.1',
      '3.0.0' => '3.0.0',
    ),
    '#default_value' => $config->get('cdn'),
    '#empty_option' => t('Disabled'),
    '#empty_value' => NULL,
  );

  // Bootswatch.
  $form['bootstrap_library']['bootstrap_cdn']['bootswatch'] = array(
    '#type' => 'select',
    '#title' => t('Bootswatch theme'),
    '#description' => t('Use !bootstrapcdn to serve a Bootswatch Theme. Choose Bootswatch theme here.', array(
      '!bootstrapcdn' => l(t('BootstrapCDN'), 'http://bootstrapcdn.com', array(
        'external' => TRUE,
      )),
    )),
    '#default_value' => $config->get('bootswatch'),
    '#empty_option' => t('Disabled'),
    '#empty_value' => NULL,
    '#suffix' => '<div id="bootswatch-preview"></div>',
    '#states' => array(
      'invisible' => array(
        ':input[name="bootstrap_cdn"]' => array('value' => ''),
      ),
    ),
  );

  $response = Drupal::httpClient()->get('http://api.bootswatch.com/3/');
  try {
    $bootswatch_themes = array();
    // Expected result.
    $data = $response->getBody();
    if (($api = drupal_json_decode($data)) && is_array($api) && !empty($api['themes'])) {
      foreach ($api['themes'] as $bootswatch_theme) {
        $bootswatch_themes[strtolower($bootswatch_theme['name'])] = $bootswatch_theme['name'];
      }
      $form['advanced']['bootstrap_cdn']['bootswatch']['#options'] = $bootswatch_themes;
    }
  }
  catch (Guzzle\Common\Exception\GuzzleException $e) {
    $form['advanced']['bootstrap_cdn']['bootswatch']['#prefix'] = '<div class="alert alert-danger messages error"><strong>' . t('ERROR') . ':</strong> ' . t('Unable to reach Bootswatch API. Please ensure the server your website is hosted on is able to initiate HTTP requests.') . '</div>';
  }

}
