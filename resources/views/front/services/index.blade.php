@extends('front.master')
@section('title', 'inc_services')
@section('body')

<!-- Start of breadcrumb section
	============================================= -->
	<section id="in-breadcrumb" class="in-breadcrumb-section">
		<div class="in-breadcrumb-content position-relative"  data-background="assets/img/bg/error-bg.jpeg">
			<div class="background_overlay"></div>
			<div class="container">
				<div class="in-breadcrumb-title-content position-relative headline ul-li">
					<h2> Services  </h2>
					<ul>
						<li><a href="/">Home</a></li>
						<li class="active-page">Services </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of Service section
	============================================= -->
	@unless(count($services) == 0)
	@foreach($services as $service )
	<section id="in-service-page-service-1" class="in-service-page-service-section-1">
		<div class="container">
			<div class="in-service-content-3">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="in-service-item-3 position-relative">
							<div class="inner-text headline pera-content">
								<h3><a href="{{ route('services.show', ['serviceSlug' => $service->slug]) }}">{{ ucfirst($service->name) }}</a></h3>
								<p>{{ucfirst($service->details)}}.</p>
							</div>
							<div class="inner-icon-btn d-flex align-items-center justify-content-between">
								<div class="inner-icon">
									<i class="flaticon-home-insurance"></i>
								</div>
								<div class="inner-btn">
									<a class="d-flex align-items-center justify-content-center" href="#"><i class="far fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endforeach
@else
<p>No services found</p>
@endunless				
<!-- End of Service section
	============================================= -->

<!-- Start of Cta Contact section
	============================================= -->
	<section id="in-cta-contact" class="in-cta-contact-section position-relative" data-background="assets/img/bg/ct-c.jpg">
		<div class="container">
			<div class="in-cta-contact-content-3 position-relative">
				<div class="in-get-quote-form-area">
					<div class="in-get-quote-btn">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="home" aria-selected="true">Personal</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab" aria-controls="profile" aria-selected="false">Business</button>
							</li>
						</ul>
					</div>
					<div class="in-contact-tab-area">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane animated fadeInUp show active" id="personal" role="tabpanel" aria-labelledby="home-tab">
								<div class="in-contact-form-title-area">
									<div class="form-title headline pera-content">
										<h3>Personal insurance</h3>
										<p>Get zip code to compare Home insurance</p>
									</div>
									<div class="in-contact-form">
										<form action="#" method="get">
											<input type="text" name="name" placeholder="Name">
											<input type="email" name="email" placeholder="Email">
											<div class="in-insurance-type in-select position-relative">
												<select>
													<option value="#">Home insurance</option>
													<option value="#">Business insurance</option>
													<option value="#">Life insurance</option>
													<option value="#">Motorcycle insurance</option>
													<option value="#">Renters insurance</option>
													<option value="#">Recreational insurance</option>
													<option value="#">Umbrella insurance</option>
													<option value="#">Disability insurance</option>
													<option value="#">Liability insurance</option>
												</select>
											</div>
											<button type="submit">Get This Service Now</button>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane animated fadeInUp" id="business" role="tabpanel" aria-labelledby="home-tab">
								<div class="in-contact-form-title-area">
									<div class="form-title headline pera-content">
										<h3>Business insurance</h3>
										<p>Get zip code to compare Home insurance</p>
									</div>
									<div class="in-contact-form">
										<form action="#" method="get">
											<input type="text" name="name" placeholder="Name">
											<input type="email" name="email" placeholder="Email">
											<div class="in-insurance-type in-select position-relative">
												<select>
													<option value="#">Home insurance</option>
													<option value="#">Business insurance</option>
													<option value="#">Life insurance</option>
													<option value="#">Motorcycle insurance</option>
													<option value="#">Renters insurance</option>
													<option value="#">Recreational insurance</option>
													<option value="#">Umbrella insurance</option>
													<option value="#">Disability insurance</option>
													<option value="#">Liability insurance</option>
												</select>
											</div>
											<button type="submit">Get This Service Now</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="in-video-play-btn position-absolute">
					<a class="video_box d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=yh7QbUxOApY"><i class="fas fa-play"></i>
						<span class="video_btn_border border_wrap-1"></span>
						<span class="video_btn_border border_wrap-2"></span>
						<span class="video_btn_border border_wrap-3"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="in-cta-info-2 position-absolute wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1000ms" data-background="assets/img/bg/cta-bg3.jpeg">
			<div class="in-cta-info-item d-flex">
				<div class="inner-icon">
					<img src="assets/img/about/call.png" alt="">
				</div>
				<div class="inner-text headline">
					<h3>Facing any problem to get a quote!</h3>
					<span>Call: 1.888.255.4364</span>
				</div>
			</div>
		</div>
	</section>		
<!-- End of Cta Contact section
	============================================= -->

<!-- Start of Price section
	============================================= -->
	<section id="in-price" class="in-price-section">
		<div class="container">
			<div class="in-section-title-2 in-title-wrap text-center headline pera-content">
				<div class="sub-title text-uppercase">
					Pricing Plan 
				</div>
				<h2>Choose Your Price Plans </h2>
				<p>The prices (X, Y, Z) and specific coverage details would need to be determined based on various factors including the insurance company's pricing model, the insured individual's personal information, and regional regulations. It's also advisable to consult with an insurance agent to tailor the plan to specific needs and circumstance
				</p>
			</div>
			<div class="in-price-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="in-price-inner-items text-center">
							<div class="pricing-title-price-area headline">
								<h2>Basic Plan:</h2>
								<h3><sup>$</sup>50.99</h3>
								<span>Per Month</span>
							</div>
							<div class="pricing-list-btn position-relative">
								<div class="pricing-list ul-li-block">
									<ul>
										<li>Invoices/Estimates</li>
										<li>20 Workers</li>
										<li>4 Engineers</li>
										<li>8 Months Support</li>
										<li>Limited Servise</li>
									</ul>
								</div>
								<div class="price-btn">
									<div class="in-btn-1">
										<a href="#">Choose Plan</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="in-price-inner-items text-center">
							<div class="pricing-title-price-area headline">
								<h2>Standard Plan:</h2>
								<h3><sup>$</sup>70.99</h3>
								<span>Per Month</span>
							</div>
							<div class="pricing-list-btn position-relative">
								<div class="pricing-list ul-li-block">
									<ul>
										<li>Invoices/Estimates</li>
										<li>20 Workers</li>
										<li>4 Engineers</li>
										<li>8 Months Support</li>
										<li>Limited Servise</li>
									</ul>
								</div>
								<div class="price-btn">
									<div class="in-btn-1">
										<a href="#">Choose Plan</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="in-price-inner-items text-center">
							<div class="pricing-title-price-area headline">
								<h2>Premium Plan:</h2>
								<h3><sup>$</sup>90.99</h3>
								<span>Per Month</span>
							</div>
							<div class="pricing-list-btn position-relative">
								<div class="pricing-list ul-li-block">
									<ul>
										<li>Invoices/Estimates</li>
										<li>20 Workers</li>
										<li>4 Engineers</li>
										<li>8 Months Support</li>
										<li>Limited Servise</li>
									</ul>
								</div>
								<div class="price-btn">
									<div class="in-btn-1">
										<a href="#">Choose Plan</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Price section
	============================================= -->			
@endsection