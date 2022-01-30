<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $seo->description ?? env('APP_NAME') }}">  

        <title>{{ $seo->title ?? env('APP_NAME') }}</title>
        
        <link rel="icon" type="image/png" href="{{ url($websetting->fav_location) ?? "" }}"/>
        <link rel="canonical"  href="{{ url('/') }}"/>




        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

        <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/taginput/tagsinput.css') }}" rel="stylesheet">



        @yield('css')








    </head>


    <body class="custom-skin">

        <header>




            @include('layouts.normal.header')


          </header>


            <div class="container-fluid" style="padding-top: 6.5rem">
                @yield('content')
            </div>


          <div class="mt-5">
            @include('layouts.normal.footer')

          </div>

    </body>


    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('fontawesome/js/all.js') }}" defer></script>
   <script src="{{ asset('js/mdb.min.js') }}" ></script>
   <script src="{{ asset('js/main.js') }}" ></script>

   <script src="{{ asset('js/bootstrap3-typeahead.min.js') }}" ></script>
   <script src="{{ asset('js/taginput/tagsinput.js') }}" ></script>





@yield('script')
@yield('subscript')

<script type="text/javascript">

    $(document).ready(function() {
            // $('.mdb-select').materialSelect();

            $('.datepicker').pickadate({
              selectYears:1000,
              clear: 'effacer',
              format: 'yyyy-mm-dd',
              formatSubmit: 'yyyy-mm-dd',
              editable: true
              });

          });

    </script>

</html>
