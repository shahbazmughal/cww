@include('includes.header')

    <style>
        .page__banner-content > span {
            font-size: 90px;
        }
        .contact__page-info-item > span {
            max-width: 100%;
            margin-left: 0;
            margin-top: 0px;
        }
        .contact__page-info-item {
            margin-bottom: 10px;
        }
        .contact__page-info {
            margin-left: 60px;
        }
        .contact__page-map {
            margin-top: -150px;
        }
        .badge {
            display: inline-block;
            padding: 10px 16px;
            font-size: 1em;
        }
    </style>

    @include('includes.menu')

    <!-- Page Banner Area Start -->
	<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Invite Friends</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Invite Friends</li>
						</ul>
						<h1>Invite Friends</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->

    <!-- Contact Page Start -->
    <div class="contact__page section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 order-last order-lg-first">
                    <div class="contact__page-form">
                        <h3 class="mb-30">Friend Invitation</h3>
                        <form action="#">	
                            <div class="row">
                                <div class="col-sm-12 mb-20"> 
                                    <div class="contact__page-form-item conbix-contact-item">
                                        <span class="fal fa-user"></span>
                                        <input type="text" name="name" placeholder="Your Name" required="required">
                                    </div>										
                                </div>
                                <div class="col-sm-12 mb-20">
                                    <div class="contact__page-form-item conbix-contact-item">
                                        <span class="far fa-envelope-open"></span>
                                        <input type="email" name="email" placeholder="Your Email" required="required">											
                                    </div>									
                                </div>
                                <div class="col-sm-12 mb-20">
                                    <div class="contact__page-form-item conbix-contact-item">
                                        <span class="far fa-envelope-open"></span>
                                        <input type="email" name="email_to" placeholder="Your friend's Email" required="required">											
                                    </div>									
                                </div>
                                <div class="col-lg-12">										
                                    <div class="contact__page-form-item">
                                        <button class="btn-one" type="submit">Submit Form<i class="far fa-chevron-double-right"></i></button>
                                    </div>										
                                </div>
                            </div>							
                        </form>                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 lg-mb-30">
                    <div class="contact__page-info mb-60">
                        <h2 class="mb-30 lg-mb-30">Invite your friends to <span class="badge bg-dark">PSTIE</span></h2>
                        <div class="contact__page-info-item">
                            <h4>We're eager to hear from you!</h4>
                        </div>
                        <div class="contact__page-info-item">
                            <span>Do you have questions, comments, or suggestions you’d like to share with us?</span>
                        </div>
                        <div class="contact__page-info-item">
                            <span>Would you like to learn more about becoming part of our community?</span>
                        </div>
                        <div class="contact__page-info-item">
                            <span>Please fill out the form and we will respond promptly.</span>
                        </div>
                        <div class="contact__page-info-item">
                            <span>Thank you for contacting PS•TIE.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Page End -->
    <!-- Contact Page Map Start -->
    <div class="contact__page-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.569654581897!2d-73.70087029999999!3d40.6614158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c264620af71877%3A0x4119ece99ee38d07!2s33%20W%20Hawthorne%20Ave%2C%20Valley%20Stream%2C%20NY%2011580%2C%20USA!5e0!3m2!1sen!2s!4v1724675610950!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Contact Page Map End -->

    

	@include('includes.footer')

    @include('includes.scripts')

    @include('includes.html')