@extends('layouts.admin.main')

@section('content')
 <div class="container">

    <div class="row">


    

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            @include('layouts.common.message.message')



                 <form method="POST" action="{{ route('social.store') }}">
                    @csrf

           
                        <div class="card">

                            <h5 class="card-header primary-color white-text text-center py-4">
                                <strong>ADD SOCIAL NETWORK</strong>
                            </h5>

                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                    <div class="md-form ">
                                    <select name ="name" class="mdb-select colorful-select dropdown-primary" searchable="Search here.." required>
                                        <option value="" disabled selected>Social Network</option>

                                                <option value="facebook">Facebook</option>
                                                <option value="whatsapp">Whatsapp</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="twitter">Twitter</option>
                                                <option value="linkedin">Linkedin</option>
                                                <option value="youtube">Youtube</option>
                                                
                                        
                                    </select>
                                    <label class="mdb-main-label">Social Network</label>
                                    </div>

                                    @if($errors->has('name'))
                                    <div class="error text-danger m-2">{{ $errors->first('name') }}</div>
                                    @endif

                                    <div class="md-form mt-3">
                                        <input type="text" id="link" name="link"  placeholder="www.xxxxxxx.com" value="{{ old('link') }}"required class="form-control">
                                        <label for="link">Web Link</label>
                                    </div>
                                    @if($errors->has('link'))
                                        <div class="error text-danger m-2">{{ $errors->first('link') }}</div>
                                    @endif

                               

                                    <!-- Sign in button -->
                                    <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">SUBMIT</button>

                                </form>
                                <!-- Form -->

                            </div>

                        </div>
                        <!-- Material form subscription -->


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

