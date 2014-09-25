<?php

add_action( 'wp_enqueue_scripts', 'load_my_styles' );
function load_my_styles() {
    wp_enqueue_style( 'parent-theme', get_template_directory_uri() . '/style.css' );
}

// Custom Function to Include
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

// Enqueue Typekit fonts
function mbm_enqueue_scripts() {
    wp_enqueue_script( 'typekit', '//use.typekit.net/cix2aos.js' );
}
 add_action( 'wp_enqueue_scripts', 'mbm_enqueue_scripts' );

 function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php } }
add_action( 'wp_head', 'theme_typekit_inline' );