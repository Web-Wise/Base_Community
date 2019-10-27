<?php

add_shortcode( 'fl_year', 'fl_year_callback' );

function fl_year_callback() {

    $date = date( 'Y' );

    return $date;
    
}