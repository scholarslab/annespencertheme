<?php echo head(array('bodyid'=>'home')); ?>
<div id="primary">
    <h2>Anne Spencer, Poet of the Harlem Renaissance</h2>
    <img class="homepage-image" width="200px" alt="Photo of Anne Spencer, 1901" src="https://scholarslab.net/annespencerproject/files/fullsize/db1994719cc338f4bc58c1e67cbc3668.jpg" title="Photo of Anne Spencer, 1901">
    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
    <p><?php echo $homepageText; ?></p>
    <?php endif; ?>

</div><!-- end primary -->

<div id="secondary">

    <?php if ((get_theme_option('Display Featured Exhibit')) && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
    <!-- Featured Exhibit -->
    <?php echo exhibit_builder_display_random_featured_exhibit(); ?>
    <?php endif; ?>
    

    <?php if (get_theme_option('Display Featured Collection')): ?>
    <!-- Featured Collection -->
    <div id="featured-collection" class="featured">
        <h2><?php echo __('Featured Collection'); ?></h2>
        <?php echo random_featured_collection(); ?>
    </div><!-- end featured collection -->
    <?php endif; ?>
    
    <?php if (get_theme_option('Display Featured Item') == 1): ?>
    <!-- Featured Item -->
    <div id="featured-item" class="featured">
        <h2><?php echo __('Featured Item'); ?></h2>
        <?php echo random_featured_items(1); ?>
    </div><!--end featured-item-->
    <?php endif; ?>

    
<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

</div><!-- end secondary -->


<?php echo foot(); ?>
