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