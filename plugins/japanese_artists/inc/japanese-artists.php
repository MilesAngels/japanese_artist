<?php

/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/

register_block_pattern_category(
    'Japanese Artist Block',
    array(
        'label'     => __( 'Japanese Artist Block', 'japanese_artists' )
    )
);

function hero_gallery_pattern() {

    register_block_pattern(
        'japanese_artists/hero_gallery',
        array(
            'title'       => __( 'Hero Gallery', 'japanese_artists' ),
           
            'description' => _x( 'A gallery that contains 4 images', 'japanese_artists' ),
           
            'content'     => "<!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"className\":\"hero-heading\"} -->\r\n<h1 class=\"has-text-align-center hero-heading\"></h1>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:group {\"style\":{\"spacing\":{\"blockGap\":\"var:preset|spacing|30\",\"padding\":{\"top\":\"0\",\"right\":\"0\",\"bottom\":\"0\",\"left\":\"0\"}}},\"className\":\"hero-gallery\",\"layout\":{\"type\":\"constrained\"}} -->\r\n<div class=\"wp-block-group hero-gallery\" style=\"padding-top:0;padding-right:0;padding-bottom:0;padding-left:0\"><!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:paragraph -->\r\n<p></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:paragraph -->\r\n<p></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:paragraph -->\r\n<p></p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:paragraph -->\r\n<p></p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:group -->",
           
            'categories'  => array( 'Japanese Artist Block' ),
        )
    );

}    

add_action( 'init', 'hero_gallery_pattern' );