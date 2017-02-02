<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2015 Programming by "mohamedelsayed.net"
 */
function front_theme() {
    $items = array();
    /*$items['user_login'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'front') . '/templates',
        'template' => 'user-login',
    );
    $items['user_register_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'front') . '/templates',
        'template' => 'user-register-form',
    );
    $items['user_pass'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'front') . '/templates',
        'template' => 'user-pass',
    );
    $items['user_profile_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'front') . '/templates',
        'template' => 'user-profile-edit',
    );*/
    return $items;
}
function front_form_alter(&$form, &$form_state, $form_id) {
    //$sitelang = get_language_from_url();    
    if ($form_id == 'user_login') {
        $form['name']['#attributes']["placeholder"] = t('Username');
        $form['name']['#description'] = '';
        $form['pass']['#attributes']["placeholder"] = t('Password');
        $form['pass']['#description'] = '';        
    }
    if($form_id == 'user_pass'){
        $form['name']['#attributes']["placeholder"] = t('Username or e-mail address');
        //pr($form);exit;        
    }
}
function front_preprocess_page(&$vars) {
    $vars['show_messages'] = TRUE;
    $vars['page_content'] = $vars['page']['content'];
    drupal_add_library('system', 'ui.autocomplete');
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
            'content' => 'width=device-width')
            ,
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