@extends('layouts.admin.main')

@section('css')

@endsection

@section('content')
<h1>Dashboard</h1>

<div class="row">

  <div class="col-6">
    <div>
      <canvas id="myChart"></canvas>
    </div>
  </div>

  <div class="col-6">
    <div>
      <canvas id="myChartYears"></canvas>
  </div>
  </div>

</div>


{{--  <div>
  <canvas id="userChart"></canvas>
</div>  --}}

<div class="row">

  <div class="col-12">
   
      <canvas id="userChart"></canvas>
    
  </div>

  

</div>

<br>



  <input class="form-control" type="hidden" id="lable" value="{{ json_encode($monthnamearray) }}" >
  <input class="form-control" type="hidden" id="data" value="{{ json_encode($resultArray)}}" >

  <input class="form-control" type="hidden" id="yearlable" value="{{ json_encode($yearArray) }}" >
  <input class="form-control" type="hidden" id="yeardata" value="{{ json_encode($yearResultArray)}}" >

  <input class="form-control" type="hidden" id="userlable" value="{{ json_encode($userArray) }}" >
  <input class="form-control" type="hidden" id="userdata" value="{{ json_encode($userResultArray)}}" >

@endsection


@section('subscript')

<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/chartcreate.js') }}"></script>

<script type="text/javascript">

$(document).ready(function() {


 

});


</script>


@endsection
