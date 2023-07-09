
<?= 
// Menus
// register_nav_menu('main-menu', 'menu-principal-du-site');

//Miniatures des articles
add_theme_support('post-thumbnails');

//Logo 
function themename_custom_logo_setup() {
$defaults = array(
    // 'height'              => 100,
    // 'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),

    'unlink-homepage-logo' => true, 

);

add_theme_support( 'custom-logo', $defaults );

};
add_theme_support('custom-logo');

//widgets footer menu
function wpb_widgets_init() {
    register_sidebar( array(
        'name'          => 'footer-menu',
        'id'            => 'footer-menu-bloc',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );

function wpb_widgets_init_en() {
    register_sidebar( array(
        'name'          => 'footer-menu-en',
        'id'            => 'footer-menu-bloc-en',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init_en' );

//Menus
function register_my_menus() { 
    register_nav_menus(
        array(
            'main-menu' => 'menu-principal-du-site',
            'secondary-menu' => 'menu-legal'
        )
    ); 
}
add_action( 'init', 'register_my_menus' );


//Trouver et charger les scripts js
function get_script_url() {
    $url = get_stylesheet_directory_uri() . '/assets/js/custom.js';
    return $url;
}

function add_js_scripts(){
    wp_enqueue_script('custom-js', get_script_url());
};

add_action('wp_enqueue_scripts', 'add_js_scripts');

    //Script de la page d'accueil
    function get_script_home_url() {
        $url = get_stylesheet_directory_uri() . '/assets/js/home.js';
        return $url;
    }

    function add_script_home() {
        if (is_front_page()) {
        wp_enqueue_script('home-js', get_script_home_url());
        }
    }
    add_action('wp_enqueue_scripts', 'add_script_home');

    //Script des articles
    function get_script_single_url() {
        $url = get_stylesheet_directory_uri() . '/assets/js/single-article.js';
        return $url;
    }

    function add_script_single() {
        if (is_single()) {
        wp_enqueue_script('single-article-js', get_script_single_url());
        }
    }
    add_action('wp_enqueue_scripts', 'add_script_single');

    //Script de la page des chambres (barre de recherche)
    function get_script_rooms_url() {
        $url = get_stylesheet_directory_uri() . '/assets/js/rooms.js';
        return $url;
    }

    function add_script_rooms() {
        if (is_page_template('chambresTemplate.php')) {
        wp_enqueue_script('room-js', get_script_rooms_url());
        }
    }
    add_action('wp_enqueue_scripts', 'add_script_rooms');

    //Résultats de la barre de recherche 
    function search_filter($query) {
        if ($query->is_search && !is_admin() ) {
            $query->set('post_type', array('post'));
        }
        return $query;
    }
    add_filter('pre_get_posts','search_filter');
    


//Activer la traduction de certaines chaînes php
pll_register_string('error_page', "Un trou noir semble avoir avalé cette ressource. Ou peut-être qu'elle n'a juste jamais existé.");
pll_register_string('error_article', "La page ne contient pas d'articles");
pll_register_string('error_content', "Il n'y a rien à voir ici");
pll_register_string('rooms_cta', "Réserve la tienne");
pll_register_string('see_more', "Voir plus");
pll_register_string('loader', "Chargement...");
pll_register_string('booking_cta', "Contactez-nous");
pll_register_string('search_results', "Résultats de votre recherche pour : ");
pll_register_string('post_cta', "Retourner au salon");


function add_custom_preloader() {
    wp_enqueue_style( 'custom-preloader', get_stylesheet_directory_uri() . '/css/custom-preloader.css' );
    wp_enqueue_script( 'custom-preloader', get_stylesheet_directory_uri() . '/js/custom-preloader.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_custom_preloader' );

?>