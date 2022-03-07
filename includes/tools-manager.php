<?php
/**
 * This File contains functionality that add new tool in wordpress Tool Tab Menu
 * 
 */

add_action('admin_menu', 'nevsToolSubPage');
function nevsToolSubPage(){
    //create sub menu in tool menu page of wordpress
    add_management_page( 
        "Nevs Notification Page",
        "Nevs Notification",
        "administrator", 
        "nevsnotify",
        "nevsNotify_content"
    );
}


function nevsNotify_content(){ ?>
    <div class="wrap">
        <h1 class='nevs-notif-header'><?php _e( 'Notifications Page', NEVSNOTIF_TDOMAIN); ?></h1>
        <p><?php _e('This tool is created to help administrator to set notification email when page/post is create.', NEVSNOTIF_TDOMAIN); ?></p>
   


        <div class="nevs-body-wrap">
            <?php settings_fields('nevnotify_fields_setting'); ?>
            <?php submit_button(); ?>
        </div>
    </div>
<?php }