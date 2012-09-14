<?php
// $Id: page.tpl.php,v 1.7 2010/09/17 21:36:06 eternalistic Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!DOCTYPE html>
<!--[if lt IE 7 ]>              <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>                 <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>                 <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" class="no-js"> <!--<![endif]-->


<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $styles; ?>
  <?php // print $setting_styles; ?>
  <?php // print $local_styles; ?>
  <?php print $scripts; ?>
</head>

<body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">
<?php print theme($search_box, 'search-box'); ?>
   <?php print $closure; ?>
</body>
</html>
