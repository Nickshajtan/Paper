<?php

/**
 * @file
 * template.php
 */

//Unset Meta Name generator

function paper_html_head_alter(&$head_elements) {
  unset($head_elements['system_meta_generator']);
}
drupal_add_js('alert("Hello!");');

//Override errors template

function paper_preprocess_page(&$variables, $hook)
{
     $status = drupal_get_http_header("status");  
    if($status == "404 Not Found") {      
        $variables['theme_hook_suggestions'][] = 'page__error';
    }

    if($status == "403 Forbidden") {      
        $variables['theme_hook_suggestions'][] = 'page__error';
    }
}

//Use Bartik color module

function color_paper_process_html(&$variables) {
 if (module_exists('color')) {
 _color_html_alter($variables);
 }
}

function color_paper_process_page(&$variables, $hook) {
 if (module_exists('color')) {
 _color_page_alter($variables);
 }
}

//Enable RTL support

function paper_preprocess_html (&$variables) { 
    if ( $variables['html_attributes']['dir'] == 'rtl' ){
        $variables['#attached']['library'][] = 'paper/rtl'; 
        drupal_add_css($path_t .'/style-rtl.css', 'theme');
    } 
}

        
    