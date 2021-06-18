@extends('frontend.layout.master')

@section('title')
Details -Page
@endsection()

@section('styles')
<link rel="stylesheet" href="{{asset('frontend/css/home-page-style.css')}}">
@endsection()

@section('content')
<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-xl-6 col-lg-6 col-md-6">
			<img src="{{asset('products_img/c2.png')}}" class="d-block mx-auto img-fluid" alt="">
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6">
			<h3>Product Name</h3>
			<h5>Product Price : 2000</h5>
			<p>Product Descriptions</p>
			<a href="#" class="btn btn-primary">Add To Card</a>
		</div>
	</div>
</div>
@endsection()

@section('scripts')

@endsection()