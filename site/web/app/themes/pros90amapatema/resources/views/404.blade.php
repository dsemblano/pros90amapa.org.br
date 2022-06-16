@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Página não encontrada! Desculpe, mas a página que você está tentando ver não existe.', 'sage') !!}
    </x-alert>
    <div class="my-6">
      {!! get_search_form(false) !!}
    </div>
  @endif
@endsection
