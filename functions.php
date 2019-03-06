<?php
/**
 * Main file in which all the sub ordinate files are included.
 *
 * @since 1.0
 */


/**
 * Implement the main class file.
 *
 * @since 1.0.0
 */
//require get_template_directory() . '/includes/class-oopstheme.php';

/**
 *
 */
require get_template_directory() . '/includes/classes/class-oops-actions.php';

/**
 * Include setup class file.
 *
 * @since 1.0.0
 */
require get_template_directory() . '/includes/classes/backend/class-setup.php';

/**
 * Include class OOPS_Widget file.
 *
 * @since 1.0.0
 */
require get_template_directory() . '/includes/classes/backend/class-oops-widget.php';

/**
 * Include class OOPS_Scripts for frontend file.
 *
 * @since 1.0.0
 */
require get_template_directory() . '/includes/classes/frontend/class-scripts.php';

