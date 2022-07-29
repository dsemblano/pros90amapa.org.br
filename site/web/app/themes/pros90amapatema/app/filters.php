<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <p class="mt-2"><a href="%s">%s</a></p>', get_permalink(), __('Leia Mais', 'sage'));
});


// remove url from commment
add_filter( 'comment_form_default_fields', function($fields) {
    if(isset($fields['url']))
    unset($fields['url']);
    return $fields;
});

// child pages plugin
add_filter('ccchildpages_inner_template', function () {
    return '<article class="childpagecandidato">{{thumbnail}}<div class="containertext"><h3{{title_class}}>{{title}}</h3></div>{{meta}}{{excerpt}}{{more}}</article>';
});

// default target _blank
function default_target_blank() {
 
    ?>
    <script>
        jQuery(document).on( 'wplink-open', function( wrap ) {
            if ( jQuery( 'input#wp-link-url' ).val() <= 0 )
                jQuery( 'input#wp-link-target' ).prop('checked', true );
        });
    </script>
    <?php
}
add_action( 'admin_footer-post-new.php', 'default_target_blank', 10, 0 );
add_action( 'admin_footer-post.php', 'default_target_blank', 10, 0 );

/**
 * Filter the excerpt length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
add_filter( 'excerpt_length', function($length) {
    if ( is_admin() ) {
        return $length;
}
return 20;
});
