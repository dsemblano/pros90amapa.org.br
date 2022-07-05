{{--
  Template Name: Child Page Template
--}}

@extends('layouts.app')

@section('content')
{{-- {!! do_shortcode('[child_pages thumbs="large" link_thumbs="true"  cols="3" skin="simple" hide_excerpt="true" hide_more="true" class="precandidatos"]') !!}   --}}
<?php
// Set up the objects needed
$all_wp_pages = new \WP_Query(array('post_type' => 'page'));

    // Get the page as an Object
    $portfolio =  get_page_by_title('Pré-Candidatos 2022');

    // Filter through all pages and find Portfolio's children
    $portfolio_children = get_page_children( $portfolio->ID, $all_wp_pages );

    foreach ($portfolio_children as $children) {
        $html = '<div id=';
        $html .= $children->post_name;
        $html .= ' class="flex-item">';
        $html .= '<a href="';
        $html .= $children->guid;
        $html .= '">';
        $html .= get_the_post_thumbnail( $children->ID);
        $html .= '<div><span>';
        $html .= $children->post_title;
        $html .= '</div></span></a></div>';
        echo $html;
    }
    ?>
@endsection
