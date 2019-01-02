<!DOCTYPE html>
<html>
<head>
	<title>Laravel Ecommerce Project</title>
	@include('frontend.partials.styles')
</head>
<body>

	<div class="wrapper">
<!-- Navigation -->
		@include('frontend.partials.nav')
<!-- End Of Navbar Part -->

      @yield('content')

          </div>
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  

  @include('frontend.partials.footer')

	</div>


    @include('frontend.partials.scripts')
</body>
</html>