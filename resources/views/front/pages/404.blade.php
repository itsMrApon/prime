@extends('front.master')
@section('title', '404')
@section('body')
{{-- !-- Start of breadcrumb section
	============================================= --> --}}
	<section id="in-breadcrumb" class="in-breadcrumb-section">
		<div class="in-breadcrumb-content position-relative"  data-background="assets/img/bg/error-bg.jpg">
			<div class="background_overlay"></div>
			<div class="container">
				<div class="in-breadcrumb-title-content position-relative headline ul-li">
					<h2>404 Error </h2>
					<ul>
						<li><a href="#">Home</a></li>
						<li class="active-page">404</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of error  section
	============================================= -->
	<section id="in-error" class="in-error-section">
		<div class="container">
			<div class="in-error-content text-center">
				<div class="in-error-img">
					<img src="assets/img/about/404.png" alt="">
				</div>
				<div class="in-error-text headline pera-content">
					<h2>Page Not Found!</h2>
					<p>We are sorry to say that our page is not found!</p>
					<div class="in-btn-1">
						<a href="#">Go Home</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of error section
	============================================= -->		
@endsection