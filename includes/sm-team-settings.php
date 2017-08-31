<?php 

add_action('admin_menu', 'sm_team_settings');
function sm_team_settings() {
    add_submenu_page(
        'edit.php?post_type=sm_team',
        'Settings',
        'Settings',
        'manage_options',
        'settings',
        'sm_team_settings_page' );
} 
function sm_team_settings_page() {    
    require(SM_TEAM_PATH.'includes/sm_team_settings_page.php'); 
}

