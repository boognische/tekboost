<?php
$panel_prefix = isset($panel_prefix) ? $panel_prefix : '';
$panel_suffix = isset($panel_suffix) ? $panel_suffix : '';
?>

<?php print $panel_prefix; ?>

<div class="main-container">
  <div class="page-wrapper single-column">
    
    <div class="panel-display <?php print $classes; ?> site-template-header"  <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
      <div class="region header">
        <div id="header">
          <?php echo $content['header']; ?>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    
    <div class="panel-display <?php print $classes; ?> main-menu"  <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
      <div class="region main-menu">
          <?php echo $content['main_menu']; ?>
          <div class="clearfix"></div>
      </div>
    </div>

    <div class="content-wrapper">
      <div class="region main-content">
        <?php echo $content['main_content']; ?>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php if($content['home_content']): ?>
<div class="home-content-container">
  <div class="region home-content">
    <div class="region-inner">
      <?php echo $content['home_content']; ?>
    </div>
  </div>
</div>
<?php endif; ?>
  
<div class="footer-container">
  <div id="footer-">
    <div class="footer-top-container">
      <div class="footer-wrapper">
        <div class="region footer-top">
          <?php echo $content['footer_top']; ?>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="footer-bottom-container">
      <div class="footer-wrapper">
        <div class="region footer-bottom">
          <?php echo $content['footer_bottom']; ?>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="site-bottom"></div>
<?php print $panel_suffix; ?>
<div class="clearfix"></div>