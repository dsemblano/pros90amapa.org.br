@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Desculpe, nenhum resultado encontrado. Por favor faça uma nova busca', 'sage') !!}
    </x-alert>
    <div class="my-6">
      {!! get_search_form(false) !!}
    </div>
  @endif

  <div class="flex flex-wrap -m-4">

  @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile

  </div>

  {!! get_the_posts_navigation() !!}
@endsection
