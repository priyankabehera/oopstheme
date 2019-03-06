<?php
/**
 * File contains the main class.
 *
 * @since 1.0
 */

/**
 * Class OopsTheme this is the main class having all the common classes.
 *
 * @since 1.0
 */
class OopsTheme {

	/**
	 * @var $hook string Defines action of filter hook.
	 */
	public $hook;

	/**
	 * @var $tag string Defines the hook name.
	 */
	public $tag;

	/**
	 * @var array Hook additional arguments.
	 */
	public $hook_arg;

	/**
	 * @var string hook callback function name.
	 */
	public $function_to_add;

	/**
	 * OopsTheme constructor.
	 *
	 * @since 1.0
	 */
	public function __construct() {
	}

	/**
	 * Register the hooks.
	 *
	 * @since 1.0
	 *
	 * @param  $hook   string
	 * @param $tag  string
	 * @param $function_to_add string
	 * @param $hook_arg   array
	 */
	public function registerHooks( $hook, $tag, $function_to_add, $hook_arg ) {

		if ( 'action' === $hook ) {
			$this->addActions( $tag, $function_to_add, $hook_arg );
		} else {
			$this->addFilters( $tag, $function_to_add, $hook_arg );
		}

	}

	abstract function assa();

	/**
	 * Function to add actions.
	 *
	 * @since 1.0
	 *
	 * @param $tag
	 * @param $function_to_add
	 * @param $hook_arg
	 */
	public function addActions( $tag, $function_to_add, $hook_arg ) {

		$additional_arg = $this->implodeArray( ',', $hook_arg );
		add_action( $tag, $function_to_add, $additional_arg );
	}

	/**
	 * Function to add filters.
	 *
	 * @since 1.0
	 *
	 * @param $tag
	 * @param $function_to_add
	 * @param $hook_arg
	 */
	public function addFilters( $tag, $function_to_add, $hook_arg ) {

	}

	/**
	 * Function to implode the array.
	 *
	 * @since 1.0
	 *
	 * @param $glue
	 * @param $hook_arg
	 *
	 * @return string
	 */
	public function implodeArray( $glue, $hook_arg ) {
		$hook_string = implode( $glue, $hook_arg );

		return $hook_string;
	}
}
