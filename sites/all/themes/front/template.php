<?php

/**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.themwl.org/
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */
function front_theme() {
    $items = array();
    return $items;
}

function front_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'user_login') {
        $form['name']['#attributes']["placeholder"] = __('Username');
        $form['name']['#description'] = '';
        $form['pass']['#attributes']["placeholder"] = __('Password');
        $form['pass']['#description'] = '';
    }
    if ($form_id == 'user_pass') {
        $form['name']['#attributes']["placeholder"] = __('Username or e-mail address');
    }
}

function front_preprocess_page(&$vars) {
    $vars['show_messages'] = TRUE;
    $vars['page_content'] = $vars['page']['content'];
    //drupal_add_library('system', 'ui.autocomplete');
    if (isset($vars['node'])) {
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }
}

function front_preprocess_node(&$variables) {
    $node = $variables ['node'];
    if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
        $variables['classes_array'][] = 'node-full';
    }
}

function front_page_alter($page) {
    $viewport = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width'),
    );
    drupal_add_html_head($viewport, 'viewport');
}

function front_node_preview($variables) {
    $node = $variables['node'];
    $preview_trimmed_version = FALSE;
    $elements = node_view($node, 'full');
    $full = drupal_render($elements);
    $output = '<div class="preview">';
    $output .= $full;
    $output .= "</div>\n";
    return $output;
}
