<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
//require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
require_once get_template_directory() . '/core/classes/class-post-type.php';
require_once get_template_directory() . '/core/classes/class-taxonomy.php';
require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
// require_once get_template_directory() . '/core/classes/class-post-status.php';
require_once get_template_directory() . '/core/classes/class-term-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

	wp_enqueue_style( 'swiper', $template_url . '/assets/css/swiper.min.css', array(), null, 'all' );
	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Html5Shiv
	wp_enqueue_script( 'html5shiv', $template_url . '/assets/js/html5.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	// General scripts.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		// Bootstrap.
		wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/libs/bootstrap.min.js', array(), null, true );

		// FitVids.
		wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array(), null, true );

		// Main jQuery.
		wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array(), null, true );

		
	} else {
		// Grunt main file with Bootstrap, FitVids and others libs.
		wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array(), null, true );
	}

	wp_enqueue_script( 'swiper', $template_url . '/assets/js/swiper.jquery.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'main-js', $template_url . '/assets/js/main-js.js', array('jquery'), null, true );

	// Grunt watch livereload in the browser.
	// wp_enqueue_script( 'odin-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}

//Custon Post end Taxonomy
require_once get_template_directory() . '/inc/custom-posts.php';

//Metabox
require_once get_template_directory() . '/inc/custom-fields.php';

//MetaBox-
$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
$template_file = get_post_meta($post_id,'_wp_page_template',TRUE);


// Remove Labels from Admin Menu
function remove_menus () {

	global $menu;

	$restricted = array(__('Posts'), __('Post'), __('Novo'), __('Comentários'));

	end ($menu);

	while (prev($menu)){
	$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
		}
	}

add_action('admin_menu', 'remove_menus');

function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);

      if (count($excerpt) >= $limit) {
          array_pop($excerpt);
          $excerpt = implode(" ", $excerpt) . '...';
      } else {
          $excerpt = implode(" ", $excerpt);
      }

      $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

      return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);

    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }

    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);

    return $content;
}


function custom_change_title_placeholder($title) {
    global $post;

    if (is_admin() && isset($post->post_type)) {
        switch ($post->post_type) {
            case 'currriculo':
                $title = 'Digite seu nome Completo';
                break;
            case 'empreendimentos':
                $title = 'Digite seu nome Completo ';
                break;
            // Adicione mais casos conforme necessário

            default:
                break;
        }
    }

    return $title;
}
add_filter('enter_title_here', 'custom_change_title_placeholder');

add_role('aluno', 'Aluno', array(
    'edit_posts' => true,
    'delete_posts' => false,
    'edit_published_posts' => true,
    'publish_posts' => false, // só pode salvar rascunhos
    'edit_files' => true,
    'read' => true,
    'upload_files' => true //pode enviar arquivos
));


function alterar_nome_menu_admin() {
    global $menu;
    
    foreach ($menu as $key => $item) {
        if ($item[0] == 'Painel') { // Substitua 'Painel' pelo nome atual do menu
            $menu[$key][0] = 'Menu';
            break;
        }
    }
}
add_action('admin_menu', 'alterar_nome_menu_admin');

function adicionar_mensagem_acima_do_formulario() {
    global $post;

    // Verifique se você está no editor de postagem e se o tipo de postagem é "currriculo".
    if (isset($post->post_type) && $post->post_type == 'currriculo') {
        echo '
        <div class="mensagem-instrucao">
        	<b>Instruções importante.</b>
        	<br>
        	<p>1 - Abaixo esta dos dados para preecher seu currriculo.</p>
        	<p>2 - Na caixa no canto direita você adiciona as suas Profissões e Competências (Limite de 3 Competências e 3 Profissões)</p>
        	<p>3 - No Botão azul você enviar seu currriculo para revisão</p>        	
        </div>';
    }
}

function imprimir_mensagem_acima_do_formulario() {
    echo '<style>
        .mensagem-instrucao {
            margin: 10px 0;
            padding: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
        }
    </style>';
}

add_action('edit_form_after_editor', 'adicionar_mensagem_acima_do_formulario');
add_action('admin_head', 'imprimir_mensagem_acima_do_formulario');

//Função para limitar quantas Competências o usuario pode escolher---------------------
	// Função para adicionar JavaScript ao admin para um metabox específico por ID da div
	function custom_metabox_js() {
	    ?>
	    <script>
	        jQuery(document).ready(function($) {
	            var divId = 'competenciadiv'; // Substitua 'sua_div_id' pelo ID da sua div
	            var maxCheckboxes = 3;

	            $('#' + divId + ' input[type="checkbox"]').on('change', function() {
	                var checkedCheckboxes = $('#' + divId + ' input[type="checkbox"]:checked');

	                if (checkedCheckboxes.length > maxCheckboxes) {
	                    $(this).prop('checked', false);
	                }
	            });
	        });
	    </script>
	    <?php
	}
//---------------------

// Substitua 'sua_div_id' pelo ID da div que contém os checkboxes.
add_action('admin_footer', 'custom_metabox_js');

// Função para adicionar JavaScript ao admin para um metabox específico por ID da div
function custom_metabox_js2() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            var divId = 'profissoesdiv'; // Substitua 'sua_div_id' pelo ID da sua div
            var maxCheckboxes = 3;

            $('#' + divId + ' input[type="checkbox"]').on('change', function() {
                var checkedCheckboxes = $('#' + divId + ' input[type="checkbox"]:checked');

                if (checkedCheckboxes.length > maxCheckboxes) {
                    $(this).prop('checked', false);
                }
            });
        });
    </script>
    <?php
}

// Substitua 'sua_div_id' pelo ID da div que contém os checkboxes.
add_action('admin_footer', 'custom_metabox_js2');


add_filter( 'login_display_language_dropdown', '__return_false' );