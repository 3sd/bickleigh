<?php

function bickleigh_form_user_login_block_alter(&$form, &$form_state, $form_id){


  $form['group']['name'] = $form['name'];
  $form['group']['name']['#attributes']['placeholder'] = 'Email';
  // $form['group']['name']['#attributes']['class'][] = 'form-control';

  $form['group']['pass'] = $form['pass'];
  $form['group']['pass']['#attributes']['placeholder'] = 'Password';
  // $form['group']['pass']['#attributes']['class'][] = 'form-control';

  $form['group']['actions'] = $form['actions'];
  $form['group']['actions']['submit']['#attributes']['class'][] = 'btn btn-default navbar-btn';


  $form['links']['#markup'] = '<p><a href="/user/register">Register</a> | <a href="user/password">Forgot your password?</a></p>';
  $form['links']['#weight'] = 1;

  unset($form['name']);
  unset($form['pass']);
  unset($form['actions']);


}
