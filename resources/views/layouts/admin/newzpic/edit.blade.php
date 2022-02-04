@extends('layouts.admin.main')

@section('content')
<div class="container">

    <div class="row mb-3">



        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

              <form method="POST" action="{{ route('newzpic.update',$data->id) }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                        <div class="card">

                            <h5 class="card-header primary-color white-text text-center py-4">
                                <strong>Bus365 Data</strong>
                            </h5>



                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                    @csrf

                                    @include('layouts.common.imagepicker.imagepicker')

                                    @if($errors->has('pic_location'))
                                    <div class="error text-danger m-2">{{ $errors->first('pic_location') }}</div>
                                    @endif

                                    <div class="md-form">


                                        <input placeholder="Selected date" type="text" id="date-picker-example" value="{{ old('showdate') ?? $data->showdate }}"  name="showdate" class="form-control  datepicker" required>

                                        <label for="date-picker-example">Show date</label>
                                    </div>


                                    @if($errors->has('showdate'))
                                    <div class="error text-danger m-2">{{ $errors->first('showdate') }}</div>
                                    @endif


                                    <select class="mdb-select md-form" name="colsize" required>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="width1" @if($data->colsize == "width1") selected @endif >Column 1</option>
                                        <option value="width2" @if($data->colsize == "width2") selected @endif>Column 2</option>
                                        <option value="width3"  @if($data->colsize == "width3") selected @endif>Column 3</option>
                                        <option value="width4"  @if($data->colsize == "width4") selected @endif>Column 4</option>
                                        <option value="width5"  @if($data->colsize == "width5") selected @endif>Column 5</option>
                                        <option value="width6"  @if($data->colsize == "width6") selected @endif>Column 6</option>
                                        <option value="width7"  @if($data->colsize == "width7") selected @endif>Column 7</option>
                                        <option value="width8"  @if($data->colsize == "width8") selected @endif>Column 8</option>
                                       
                                    </select>


                                      @if($errors->has('colsize'))
                                      <div class="error text-danger m-2">{{ $errors->first('colsize') }}</div>
                                      @endif

                                    <div class="md-form">
                                        <input type="number" id="serial" name="serial" placeholder="Serial" value="{{ old('serial') ?? $data->serial}}" required min="1" class="form-control">
                                        <label for="serial">Serial</label>
                                    </div>
                                    @if($errors->has('serial'))
                                    <div class="error text-danger m-2">{{ $errors->first('serial') }}</div>
                                    @endif



                                    <input type="hidden"  name="user_id"  value="{{ Auth::id() }}">
                                    <input type="hidden"  name="status"  value="{{ $data->status }}">

                                    <input type="hidden"  name="pic_name" id="pic_name"  value="{{ $data->pic_name }}">
                                    <input type="hidden"  name="newzpic" id="newzpic"  value="{{ $data->pic_location }}">
                                    <input type="hidden"  name="oldimgpath" id="oldimgpath"  value="{{ url($data->pic_location) }}">
                                   


                                    <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">UPDATE</button>

                                </form>


                            </div>

                        </div>



        </div>





</div>


 </div>





@endsection


@section('subscript')

{{--  <script src="{{ asset('js/bootstrap.js') }}"></script>  --}}

<script type="text/javascript">

    var imgaepath =  $("#oldimgpath").val();



$(document).ready(function() {
      //  $('.mdb-select').materialSelect();

        $('.datepicker').pickadate({
          selectYears:1000,
          clear: 'effacer',
          format: 'yyyy-mm-dd',
          formatSubmit: 'yyyy-mm-dd',
          editable: true
          });

      });

    $(function(){

        $("#titleimge").spartanMultiImagePicker({
            fieldName:        'pic_location',
            maxCount:         1,
            rowHeight:        '500px',
            groupClassName:   'col-md-12 col-sm-12 col-xs-12',
            maxFileSize:      '60000000',

            placeholderImage: {
            image : imgaepath,
            width :'100%'
            },

            dropFileLabel : "Drop Here",
            onAddRow:       function(index){
                console.log(index);
                console.log('add new row');
            },
            onRenderedPreview : function(index){
                console.log(index);
                console.log('preview rendered');
            },
            onRemoveRow : function(index){
                console.log(index);
            },
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });
    });
</script>

@endsection

