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
           
            'content'     => "<!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"className\":\"hero-heading\"} -->\r\n<h1 class=\"has-text-align-center hero-heading\"></h1>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:group {\"style\":{\"spacing\":{\"blockGap\":\"var:preset|spacing|30\",\"padding\":{\"top\":\"0\",\"right\":\"0\",\"bottom\":\"0\",\"left\":\"0\"}}},\"className\":\"hero-gallery\",\"layout\":{\"type\":\"constrained\"}} -->\r\n<div class=\"wp-block-group hero-gallery\" style=\"padding-top:0;padding-right:0;padding-bottom:0;padding-left:0\"><!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:group -->",
           
            'categories'  => array( 'Japanese Artist Block' ),
        )
    );

}

function section_heading() {

    register_block_pattern(
        'japanese_artists/section_heading',
        array(
            'title'       => __( 'Section Heading', 'japanese_artists' ),
           
            'description' => _x( 'Heading for Sections', 'japanese_artists' ),
           
            'content'     => "<!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\"}},\"className\":\"artist-section-heading\"} -->\r\n<h2 class=\"has-text-align-center artist-section-heading\" style=\"text-transform:uppercase\"></h2>\r\n<!-- /wp:heading -->",
           
            'categories'  => array( 'Japanese Artist Block' ),
        )
    );

}

function artist_card() {

    register_block_pattern(
        'japanese_artists/artist_card',
        array(
            'title'       => __( 'Artist Card', 'japanese_artists' ),
           
            'description' => _x( 'A card with Japanese Images', 'japanese_artists' ),
           
            'content'     => "<!-- wp:heading {\"level\":3} -->\r\n<h3></h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:image -->\r\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\r\n<p>Lorem ipsum dolor sit amet consectetur. Velit id egestas id nibh et sit cras sit. Dolor sed phasellus velit nisl id non mauris vehicula tristique. Sed vehicula sit risus nec neque sed scelerisque faucibus. Non sed aenean vulputate erat.</p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Japanese Artist Block' ),
        )
    );

}

add_action( 'init', 'hero_gallery_pattern' );
add_action( 'init', 'section_heading' );
add_action('init', 'artist_card');