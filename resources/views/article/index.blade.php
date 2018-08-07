@extends('layouts.app_made')

@section('content')
    @component('particals.adsspace')
        
    @endcomponent

    @include('widgets.article')

    {{ $articles->links('pagination.default') }}

@endsection
