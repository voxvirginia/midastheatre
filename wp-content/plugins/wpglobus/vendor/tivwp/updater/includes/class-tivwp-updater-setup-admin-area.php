<?php
/**
 * File: class-tivwp-updater-setup-admin-area.php
 *
 * @package TIVWP_Updater
 */

/**
 * Class TIVWP_Updater_Setup_Admin_Area
 */
class TIVWP_Updater_Setup_Admin_Area {

	/**
	 * Static constructor.
	 */
	public static function construct() {

		add_action( 'admin_head', array( __CLASS__, 'embed_css' ) );

		if ( version_compare( $GLOBALS['wp_version'], '4.5', '>' ) ) {
			add_action( 'admin_footer', array( __CLASS__, 'embed_js' ) );
		}

	}

	/**
	 * Embed the stylesheet.
	 */
	public static function embed_css() {
		ob_start();
		?>
		<style id="tivwp-updater-css">
			.tivwp-updater .tivwp-updater-status-value {
				font-weight: 700;
			}

			.tivwp-updater.tivwp-updater-status-inactive .tivwp-updater-status-value {
				color:            #cc0000;
				background-color: #ffffff;
			}

			.tivwp-updater .tivwp-updater-instance,
			.tivwp-updater .tivwp-updater-notifications {
				opacity: .6;
			}
		</style>
		<?php
		echo wp_kses( preg_replace( '/\s+/', ' ', ob_get_clean() ), array( 'style' => array( 'id' => array() ) ) );
	}

	/**
	 * In WP 4.6, form submission requires at least one checkbox checked.
	 * See `wp-admin/js/updates.js`
	 *
	 * @since 1.0.2
	 */
	public static function embed_js() {
		ob_start();
		?>
		<script id="tivwp-updater-js">
			jQuery(function ($) {
				$('.tivwp-updater-action-button').on("click", function () {
					var slug = $(this).data('tivwp-updater-slug');
					$(this).css({cursor: "wait", opacity: ".3"});
					$('input[type="checkbox"]').prop("checked", false);
					$('tr[data-slug="' + slug + '"]').find('input[type="checkbox"]').prop("checked", true);
				})
			});
		</script>
		<?php
		echo wp_kses( preg_replace( '/\s+/', ' ', ob_get_clean() ), array( 'script' => array( 'id' => array() ) ) );
	}
}
/* EOF */
