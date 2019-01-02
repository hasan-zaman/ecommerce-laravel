@extends('frontend.layouts.master')

@section('content')
<!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">
        <div class="list-group">
           @include('frontend.partials.product-sidebar')
        </div>
      </div>

      <div class="col-md-8">
        <div class="widget">
          <h3>Featured Products</h3>
          <div class="row">

          @foreach ($products as $product)

            <div class="col-md-4">
              <div class="card">

                @php $i = 1; @endphp

                  @foreach ($product->images as $image)
                    @if ($i > 0)
                        <img class="card-img-top feature-img" src="{{ asset('images/products/'. $image->image) }}" alt="Card image" >
                    @endif

                    @php $i--; @endphp
                  @endforeach


                <!-- <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'samsung.jpg') }}" alt="Card image" > -->

                <div class="card-body">
                  <h4 class="card-title"> {{ $product->title }}</h4>
                  <p class="card-text">Taka -  {{ $product->price }}</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>

              </div>
            </div>

           @endforeach 

            
    <!-- End Sidebar + Content -->
@endsection
