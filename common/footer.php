</div><!-- end content -->

<footer role="contentinfo">
    <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
    <?php endif; ?>

    <div id="footer-content">
        <nav>
            <?php echo public_nav_main()->setMaxDepth(0);?>        
        </nav>

        <?php if ($logo = theme_logo() && $logoUrl = get_theme_option('logo_url')): ?> 
        <a href="<?php echo $logoUrl; ?>">
          <?php if($logo = theme_logo()): ?>
            <?php echo $logo; ?>
          <?php endif;?></a>
        <?php else: ?>
          <?php if($logo = theme_logo()): ?>
            <?php echo $logo; ?>
          <?php endif;?>
        <?php endif;?>

        <?php  echo link_to_home_page(option('site_title'));?>
    </div>

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
