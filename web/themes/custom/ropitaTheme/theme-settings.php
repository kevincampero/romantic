<?php


/**
* Implements hook_form_system_theme_settings_alter().
*/
function ropitaTheme_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
	$form['ropitaTheme'] = [
		'#type'  => 'fieldset',
		'#title' => t('RopitaTheme settings'),
	];
	$form['ropitaTheme']['show_twig_message'] = [
		'#type' => 'checkbox',
		'#title' => t('Display "Twig Debug" message'),
		'#default_value' => theme_get_setting('show_twig_message'),
		'#description' => t('Check this option if you want to display a message when Twig Debug is enabled.'),
	];
}