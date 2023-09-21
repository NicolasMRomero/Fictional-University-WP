<?php

// add_action(what type of instruction, name of the function we create  ){

// }

//PAGE BANNER TO PRINT HTML
function pageBanner($args = NULL){
    if (!isset($args['title'])) {
        $args['title'] = get_the_title(  );
      }
      if (!isset($args['subtitle'])) {
        $args['subtitle'] = get_field('page_banner_subtitle');
      }
      if (!isset($args['photo'])) {
        if (get_field('page_banner_background_image') AND !is_archive() AND !is_home() ) {
          $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
          $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
        }
      }
    
    ?>
        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo'] ?>)"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title">
                    <?php echo $args['title'];?>    
                </h1>
                <div class="page-banner__intro">
                <p>
                    <?php echo $args['subtitle']; ?>
                </p>     
                </div>
            </div>
        </div>
    <?php
}

// LOAD CSS & JS

function university_files(){
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_script('main_university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'university_files');


//HOOK "AFTER_SETUP_THEME"
//TITLE ON EVERY TAB
// ADD MENU LOCATIONS
// ADD AND SET THUMBANAILS SIZES

function university_features(){
    register_nav_menu('headerMenuLocation','Header menu location');
    register_nav_menu('footerMenuLocation1','Footer menu location 1');
    register_nav_menu('footerMenuLocation2','Footer menu location 2');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', '400', '260', true);
    add_image_size('professorPortrait', '480', '650', true);
    add_image_size('pageBanner', '500', '350', true);

}

add_action('after_setup_theme', 'university_features');

//MODIFY DEFAULT URL BASED WP QUERY FOR EVENTS AND PROGRAMS ARCHIVE

function university_adjust_queries($query){ 

    if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('post_per_page', -1);
    }

    if(!is_admin() AND is_post_type_archive('event') AND is_main_query()){
        $today = date('Ymd');

        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
              'key' => 'event_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
            ));

    }
}

add_action('pre_get_posts', 'university_adjust_queries');
?>