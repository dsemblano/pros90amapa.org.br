{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
<?php $the_query = new WP_Query( array( 'posts_per_page' => 5, 'offset' => 3 ) ); ?>
<div class="flex flex-wrap -m-4">
  @include('partials.allposts')
</div>
    {{-- {!! do_shortcode('[contact-form-7 id="20" title="Formulario"]') !!} --}}
@endsection
