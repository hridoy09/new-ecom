
@extends('frontend.layouts.app')
@section('content')
	<!--main area-->

    <main id="main"  class="left-sidebar">
		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">Wishlist</a></li>

				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="#" class="banner-link">
							<figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
						</a>
					</div>


					<div class="row">

						<ul class="product-list grid-products equal-container">


                                {{-- @foreach ($products as $product)


							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{ route('user.details',$product->id) }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="{{ asset('') }}{{$product->image  }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="{{ route('user.details',$product->id) }}" class="product-name"><span>{{ $product->title }}</span></a>
										<div class="wrap-price"><span class="product-price">{{$product->price  }}</span></div>
										<a href="#" class="btn add-to-cart">Add To Cart</a>
									</div>
								</div>
							</li>
                            @endforeach --}}


						</ul>

					</div>

					<div class="wrap-pagination-info">
						{{-- {{ $products->links() }} --}}
					</div>
				</div><!--end main products area-->



			</div><!--end row-->

		</div><!--end container-->

    </main>
	<!--main area-->

@endsection
