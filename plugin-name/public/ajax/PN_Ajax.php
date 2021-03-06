<?php

/**
 * Plugin_name
 * 
 * @package   Plugin_name
 * @author    {{author_name}} <{{author_email}}>
 * @copyright {{author_copyright}}
 * @license   {{author_license}}
 * @link      {{author_url}}
 */

/**
 * AJAX in the public
 */
class Pn_Ajax {

	/**
	 * Initialize the class
	 */
	public function initialize() {
		if ( !apply_filters( 'plugin_name_pn_ajax_initialize', true ) ) {
			return;
		}

		// For logged user
		add_action( 'wp_ajax_{your_method}', array( $this, 'your_method' ) );
		// For not logged user
		add_action( 'wp_ajax_nopriv_{your_method}', array( $this, 'your_method' ) );
	}

	/**
	 * The method to run on ajax
	 * 
	 * @return void
	 */
	public function your_method() {
		$return = array(
			'message' => 'Saved',
			'ID' => 1
		);

		wp_send_json_success( $return );
		// wp_send_json_error( $return );
	}

}

$pn_ajax = new Pn_Ajax();
$pn_ajax->initialize();

do_action( 'plugin_name_pn_ajax_instance', $pn_ajax );
