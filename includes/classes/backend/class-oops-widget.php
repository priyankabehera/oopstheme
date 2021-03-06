<?php
/**
 *
 */

/**
 * Class OOPS_Widget
 */
class OOPS_Widget extends OOPS_Actions {

	public function __construct() {
		add_action( 'widgets_init', array( $this, 'addCallback' ) );
	}

	public function addCallback(){
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'minilicious' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'minilicious' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}

}

$oops_widget_obj = new OOPS_Widget();