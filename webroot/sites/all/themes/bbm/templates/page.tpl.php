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
  <header role="banner">
    <h1 id="site-name"><a href="/">Big Blue Marble Bookstore</a></h1>
    <h2 id="site-slogan">A neighborhood bookstore for Mt Airy and Beyond</h2>
    <nav role="navigation" class="main-menu">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Catalog</a></li>
        <li><a href="">Book Services</a></li>
        <li><a href="">Events</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class="content">
    <div class="main">
      <h1>Main Content</h1>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
      <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
      <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
      <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
      <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
      <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
      <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
      <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
      <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
      <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
    </div>
    <div class="sidebar">
      <h2>Sidebar</h2>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
      <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
      <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
      <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
    </div>
  </div>
  <footer id="page-footer">
    <h2>page footer</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
    <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
  </footer>



  <?php /*
    <div id="page" class="page">
      <div id="page-inner" class="page-inner">
        <div id="skip">
          <a href="#main-content-area"><?php print t('Skip to Main Content Area'); ?></a>
        </div>

        <!-- header-top row: width = grid_width -->
        <?php if ($header_top || $secondary_links || $search_box): ?>
        <div id="header-top-wrapper" class="header-top-wrapper full-width">
          <div id="header-top" class="<?php if ($search_box): ?>header-top-search<?php endif; ?> header-top row <?php print $grid_width; ?>">
            <div id="header-top-inner" class="header-top-inner inner clearfix">
              <?php print theme('grid_row', $header_top, 'header-top-region', 'full-width', $grid_width); ?>
              <?php print theme('grid_block', theme('links', $secondary_links), 'secondary-menu'); ?>
              <?php print theme('grid_block', $search_box, 'search-box'); ?>
              <?php if ($header_top && !$secondary_links && $search_box): ?><div id="header-top-placeholder"></div><?php endif; ?>
            </div><!-- /header-top-inner -->
          </div><!-- /header-top -->
        </div><!-- /header-top-wrapper -->
        <?php endif; ?>

        <!-- header-group row: width = grid_width -->
        <div id="header-group-wrapper" class="header-group-wrapper full-width">
          <div id="header-group" class="header-group row <?php print $grid_width; ?>">
            <div id="header-group-inner" class="header-group-inner inner clearfix">
              <?php if ($logo || $site_name || $site_slogan): ?>
              <div id="header-site-info" class="header-site-info block">
                <div id="header-site-info-inner" class="header-site-info-inner inner clearfix">
                  <?php if ($logo): ?>
                  <div id="logo">
                    <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                  </div>
                  <?php endif; ?>
                  <?php if ($site_name || $site_slogan): ?>
                  <div id="site-name-slogan" class="site-name-slogan">
                    <?php if ($site_name): ?>
                    <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
                    <?php endif; ?>
                    <?php if ($site_slogan): ?>
                    <span id="slogan"><?php print $site_slogan; ?></span>
                    <?php endif; ?>
                  </div>
                  <?php endif; ?>
                </div><!-- /header-site-info-inner -->
              </div><!-- /header-site-info -->
              <?php endif; ?>
              <?php print $header; ?>
            </div><!-- /header-group-inner -->
          </div><!-- /header-group -->
        </div><!-- /header-group-wrapper -->

        <!-- primary-menu row: width = grid_width -->
        <div id="header-primary-menu-wrapper" class="header-primary-menu-wrapper full-width">
          <div id="header-primary-menu" class="header-primary-menu row <?php print $grid_width; ?>">
            <div id="header-primary-menu-inner" class="header-primary-menu-inner inner clearfix">
              <?php print theme('grid_block', $primary_links_tree, 'primary-menu'); ?>
            </div><!-- /header-primary-menu-inner -->
          </div><!-- /header-primary-menu -->
        </div><!-- /header-primary-menu-wrapper -->

        <!-- preface-top row: width = grid_width -->
        <?php print theme('grid_row', $preface_top, 'preface-top', 'full-width', $grid_width); ?>

        <!-- main row: width = grid_width -->
        <div id="main-wrapper" class="main-wrapper full-width">
          <div id="main" class="main row <?php print $grid_width; ?>">
            <div id="main-inner" class="main-inner inner clearfix">
              <?php print theme('grid_row', $sidebar_first, 'sidebar-first', 'nested', $sidebar_first_width); ?>

              <!-- main group: width = grid_width - sidebar_first_width -->
              <div id="main-group" class="main-group row nested <?php print $main_group_width; ?>">
                <div id="main-group-inner" class="main-group-inner inner">
                  <?php print theme('grid_row', $preface_bottom, 'preface-bottom', 'nested'); ?>

                  <div id="main-content" class="main-content row nested">
                    <div id="main-content-inner" class="main-content-inner inner">
                      <!-- content group: width = grid_width - (sidebar_first_width + sidebar_last_width) -->
                      <div id="content-group" class="content-group row nested <?php print $content_group_width; ?>">
                        <div id="content-group-inner" class="content-group-inner inner">
                          <?php print theme('grid_block', $breadcrumb, 'breadcrumbs'); ?>

                          <?php if ($content_top || $help || $messages): ?>
                          <div id="content-top" class="content-top row nested">
                            <div id="content-top-inner" class="content-top-inner inner">
                              <?php print theme('grid_block', $help, 'content-help'); ?>
                              <?php print theme('grid_block', $messages, 'content-messages'); ?>
                              <?php print $content_top; ?>
                            </div><!-- /content-top-inner -->
                          </div><!-- /content-top -->
                          <?php endif; ?>

                          <div id="content-region" class="content-region row nested">
                            <div id="content-region-inner" class="content-region-inner inner">
                              <a name="main-content-area" id="main-content-area"></a>
                              <?php print theme('grid_block', $tabs, 'content-tabs'); ?>
                              <div id="content-inner" class="content-inner block">
                                <div id="content-inner-inner" class="content-inner-inner inner">
                                  <?php if ($title): ?>
                                  <h1 class="title"><?php print $title; ?></h1>
                                  <?php endif; ?>
                                  <?php if ($content): ?>
                                  <div id="content-content" class="content-content">
                                    <?php print $content; ?>
                                    <?php print $feed_icons; ?>
                                  </div><!-- /content-content -->
                                  <?php endif; ?>
                                </div><!-- /content-inner-inner -->
                              </div><!-- /content-inner -->
                            </div><!-- /content-region-inner -->
                          </div><!-- /content-region -->

                          <?php print theme('grid_row', $content_bottom, 'content-bottom', 'nested'); ?>
                        </div><!-- /content-group-inner -->
                      </div><!-- /content-group -->

                      <?php print theme('grid_row', $sidebar_last, 'sidebar-last', 'nested', $sidebar_last_width); ?>
                    </div><!-- /main-content-inner -->
                  </div><!-- /main-content -->

                  <?php print theme('grid_row', $postscript_top, 'postscript-top', 'nested'); ?>
                </div><!-- /main-group-inner -->
              </div><!-- /main-group -->
            </div><!-- /main-inner -->
          </div><!-- /main -->
        </div><!-- /main-wrapper -->

        <!-- postscript-bottom row: width = grid_width -->
        <?php print theme('grid_row', $postscript_bottom, 'postscript-bottom', 'full-width', $grid_width); ?>

        <!-- footer row: width = grid_width -->
        <?php print theme('grid_row', $footer, 'footer', 'full-width', $grid_width); ?>

        <!-- footer-message row: width = grid_width -->
        <div id="footer-message-wrapper" class="footer-message-wrapper full-width">
          <div id="footer-message" class="footer-message row <?php print $grid_width; ?>">
            <div id="footer-message-inner" class="footer-message-inner inner clearfix">
              <?php print theme('grid_block', $footer_message, 'footer-message-text'); ?>
            </div><!-- /footer-message-inner -->
          </div><!-- /footer-message -->
        </div><!-- /footer-message-wrapper -->

      </div><!-- /page-inner -->
    </div><!-- /page -->

  */ ?>
    <?php print $closure; ?>
</body>
</html>
