<?php

function roundfollio_webform_email($variables) {
  $element = &$variables['element'];

  // This IF statement is mostly in place to allow our tests to set type="text"
  // because SimpleTest does not support type="email".
  if (!isset($element['#attributes']['type'])) {
    $element['#attributes']['type'] = 'email';
  }

  // Convert properties to attributes on the element if set.
  foreach (array('id', 'name', 'value', 'size') as $property) {
    if (isset($element['#' . $property]) && $element['#' . $property] !== '') {
      $element['#attributes'][$property] = $element['#' . $property];
    }
  }
  _form_set_class($element, array('form-texteeeeeeeeeeeeeeee', 'form-email'));
  $element['#attributes']['id'] = 'email';

  return '<input' . drupal_attributes($element['#attributes']) . ' />';
}


function roundfollio_textarea($variables) {
  $element = &$variables['element'];
  element_set_attributes($element, array('id', 'name', 'cols', 'rows'));
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-wrap'),
  );

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}


function roundfollio_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'webform_client_form_33') {


    $form['#attributes']['id'][] = 'contact-form';

    $form['submitted']['name']['#attributes']['id'] = 'name';
    $form['submitted']['mail']['#attributes']['id'] = array('mos_contact_us_submit');
    $form['submitted']['body']['#attributes']['id'][] = 'comment'; 

    $form['actions']['submit']['#attributes']['id'][] = 'submit';


  }
}