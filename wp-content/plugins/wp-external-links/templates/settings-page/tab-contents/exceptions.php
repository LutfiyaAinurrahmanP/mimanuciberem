<?php
/**
 * Tab Exception
 *
 * @package  WPEL
 * @category WordPress Plugin
 * @version  2.3
 * @link     https://www.webfactoryltd.com/
 * @license  Dual licensed under the MIT and GPLv2+ licenses
 *
 * @var array $vars
 *      @option array  "tabs"
 *      @option string "current_tab"
 */

$default_fields_file = WPEL_Plugin::get_plugin_dir( '/templates/partials/tab-contents/fields-default.php' );
WPEL_Plugin::show_template( $default_fields_file, $vars );
?>

<p class="description"><?php
WPEL_Plugin::wp_kses_wf(sprintf( __('The data-attribute <a href="%s"><code>data-wpel-link</code></a> can be set on individual links to treat them as internal, external or excluded, or to completely ignore links form being processed by this plugin.', 'wp-external-links' ), admin_url('options-general.php?page=wpel-settings-page&tab=support'), 'wp-external-links' ));
?></p>

<?php submit_button(); ?>
