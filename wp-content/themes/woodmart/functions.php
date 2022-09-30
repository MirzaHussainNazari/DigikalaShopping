<?php
/**
 *
 * The framework's functions and definitions
 */

update_option( 'woodmart_is_activated', '1' );

define( 'WOODMART_THEME_DIR', get_template_directory_uri() );
define( 'WOODMART_THEMEROOT', get_template_directory() );
define( 'WOODMART_IMAGES', WOODMART_THEME_DIR . '/images' );
define( 'WOODMART_SCRIPTS', WOODMART_THEME_DIR . '/js' );
define( 'WOODMART_STYLES', WOODMART_THEME_DIR . '/css' );
define( 'WOODMART_FRAMEWORK', '/inc' );
define( 'WOODMART_DUMMY', WOODMART_THEME_DIR . '/inc/dummy-content' );
define( 'WOODMART_CLASSES', WOODMART_THEMEROOT . '/inc/classes' );
define( 'WOODMART_CONFIGS', WOODMART_THEMEROOT . '/inc/configs' );
define( 'WOODMART_HEADER_BUILDER', WOODMART_THEME_DIR . '/inc/header-builder' );
define( 'WOODMART_ASSETS', WOODMART_THEME_DIR . '/inc/admin/assets' );
define( 'WOODMART_ASSETS_IMAGES', WOODMART_ASSETS . '/images' );
define( 'WOODMART_API_URL', 'https://xtemos.com/licenses/api/' );
define( 'WOODMART_DEMO_URL', 'https://woodmart.xtemos.com/' );
define( 'WOODMART_PLUGINS_URL', WOODMART_DEMO_URL . 'plugins/' );
define( 'WOODMART_DUMMY_URL', WOODMART_DEMO_URL . 'dummy-content-new/' );
define( 'WOODMART_SLUG', 'woodmart' );
define( 'WOODMART_CORE_VERSION', '1.0.34' );
define( 'WOODMART_WPB_CSS_VERSION', '1.0.2' );

if ( ! function_exists( 'woodmart_load_classes' ) ) {
	function woodmart_load_classes() {
		$classes = array(
			'Singleton.php',
			'Api.php',
			'Googlefonts.php',
			'Config.php',
			'Layout.php',
			'License.php',
			'Notices.php',
			'Options.php',
			'Stylesstorage.php',
			'Theme.php',
			'Themesettingscss.php',
			'Vctemplates.php',
			'Wpbcssgenerator.php',
			'Registry.php',
			'Pagecssfiles.php',
		);

		foreach ( $classes as $class ) {
			require WOODMART_CLASSES . DIRECTORY_SEPARATOR . $class;
		}
	}
}

woodmart_load_classes();

new WOODMART_Theme();

define( 'WOODMART_VERSION', woodmart_get_theme_info( 'Version' ) );



// Code for allow of SVG File in the WordPress
// Wp v4.7.1 and higher
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

//End SVG Code
//