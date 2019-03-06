<?php
/**
 * File which include the Frontend enqueue script.
 */


/**
 * Class OOPS_Scripts
 *
 * @since 1.0.0
 */
class OOPS_Scripts extends OOPS_Actions {

	/**
	 * OOPS_Scripts constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, "addCallback" ) );
	}

	/**
	 * OOPS callback
	 *
	 * @since   1.0.0
	 */
	public function addCallback(){
		wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri() );
	}
}