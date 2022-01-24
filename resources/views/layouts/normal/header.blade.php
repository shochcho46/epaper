<!-- Navbar -->

<nav class="navbar fixed-top navbar-expand-lg  scrolling-navbar double-nav grey lighten-5">



@if ($websetting->logo_location)
<a class="navbar-brand ml-2 mr-auto text-dark" href="#"><img class="" src="{{ url($websetting->logo_location) }}" alt="$websetting->logo_text" width="100"></a> 
@elseif($websetting->logo_text)
<a class="navbar-brand ml-2 mr-auto text-dark" href="#"><b><i>{{ $websetting->logo_text }}</i></b></a> 
@else
<a class="navbar-brand ml-2 mr-auto text-dark" href="#"><b><i>{{ $websetting->logo_text }}</i></b></a> 
@endif
    




   


    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

      <!-- Dropdown -->

      <li class="nav-item">
        <a class="nav-link waves-effect text-dark" href ="{{ route('normal.signup') }}"><i class="mdi mdi-dark mdi-18px mdi-account-plus"></i> <span class="clearfix d-none d-sm-inline-block">Sign Up</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect text-dark" href = "{{ route('normal.login') }}"><i class="mdi mdi-dark mdi-18px mdi-login "></i> <span class="clearfix d-none d-sm-inline-block">Login</span></a>
      </li>

    </ul>
    <!--/Navbar links-->
  </nav>
  <!-- /.Navbar -->
