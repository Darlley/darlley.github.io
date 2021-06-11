<?php
global $ID;

/*

3. CONFIGURAÇÕES DE LINKS PERMANENTES
----------------------------------------
# Nome do post
# Base das categorias -> categoria


4. INSTALAR PLUGINS
----------------------------------------
# ACF Pro                            # Dropbox\RINO 3\DESENVOLVIMENTO
# Yoast SEO
# Post Types Order
# Contact Form 7
# Contact Form 7 DB
# SWEETALERT2 ADD-ON FOR CONTACT FORM 7
# WPS Hide Login                     # r3-admin (quando for startdigital) ou adm (padrao)
# Wordfence                          # Não ativar
# WP Mail SMTP by WPForms
# Google Analytics Dashboard for WP (GADWP)
# Robin image optimizer
# WP Fastest Cache                   # Não ativar

# Yoast SEO
Search Appearance -> Archive -> Author archive settings -> Author archives -> Disabled
Search Appearance -> Archive -> Special pages -> Search pages -> Você buscou por %%searchphrase%% %%page%% %%sep%% %%sitename%%
Search Appearance -> Archive -> Special pages -> 404 pages -> Página não encontrada %%sep%% %%sitename%%
*/

function create_posttype_projeto() {
    register_post_type('projeto', array(
        'labels' => array(
            'name' => __('Projetos'),
            'singular_name' => __('Projeto'),
            'add_new_item' => 'Adicionar novo Projeto',
            'edit_item' => 'Editando Projeto',
            'new_item' => 'Novo Projeto',
            'view_item' => 'Ver Projeto',
            'search_items' => 'Buscar Projeto',
            'not_found' => 'Nenhum Projeto',
            'not_found_in_trash' => 'Nenhum Projeto na lixeira'
        ),
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'query_var' => true,
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'projeto', 'with_front' => true),
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor')
    ));
}

add_action('init', 'create_posttype_projeto');