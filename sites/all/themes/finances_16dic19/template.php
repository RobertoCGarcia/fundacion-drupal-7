<?php

/**
 * Add body classes if certain regions have content.
 */
function finances_preprocess_html(&$variables) {

  // Add conditional stylesheets for IE
  //drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  //drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));

  $options = array(
    'group' => JS_THEME,
    'scope' => 'footer',
  );

  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery-3.3.1.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery-ui.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/popper.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/bootstrap.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/owl.carousel.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.countdown.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.easing.1.3.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/aos.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.fancybox.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.sticky.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/isotope.pkgd.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/main.js', $options);

  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/bootstrap-datepicker.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery-migrate-3.0.1.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.magnific-popup.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/jquery.stellar.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/mediaelement-and-player.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/slick.min.js', $options);
  drupal_add_js(drupal_get_path('theme', 'finances'). '/js/typed.js', $options);

}



/**
 * Override or insert variables into the page template for HTML output.
 */
function finances_process_html(&$variables) {
  // Hook into color.module.

}


function finances_css_alter(&$css) {

  //Remove Drupal core css
  $exclude = array(
     'modules/aggregator/aggregator.css' => FALSE,
     'modules/block/block.css' => FALSE,
     'modules/book/book.css' => FALSE,
     'modules/comment/comment.css' => FALSE,
     'modules/dblog/dblog.css' => FALSE,
     'modules/field/theme/field.css' => FALSE,
     'modules/file/file.css' => FALSE,
     'modules/filter/filter.css' => FALSE,
     'modules/forum/forum.css' => FALSE,
     'modules/help/help.css' => FALSE,
     'modules/menu/menu.css' => FALSE,
     'modules/node/node.css' => FALSE,
     'modules/openid/openid.css' => FALSE,
     'modules/poll/poll.css' => FALSE,
     'modules/profile/profile.css' => FALSE,
     'modules/search/search.css' => FALSE,
     'modules/statistics/statistics.css' => FALSE,
     'modules/syslog/syslog.css' => FALSE,
     'modules/system/admin.css' => FALSE,
     'modules/system/maintenance.css' => FALSE,
     'modules/system/system.css' => FALSE,
     'modules/system/system.admin.css' => FALSE,
     'modules/system/system.base.css' => FALSE,
     'modules/system/system.maintenance.css' => FALSE,
     'modules/system/system.messages.css' => FALSE,
     'modules/system/system.menus.css' => FALSE,
     'modules/system/system.theme.css' => FALSE,
     'modules/taxonomy/taxonomy.css' => FALSE,
     'modules/tracker/tracker.css' => FALSE,
     'modules/update/update.css' => FALSE,
     'modules/user/user.css' => FALSE,
     'misc/vertical-tabs.css' => FALSE,

  // Remove contrib module CSS
  drupal_get_path('module', 'views') . '/css/views.css' => FALSE, );
  $css = array_diff_key($css, $exclude);

}


/**
 * Override or insert variables into the page template.
 */
function finances_process_page(&$variables) {
  // Hook into color.module.


}
