<?php

/**
 * @override bootstrap html.tpl.php 
 *
 */
?><!DOCTYPE html5>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
  <script>
        wow = new WOW({ mobile: false}) 
        wow.init();
  </script>
</head>
<body itemscope="itemscope" itemtype="http://schema.org/WebPage" <?php print $body_attributes; ?>>
     <!-- loader-->
      <div class="overlay">
       <div class="load">
           <hr/><hr/><hr/><hr/>
       </div>
       </div>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <div class="global-wrapper">
      <?php print $page_top; ?>
      <?php print $page; ?>
      <?php print $page_bottom; ?>
  </div>
</body>
</html>
