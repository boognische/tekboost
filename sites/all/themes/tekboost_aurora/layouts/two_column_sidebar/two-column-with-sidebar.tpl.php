<?php
$panel_prefix = isset($panel_prefix) ? $panel_prefix : '';
$panel_suffix = isset($panel_suffix) ? $panel_suffix : '';
?>

<?php print $panel_prefix; ?>

<div class="panel-display <?php print $classes; ?>" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div class="region region-2col-top">
    <div class="region-inner">
      <?php echo $content['top']; ?>
    </div>
  </div>
  
  <?php if($content['sidebar_left']): ?>
  <div class="region region-2col-sidebar-left">
    <div class="region-inner">
      <?php echo $content['sidebar_left']; ?>
    </div>
  </div>
  <?php endif; ?>
  <div class="region region-main-content<?php if($content['sidebar_left']) { print ' two-col'; } ?>">
    <div class="region-inner">
      <?php echo $content['main_content']; ?>
    </div>
  </div>
  
  
</div>
<?php print $panel_suffix; ?>
<div class="clearfix"></div>

