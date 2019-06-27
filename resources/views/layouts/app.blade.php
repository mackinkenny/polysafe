<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Polysafe') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="stylesheet" id="redux-google-fonts-salient_redux-css" href="http://fonts.googleapis.com/css?family=Futura PTt&amp;ver=1559628150" type="text/css" media="all">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito, Fututa PT" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <link rel="stylesheet" id="redux-google-fonts-salient_redux-css" href="http://fonts.googleapis.com/css?family=Montserrat&amp;ver=1559628150" type="text/css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl.theme.default.min.css')}}">

    @stack('styles')
</head>
<body>
{{--@include('_partials.header')--}}
<div id="app">
    <main class="">
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
{{--<script src="{{ asset('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('https://code.jquery.com/ui/1.10.4/jquery-ui.min.js') }}"></script>--}}
{{--<script>--}}
    {{--$('.carousel.carousel-multi .item').each(function () {--}}
        {{--var next = $(this).next();--}}
        {{--if (!next.length) {--}}
            {{--next = $(this).siblings(':first');--}}
        {{--}--}}
        {{--next.children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));--}}

        {{--if (next.next().length > 0) {--}}
            {{--next.next().children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));--}}
        {{--}--}}
        {{--else {--}}
            {{--$(this).siblings(':first').children(':first-child').clone().appendTo($(this));--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}
@stack('scripts')
</body>
</html>
