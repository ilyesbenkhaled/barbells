<?php if(!isset($content_width)) $content_width = 640;
define('CPOTHEME_ID', 'transcend');
define('CPOTHEME_NAME', '');
define('CPOTHEME_VERSION', '1.1.6');
//Other constants
define('CPOTHEME_LOGO_WIDTH', '180');
define('CPOTHEME_USE_SLIDES', true);
define('CPOTHEME_USE_FEATURES', true);
define('CPOTHEME_USE_PORTFOLIO', true);
define('CPOTHEME_USE_SERVICES', true);
define('CPOTHEME_PREMIUM_NAME', 'Transcend Pro');
define('CPOTHEME_PREMIUM_URL', 'http://');
define('CPOTHEME_THUMBNAIL_WIDTH', 400);
define('CPOTHEME_THUMBNAIL_HEIGHT', 500);

//Load Core; check existing core or load development core
$core_path = get_template_directory().'/core/';
if(defined('CPOTHEME_CORE')) $core_path = CPOTHEME_CORELITE;
require_once $core_path.'init.php';

$include_path = get_template_directory().'/includes/';

//Main components
require_once($include_path.'setup.php');

// Add Welcome Screen & Epsilon Framework
if ( ! class_exists( 'CPO_Theme' ) ) {
	require get_template_directory() . '/includes/class-cpo-theme.php';
}

if ( ! defined( 'SHORTPIXEL_AFFILIATE_CODE' ) ) {
    define( 'SHORTPIXEL_AFFILIATE_CODE', '3AXNUKA28044' );
}


function fashionist_scripts() {

	/* BOOTSTRAP */
    wp_enqueue_style( 'fashionist_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null );

    /* FONT AWESOME */
    wp_enqueue_style( 'fashionist_iconfont', get_template_directory_uri() . '/iconfont/style.css', array(), null );

    /* LightBox CSS */
    wp_enqueue_style( 'fashionist_lightbox', get_template_directory_uri() . '/css/lightbox.css', array(), null );

    /* style CSS */
    wp_enqueue_style( 'fashionist_stylesheet', get_template_directory_uri() . '/css/style.css', array(), null );
    /* Theme CSS */
    wp_enqueue_style( 'fashionist_stylesheets', get_template_directory_uri() . '/style.css', array(), null );
    /* sss CSS */
    wp_enqueue_style( 'fashionist_sssstyle', get_template_directory_uri() . '/css/sss.css', array(), null );
    /* rs css*/
    wp_enqueue_style( 'fashionist_rsstyle', get_template_directory_uri() . '/css/rs-slider.css', array(), null );

	/* jquery ui */
    wp_enqueue_script( 'jquery-ui-core' );
    wp_enqueue_script( 'jquery-ui-widget' );
    wp_enqueue_script( 'jquery-ui-mouse' );
    wp_enqueue_script( 'jquery-ui-accordion' );
    wp_enqueue_script( 'jquery-ui-autocomplete' );
    wp_enqueue_script( 'jquery-ui-slider' );
    wp_enqueue_script( 'jquery-ui-tabs' );
    wp_enqueue_script( 'jquery-ui-sortable' );
    wp_enqueue_script( 'jquery-ui-draggable' );
    wp_enqueue_script( 'jquery-ui-droppable' );
    wp_enqueue_script( 'jquery-ui-datepicker' );
    wp_enqueue_script( 'jquery-ui-resize' );
    wp_enqueue_script( 'jquery-ui-dialog' );
    wp_enqueue_script( 'jquery-ui-button' );
    /* sss js*/
    wp_enqueue_script( 'fashionist_sssscript', get_template_directory_uri() . '/scripts/sss.js' , array(), null , true);
    /*LightBox JS*/
    wp_enqueue_script( 'fashionist_lightboxscript', get_template_directory_uri() . '/scripts/lightbox.js' , array(), null , true);
     /* Bootstrap */
    wp_enqueue_script( 'fashionist_bootstrap', get_template_directory_uri() . '/scripts/bootstrap.min.js' , array(), null , true );
    /* Fashionist js*/
    wp_enqueue_script( 'fashionist', get_template_directory_uri() . '/scripts/fashionist.js' , array(), null , true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fashionist_scripts' );