{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  {!! do_shortcode('[wdi_feed id="1"]') !!}
  @include('partials.allposts')
@endsection
