@extends('layouts.front')

@section('heading', 'Edit Thread')


@section('content')

    @include('layouts.partials.error')


    <div class="row">
        <form action="{{route('thread.update', $thread->id) }}" method="post" role="form" id="create-thread-form">
            {{csrf_field()}}
            {{ method_field('put') }}
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Subject..." value="{{ $thread->subject }}">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" placeholder="Type..." value="{{ $thread->type }}">
            </div>

            <div class="form-group">
                <label for="subject">Thread</label>
                <textarea type="text" class="form-control" name="thread" placeholder="Thread...">{{ $thread->thread }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>


@endsection