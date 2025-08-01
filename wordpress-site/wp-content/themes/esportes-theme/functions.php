<?php
/**
 * Funções do tema Esportes
 */

// Registrar menus de navegação
function esportes_theme_setup() {
    // Adicionar suporte a menus
    add_theme_support('menus');
    
    // Registrar menus de navegação
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'esportes-theme'),
        'footer' => __('Menu do Rodapé', 'esportes-theme'),
    ));
    
    // Adicionar suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Adicionar suporte ao título dinâmico
    add_theme_support('title-tag');
    
    // Adicionar suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'esportes_theme_setup');

// Enfileirar estilos e scripts
function esportes_theme_scripts() {
    // Enfileirar o estilo principal
    wp_enqueue_style('esportes-style', get_stylesheet_uri());
    
    // Enfileirar jQuery
    wp_enqueue_script('jquery');
    
    // Script personalizado para o tema
    wp_enqueue_script('esportes-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'esportes_theme_scripts');

// Criar páginas automáticamente na ativação do tema
function esportes_create_pages() {
    $pages = array(
        'Quem Somos' => 'Conheça nossa história e nossos valores. Somos uma empresa dedicada ao mundo dos esportes.',
        'Produto' => 'Descubra nossos produtos e serviços esportivos de alta qualidade.',
        'Preço' => 'Confira nossos preços competitivos e planos especiais.',
        'Contato' => 'Entre em contato conosco. Estamos aqui para ajudar!'
    );
    
    foreach ($pages as $title => $content) {
        $page_check = get_page_by_title($title);
        if (!$page_check) {
            $page_data = array(
                'post_title' => $title,
                'post_content' => $content,
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_author' => 1
            );
            wp_insert_post($page_data);
        }
    }
}
add_action('after_switch_theme', 'esportes_create_pages');

// Widget areas
function esportes_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar Principal', 'esportes-theme'),
        'id' => 'sidebar-1',
        'description' => __('Widgets que aparecem na sidebar principal.', 'esportes-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Rodapé', 'esportes-theme'),
        'id' => 'footer-1',
        'description' => __('Widgets que aparecem no rodapé.', 'esportes-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'esportes_widgets_init');