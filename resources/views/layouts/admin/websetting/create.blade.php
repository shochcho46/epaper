
@extends('layouts.admin.main')

@section('content')
<div class="container">

    <div class="row mb-3">



        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

              <form method="POST" action="{{ route('web.store') }}"  enctype="multipart/form-data">


                        <div class="card">

                            <h5 class="card-header primary-color white-text text-center py-4">
                                <strong>Bus365 Data</strong>
                            </h5>



                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                    @csrf

                                    <div class="form-group">

                                        <div class="col-12">
                                            <label for="logolocation" class="form-label">Image Logo</label>
                                            <div id="logolocation"></div>
                                    
                                          </div>
                                    
                                    </div>

                                    @if($errors->has('logo_location'))
                                    <div class="error text-danger m-2">{{ $errors->first('logo_location') }}</div>
                                    @endif

                                    <div class="md-form">
                                        <input type="text" id="logo_text" name="logo_text" placeholder="Text Logo" value="{{ old('logo_text') }}"  class="form-control">
                                        <label for="logo_text">Text Logo</label>
                                    </div>
                                    @if($errors->has('logo_text'))
                                    <div class="error text-danger m-2">{{ $errors->first('logo_text') }}</div>
                                    @endif


                                    <div class="form-group">

                                        <div class="col-12">
                                            <label for="favlogo" class="form-label">Fav Icone</label>
                                            <div id="favlogo"></div>
                                    
                                          </div>
                                    
                                    </div>

                                    @if($errors->has('fav_location'))
                                    <div class="error text-danger m-2">{{ $errors->first('fav_location') }}</div>
                                    @endif


                                    <select class="mdb-select md-form" name="language">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="bangla">Bangla</option>
                                        <option value="english">English</option>
                                        <option value="france">France</option>
                                      </select>


                                      @if($errors->has('language'))
                                      <div class="error text-danger m-2">{{ $errors->first('language') }}</div>
                                      @endif


                                    <div class="md-form">
                                        <input type="text" id="picperpage" name="picperpage" placeholder="News Per Page" value="{{ old('picperpage') }}"  class="form-control" required>
                                        <label for="picperpage">News Per Page</label>
                                    </div>
                                    @if($errors->has('picperpage'))
                                    <div class="error text-danger m-2">{{ $errors->first('picperpage') }}</div>
                                    @endif   
                                   


                                    <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">SUBMIT</button>

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

$(document).ready(function() {
       
});

    $(function(){

        $("#logolocation").spartanMultiImagePicker({
            fieldName:        'logo_location',
            maxCount:         1,
            rowHeight:        '150px',
            groupClassName:   'col-md-12 col-sm-12 col-xs-12',
            allowedExt:       'png|jpg|ico|jpeg|web',
            maxFileSize:      '6000000',

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

    $(function(){

        $("#favlogo").spartanMultiImagePicker({
            fieldName:        'fav_location',
            maxCount:         1,
            rowHeight:        '50px',
            groupClassName:   'col-md-12 col-sm-12 col-xs-12',
            maxFileSize:      '6000000',

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
