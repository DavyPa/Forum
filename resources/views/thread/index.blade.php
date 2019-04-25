@extends('layouts.front')

@section('content')

@section('heading', 'Treads')

@include('layouts.partials.succes')
@include('layouts.partials.error')

@include('thread.partials.thread-list')

@endsection