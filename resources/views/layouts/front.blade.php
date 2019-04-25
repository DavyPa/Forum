<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width-device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>


@include('layouts.partials.navbar')

@include('layouts.partials.banner')

<div class="container">

    <div class="row">
        <div class="row content-heading">
            <div class="col-md-3">
                <h4>Category</h4>
            </div>
            <div class="col-md-9">
                <div class="row flex-row justify-content-between">
                    <h4 class="main-content-heading">@yield('heading')</h4>
                    <a class="btn btn-primary" href="{{ route('thread.create') }}">Create Thread</a>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        {{--//category section--}}
        <div class="col-md-3">
            <ul class="list-group ">
                <a href="{{route('thread.index')}}" class="list-group-item d-flex justify-content-between">
                    All Thread
                    <span class="badge badge-secondary pill">14</span>
                </a>

                <a href="#" class="list-group-item d-flex justify-content-between">
                    PHP
                    <span class="badge badge-secondary pill">2</span>
                </a>

                <a href="#" class="list-group-item d-flex justify-content-between">
                    Python
                    <span class="badge badge-secondary pill">1</span>
                </a>

            </ul>
        </div>

        <div class="col-md-9">
            <div class="content-wrap ">

                @yield('content')

            </div>
        </div>
    </div>

</div> {{-- End container --}}

@include('layouts.partials.footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>