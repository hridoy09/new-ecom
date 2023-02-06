
@extends('frontend.layouts.master')
@section('panel')
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
@include('frontend.partials.header')

	<main id="main"  class="main-site left-sidebar">
@yield('content')

	</main>

@include('frontend.partials.footer')

@endsection

