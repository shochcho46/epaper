@extends('layouts.admin.main')


@section('content')
 <div class="container">

    <div class="row">


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">


            <form method="POST" action="{{ route('social.update',$data->id) }}">

                @csrf

                @method('PUT')

            <!-- Material form subscription -->
                        <div class="card">

                            <h5 class="card-header primary-color white-text text-center py-4">
                                <strong>EDIT SOCIAL NETWORK</strong>
                            </h5>

                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                <div class="md-form mt-3">
                                    <select name ="name" class="mdb-select colorful-select dropdown-primary" searchable="Search here.." required>
                                        <option value="" disabled selected>Social Network</option>
                                        <option value="facebook" {{ ($data->name == "facebook") ?"selected" : "" }} >Facebook</option>
                                        <option value="whatsapp" {{ ($data->name == "whatsapp") ?"selected" : "" }}>Whatsapp</option>
                                        <option value="instagram" {{ ($data->name == "instagram") ?"selected" : "" }}>Instagram</option>
                                        <option value="twitter" {{ ($data->name == "twitter") ?"selected" : "" }}>Twitter</option>
                                        <option value="linkedin" {{ ($data->name == "linkedin") ?"selected" : "" }}>Linkedin</option>
                                        <option value="youtube" {{ ($data->name == "youtube") ?"selected" : "" }}>Youtube</option>

                                    </select>
                                    <label class="mdb-main-label">Social Network</label>
                                </div>

                                @if($errors->has('name'))
                                <div class="error text-danger m-2">{{ $errors->first('name') }}</div>
                                @endif

                                <div class="md-form mt-3">
                                    <input type="text" id="link" name="link"  placeholder="www.xxxxxxx.com" value="{{ old('link') ?? $data->link  }}"required class="form-control">
                                    <label for="link">Web Link</label>
                                </div>
                                @if($errors->has('link'))
                                    <div class="error text-danger m-2">{{ $errors->first('link') }}</div>
                                @endif


                                    <!-- Sign in button -->
                                    <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">UPDATE</button>

                                </form>
                                <!-- Form -->

                            </div>

                        </div>
                        <!-- Material form subscription -->


        </div>


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>


</div>


 </div>





@endsection

@section('script')
<script type="text/javascript">
 $(document).ready(function() {


    });
</script>
@endsection
