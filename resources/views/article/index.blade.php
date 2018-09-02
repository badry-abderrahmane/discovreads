@extends('layouts.app_tarik')

@section('content')
  <section class="s-content">
      @component('particals.adsspace')

      @endcomponent

      @include('widgets.article_grid')

      {{ $articles->links('pagination.default') }}
    </section> <!-- s-content -->

@endsection
