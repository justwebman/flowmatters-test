<?php

// Global variables
define( 'DEBUG_MODE', false ); // If false load minified assets

// Get template function
function get_template( $template_path ) {

    $located = 'templates/' . $template_path . '.php';

    if ( ! file_exists( $located ) ) {
        $log = 'Template error: ' . $template_path . ' file does not exist.';
        echo $log;
        return;
    }

    include $located;
}