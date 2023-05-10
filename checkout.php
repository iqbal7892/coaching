<?php require_once('header.php') ?>
<section class="page-title page-checkout-title">
	<div class="container">
		<h1 class="fs-42 text-white">Checkout</h1>
	</div>
</section>
<main class="main">
	<div class="container">
		<div class="content pt-50 pb-100">
			<form class="form-checkout">
				<div class="row mxm-19">
					<div class="col-lg-4 order-lg-2">
						<div class="card checkout-payment-card">
							<div class="card-header">
								<div class="media">
									<span class="icon">
										<img src="assets/check-4.svg" alt="check">
									</span>
									<div class="media-body align-self-center">
										<h2>Standard</h2>
										<p>One-Time Payment $1,550.00<p>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="card-text d-flex">
									<p class="txt-title">Subtotal:</p>
									<div class="ml-auto txt-content"><strong>$1,550.00 <sub>USD</sub></strong></div>
								</div>
								<div class="card-text d-flex">
									<p class="txt-title">Discount:</p>
									<div class="ml-auto txt-content">
										<a href="#coupon12" class="btn-collapse" data-toggle="collapse">
											<svg xmlns="http://www.w3.org/2000/svg" width="14.92" height="14.92" viewBox="0 0 14.92 14.92">
												<defs>
													<style>
														.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px}
													</style>
												</defs>
												<g id="x" transform="rotate(-45 5.763 11.558)">
													<path id="Line_630" d="M7.722 0L0 7.722" class="cls-1" data-name="Line 630" transform="translate(6 6)"/>
													<path id="Line_631" d="M0 0l7.722 7.722" class="cls-1" data-name="Line 631" transform="translate(6 6)"/>
												</g>
											</svg>
										</a>
									</div>
								</div>
								<div id="coupon12" class="collapse mb-20">
									<div class="d-flex">
										<div class="form-group mb-0">
											<input type="text" class="form-control" placeholder="Coupon Code..." name="coupon_code">
										</div>
										<button class="btn btn-success ml-2" type="button">Apply</button>
									</div>
								</div>
								<div class="divider"></div>
								<div class="card-text d-flex date-card-text">
									<p class="txt-title">Due Now:</p>
									<div class="ml-auto txt-content"><strong>$1,550.00 <sub>USD</sub></strong></div>
								</div>
								<div class="divider mb-26"></div>
								<div class="row mxm-md-10">
									<div class="col-12">
										<div class="form-group">
											<label class="control-label" for="card_number">Card Number</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<span><img src="assets/mastercard.svg" alt="matercard"></span>
													</div>
												</div>
												<input type="text" class="form-control pl-0" placeholder="Card Number..." id="card_number" name="card_number">
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label class="control-label" for="month">MM/YY</label>
											<input type="text" class="form-control" placeholder="MM/YY..." id="month" name="month">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label class="control-label" for="cvc">CVC</label>
											<input type="tel" class="form-control" placeholder="CVC..." id="cvc" name="cvc">
										</div>
									</div>
								</div>
								<div class="text-center d-lg-block d-none">
									<button class="btn btn-success btn-round btn-success-shadow" type="submit">Complete my purchase
										<span class="icon ml-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="19.51" height="14.826" viewBox="0 0 19.51 14.826">
												<defs>
													<style>
														.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px}
													</style>
												</defs>
												<g id="arrow-right" transform="translate(1 1.414)">
													<path id="Line_343" d="M0 0h17.51" class="cls-1" data-name="Line 343" transform="translate(0 5.999)"></path>
													<path id="Path_1863" d="M12 5l6 6-6 6" class="cls-1" data-name="Path 1863" transform="translate(-.489 -5)"></path>
												</g>
											</svg>
										</span>
									</button>
								</div>
								<div class="divider d-lg-none mt-1"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="checkout-left">
							<div class="row mxm-19">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="email">Email Address</label>
										<input type="email" class="form-control" placeholder="Email Address..." id="email" name="email">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="phone">Phone Number</label>
										<input type="tel" class="form-control" placeholder="Your Phone Number..." id="phone" name="phone">
									</div>
								</div>
								<div class="col-md-9">
									<div class="form-group">
										<label class="control-label" for="address_1">Address Line 1</label>
										<input type="text" class="form-control" id="address_1" placeholder="Address" name="address_1">
									</div>
								</div>
								<div class="col-md-3 col-10">
									<div class="form-group">
										<label class="control-label" for="address_2">App, Suite, etc</label>
										<input type="text" class="form-control" id="address_2" name="address_2">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="city">City</label>
										<input type="text" class="form-control" id="city" placeholder="City" name="city">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="state">State/Province/Region</label>
										<div class="form-select">
											<div class="caret">
												<svg xmlns="http://www.w3.org/2000/svg" width="13.412" height="7.206" viewBox="0 0 13.412 7.206">
													<defs>
														<style>
															.cls-125{opacity:.7}.cls-126{fill:none;stroke:#0e1a2a;stroke-linecap:round;stroke-linejoin:round}
														</style>
													</defs>
													<g id="arrow-right" class="cls-125" transform="rotate(90 5.999 6.706)">
														<path id="Path_1863" d="M0 0l6 6-6 6" class="cls-126" data-name="Path 1863"/>
													</g>
												</svg>
											</div>
											<select class="form-control" id="state">
												<option>State/Province/Region</option>
												<option>Subject</option>
												<option>Subject</option>
												<option>Subject</option>
												<option>Subject</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-9">
									<div class="form-group">
										<label class="control-label" for="country">Country</label>
										<div class="form-select">
											<div class="caret">
												<svg xmlns="http://www.w3.org/2000/svg" width="13.412" height="7.206" viewBox="0 0 13.412 7.206">
													<defs>
														<style>
															.cls-125{opacity:.7}.cls-126{fill:none;stroke:#0e1a2a;stroke-linecap:round;stroke-linejoin:round}
														</style>
													</defs>
													<g id="arrow-right" class="cls-125" transform="rotate(90 5.999 6.706)">
														<path id="Path_1863" d="M0 0l6 6-6 6" class="cls-126" data-name="Path 1863"/>
													</g>
												</svg>

											</div>
											<select class="form-control" id="country">
												<option>State/Province/Region</option>
												<option>Subject</option>
												<option>Subject</option>
												<option>Subject</option>
												<option>Subject</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-10">
									<div class="form-group">
										<label class="control-label" for="post_code">Zip/Postal Code</label>
										<input type="text" class="form-control" id="post_code" placeholder="Zip/Postal Code" name="post_code">
									</div>
								</div>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox">
									<span class="form-checkmark"></span>
									Subscribe to our email list
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox"> 
									<span class="form-checkmark"></span>
									I have read and agree to the <a href="terms-condition" class="text-link text-success">terms and conditions </a> of this page.
								</label>
							</div>
							<div class="divider d-lg-none my-30"></div>
							<div class="text-center d-lg-none">
								<button class="btn btn-success btn-round btn-success-shadow" type="submit">Complete my purchase
									<span class="icon ml-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="19.51" height="14.826" viewBox="0 0 19.51 14.826">
											<defs>
												<style>
													.cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px}
												</style>
											</defs>
											<g id="arrow-right" transform="translate(1 1.414)">
												<path id="Line_343" d="M0 0h17.51" class="cls-1" data-name="Line 343" transform="translate(0 5.999)"></path>
												<path id="Path_1863" d="M12 5l6 6-6 6" class="cls-1" data-name="Path 1863" transform="translate(-.489 -5)"></path>
											</g>
										</svg>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>	
		</div>
		<div class="divider"></div>
	</div>
</main>
<?php require_once('footer.php') ?>