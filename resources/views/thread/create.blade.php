@extends('layouts.front')

@section('heading', 'Create Thread')


@section('content')

    @include('layouts.partials.error')

    @include('layouts.partials.succes')

    <div class="row">
            <form action="{{route('thread.store') }}" method="post" role="form" id="create-thread-form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Subject..." value="{{ old('subject') }}">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Type..." value="{{ old('type') }}">
                </div>

                <div class="form-group">
                    <label for="subject">Thread</label>
                    <textarea type="text" class="form-control" name="thread" placeholder="Thread...">{{ old('thread') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>


@endsection