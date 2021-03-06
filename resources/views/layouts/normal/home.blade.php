@extends('layouts.normal.main')

@section('css')

<link href="{{ asset('epaper/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('epaper/js/highslide/highslide.css') }}" rel="stylesheet">

@endsection

@section('content')

            
<p class="text-center p-1">
    <i class="fas fa-calendar-alt"></i> &nbsp; {{ $bedate }}, &nbsp;{{ $bdate['0'] }} {{ $bdate['1'] }}
    {{ $bdate['2'] }}, &nbsp;{{ $edate }}

</p>
<div class="container-fluid">

    <div class="text-center mb-2">
        @include('layouts.common.advertisement.hbanner')
    </div>

    <div class="text-center mt-5 mb-5">
       
        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" method="POST" id="projectform" action="{{ route('search.home') }}" enctype="multipart/form-data">
            @include('layouts.common.component.search')
        </form>
    </div>

    <div class="row">

       
        <div class="col-xs-0 col-sm-0 col-md-8 col-lg-8 col-xl-8 mt-3">
            @if(!empty($headImage->pic_location))
            <a href="{{ url($headImage->pic_location) }}" class="highslide" onclick="return hs.expand(this)">
            <img class="img-fluid" src="{{ url($headImage->pic_location) }}">
            </a>
            @else
            <p>Sorry No data Found</p>
            @endif



            <div class="highslide-gallery">
                <div class="grid">
                  <div class="grid-sizer"></div>

                  <div class="grid-item"></div>

                  {{--  @foreach ($data as $picture)

                  <div class="grid-item">

                    <a href="{{ url($picture->pic_location) }}" class="highslide" onclick="return hs.expand(this)">
                                <img src="{{ url($picture->pic_location) }}" alt="Highslide JS"
                                    title="Click to enlarge" />
                        </a>
                  </div>

                  @endforeach  --}}
                 
                 
                  @foreach ($data as $picture)

                  <div class="grid-item grid-item--{{ $picture->colsize }}">
                  {{--  <div class="grid-item grid-item">  --}}

                    <a href="{{ url($picture->pic_location) }}" class="highslide" onclick="return hs.expand(this)">
                                <img src="{{ url($picture->pic_location) }}" alt="Highslide JS"
                                    title="Click to enlarge" />
                        </a>
                  </div>

                  @endforeach


                </div>
                </div>

            



                

        </div>

        <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4 col-xl-4">

            <div class="text-center">
                @include('layouts.common.advertisement.normaladd')
            </div>

        </div>

    </div>



        <div class=" mt-5 float-left">
            {{ $data->links() }}
        </div>
        <input type="hidden" id="url" value="{{ url('epaper/js/highslide/graphics/') }}">

        <div class="text-center mt-5">
            @include('layouts.common.advertisement.footer')
        </div>
</div>

@endsection


@section('script')

<script src="{{ asset('epaper/js/highslide/highslide-with-gallery.min.js') }}" ></script>
<script src="{{ asset('epaper/js/masonry.js') }}" ></script>

<script type="text/javascript">


$(document).ready(function() {



});


</script>

<script type="text/javascript">

    var url = $('#url').val();
    hs.graphicsDir = url+'/';

    // hs.graphicsDir = 'http://127.0.0.1:8000/epaper/js/highslide/graphics/';

    hs.align = 'center';
    hs.transitions = ['expand', 'crossfade'];
    hs.outlineType = 'rounded-white';
    hs.wrapperClassName = 'controls-in-heading';
    hs.fadeInOut = true;
    //hs.dimmingOpacity = 0.75;

    // Add the controlbar
    if (hs.addSlideshow) hs.addSlideshow({
        //slideshowGroup: 'group1',
        interval: 5000,
        repeat: false,
        useControls: true,
        fixedControls: false,
        overlayOptions: {
            opacity: 1,
            position: 'top right',
            hideOnMouseOut: false
        }
    });
</script>

<script type="text/javascript">
    $( document ).ready(function() {


// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer',
   // columnWidth: 200
    // horizontalOrder: true
});


// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
$grid.masonry();
});


});
</script>


@endsection
