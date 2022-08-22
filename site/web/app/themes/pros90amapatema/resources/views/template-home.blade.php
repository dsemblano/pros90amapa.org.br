{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
@include('partials/home.section1')
  {{-- {!! do_shortcode('[wdi_feed id="1"]') !!} --}}
  {!! do_shortcode('[instagram-feed feed=1 class="container px-8 lg:px-16"]') !!}
  {{-- @include('partials.allposts') --}}
@endsection
