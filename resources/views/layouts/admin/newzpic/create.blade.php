
@extends('layouts.admin.main')

@section('content')
<div class="container">

    <div class="row mb-3">



        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

              <form method="POST" action="{{ route('newzpic.store') }}"  enctype="multipart/form-data">


                        <div class="card">

                            <h5 class="card-header primary-color white-text text-center py-4">
                                <strong>Bus365 Images</strong>
                            </h5>



                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                    @csrf

                                    @include('layouts.common.imagepicker.imagepicker')

                                    @if($errors->has('pic_location'))
                                    <div class="error text-danger m-2">{{ $errors->first('pic_location') }}</div>
                                    @endif

                                    <div class="md-form">


                                        <input placeholder="Selected date" type="text" id="date-picker-example"  name="showdate" class="form-control  datepicker" required>

                                        <label for="date-picker-example">Show date</label>
                                    </div>


                                    @if($errors->has('showdate'))
                                    <div class="error text-danger m-2">{{ $errors->first('showdate') }}</div>
                                    @endif

                                    <div class="md-form">
                                        <input type="number" id="serial" name="serial" placeholder="Serial" value="{{ old('serial') }}" required min="1" class="form-control">
                                        <label for="serial">Serial</label>
                                    </div>
                                    @if($errors->has('serial'))
                                    <div class="error text-danger m-2">{{ $errors->first('serial') }}</div>
                                    @endif



                                    <input type="hidden"  name="user_id"  value="{{ Auth::id() }}" required  class="form-control">


                                    <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">SUBMIT</button>

                                </form>


                            </div>

                        </div>



        </div>





</div>


 </div>





@endsection


@section('subscript')

<script type="text/javascript">

$(document).ready(function() {
        $('.mdb-select').materialSelect();

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
