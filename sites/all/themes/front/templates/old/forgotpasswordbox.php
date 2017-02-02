<?php if(!user_is_logged_in()){
    module_load_include('inc', 'user', 'user.pages');
    $user_pass_form = drupal_get_form('user_pass');
    print drupal_render($user_pass_form);
}?>