<?php
/**
 * Setup function in theme file.
 *
 * @since 1.0.0
 */

/**
 * Class Setup
 *
 * @since 1.0.0
 */
class Setup extends OOPS_Actions{

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'addCallback' ) );
	}

	public function addCallback(){

		register_nav_menus( array(
			'menu-1'    => esc_html__( 'Primary', 'minilicious' ),
			'primary'   => esc_html__( 'Primary Navigation', 'minilicious' ),
			'mobile'    => esc_html__( 'Mobile Navigation', 'minilicious' ),
			'copyright' => esc_html__( 'Footer Copyright Menu', 'minilicious' ),
		) );
	}

}

$setup_obj = new Setup();