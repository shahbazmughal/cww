@include('includes.header')

	@include('includes.menu')

    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Contact</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Contact us</li>
						</ul>
						<h1>Contact CWW</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->
	<!-- Contact Area Start -->
    <div class="contact__three pb-0 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 lg-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="public/assets/img/icon/call.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Tell With US</h4>
                            <p><a href="tel:+125(895)658568">(516) 825-5634</a></p>
                            <p><a href="tel:+125(874)452645">(516) 825-5661</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 md-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="public/assets/img/icon/email.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Quick Email</h4>
                            <p><a href="mailto:editorial@continentalwhoswho.com">editorial@continentalwhoswho.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="public/assets/img/icon/locations.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Office Location</h4>
                            <p>33 West Hawthorne Avenue <br>Valley Stream, NY 11580</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Contact Area End -->
	<!-- Contact Form Area Start -->
    <div class="contact__three section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="contact__three-left mr-40 xl-mr-0">
                        <div class="contact__three-left-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.569654581897!2d-73.70087029999999!3d40.6614158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c264620af71877%3A0x4119ece99ee38d07!2s33%20W%20Hawthorne%20Ave%2C%20Valley%20Stream%2C%20NY%2011580%2C%20USA!5e0!3m2!1sen!2s!4v1724675610950!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact__three-righ">
                        <div class="contact__three-right-title">
                            <span class="subtitle-one">We want to hear from you!</span>
                            <h2 class="mb-30">Contact CWW</h2>
                        </div>
                        <div class="contact__three-right-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
											<span class="fal fa-user"></span>
                                            <input type="text" name="firstname" placeholder="First Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
											<span class="fal fa-user"></span>
                                            <input type="text" name="lastname" placeholder="Last Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
											<span class="far fa-envelope-open"></span>
                                            <input type="email" name="email" placeholder="Email Address" required="required">											
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
											<span class="fal fa-book"></span>
                                            <select class="form-control" name="department"  required="required">
                                                <option value="">Select a Department</option>
                                                <option value="Support">Support</option>
                                                <option value="Billing">Billing</option>
                                                <option value="Editoria">Editoria</option>
                                                <option value="Advertisement">Advertisement</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
											<span class="fal fa-book"></span>
                                            <select class="form-control" name="category"  required="required">
                                                <option value="">How Can We Help You?</option>
                                                <option value="Support">Support</option>
                                                <option value="Billing">Billing</option>
                                                <option value="Editoria">Editoria</option>
                                                <option value="Advertisement">Advertisement</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
											<span class="fal fa-book"></span>
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
											<span class="far fa-comments"></span>
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact__two-right-form-item">
                                            <button class="btn-one" type="submit">Submit Form <i class="far fa-chevron-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Contact Form Area End -->
	@include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')