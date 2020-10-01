<?php echo head(array('bodyid'=>'home')); ?>

<?php if ($homepageText = get_theme_option('Homepage Text')): ?>
    <p><?php echo $homepageText; ?></p>
<?php endif; ?>

<div id="timeline-js">
<iframe src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=16xJxSRRTcavL2rrlL1jXWhkMzhhHwP_vvF0w0TYUsq0&amp;font=Default&amp;lang=en&amp;initial_zoom=2&amp;height=650?wmode=opaque" width="100%" height="650" allowfullscreen="" frameBorder="0"></iframe>
</div>

<?php echo foot(); ?>
