@extends('layouts.admin.main')

@section('content')
<div class="container">

    <div class="row mb-3">



        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

              <form method="POST" action="{{ route('advertise.update',$data->id) }}"  enctype="multipart/form-data">
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


                                    <select class="mdb-select md-form" name="addtype">
                                        <option value="" disabled selected>Choose your option</option>

                                        @if ($data->addtype == "hbanner" )
                                        <option value="hbanner" selected>Head Banner</option>
                                        <option value="fbanner">Footer Banner</option>
                                        <option value="normal" >Normal Addvertise</option>
                                        @elseif($data->addtype == "fbanner" )
                                        <option value="hbanner" >Head Banner</option>
                                        <option value="fbanner" selected>Footer Banner</option>
                                        <option value="normal" >Normal Addvertise</option>
                                        @else
                                        <option value="hbanner" >Head Banner</option>
                                        <option value="fbanner">Footer Banner</option>
                                        <option value="normal" selected>Normal Addvertise</option>
                                        @endif

                                      </select>


                                      @if($errors->has('addtype'))
                                      <div class="error text-danger m-2">{{ $errors->first('addtype') }}</div>
                                      @endif



                                    <input type="hidden"  name="user_id"  value="{{ Auth::id() }}">


                                    <input type="hidden"  name="pic_name" id="pic_name"  value="{{ $data->pic_name }}">
                                    <input type="hidden"  name="addpic" id="addpic"  value="{{ $data->pic_location }}">
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

<script type="text/javascript">

    var imgaepath =  $("#oldimgpath").val();



$(document).ready(function() {
        //$('.mdb-select').materialSelect();

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

