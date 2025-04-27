@extends('frontend.layouts.master')

@section('title','Stret Steredirs || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
		<div class="container">
			<!-- First row - Image on right -->
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="about-content">
						@php
							$settings=DB::table('settings')->get();
						@endphp
						<h3>Welcome To <span>Stret Steredirs </span></h3>
						<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
						<div class="button">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="about-img overlay">
						<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
					</div>
				</div>
			</div>

			<div class="street-striders-banner">
				<h2>Street Straiders</h2>
				<p>"Tidak ke mana-mana tanpa fashion!"</p>
			</div>

			<!-- Second row - Image on left -->
			<div class="row">
				<div class="col-lg-6 col-12 order-lg-2">
					<div class="about-content">
						@php
							$settings=DB::table('settings')->get();
						@endphp
						<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
						<div class="button">
							<a href="{{route('blog')}}" class="btn">Blog kami</a>
							<a href="{{route('contact')}}" class="btn primary">Hubungi kami</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12 order-lg-1">
					<div class="about-img overlay">
						<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Us -->


@endsection
