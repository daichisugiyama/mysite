<?php
# カスタム投稿タイプの定義
##############################
#複数形
// define("POST_TYPE_PLURAL", ['Works', 'Prototype', 'Analysis', 'Note', 'Blog']);
#単数形
// define("POST_TYPE_SINGULAR", ['works', 'prototype', 'analysis', 'note', 'blog']);
# カスタム投稿タイプの登録
##############################
// add_action('init', 'register_post_types');
// function register_post_types()
// {
//     for ($i = 0; $i < count(POST_TYPE_SINGULAR); $i++)
//     {
//         register_post_type( POST_TYPE_SINGULAR[$i], [
//             'labels' => [
//                 'name'          => POST_TYPE_PLURAL[$i],
//                 'singular_name' => POST_TYPE_SINGULAR[$i],
//             ],
//             'public'        => true,
//             'has_archive' => true,
//             'menu_position' => 5+$i, 
//             'show_in_rest'  => true,
//             'supports' => array('title','editor','thumbnail') 
//         ]);    
//         register_taxonomy(
//             POST_TYPE_SINGULAR[$i] . '_category',
//             POST_TYPE_SINGULAR[$i],
//             array(
//                 'label' => POST_TYPE_PLURAL[$i] . 'カテゴリ',
//                 'public' => true,
//                 'hierarchical' => true, 
//                 'show_in_rest' => true 
//             )
//         );
//     }
//     add_theme_support('post-thumbnails');
// }
add_theme_support("post-thumbnails");
add_theme_support("title-tag");
# CSSファイルの読込
##############################
add_action("wp_enqueue_scripts", "read_css_files");
function read_css_files()
{
    if (!is_admin()) 
    {
        wp_deregister_style("common");
        wp_enqueue_style(
            "style", 
            get_theme_file_uri("/css/style.css"), 
            array(), 
            filemtime( get_theme_file_path("/css/style.css"))
        );
    }
}
# JSファイルの読込
##############################
add_action("wp_enqueue_scripts", "read_js_files");
function read_js_files()
{
    if (!is_admin()) 
    {
        wp_deregister_script("jquery");
        wp_enqueue_script(
            "jquery",
            get_theme_file_uri("/js/jquery-3.6.1.js"),
            array(),
            filemtime(get_theme_file_path("/js/jquery-3.6.1.js")),
            false
        );
        wp_enqueue_script(
            "bootstrap",
            get_theme_file_uri("/js/bootstrap.bundle.js"),
            array("jquery"),
            filemtime(get_theme_file_path("/js/bootstrap.bundle.js")),
            false
        );
        wp_deregister_script("common");
        wp_enqueue_script(
            "common",
            get_theme_file_uri("/js/common.js"),
            array("jquery"),
            filemtime(get_theme_file_path("/js/common.js")),
            false
        );
        foreach (POST_TYPE_SINGULAR as $post_type)
        {
            if(is_front_page() && is_home())
            {
                wp_enqueue_script(
                    "script",
                    get_theme_file_uri("/js/top.js"),
                    array("jquery", "common"),
                    filemtime(get_theme_file_path("/js/top.js")),
                    false
                );
            }
            else if(is_singular($post_type))
            {
                wp_enqueue_script(
                    "script", 
                    get_theme_file_uri("/js/single/" . $post_type . ".js"), 
                    array("jquery", "common"),
                    filemtime( get_theme_file_path("/js/single/" . $post_type . ".js")),
                    false
                );
            }
            else if(is_post_type_archive($post_type))
            {
                wp_enqueue_script(
                    "script", 
                    get_theme_file_uri("/js/archive/" . $post_type . ".js"), 
                    array("jquery", "common"),
                    filemtime( get_theme_file_path("/js/archive/" . $post_type . ".js")),
                    false
                );
            }    
        }
    }
}
# Wordpressデフォルトタグの削除
########################################
add_action("get_header", "remove_wp_default_tag");
function remove_wp_default_tag()
{
    // remove_action("wp_head", "print_emoji_detection_script", 7);
    remove_action("wp_print_styles", "print_emoji_styles");
    // add_filter("emoji_svg_url", "__return_false");
    remove_action("wp_head", "rest_output_link_wp_head");
    // remove_action("wp_head", "wp_oembed_add_discovery_links");
    // remove_action("wp_head", "wlwmanifest_link");
    remove_action("wp_head", "rsd_link");
    wp_dequeue_style("global-styles");
}
# Wordpressデフォルトタグのマスク処理
########################################
add_action("get_header", "replace_wp_default_tag");
function replace_wp_default_tag()
{
    remove_action("wp_head", "wp_generator");
    add_action("wp_head", "mask_wp_generator");    
}
function mask_wp_generator()
{
    $version = get_bloginfo("version");
    list($major_version_1, $major_version_2, $minor_version) = explode(".", $version);
	echo '<meta name="generator" content="WordPress ' . $major_version_1 . '.x(masked).x(masked)" />';
}
#oembed
// function oembed_add(){
//     if( is_singular() ){
//         echo '<link rel="alternate" type="application/json+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink() ) ) . '" /><link rel="alternate" type="text/xml+oembed" href="' . esc_url( get_oembed_endpoint_url( get_permalink(), 'xml' ) ) . '" />';
//     }
// }   
// add_action('wp_head','oembed_add');