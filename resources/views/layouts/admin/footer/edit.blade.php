@extends('layouts.admin.main')

@section('content')
<div class="container">

    <div class="row mb-3">

        

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.common.message.message')

              <form method="POST" action="{{ route('footer.update',$data->id) }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                        <div class="card">

                            <h5 class="card-header primary-color white-text text-center py-4">
                                <strong>Footer Data</strong>
                            </h5>



                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                    @csrf



                                    <div class="md-form">
                                        <input type="text" id="mobile" name="mobile" placeholder="Mobile" value="{{ old('mobile') ?? $data->mobile}}" required  class="form-control">
                                        <label for="mobile">Mobile</label>
                                    </div>
                                    @if($errors->has('mobile'))
                                    <div class="error text-danger m-2">{{ $errors->first('mobile') }}</div>
                                    @endif

                                    <div class="md-form">
                                        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') ?? $data->email }}" required  class="form-control">
                                        <label for="email">Email</label>
                                    </div>
                                    @if($errors->has('email'))
                                    <div class="error text-danger m-2">{{ $errors->first('email') }}</div>
                                    @endif

                                    <div class="md-form mb-4">
                                        <label for="address">Address  :</label>
                                        <textarea  type="text" class="md-textarea form-control"  name="address" placeholder="Web Description"  required minlength="3">{{ old('address') ?? $data->address }}</textarea>
                                      </div>
                                      @if($errors->has('address'))
                                      <div class="error text-danger m-2">{{ $errors->first('address') }}</div>
                                      @endif


                                    <div class="md-form">
                                        <input type="text" id="other" name="other" placeholder="Other Info" value="{{ old('other') ?? $data->other }}"   class="form-control">
                                        <label for="other">Other Info</label>
                                    </div>
                                    @if($errors->has('other'))
                                    <div class="error text-danger m-2">{{ $errors->first('other') }}</div>
                                    @endif

                                    <div class="md-form">
                                        <input type="text" id="owner" name="owner" placeholder="Owner Name" value="{{ old('owner') ?? $data->owner }}"   class="form-control">
                                        <label for="owner">Owner Name</label>
                                    </div>
                                    @if($errors->has('owner'))
                                    <div class="error text-danger m-2">{{ $errors->first('owner') }}</div>
                                    @endif


                                
                                    <div class="md-form mb-4">
                                        <label for="contact">Owner Contact  :</label>
                                        <textarea  type="text" class="md-textarea form-control"  name="contact" placeholder="Contact"   minlength="3">{{ old('contact') ?? $data->contact }}</textarea>
                                    </div>


                                    @if($errors->has('contact'))
                                    <div class="error text-danger m-2">{{ $errors->first('contact') }}</div>
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

