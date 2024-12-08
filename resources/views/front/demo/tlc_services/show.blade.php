@extends('front.master')
@section('title', 'Service Details')
@section('body')


<!-- End of breadcrumb section
	============================================= -->
<h2>this need some space</h2>
<!-- Start of Service Details  section
	============================================= -->
	<section id="in-service-details" class="in-service-details-seection">
		<div class="container">
			<div class="in-service-details-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="in-service-details-img">
							<img src="assets/img/bg/ser-d.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="in-service-details-text-area">
							<div class="in-service-title-text">
								<div class="in-section-title-2 headline">
									<div class="sub-title text-uppercase">
										What We Offer
									</div>
									<h2>{{ $tlc_service['name'] }} </h2>
								</div>
								<div class="in-service-title-desc">
									{{$tlc_service['discrption']}}
								</div>
							</div>
							<div class="in-service-details-list ul-li-block">
								<ul>
									<li>{{$tlc_service['qoute1']}}</li>
									<li>{{$tlc_service['qoute2']}}</li>
									<li>{{$tlc_service['qoute3']}}</li>
									<li>{{$tlc_service['qoute4']}}</li>
									<li>{{$tlc_service['qoute5']}}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Service Details section
	============================================= -->

<!-- Start of Benefit section
	============================================= -->
	<section id="in-benefit" class="in-benefit-section position-relative">
		<div class="container">
			<div class="in-benefit-content">
				<div class="row">
					<div class="col-lg-5">
						<div class="in-benefit-text">
							<div class="in-section-title-2 headline wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
								<div class="sub-title text-uppercase">
									your Benifit
								</div>
								<h2>{{$tlc_service['benifits']}}</h2>
							</div>
							<div class="in-about-text-area-1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
								{{$tlc_service['discrption2']}}
							</div>
							<div class="in-btn-2 position-relative wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
								<a href="#">Get Started Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-7 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
						<div class="in-benefit-img d-flex justify-content-end">
							<img src="assets/img/about/bn.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="in-benefit-feature">
				<div class="row">
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="in-benefit-feature-item position-relative">
							<span class="serial position-absolute">01</span>
							<div class="inner-icon">
								<i class="flaticon-privacy-policy"></i>
							</div>
							<div class="inner-text headline">
								<h3>Expert Support</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
						<div class="in-benefit-feature-item position-relative">
							<span class="serial position-absolute">02</span>
							<div class="inner-icon">
								<i class="flaticon-insurance-1"></i>
							</div>
							<div class="inner-text headline">
								<h3>Money Saving</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
						<div class="in-benefit-feature-item position-relative">
							<span class="serial position-absolute">03</span>
							<div class="inner-icon">
								<i class="flaticon-family-insurance"></i>
							</div>
							<div class="inner-text headline">
								<h3>Get flexibility</h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
						<div class="in-benefit-feature-item position-relative">
							<span class="serial position-absolute">04</span>
							<div class="inner-icon">
								<i class="flaticon-family"></i>
							</div>
							<div class="inner-text headline">
								<h3>Trusted Protection</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>								
<!-- End of Benefit section
	============================================= -->

<!-- Start of CTA section
	============================================= -->
	<section id="in-cta-2" class="in-cta-section-2">
		<div class="jarallax  position-relative"  data-background="assets/img/bg/cta2.jpg">
			<div class="background_overlay"></div>
			<div class="container">
				<div class="in-cta-content-2 position-relative">
					<div class="in-cta-text-btn-group wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="in-section-title-2 headline">
							<h2>Need Insurence Consultent
							or Find an agent</h2>
						</div>
						<div class="in-cta-btn-grp d-flex">
							<div class="in-btn-2 position-relative">
								<a href="#">Delowar Hossain</a>
							</div>
							<div class="in-btn-2 position-relative">
								<a href="#">Kamrun Bithi</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="in-cta-info-2 position-absolute wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1000ms" data-background="assets/img/bg/cta-bg.png">
				<div class="in-cta-info-item d-flex">
					<div class="inner-icon">
						<img src="assets/img/about/call.png" alt="">
					</div>
					<div class="inner-text headline">
						<h3>Facing any problem to get a quote!</h3>
						<span>Call: 917-745-0549 / 347-400-7830 / 934-444-61475</span>
					</div>
				</div>
			</div>
		</div>
	</section>	
<!-- End of CTA section
	============================================= -->	

<!-- Start of Why Choose section
	============================================= -->
	<section id="in-why-choose-2" class="in-why-choose-section-2" data-background="assets/img/bg/wc-bg.jpg">
		<div class="container">
			<div class="in-portfolio-top-content-2 d-flex flex-wrap align-items-center justify-content-between">
				<div class="in-section-title-2 headline wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
					<div class="sub-title text-uppercase">
						Why Choose 
					</div>
					<h2>Discover PrimeOne Insurence
					Restoration Works</h2>
				</div>
				<div class="in-portfolio-title-text wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1000ms">
					Choosing our auto insurance isn't just a smart decision – it's a commitment to unmatched protection and unparalleled service. Here's why you should choose us 
				</div>
			</div>
			<div class="in-why-choose-content-2">
				<div class="row">
					<div class="col-lg-6">
						<div class="in-why-choose-img-text">
							<div class="in-why-choose-img-area">
								<div class="row">
									<div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
										<div class="in-why-choose-img">
											<img src="assets/img/about/wc2.jpeg" alt="">
										</div>
										<div class="in-why-choose-text-wrap">
											<div class="in-why-choose-text d-flex align-items-center">
												<div class="inner-icon">
													<img src="assets/img/about/wc-icon.png" alt="">
												</div>
												<div class="inner-text">
													Strategy & Planning
												</div>
											</div>
											<div class="in-why-choose-text d-flex align-items-center">
												<div class="inner-icon">
													<img src="assets/img/about/wc-icon.png" alt="">
												</div>
												<div class="inner-text">
													Audit & Evaluation
												</div>
											</div> 
										</div>
									</div>
									<div class="col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
										<div class="in-why-choose-img">
											<img src="assets/img/about/wc3.jpeg" alt="">
										</div>
										<div class="in-why-choose-text-wrap">
											<div class="in-why-choose-text d-flex align-items-center">
												<div class="inner-icon">
													<img src="assets/img/about/wc-icon.png" alt="">
												</div>
												<div class="inner-text">
													Finance Services
												</div>
											</div>
											<div class="in-why-choose-text d-flex align-items-center">
												<div class="inner-icon">
													<img src="assets/img/about/wc-icon.png" alt="">
												</div>
												<div class="inner-text">
													Consumer Markets
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="in-btn-2 position-relative wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
								<a href="#">Get Started Now</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="in-why-choose-faq">
							<div class="accordion" id="accordionExample2">
								<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
									<h2 class="accordion-header" id="headingOne2">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
											Ensuring Operational Safety?
										</button>
									</h2>
									<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											When it comes to auto insurance, the choice is clear. Choose us for unmatched protection, unbeatable service, and unwavering peace of mind. 
										</div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
									<h2 class="accordion-header" id="headingTwo2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
											Transparency and Trust? 
										</button>
									</h2>
									<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											We believe in transparency and honesty in everything we do. You can trust us to provide clear, straightforward information and advice, so you can make informed decisions with confidence.  
										</div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
									<h2 class="accordion-header" id="headingThree2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
											Commitment to Excellence? 
										</button>
									</h2>
									<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											We're committed to excellence in everything we do, from the quality of our coverage to the professionalism of our service. When you choose us, you're choosing a partner who will go above and beyond to exceed your expectations.
										</div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											Customer-Centric Approach? 
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											OAt the heart of everything we do is a dedication to our customers. We prioritize your needs above all else, delivering personalized service and tailored solutions to meet your unique requirements.  
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of  Why Choose section
	============================================= -->			

@endsection