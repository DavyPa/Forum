@extends('layouts.front')

@section('banner')

@include('layouts.partials.banner')

    @endsection

@section('heading', 'Treads')

@section('content')

    @include('thread.partials.thread-list')

@endsection