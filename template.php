<?php
function scratch_preprocess_html(&$variables) {
  drupal_add_css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array('type' => 'external'));
}

function scratch_links__system_main_menu_menu($variables) {
  $output = '';
  foreach ($variables['links'] as $link) {
    $output .= l($link['title'], $link['href'], $link);
  }
  return $output;
}

function scratch_page_attachments_alter(&$page) {
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no',
    ),
  );
  $page['#attached']['html_head'][] = [$viewport, 'viewport'];
}
?>