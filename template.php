<?php

/**
 * Register template for user login form.
 */
function camplus_theme($existing, $type, $theme, $path){
  return array(
    'user_login' => array(
      'render element' => 'form',
      'path' => drupal_get_path('theme', 'camplus') . '/templates',
      'template' => 'user-login',
    ),
  );
}
/**
 * Alter user login form submit button class.
 */
function camplus_preprocess_user_login(&$variables) {
  $variables['form']['actions']['submit']['#attributes']['class'] = array('btn', 'btn-login');
}
