@extends('front.master')
@section('title', 'insurance calculator')
@section('body')
<!-- Start of breadcrumb section
	============================================= -->
	<section id="in-breadcrumb" class="in-breadcrumb-section">
		<div class="in-breadcrumb-content position-relative"  data-background="assets/img/bg/error-bg.jpg">
			<div class="background_overlay"></div>
			<div class="container">
				<div class="in-breadcrumb-title-content position-relative headline ul-li">
					<h2>Insurance Calculator </h2>
					<ul>
						<li><a href="#">Home</a></li>
						<li class="active-page">Insurance Calculator</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of insurance calculator section
	============================================= -->
	<section id="in-insurance-calculator" class="in-insurance-calculator-section">
		<div class="container">
			<div class="in-insurance-calculator-content position-relative">
				<div class="row"> 
					<div class="col-lg-5">
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
												<h3>Personal Insurence</h3>
												<p>Get zip code to compare Home insurance</p>
											</div>
											<div class="in-contact-form">
												<form action="#" method="get">
													<input type="text" name="name" placeholder="Insurence Amount ( month )">
													<div class="in-insurance-type in-select position-relative">
														<select>
															<option value="#">Year of Insurance</option>
															<option value="#">2 Years</option>
															<option value="#">3 Years</option>
															<option value="#">4 Years</option>
															<option value="#">5 Years</option>
														</select>
													</div>
													<div class="in-insurance-type in-select position-relative">
														<select>
															<option value="#">Property Type</option>
															<option value="#">Life Insurance</option>
															<option value="#">Health Insurance</option>
															<option value="#">Home Insurance</option>
															<option value="#">Car Insurance</option>
														</select>
													</div>
													<button type="submit">Get a Quote Now</button>
												</form>
											</div>
										</div>
									</div>
									<div class="tab-pane animated fadeInUp" id="business" role="tabpanel" aria-labelledby="home-tab">
										<div class="in-contact-form-title-area">
											<div class="form-title headline pera-content">
												<h3>Business Insurence</h3>
												<p>Get zip code to compare Home insurance</p>
											</div>
											<div class="in-contact-form">
												<form action="#" method="get">
													<input type="text" name="name" placeholder="Insurence Amount ( month )">
													<div class="in-insurance-type in-select position-relative">
														<select>
															<option value="#">Year of Insurance</option>
															<option value="#">2 Years</option>
															<option value="#">3 Years</option>
															<option value="#">4 Years</option>
															<option value="#">5 Years</option>
														</select>
													</div>
													<div class="in-insurance-type in-select position-relative">
														<select>
															<option value="#">Property Type</option>
															<option value="#">Credit Insurance</option>
															<option value="#">Transport Insurance</option>
															<option value="#">Energy Insurance</option>
															<option value="#">Employee Insurance</option>
														</select>
													</div>
													<button type="submit">Get a Quote Now</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="in-insurance-calculator-text headline pera-content">
							<div class="in-insurance-calculator-title">
								<h3>Car Insurance Calculator</h3>
								<p>we denounce with  tion and dislike men</p>
							</div>
							<div class="in-insurance-category pera-content">
								<p>On the other hand we denounce with righteous indigna tion and dislike men who are so beguiled</p>
								<div class="insurance-price">
									$1826<sub>/per year</sub>
								</div>
							</div>
							<div class="in-insurance-category pera-content">
								<p>On the other hand we denounce with righteous indigna tion and dislike men who are so beguiled</p>
								<div class="insurance-price">
									$1826<sub>/per year</sub>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of insurance calculator section
	============================================= -->	
@endsection