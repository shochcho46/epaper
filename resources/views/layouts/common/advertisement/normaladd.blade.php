<div class="row mt-3">

    @if(!empty($normaladd))
    @foreach ($normaladd as  $nvalue)
        
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
        <img class="img-fluid" src="{{ url($nvalue->pic_location) }}" alt="Normal Add" height="450px">
    </div>
    @endforeach
    @endif
</div>