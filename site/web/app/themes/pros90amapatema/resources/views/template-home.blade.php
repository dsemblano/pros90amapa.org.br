{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
  @include('partials.page-header')
  @include('partials.content-page')
  @endwhile
    {{-- @include('partials/home.section1') --}}
    {{-- {!! do_shortcode('[wdi_feed id="1"]') !!} --}}
    {{-- {!! do_shortcode('[contact-form-7 id="20" title="Formulario"]') !!} --}}
@endsection
