<?php
/**
 * All Field in Submenu too Nevs Notification are here
 * 
 */

add_action('admin_init', 'nevsnotifyFieldSettings');
function nevsnotifyFieldSettings(){
    register_setting( 
        'nevnotify_fields_setting',
        'send_email_to',
        'sanitize_text_field'
    );

    add_settings_section( 
       'user_details_setting' , 
       '', 
       '', //callback
       'nevsnotify' 
    );

    add_settings_field(
		'send_email_to',
		'Send Email To',
		'nevsnotify_sendemailto_text_html', // function which prints the field
		'nevsnotify', // page slug
		'user_details_setting', // section ID
		array( 
			'label_for' => 'send_email_to',
			'class' => 'misha-class', // for <tr> element
		)
	);

}

function nevsnotify_sendemailto_text_html(){

	$text = get_option( 'send_email_to' );

	printf(
		'<input type="text" id="send_email" name="send_email" value="%s" />',
		esc_attr( $text )
	);

}