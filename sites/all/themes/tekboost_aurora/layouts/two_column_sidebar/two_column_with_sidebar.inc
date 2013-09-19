<?php

function tekboost_aurora_two_column_with_sidebar_panels_layouts() {
  $items['two_column_with_sidebar'] = array(
    'title' => t('Tekboost Two Column with Rt Sidebar Template'),
    'category' => t('Tekboost'),
    'icon' => 'two_column.png',
    'theme' => 'two_column_with_sidebar',
    'css' => 'two_column_with_sidebar.css',
    'regions' => array(
      'top' => t('Top'),
      'sidebar_left' => t('Sidebar Left'),
      'main_content' => t('Main Content'),
    ),
  );
  return $items;
}

function template_preprocess_two_column_with__sidebar(&$vars) {
  $vars['panel_prefix'] = '';
  $vars['panel_suffix'] = '';
  $vars['attributes_array']['id'][] = $vars['css_id'];
}