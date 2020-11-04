</div><!-- end content -->

<footer role="contentinfo">

    <div id="footer-content">
        <nav>
            <?php echo public_nav_main()->setMaxDepth(0);?>        
        </nav>

        <?php if ($logo = theme_logo() && $logoUrl = get_theme_option('logo_url')): ?> 
           <div id="site-logo"><a href="<?php echo $logoUrl; ?>"><?php echo $logo; ?></a></div>
        <?php endif;?>
        <?php if ($logo = theme_logo()): ?>
            <div id="site-logo"><?php echo $logo; ?></div>
        <?php endif;?>

        <?php  echo link_to_home_page(option('site_title'));?>
    </div>

    <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
    <?php endif; ?>

    <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu();
        Berlin.dropDown();
    });
</script>

</body>

</html>
