@extends('layouts.app_made')

@section('content')
    @component('particals.jumbotron')
        <h4>{{ request()->get('q') }}</h4>

        <h6>what you want to search.</h6>
    @endcomponent

    @include('widgets.article')

@endsection
