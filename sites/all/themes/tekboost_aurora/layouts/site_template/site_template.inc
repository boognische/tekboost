<?php

function tekboost_aurora_site_template_panels_layouts() {
  $items['site_template'] = array(
    'title' => t('Tekboost Single Column Site Template'),
    'category' => t('Tekboost'),
    'icon' => 'site_template.png',
    'theme' => 'site_template',
    'css' => 'site_template.css',
    'regions' => array(
      'header' => t('Header'),
      'main_menu' => t('Main Menu'),
      'main_content' => t('Main Content'),
      'home_content' => t('Home Content'),
      'footer_top' => t('Footer - Top'),
      'footer_bottom' => t('Footer - Bottom'),
    ),
  );
  return $items;
}

function template_preprocess_site_template(&$vars) {
  $vars['panel_prefix'] = '';
  $vars['panel_suffix'] = '';
  $vars['attributes_array']['id'][] = $vars['css_id'];
}