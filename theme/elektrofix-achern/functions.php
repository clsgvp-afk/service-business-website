<?php
if (!defined('ABSPATH')) exit;
function efa_setup(){add_theme_support('title-tag');add_theme_support('post-thumbnails');register_nav_menus(['primary'=>__('Hauptnavigation','elektrofix')]);}
add_action('after_setup_theme','efa_setup');
function efa_assets(){wp_enqueue_style('efa-style',get_stylesheet_uri(),[],wp_get_theme()->get('Version'));wp_enqueue_style('efa-industrial',get_template_directory_uri().'/assets/industrial.css',['efa-style'],'2.0.0');wp_enqueue_style('efa-pages',get_template_directory_uri().'/assets/pages.css',['efa-industrial'],'1.0.0');wp_enqueue_style('efa-diagnose',get_template_directory_uri().'/assets/diagnose.css',['efa-pages'],'1.0.0');wp_enqueue_style('efa-regions',get_template_directory_uri().'/assets/regions.css',['efa-diagnose'],'1.0.0');wp_enqueue_style('efa-contact-cards',get_template_directory_uri().'/assets/contact-cards.css',['efa-regions'],'1.0.0');wp_enqueue_style('efa-home-cards',get_template_directory_uri().'/assets/home-cards.css',['efa-contact-cards'],'1.0.0');wp_enqueue_style('efa-ambience',get_template_directory_uri().'/assets/ambience.css',['efa-home-cards'],'1.0.0');wp_enqueue_style('efa-bulb-fix',get_template_directory_uri().'/assets/bulb-fix.css',['efa-ambience'],'1.0.0');wp_enqueue_style('efa-navigation',get_template_directory_uri().'/assets/navigation.css',['efa-bulb-fix'],'1.0.0');wp_enqueue_script('efa-site',get_template_directory_uri().'/assets/site.js',[],wp_get_theme()->get('Version'),true);}
add_action('wp_enqueue_scripts','efa_assets');
add_filter('body_class',function($classes){if(is_page('kontakt'))$classes[]='efa-contact';return $classes;});
function efa_create_pages(){
 $pages=['startseite'=>'Startseite','leistungen'=>'Leistungen','preise'=>'Preise','einsatzgebiet'=>'Einsatzgebiet','referenzen-faq'=>'Referenzen & FAQ','anfrage'=>'Serviceanfrage','kontakt'=>'Kontakt'];
 foreach($pages as $slug=>$title){if(!get_page_by_path($slug)){wp_insert_post(['post_type'=>'page','post_status'=>'publish','post_title'=>$title,'post_name'=>$slug]);}}
 $front=get_page_by_path('startseite');if($front){update_option('show_on_front','page');update_option('page_on_front',$front->ID);}flush_rewrite_rules();
}
add_action('after_switch_theme','efa_create_pages');
function efa_ensure_pages(){if(!get_option('efa_pages_v2')){efa_create_pages();update_option('efa_pages_v2',1);}}
add_action('init','efa_ensure_pages',20);
