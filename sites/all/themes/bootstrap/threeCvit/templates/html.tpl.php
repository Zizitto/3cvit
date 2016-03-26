<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
    
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php print $head; ?>

  <title><?php  print $head_title; ?></title>
  <?php print $styles; ?>
    
<!--[if lt IE 9]>
<style>
        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { 
            display: block;
       }
</style>
        <link href="/<?php echo drupal_get_path('theme', 'threeCvit'); ?>/css/max-width500px.css" media="screen and (max-width: 500px)" rel="stylesheet" type="text/css" />
        <link href="/<?php echo drupal_get_path('theme', 'threeCvit'); ?>/css/max-width768px.css" media="screen and (max-width: 768px)" rel="stylesheet" type="text/css" />
        <link href="/<?php echo drupal_get_path('theme', 'threeCvit'); ?>/css/min-width768px.css" media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" />
        <link href="/<?php echo drupal_get_path('theme', 'threeCvit'); ?>/css/min-width992px.css" media="screen and (min-width: 992px)" rel="stylesheet" type="text/css" />
        <link href="/<?php echo drupal_get_path('theme', 'threeCvit'); ?>/css/min-widtha1200px.css" media="screen and (min-width: 1280px)" rel="stylesheet" type="text/css" />
<![endif]-->
 
      
      <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
    
    
<!--[if lt IE 9]>
    <script src="/<?php echo drupal_get_path('theme', 'threeCvit'); ?>/js/respond.min.js"></script>
<![endif]-->

</body>
</html>
