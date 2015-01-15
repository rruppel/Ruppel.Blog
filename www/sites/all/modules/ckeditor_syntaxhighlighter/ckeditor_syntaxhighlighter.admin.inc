<?php

/**
 * @file
 * Syntax highlighter for CKEditor module admin form
 *
 * Define the admin form
 */
function ckeditor_syntaxhighlighter_settings_form() {
  
  
  $drupal_base_path = ckeditor_base_path('relative');
  $drupal_library_path = ckeditor_library_path('relative');
  $module_drupal_path = ckeditor_syntaxhighlighter_module_path('relative');  
  $plugin_final_path = ckeditor_syntaxhighlighter_plugin_path('relative');
  $library_final_path = ckeditor_syntaxhighlighter_library_path('relative');
  
  
  
  
  //Load plugin location
  $form['ckeditor_syntaxhighlighter_dependencies'] = array(
      '#type' => 'fieldset',
      '#title' => t('Library dependencies'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,  
  );
  
  
  $form['ckeditor_syntaxhighlighter_dependencies']['ckeditor_syntaxhighlighter_plugin_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Path to SyntaxHighlighter CKEditor plugin'),
    '#default_value' => variable_get('ckeditor_syntaxhighlighter_plugin_path','%m/plugins/syntaxhighlight'),
    '#size' => 40,
    '#maxlength' => 128,
    '#description' => t(
        'The path to Syntax Highlighter plugin for CKEditor relative to the document root.', array()
         ) .
         '<br /> ' .
    t('Available placeholders:!b &ndash; path of the Drupal installation (!base) !m &ndash; path where the this module is stored (!module).!l &ndash; path to the libraries directory (!library)', array(
      '!b' => '<br /><code>%b</code>',
      '!m' => '<br /><code>%m</code>',
      '!l' => '<br /><code>%l</code>',
      '!base' => '<code>' . $drupal_base_path . '</code>',
      '!module' => '<code>' . $module_drupal_path . '</code>',
      '!library' => '<code>' . $drupal_library_path . '</code>',
        )
    ) .
    '<br /> ' .
    t('Current path: !path', array(
      '!path' => '<code>' . $plugin_final_path . '</code>'
        )
    ),
    '#required' => TRUE
  );
  
  
  $form['ckeditor_syntaxhighlighter_dependencies']['ckeditor_syntaxhighlighter_library_path'] = array(
      '#type' => 'textfield',
      '#title' => t('Path to SyntaxHighlighter library'),
      '#default_value' => variable_get('ckeditor_syntaxhighlighter_library_path','%m/library/syntaxhighlighter_3.0.83'),
      '#size' => 40,
      '#maxlength' => 128,
      '#description' => t(
          'The path to Syntax Highlighter library downloaded from !shlibraryurl relative to the document root.', array(
          	'!shlibraryurl' => l(t('Alex Gorbatchev site'), 'http://alexgorbatchev.com/SyntaxHighlighter/download/')
          )
  ) .
           '<br /> ' .
  t('Available placeholders:!b &ndash; path of the Drupal installation (!base) !m &ndash; path where the this module is stored (!module).!l &ndash; path to the libraries directory (!library)', array(
        '!b' => '<br /><code>%b</code>',
        '!m' => '<br /><code>%m</code>',
        '!l' => '<br /><code>%l</code>',
        '!base' => '<code>' . $drupal_base_path . '</code>',
        '!module' => '<code>' . $module_drupal_path . '</code>',
        '!library' => '<code>' . $drupal_library_path . '</code>',
  )
  ) .
      '<br /> ' .
  t('Current path: !path', array(
        '!path' => '<code>' . $library_final_path . '</code>'
  )
  ),
      '#required' => TRUE
  );
  
  
  //Check existence of plugin and library
  $_plugin_present = true;
  $_library_present = true;
  //plugin existence
  $plugin_local_path = ckeditor_syntaxhighlighter_plugin_path('local');
  $jspath = $plugin_local_path . '/plugin.js';
  if(!file_exists($jspath)){
    drupal_set_message(t(
                  'The Syntax Highlighter CKEditor plugin component is not installed correctly at !ckeditorpluginpath. Please go to the !ckeditorpluginlink in order to download the latest version. After that you must extract the files to the configured plugin path.', array(
                '!ckeditorpluginlink' => l(t('CKEditor plugin page'), 'http://ckeditor.com/addon/syntaxhighlight'),
      		  '!ckeditorpluginpath' => "$plugin_local_path",
    )
    ), 'error');
    $_plugin_present = false;
  }
  
  //Library existence
  $library_local_path = ckeditor_syntaxhighlighter_library_path('local');
  $jspath = $library_local_path . '/scripts/shCore.js';
  if(!file_exists($jspath)){
    drupal_set_message(t(
                    'The Syntax Highlighter library component is not installed correctly at !ckeditorlibrarypath. Please go to the !ckeditorlibrarylink in order to download the latest version. After that you must extract the files to the configured plugin path.', array(
                  '!ckeditorlibrarylink' => l(t('Alex Gorbatchev site'), 'http://alexgorbatchev.com/SyntaxHighlighter/download/'),
        		  '!ckeditorlibrarypath' => "$library_local_path",
    )
    ), 'error');
    $_library_present = false;
  }
  
  
  if($_plugin_present && $_library_present){
    //Avoid need to refresh the page to remove errors messages when the path is fixed (Any other suggestion?)
    drupal_get_messages('error', TRUE);
  }
  
  
  
  if($_library_present){
    $form['ckeditor_syntaxhighlighter_libconfig'] = array(
      '#type' => 'fieldset',
      '#title' => t('Syntax highlighter library configuration'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,  
    );
    
    //Configuration for the library itself
    $files = file_scan_directory($library_local_path . '/styles', '/shTheme.*\.css/', array('nomask' => '/(\.\.?|CVS|shThemeDefault.css)$/'));
    foreach ($files as $file) {
      $theme_options[$file->filename] = substr($file->name, 7);
    }
    ksort($theme_options);
    $theme_options = array_merge(array('shThemeDefault.css' => 'Default'), $theme_options);
    $form['ckeditor_syntaxhighlighter_libconfig']['ckeditor_syntaxhighlighter_theme'] = array(
        '#type' => 'radios',
        '#title' => t('Theme'),
        '#description' => t('Choose a syntax highlight theme to be applied.'),
        '#options' => $theme_options,
        '#default_value' => variable_get('ckeditor_syntaxhighlighter_theme', 'shThemeDefault.css'),
        '#multicolumn' => array('width' => 2),
    );
  }
  
  $form['inject_settings'] = array(
      '#type' => 'fieldset',
      '#title' => t('Syntaxhighlighter js/css code inject settings'),
  	  '#collapsible' => TRUE,
      '#collapsed' => FALSE,  
  );
  $options = array(CKEDITOR_SYNTAXHIGHLIGHTER_INJECT_EXCEPT_LISTED => t('Inject on all pages except those listed'),
  CKEDITOR_SYNTAXHIGHLIGHTER_INJECT_IF_LISTED => t('Inject on only the listed pages'));
  $description = t("Enter one page per line as Drupal paths. The '*' character is a wildcard. Example paths are %blog for the blog page and %blog-wildcard for every personal blog. %front is the front page.", array('%blog' => 'blog', '%blog-wildcard' => 'blog/*', '%front' => '<front>'));
  $title = t('Pages');
   
  $form['inject_settings']['syntaxhighlighter_inject'] = array(
        '#type' => 'radios',
        '#title' => t('Inject js/css code on specific pages'),
        '#options' => $options,
        '#default_value' => variable_get('ckeditor_syntaxhighlighter_inject', CKEDITOR_SYNTAXHIGHLIGHTER_INJECT_EXCEPT_LISTED),
  );
  
  $form['inject_settings']['syntaxhighlighter_pages'] = array(
        '#type' => 'textarea',
        '#title' => '<span class="element-invisible">' . $title . '</span>',
        '#default_value' => variable_get('ckeditor_syntaxhighlighter_pages', "admin\nadmin/*\nuser\nuser/*\nimce\nimce/*\n"),
        '#description' => $description,
  );
  
  $form['syntaxhighlighter_default_expressions'] = array(
      '#type' => 'textarea',
      '#title' => t('Default expressions'),
      '#default_value' => variable_get('ckeditor_syntaxhighlighter_default_expressions', ''),
      '#description' => t('Enter syntaxhihglighter default settings javascript expressions, e.g. !example. To turn off clipboardSwf, use !swfoff. See the <a href="!link">syntaxhighlighter js lib doc page</a> for details. Note: these default settings affect the entire site unless they are overridden locally.',
  array('!example' => '<code>SyntaxHighlighter.defaults[\'auto-links\'] = true;SyntaxHighlighter.defaults[\'gutter\'] = false;</code>',
                                 '!swfoff' => '<code>SyntaxHighlighter.config.clipboardSwf = undefined;</code>',
                                 '!link' => 'http://alexgorbatchev.com/SyntaxHighlighter/',
  )),
  );
    
  
  $form = system_settings_form($form);
  /*
  $form['#submit'][] = '_ckeditor_syntaxhighlighter_setup_autoloader_script';
   
  */
  
  return $form;
}
