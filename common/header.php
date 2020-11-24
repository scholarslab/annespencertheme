<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file(array('iconfonts', 'skeleton','style'));

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('vendor/jquery-accessibleMegaMenu'); ?>
    <?php queue_js_file('berlin'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

    <?php if ($bodyclass!='items browse' && $bodyclass!='collections browse' 
    && $bodyclass!='exhibits browse' && $bodyclass!='items show' && $bodyclass!='page simple-page'):?>
        <header class="banner homepage-banner" role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <section class='hero-header-text'>
                <div id="site-title"><?php echo link_to_home_page(option('site_title')); ?></div>
                <?php if ($introText = get_theme_option('tagline_text')): ?>
                    <div class="tagline-text"><?php echo $introText; ?></div>
                <?php endif; ?>
            </section>
        </header>
    <?php endif ?>

    <!-- Item Browse and Show Page Header Banner  -->
    <?php if ($bodyclass=='items browse' || $bodyclass=='items show' ):?>
        <header class="banner browse-item-banner" role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <section class='hero-header-text'>
                <div id="site-title"><?php echo link_to_home_page(option('site_title')); ?></div>
                <?php if ($introText = get_theme_option('tagline_text')): ?>
                    <div class="tagline-text"><?php echo $introText; ?></div>
                <?php endif; ?>
            </section>
        </header>
    <?php endif ?>
    <!-- End Item Browse Page Header Banner -->

    <!-- Collections Browse Page Header Banner  -->
    <?php if ($bodyclass=='collections browse'):?>
        <header class="banner browse-collections-banner" role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <section class='hero-header-text'>
                <div id="site-title"><?php echo link_to_home_page(option('site_title')); ?></div>
                <?php if ($introText = get_theme_option('tagline_text')): ?>
                    <div class="tagline-text"><?php echo $introText; ?></div>
                <?php endif; ?>
            </section>
        </header>
    <?php endif ?>
    <!-- End Collections Browse Page Header Banner -->

    <!-- Exhibits Browse Page Header Banner  -->
    <?php if ($bodyclass=='exhibits browse'):?>
        <header class="banner browse-exhibits-banner" role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <section class='hero-header-text'>
                <div id="site-title"><?php echo link_to_home_page(option('site_title')); ?></div>
                <?php if ($introText = get_theme_option('tagline_text')): ?>
                    <div class="tagline-text"><?php echo $introText; ?></div>
                <?php endif; ?>
            </section>
        </header>
    <?php endif ?>
    <!-- End Exhibits Browse Page Header Banner -->

    <!-- Simple Page Header Banner  -->
    <?php if ($bodyclass=='page simple-page'):?>
        <header class="banner simple-page-banner" role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <section class='hero-header-text'>
                <div id="site-title"><?php echo link_to_home_page(option('site_title')); ?></div>
                <?php if ($introText = get_theme_option('tagline_text')): ?>
                    <div class="tagline-text"><?php echo $introText; ?></div>
                <?php endif; ?>
            </section>
        </header>
    <?php endif ?>
    <!-- End Simple Page Header Banner -->


         <div id="primary-nav" role="navigation">
             <?php
                  echo public_nav_main();
             ?>
         </div>

         <div id="mobile-nav" role="navigation" aria-label="<?php echo __('Mobile Navigation'); ?>">
             <?php echo public_nav_main(); ?>
         </div>

    <div id="content" role="main" tabindex="-1">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
