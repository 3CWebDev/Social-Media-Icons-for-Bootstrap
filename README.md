# Files and instructions for adding social media URL configuration options to your (sub)theme

These instructions will help with setting up configuration options in the theme admin section of your theme. Always be sure to use a custom or sub theme, never make changes to a contrib.

## Step 1 (theme-settings.php)

Create or update the <strong>theme-settings.php</strong> file in your theme's root directory.

Add <strong>HOOK_form_system_theme_settings_alter()</strong>, where HOOK is the name of your theme.

&rarr; <a href="https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Render%21theme.api.php/function/hook_form_system_theme_settings_alter/8.2.x">more info for function hook_form_system_theme_settings_alter() on api.drupal.org</a>

Add required form fields to function. <a href="https://api.drupal.org/api/drupal/developer%21topics%21forms_api_reference.html/7.x">Use Drupal Form API (FAPI) for field specs</a>.

IMPORTANT: Be sure to and the 'use' for the following class to your theme-settings.php file

<code>use Drupal\Core\Form\FormStateInterface;</code>

## Step 2 (THEME_NAME.theme)

Now we want to pulling theme settings we just created and set some variable values.

Add or update the <strong>THEME_NAME.theme</strong> file in your theme's root directory.

Add or update the function <strong>THEME_NAME_preprocess_page(&$variables)</strong> where THEME_NAME is the name of your theme.

&rarr; <a href="https://api.drupal.org/api/drupal/core%21includes%21theme.inc/function/template_preprocess_page/8.2.x">more info for function hook_form_system_theme_settings_alter() on api.drupal.org</a>

## Step 3
