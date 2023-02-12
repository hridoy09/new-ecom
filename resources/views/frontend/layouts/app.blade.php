
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


@yield('content')



@include('frontend.partials.footer')

@endsection

