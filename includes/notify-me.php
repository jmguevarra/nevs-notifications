<?php
/**
 * 
 * 
 * 
 */

// add_action( 'publish_post', 'jmsend_notification' );
// add_action( 'publish_page', 'jmsend_notification' );
// function jmsend_notification( $post_id ) {   
// 	if( did_action('publish_post') === 1 || did_action('publish_page') === 1 ){
// 		$post     = get_post($post_id);
//         $post_url = get_permalink( $post_id );
//         $post_title = get_the_title( $post_id ); 
//         $author   = get_userdata($post->post_author);
//         $subject  = 'Post publish notification';
//         $message  = "Hello,";
//         $message .= "<a href='". $post_url. "'>'".$post_title."'</a>\n\n";
//         wp_mail('a.guevarra@energin.co', $subject, $message );  
// 	}
        
// }