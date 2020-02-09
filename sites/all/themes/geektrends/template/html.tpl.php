<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <title><?php print $head_title; ?></title>
  <!-- Diseño Responsive -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
  <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
  <!-- Diseño Responsive -->
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="/sites/all/themes/geektrends/img/icon.ico" rel="icon">
  <link href="/sites/all/themes/geektrends/img/icon.ico" rel="apple-touch-icon">
 <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="/sites/all/themes/geektrends/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="/sites/all/themes/geektrends/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/sites/all/themes/geektrends/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="/sites/all/themes/geektrends/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/sites/all/themes/geektrends/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/sites/all/themes/geektrends/lib/modal-video/css/modal-video.min.css" rel="stylesheet">
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- Main Stylesheet File -->
  <!-- <link href="/sites/all/themes/geektrends/css/style.css" rel="stylesheet"> -->

  <!-- =========================================================================
    Theme Name: Geek Trends - 2019
    Version: 0.001
    Authors: Geek Trends - Roberto Garcia aka kowalick - Developer and Software Architect
                           Edson Torres aka fatArt - Motion Designer
  ========================================================================== -->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
