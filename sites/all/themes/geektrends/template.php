<?php

/**
 * Add body classes if certain regions have content.
 */
function geektrends_preprocess_html(&$variables) {

  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
}



/**
 * Override or insert variables into the page template for HTML output.
 */
function geektrends_process_html(&$variables) {
  // Hook into color.module.

}


/**
 * Override or insert variables into the page template.
 */
function geektrends_process_page(&$variables) {
  // Hook into color.module.


}
