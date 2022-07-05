{{--
  Template Name: Child Page Template
--}}

@extends('layouts.app')

@section('content')
{!! do_shortcode('[child_pages thumbs="large" link_thumbs="true"  cols="3" skin="simple" hide_excerpt="true" hide_more="true" class="precandidatos"]') !!}  
@endsection
