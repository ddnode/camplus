<?php

function camplus_form_user_login_alter(&$form, &$form_state, $form_id) {
  $form['name']['#description'] = NULL;
  $form['name']['#title'] = NULL;
  $form['pass']['#description'] = NULL;
  $form['pass']['#title'] = NULL;
  //$form['name']['#attributes']['class'] = array('icon');
  $form['actions']['submit']['#attributes']['class'] = array('btn', 'btn-login');
  $form['other']['#markup'] = '<div class="form-item">
      <label class="checkbox">
        <input type="checkbox" class="form-checkbox">Remember Me
        <i class="icon icon-question ir"></i>
      </label>
      <div class="get-psw">Forgot Password '
      . l('Click here', 'user/password') . '</div>
      <div class="register">'
      . l('Register', 'user/register') . '</div>
    </div>';
  $form['other']['#weight'] = 1000;
}