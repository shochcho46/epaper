<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">{{ $websetting->logo_text ?? env('APP_NAME') }}</h6>
          <p>
            {{ $seo->description ?? env('APP_NAME') }}
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">সম্পাদক ও প্রকাশক</h6>
          <p>
            {{ $footer->owner ?? "Woner Name" }}
          </p>
          <p>
            {{ $footer->contact ?? "Woner Contact" }}
          </p>
          {{--  <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>  --}}
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        {{--  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
        </div>  --}}

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-phone mr-3"></i> {{ $footer->mobile  ?? "01XXXXXXXXX" }}</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> {{ $footer->email ?? "Office Email" }}</p>
          <p>
            <i class="fas fa-marker mr-3"></i> {{ $footer->address  ?? "Office full address" }}</p>
          <p>
            <i class="fas fa-print mr-3"></i> {{ $footer->other  ?? "Some information you may include" }}</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-4">

          <!--Copyright-->
          <p class="text-center text-md-left">© {{ Date('Y') }} Copyright:
            <a href="{{ url('/') }}">
              <strong> {{ $websetting->logo_text ?? env('APP_NAME') }}</strong>
            </a>
          </p>

        </div>


        <div class="col-md-5 col-lg-4">

          <!--Copyright-->
          <p class="text-center text-md-left">powered by:
            <a href="http://www.brainchildbd.xyz/">
              <strong>BRAINCHILDBD</strong>
            </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight">
                  <i class="mdi mdi-facebook mdi-18px"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight ">
                  <i class="mdi mdi-twitter mdi-18px"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight ">
                  <i class="mdi mdi-linkedin mdi-18px"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight">
                  <i class="mdi mdi-instagram mdi-18px"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <!-- Footer -->
