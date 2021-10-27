<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php astra_head_bottom(); ?>
	<style>
		@media (min-width: 576px) {
			.col-sm-4 {
				-webkit-box-flex: 0;
				flex: 0 0 33.3333333333%;
				max-width: 33.3333333333%;
			}

			.flex {
				display: flex;
			}

			.row {
				display: flex;
				flex-wrap: wrap;
			}

			.col {
				padding-right: 15px;
				padding-left: 15px;
			}

			.site-content .ast-container {
				justify-content: center;
			}
		}

		.list-unstyled {
			display: flex;
			flex-wrap: wrap;
			list-style: none;
		}

		.list-unstyled li {
			padding-right: 15px;
		}

		.text-center {
			text-align: center;
			margin: auto;
		}

		#author-dropdown {
			background-color: transparent;
			padding: .5rem;
			color: #5B5758;
		}
	</style>

</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
	<?php astra_body_top(); ?>
	<?php wp_body_open(); ?>
	<div <?php
				echo astra_attr(
					'site',
					array(
						'id'    => 'page',
						'class' => 'hfeed site',
					)
				);
				?>>
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?></a>
		<?php
		astra_header_before();

		astra_header();

		astra_header_after();

		astra_content_before();
		?>
		<div id="content" class="site-content">
			<div class="ast-container">
				<?php astra_content_top(); ?>