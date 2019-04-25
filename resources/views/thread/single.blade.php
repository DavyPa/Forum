@extends('layouts.front')



@section('heading', $thread->type)

@section('content')

    @include('layouts.partials.succes')

    <div class="jumbotron">
        <h2>{{ $thread->subject }}</h2>
        <hr>

        <div class="thread-details">
            {{ $thread->thread }}
        </div>
    </div>
    <br>

    @if(auth()->user()->id == $thread->user_id)

    <div class="actions">

        <a href="{{ route('thread.edit', $thread->id) }}" class="btn btn-info btn-xs">Edit</a>

        {{--//deleting form--}}

        <form action="{{ route('thread.destroy', $thread->id) }}" method="post" class="inline-it">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
        </form>

    </div>
    @endif

@endsection