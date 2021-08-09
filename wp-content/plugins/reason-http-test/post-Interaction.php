<?php
if (!defined( 'ABSPATH' ) ) die( 'Forbidden' );



add_action('publish_post', function() {

    $response = wp_remote_post( $url, array(
        'method'      => 'POST',
        'timeout'     => 60,
        'redirection' => 5,
        'httpversion' => '1.0',
        'blocking'    => true,
        'headers'     => array(),
        'body'        => array(),
        'cookies'     => array()
    ));

    if ( is_wp_error( $response ) ) {
        $error_message = $response->get_error_message();
        echo "Something went wrong: $error_message";
    } else {
        echo 'Response:<pre>';
        print_r( $response );
        echo '</pre>';
    }

}, 10);