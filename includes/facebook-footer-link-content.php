<?php

function ffl_add_footer($content){
    // return 'Hello World';

    global $ffl_options; // So that you can use the global variable ffl_options

    $footer_output = '<hr>';
    $footer_output .= '<div class="footer-content">';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a style=" color:'.$ffl_options['link_color'].'" targe="_blank" href="'.$ffl_options['facebook_url'].'">Facebook</a>';
    $footer_content .= '</div>';

    if($ffl_options['show_in_feed']){
        if(is_single() || is_home() && $ffl_options['enable'] ){
            return $content . $footer_output;

        }
    }   else{
        if(is_single()  && $ffl_options['enable'] ){
            return $content . $footer_output;

        }
    }

    // if(is_single()){
    //     return $content.$footer_output ;
    // }

    return $content;    
}

add_filter('the_content', 'ffl_add_footer');

function to_footer($content) 
{
    return $content ;
}
add_action('the_content', 'to_footer');