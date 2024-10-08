	<!-- Top Bar Start -->
	<div class="top__bar">
		<div class="container custom__container">
			<div class="row">
				<div class="col-xl-5 col-md-6">
					<div class="top__bar-left">
						<a href="mailto:editorial@continentalwhoswho.com"><i class="fas fa-envelope"></i>editorial@continentalwhoswho.com</a>
					</div>
				</div>
				<div class="col-xl-7 col-md-6">
					<div class="top__bar-right">
					@if (Session::has('user_email'))
						<span class="text-white">Welcome {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}</span>
						<span class="spacer"></span>
						<a href="{{ url('/logout') }}"><i class="fas fa-lock"></i>Logout</a>
					@else
						<a href="{{ url('/login') }}"><i class="fas fa-lock"></i>Login</a>
						<span class="spacer"></span>
						<a href="/register"><i class="fas fa-user"></i>Register</a>
					@endif
						
						<div class="top__bar-right-social">
							<ul>
								<li><a href="https://www.facebook.com/pstie"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/pstie"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Top Bar End -->
	<!-- Header Area Start -->
	<div class="header__area header__sticky">
        <div class="container custom__container">
            <div class="header__area-menubar">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="/">
							<img class="dark-n" src="public/logo.png" alt="">
							<img class="light-n" src="public/logo.png" alt="">
							<img class="mobile-show" src="public/cww.png" alt="">
						</a>
                    </div>
                </div>
				<div class="header__area-menubar-center">
                    <div class="header__area-menubar-center-menu menu-responsive">						
                        <ul id="mobilemenu">
                        <li class="menu-item"><a href="/">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="#">CWW Mindset</a>
                                <ul class="sub-menu">
                                    <li><a href="/about">About us</a></li>
                                    <li><a href="/faq">FAQ</a></li>
                                    <li><a href="/calendar_events">Calendar Events</a></li>
                                    <li><a href="/submit_events">Submit Calendar Event</a></li>						
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Why CWW?</a>
                                <ul class="sub-menu">
                                    <li><a href="/testimonials">Testimonials</a></li>
                                    <li><a href="/benefits">Benefits</a></li>					
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Connect</a>
                                <ul class="sub-menu">
                                    <li><a href="/member_search">Find Members</a></li>
									<li class="menu-item-has-children">
                                        <a href="#">Job Post Submission</a>
										<ul class="sub-menu">
											<li><a href="/job_posts">See Current Job Posts</a></li>
											<li><a href="/submit_job">Submit A Job Post</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
                                        <a href="#">Community Post Submission</a>
										<ul class="sub-menu">
											<li><a href="/community_posts">See Community Posts</a></li>
											<li><a href="/submit_community">Submit A Community Post</a></li>
										</ul>
									</li>
                                    <li><a href="/blog_posts">CWW Chronicles</a></li>
                                    <li><a href="/press_releases">Media Room</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Helpful Links</a>
                                <ul class="sub-menu">
                                    <li><a href="/calendar_events">Events</a></li>
                                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/terms-of-service">Terms of Services</a></li>
                                    <li><a href="/sitemap">Site Map</a></li>						
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Branding Workshow</a>
                                <ul class="sub-menu">
                                    <li><a href="/member-spotlight">Pinnacle Memeber Spotlight</a></li>
                                    <li><a href="/inner-circle-magazine">Inner Circle Magazine</a></li>
                                    <li><a href="/video-marketing">CWW Visual Promotions</a></li>
                                    <li><a href="/contact">Advertise</a></li>						
                                </ul>
                            </li>
                            <li class="menu-item"><a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
				</div>
                <div class="header__area-menubar-right">
                    <div class="header__area-menubar-right-box">
                        <div class="header__area-menubar-right-sidebar">
                            <div class="header__area-menubar-right-sidebar-popup-icon"><img src="public/assets/img/icon/menu.png" alt=""></div>
                        </div>
                        <!-- sidebar Menu Start -->
                        <div class="header__area-menubar-right-sidebar-popup">
                            <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                            <div class="header__area-menubar-right-sidebar-popup-logo">
                                <a href="/"> <img src="public/cww.png" alt=""> </a>
                            </div>
                            <p>We empower professionals and executives in their pursuit of ethical business excellence. Our extensive network and cutting-edge marketing tools foster brand development and career advancement, all while upholding the bedrock values that guide our organization.</p>
							<div class="header__area-menubar-right-box-sidebar-popup-contact">
								<h4 class="mb-30">Get In Touch</h4>
								<div class="header__area-menubar-right-box-sidebar-popup-contact-item">
									<div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
										<i class="fal fa-phone-alt icon-animation"></i>
									</div>
									<div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
										<span>Call Now</span>
										<h6><a href="tel:+125(895)658568">(516) 825-5634</a></h6>
									</div>
								</div>
								<div class="header__area-menubar-right-box-sidebar-popup-contact-item">
									<div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
										<i class="fal fa-envelope"></i>
									</div>
									<div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
										<span>Quick Email</span>
										<h6><a href="mailto:editorial@continentalwhoswho.com">editorial@continentalwhoswho.com</a></h6>
									</div>
								</div>
								<div class="header__area-menubar-right-box-sidebar-popup-contact-item">
									<div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
										<i class="fal fa-map-marker-alt"></i>
									</div>
									<div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
										<span>Office Address</span>
										<h6><a href="#">33 West Hawthorne Avenue Valley Stream, NY 11580</a></h6>
									</div>
								</div>
							</div>
							<div class="header__area-menubar-right-box-sidebar-popup-social">
								<ul>
									<li><a href="https://www.facebook.com/pstie"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://twitter.com/pstie"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>							
							</div>
                        </div>
                        <div class="sidebar-overlay"></div>
                        <!-- sidebar Menu Start -->
                    </div>
					<div class="responsive-menu"></div>
                </div>
            </div>
        </div>
    </div>    
	<!-- Header Area End -->