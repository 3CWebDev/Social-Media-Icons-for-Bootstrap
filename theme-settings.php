<?php
use Drupal\Core\Form\FormStateInterface;



/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * Form override for theme settings.
 */
function ccc_bs_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state) {

  $form['social_options_settings'] = [
      '#type' => 'details',
      '#title' => t('Social Media Settings'),
      '#group' => 'bootstrap',
  ];

  /* Social Media Links */
  $form['social_options_settings']['facebook'] = [
      '#type' => 'textfield',
      '#title' => t('Facebook URL'),
      '#default_value' => theme_get_setting('facebook'),
  ];
  $form['social_options_settings']['twitter'] = [
      '#type' => 'textfield',
      '#title' => t('Twitter URL'),
      '#default_value' => theme_get_setting('twitter'),
  ];
  $form['social_options_settings']['youtube'] = [
      '#type' => 'textfield',
      '#title' => t('YouTube URL'),
      '#default_value' => theme_get_setting('youtube'),
  ];  
  $form['social_options_settings']['linkedin'] = [
      '#type' => 'textfield',
      '#title' => t('LinkedIn URL'),
      '#default_value' => theme_get_setting('linkedin'),
  ];
  $form['social_options_settings']['pinterest'] = [
      '#type' => 'textfield',
      '#title' => t('Pinterest URL'),
      '#default_value' => theme_get_setting('pinterest'),
  ];
  $form['social_options_settings']['instagram'] = [
      '#type' => 'textfield',
      '#title' => t('Instagram URL'),
      '#default_value' => theme_get_setting('instagram'),
  ];
  $form['social_options_settings']['vimeo'] = [
      '#type' => 'textfield',
      '#title' => t('Vimeo URL'),
      '#default_value' => theme_get_setting('vimeo'),
  ];
}
