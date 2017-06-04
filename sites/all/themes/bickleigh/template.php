<?php

function bickleigh_form_user_login_block_alter(&$form, &$form_state, $form_id){


  $form['group']['name'] = $form['name'];
  // $form['group']['name']['#title'] = '';
  $form['group']['name']['#attributes']['placeholder'] = 'Email';

  $form['group']['pass'] = $form['pass'];
  // $form['group']['pass']['#title'] = '';
  $form['group']['pass']['#attributes']['placeholder'] = 'Password';

  $form['group']['actions'] = $form['actions'];

  $form['links']['#markup'] = '<p><a href="/register">Register</a> | <a href="/register">Forgot your password?</a></p>';
  $form['links']['#weight'] = 1;

  unset($form['name']);
  unset($form['pass']);
  unset($form['actions']);

  // var_dump($form);
}
