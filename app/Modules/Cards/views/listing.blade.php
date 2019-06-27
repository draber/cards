@extends('modules::Common.views.layout')

@section('title', 'Card Listing')

@section('content')
    @foreach($payload as $i => $entry)
        @include('modules::Cards.views.card')
    @endforeach
@endsection
