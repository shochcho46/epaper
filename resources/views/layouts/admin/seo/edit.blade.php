@extends('layouts.admin.main')

@section('content')
<div class="container">

    <div class="row mb-3">



        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

              <form method="POST" action="{{ route('seo.update',$data->id) }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                        <div class="card">

                            <h5 class="card-header primary-color white-text text-center py-4">
                                <strong>Bus365 Data</strong>
                            </h5>



                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                    @csrf


                                    <div class="md-form">
                                        <input type="text" id="keyword" name="keyword" placeholder="keywords" value="{{ old('keyword') ?? $data->keyword }}" required  class="form-control">
                                        <label for="keyword">Kyewords</label>
                                    </div>
                                    @if($errors->has('keyword'))
                                    <div class="error text-danger m-2">{{ $errors->first('keyword') }}</div>
                                    @endif

                                    <div class="md-form mb-4">
                                        <label for="description">Description  :</label>
                                        <textarea  type="text" class="md-textarea form-control"  name="description" placeholder="Web Description"  required minlength="3">{{ old('description') ?? $data->description }}</textarea>
                                      </div>
                                      @if($errors->has('description'))
                                      <div class="error text-danger m-2">{{ $errors->first('description') }}</div>
                                      @endif

                                    <div class="md-form">
                                        <input type="text" id="title" name="title" placeholder="Title" value="{{ old('title') ?? $data->title }}" required  class="form-control">
                                        <label for="title">Title</label>
                                    </div>
                                    @if($errors->has('title'))
                                    <div class="error text-danger m-2">{{ $errors->first('title') }}</div>
                                    @endif


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





$(document).ready(function() {


      });


</script>

@endsection

