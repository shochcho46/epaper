 <!-- Sidebar navigation -->
 <div id="slide-out" class="side-nav blue  primary-color fixed">
    <ul class="custom-scrollbar">
      <!-- Logo -->
      <li class="logo-sn waves-effect py-4">
        <div class="text-center">
          <a href="#" class="pl-0">
              <img src="{{url(Auth::user()->location)  }}" class="rounded-circle" height="80px">
            </a>

        </div>
      </li>
      <!--/. Logo -->

      <!--Search Form-->
      <li class="">
        <hr>

      </li>
      <!--/.Search Form-->
      <!-- Side navigation links -->
      <li>
        <ul class="collapsible collapsible-accordion">




          <li>
              <a href="{{ route('admin.home') }}" class="collapsible-header waves-effect"><i class="mdi mdi-view-dashboard-variant-outline"></i>
            Dashboards</a>

        </li>




        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-dots-horizontal-circle-outline mr-1"></i>Head Image<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('headimage.create') }}" class="waves-effect">add image</a>
                </li>
                <li><a href="{{ route('headimage.index') }}" class="waves-effect">image list</a>
                </li>
               
              </ul>
            </div>

          </li>

        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-dots-vertical-circle-outline mr-1"></i>News Image<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('newzpic.create') }}" class="waves-effect">add news image</a>
                </li>
                <li><a href="{{ route('newzpic.index') }}" class="waves-effect">news image list</a>
                </li>
                
              </ul>
            </div>

        </li>

       

          @if((Auth::user()->type == "admin")||(Auth::user()->type == "superadmin")||(Auth::user()->type == "subadmin"))

          <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-cast-audio mr-1"></i>Advertisement <i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('advertise.create') }}" class="waves-effect">add advertisement </a>
                </li>
                <li><a href="{{ route('advertise.index') }}" class="waves-effect">advertisement list</a>
                </li>
                
              </ul>
            </div>

          </li>


          <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-web mr-1"></i>Seo <i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('seo.create') }}" class="waves-effect">Seo Setting</a>
                </li>
                
                
              </ul>
            </div>

          </li>

          @if((Auth::user()->type == "admin")||(Auth::user()->type == "superadmin"))
            <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-cog-outline mr-1"></i>Settings <i class="fas fa-angle-down rotate-icon"></i></a>

              <div class="collapsible-body">
                <ul>
                  <li><a href="{{ route('web.create') }}" class="waves-effect">Web Setting</a>
                  </li>
                  <li><a href="{{ route('footer.create') }}" class="waves-effect">Footer Setting</a>
                  </li>
                  
                </ul>
              </div>

            </li>
          @endif

        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-account-tie mr-1"></i> User<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>


                @if((Auth::user()->type == "admin")||(Auth::user()->type == "superadmin"))

                

                <li>
                    <a href="{{ route('admin.usercreate') }}" class="waves-effect">add user</a>
                </li>
                @endif


                <li>
                    <a href="{{ route('admin.getnormaluserlist') }}" class="waves-effect">normal user list</a>
                </li>

                <li>
                    <a href="{{ route('admin.getnormaluserblacklist') }}" class="waves-effect">blacklist user</a>
                </li>

                @if((Auth::user()->type == "admin")||(Auth::user()->type == "superadmin"))

                <li>
                    <a href="{{ route('admin.getsubadminlist') }}" class="waves-effect">subadmin  list</a>
                </li>

                <li>
                    <a href="{{ route('admin.getsubadminblacklist') }}" class="waves-effect">blacklist subadmin</a>
                </li>

                @endif

                @if((Auth::user()->type == "superadmin"))

                <li>
                    <a href="{{ route('admin.getadminlist') }}" class="waves-effect">admin  list</a>
                </li>

                <li>
                    <a href="{{ route('admin.getadminblacklist') }}" class="waves-effect">blacklist admin</a>
                </li>


                @endif



              </ul>
            </div>

          </li>

          @endif


        </ul>
      </li>
      <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong" style=" background: #9933cc;"></div>
  </div>
  <!--/. Sidebar navigation -->
