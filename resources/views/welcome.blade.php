@include('includes.header')
	<style>
		@media (max-width: 480px) {
			.consulting__area-right-list span {
				font-size: 13px;
			}
		}	
	</style>

	@include('includes.menu')
	<!-- Banner Area Start -->
	<div class="banner__two swiper banner-two-slider">
		<div class="swiper-wrapper">
			<div class="banner__two-image swiper-slide" data-background="public/assets/img/banner/banner.jpg">				
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="banner__two-content">
								<b class="subtitle">CWW</b>
								<span data-animation="fadeInUp" data-delay=".3s">Welcome to</span>
								<h1 data-animation="fadeInUp" data-delay=".7s"> Continental Who's Who extensive network</h1>
								<div class="banner__two-content-button" data-animation="fadeInBottom" data-delay="1s">
									<a href="#members" class="mouse_scroll">
										<div class="mouse">
											<div class="wheel"></div>
										</div>
										<div>
											<span class="m_scroll_arrows unu"></span>
											<span class="m_scroll_arrows doi"></span>
											<span class="m_scroll_arrows trei"></span>
										</div>
									</a>
								</div>
                                <img class="banner__two-image-shape-one" src="public/assets/img/shape/banner-1.png" data-animation="rollIn" data-delay="2s" alt="">
							</div>
                            <img class="banner__two-image-shape-two" src="public/assets/img/shape/banner-2.png" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="banner__two-image swiper-slide" data-background="public/assets/img/banner/banner-3.jpg">				
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="banner__two-content">
								<b class="subtitle">CWW</b>
								<span data-animation="fadeInUp" data-delay=".3s">Who We Are</span>
								<h1 data-animation="fadeInUp" data-delay=".7s">empower professionals and executives</h1>
								<div class="banner__two-content-button" data-animation="fadeInBottom" data-delay="1s">
									<a href="#members" class="mouse_scroll">
										<div class="mouse">
											<div class="wheel"></div>
										</div>
										<div>
											<span class="m_scroll_arrows unu"></span>
											<span class="m_scroll_arrows doi"></span>
											<span class="m_scroll_arrows trei"></span>
										</div>
									</a>
								</div>
                                <img class="banner__two-image-shape-one" src="public/assets/img/shape/banner-1.png" data-animation="rollIn" data-delay="2s" alt="">
							</div>
                            <img class="banner__two-image-shape-two" src="public/assets/img/shape/banner-2.png" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner__two-arrow">
			<div class="banner__two-arrow-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
			<div class="banner__two-arrow-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
		</div>		
	</div>
	<!-- Banner Area End --> 
	<!-- Services Area Start -->
	<div class="services__two section-padding pb-0" id="members">
		<div class="container">
			<div class="row mb-70 align-items-end">
				<div class="col-xl-8 col-sm-8 lg-mb-30">
					<div class="services__two-title sm-t-center">
						<span class="subtitle-two">CWW Members</span>
						<h2>Premium Members</h2>						
					</div>
				</div>
				<div class="col-xl-4 col-sm-4">
					<div class="services__two-arrow about__two-right-btn t-right sm-t-center">
						<a class="btn-six" href="#">Search Members<i class="far fa-chevron-double-right"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="swiper services__two-slider">
						<div class="swiper-wrapper">
							<div class="services__two-item swiper-slide" data-background="public/assets/img/team/team-5.jpg">
								<div class="services__two-item-content">
									<div class="services__two-item-content-icon">
										<img src="public/logo.png" alt="">
									</div>
									<h4><a href="#">Muhammad Azam Razzak</a></h4>
									<p>Active 3 weeks ago</p>
									<a class="simple-btn-2" href="#">
										<i class="fas fa-map-marker-alt"></i> Dubai - UAE
									</a>
									<span class="location-away">1246 miles away</span>
								</div>
							</div>
							<div class="services__two-item swiper-slide" data-background="public/assets/img/team/team-8.jpg">
								<div class="services__two-item-content">
									<div class="services__two-item-content-icon">
										<img src="public/logo.png" alt="">
									</div>
									<h4><a href="#">Zacharias Sundstrom</a></h4>
									<p>Active 3 weeks ago</p>
									<a class="simple-btn-2" href="#">
										<i class="fas fa-map-marker-alt"></i> Helsinki - Finland
									</a>
									<span class="location-away">2979 miles away</span>
								</div>
							</div>
							<div class="services__two-item swiper-slide" data-background="public/assets/img/team/team-6.jpg">
								<div class="services__two-item-content">
									<div class="services__two-item-content-icon">
										<img src="public/logo.png" alt="">
									</div>
									<h4><a href="#">Maria Iskra</a></h4>
									<p>Active 3 weeks ago</p>
									<a class="simple-btn-2" href="#">
										<i class="fas fa-map-marker-alt"></i> Poznan - NY
									</a>
									<span class="location-away">3179 miles away</span>
								</div>
							</div>
							<div class="services__two-item swiper-slide" data-background="public/assets/img/team/team-9.jpg">
								<div class="services__two-item-content">
									<div class="services__two-item-content-icon">
										<img src="public/logo.png" alt="">
									</div>
									<h4><a href="#">Jacob Rix</a></h4>
									<p>Active 3 weeks ago</p>
									<a class="simple-btn-2" href="#">
										<i class="fas fa-map-marker-alt"></i> Copenhagen - NY
									</a>
									<span class="location-away">3367 miles away</span>
								</div>
							</div>
							<div class="services__two-item swiper-slide" data-background="public/assets/img/team/team-15.jpg">
								<div class="services__two-item-content">
									<div class="services__two-item-content-icon">
										<img src="public/logo.png" alt="">
									</div>
									<h4><a href="#">Ole Jakobson</a></h4>
									<p>Active 3 weeks ago</p>
									<a class="simple-btn-2" href="#">
										<i class="fas fa-map-marker-alt"></i> Vedbaek - NY
									</a>
									<span class="location-away">3369 miles away</span>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!-- Services Area End -->   
	<!-- About Area Start -->   
	<div class="about__two dark__image section-padding">
		<img class="about__two-shape dark-n" src="public/assets/img/shape/about.png" alt="">
		<img class="about__two-shape light-n" src="public/assets/img/shape/about-dark.png" alt="">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-lg-6 lg-mb-30">
					<div class="row">
						<div class="col-6">
							<img src="public/assets/img/about/about-3.jpg" alt="">
						</div>
						<div class="col-6 mt-95 sm-mt-55">
							<img src="public/assets/img/about/about-4.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="about__two-right">
						<div class="about__two-right-title">
							<span class="subtitle-two">About Company</span>
							<h2>Continental Who's Who</h2>
							<p>At Continental Who's Who, we empower professionals and executives in their pursuit of ethical business excellence. Our extensive network and cutting-edge marketing tools foster brand development and career advancement, all while upholding the bedrock values that guide our organization.</p>
						</div>
						<div class="about__two-right-experience">
							<div class="about__two-right-experience-counter">
								<h1><span class="counter">17</span>+</h1>
							</div>
							<div>
								<h6>Years Experience on Business Consulting</h6>
							</div>
						</div>
						<div class="about__two-right-btn">
							<div>
								<a class="btn-six" href="#">Read more<i class="far fa-chevron-double-right"></i></a>
							</div>
							<div class="about__two-right-btn-author">
								<div class="about__two-right-btn-author-avatar">
									<img src="public/assets/img/avatar/avatar-8.jpg" alt="">
								</div>
								<div class="about__two-right-btn-author-name">
									<span class="text-one">Flores, Juanita</span>
									<h6>Founder CEO</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Area End -->   
	<!-- Digital Solution Area Start -->
	<div class="solution__area section-padding" data-background="public/assets/img/pages/solution.jpg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-9">
					<div class="solution__area-title">
						<span class="subtitle-two">Recommended Videos</span>
						<h1>Continental Who's Who Press Release</h1>
						<!-- <a class="btn-five" href="#">Learn more<i class="far fa-chevron-double-right"></i></a> -->
					</div>					
				</div>
				<div class="col-xl-3">
					<div class="solution__area-right">
						<div class="solution__area-right-video">
							<div class="solution__area-right-icon video video-pulse">
								<a class="video-popup" href="https://www.youtube.com/watch?v=29Pn6RukMtc"><i class="fal fa-play"></i></a> 
							</div>
							<h6>Watch The Consulting Video</h6>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!-- Digital Solution Area End -->
	<!-- Wark Area Start -->
	<div class="work__area section-padding pb-0">
		<div class="container">
			<div class="row mb-70">
				<div class="col-xl-12">
					<div class="work__area-title t-center">
						<span class="subtitle-two">Membership Process</span>
						<h2>Our Membership Process</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-sm-6 xl-mb-30">
					<div class="work__area-item">
						<span>01</span>
						<h6>Personal Information</h6>
						<p>Provide your details to personalize your experience.</p>
						<img class="work__area-item-arrow sm-display-n dark-n" src="public/assets/img/icon/arrow-1.png" alt="">
						<img class="work__area-item-arrow sm-display-n light-n" src="public/assets/img/icon/arrow-1-dark.png" alt="">
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 sm-mb-30">
					<div class="work__area-item">
						<span>02</span>
						<h6>Location Information</h6>
						<p>Share your location for tailored recommendations and services.</p>
						<img class="work__area-item-arrow xl-display-n dark-n" src="public/assets/img/icon/arrow-2.png" alt="">
						<img class="work__area-item-arrow xl-display-n light-n" src="public/assets/img/icon/arrow-2-dark.png" alt="">
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 sm-mb-30">
					<div class="work__area-item">
						<span>03</span>
						<h6>Business Information</h6>
						<p>Add your business info to connect with opportunities.</p>
						<img class="work__area-item-arrow xl-display-n dark-n" src="public/assets/img/icon/arrow-1.png" alt="">
						<img class="work__area-item-arrow xl-display-n light-n" src="public/assets/img/icon/arrow-1-dark.png" alt="">
						<img class="work__area-item-arrow display-n xl-display-b sm-display-n dark-n" src="public/assets/img/icon/arrow-2.png" alt="">
						<img class="work__area-item-arrow display-n xl-display-b sm-display-n light-n" src="public/assets/img/icon/arrow-2-dark.png" alt="">
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="work__area-item">
						<span>04</span>
						<h6>Register with us</h6>
						<p>Join now to unlock all features and benefits.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Wark Area End -->
	<!-- Consulting Area Start -->
	<div class="consulting__area section-padding">
		<img class="consulting__area-shape dark-n" src="public/assets/img/shape/consulting.png" alt="">
		<img class="consulting__area-shape light-n" src="public/assets/img/shape/consulting-dark.png" alt="">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-lg-6 lg-mb-30">
					<div class="consulting__area-image dark__image">
						<img src="public/assets/img/pages/consulting.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="consulting__area-right">
						<div class="consulting__area-right-title">
							<span class="subtitle-two">Premium Services</span>
							<h2>Press Releases Sent Via Major Newswire Outlets</h2>
						</div>
						<div class="consulting__area-right-list">
							<span><i class="far fa-check"></i> Achieve Your Communication Objectives</span>
							<span><i class="far fa-check"></i> Reach More Than 5,000 Web Sites</span>
							<span><i class="far fa-check"></i> Appear on: AOL, MSN, and Yahoo!</span>
							<span><i class="far fa-check"></i> Increase Visibility To Potential Clients</span>
							<span><i class="far fa-check"></i> Gain Exposure To Prospective Partners</span>
							<span><i class="far fa-check"></i> <span>Documenting professional and executive biographies since 1994, CWW is one of the most trusted publishers around the globe.</span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Consulting Area End -->
	<!-- Portfolio Area Start -->
	<div class="portfolio dark__image">
		<div class="portfolio-item">
			<img src="public/assets/img/portfolio/portfolio-5.jpg" alt="">
			<div class="portfolio-item-inner">
				<div class="portfolio-item-inner-title">
					<h4>Pinnacle Member Spotlight</h4>
					<span>MARKETING LAB</span>
				</div>
				<div class="portfolio-item-inner-icon">
					<a href="/member-spotlight"><i class="fal fa-long-arrow-up"></i></a>
				</div>
			</div>
		</div>
		<div class="portfolio-item active">
			<img src="public/assets/img/portfolio/portfolio-2.jpg" alt="">
			<div class="portfolio-item-inner">
				<div class="portfolio-item-inner-title">
					<h4>Inner Circle Magazine</h4>
					<span>MARKETING LAB</span>
				</div>
				<div class="portfolio-item-inner-icon">
					<a href="/inner-circle-magazine"><i class="fal fa-long-arrow-up"></i></a>
				</div>
			</div>
		</div>
		<div class="portfolio-item">
			<img src="public/assets/img/portfolio/portfolio-7.jpg" alt="">
			<div class="portfolio-item-inner">
				<div class="portfolio-item-inner-title">
					<h4>Media Room</h4>
					<span>MARKETING LAB</span>
				</div>
				<div class="portfolio-item-inner-icon">
					<a href="/press_releases"><i class="fal fa-long-arrow-up"></i></a>
				</div>
			</div>
		</div>
		<div class="portfolio-item">
			<img src="public/assets/img/portfolio/portfolio-8.jpg" alt="">
			<div class="portfolio-item-inner">
				<div class="portfolio-item-inner-title">
					<h4>CWW Visual Promotions</h4>
					<span>MARKETING LAB</span>
				</div>
				<div class="portfolio-item-inner-icon">
					<a href="/video-marketing"><i class="fal fa-long-arrow-up"></i></a>
				</div>
			</div>
		</div>
		<div class="portfolio-item">
			<img src="public/assets/img/portfolio/portfolio-1.jpg" alt="">
			<div class="portfolio-item-inner">
				<div class="portfolio-item-inner-title">
					<h4>Advertise</h4>
					<span>MARKETING LAB</span>
				</div>
				<div class="portfolio-item-inner-icon">
					<a href="/contact"><i class="fal fa-long-arrow-up"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio Area End -->
	 	<!-- Blog Area Start -->
	<div class="blog__two section-padding r-videos">
		<div class="container">
			<div class="row align-items-end mb-20">
				<div class="col-xl-7 col-lg-7 lg-mb-30">
					<div class="blog__two-title lg-t-center">
						<h2>Recommended Videos</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6 col-lg-6 xl-mb-30">
					<div class="blog__two-item">
						<div class="blog__two-item-content">
							<video width="100%" controls>
								<source src="public/assets/video/press_release.mp4" type="video/mp4">
								Your browser does not support HTML video.
							</video>
							<h4 class="mb-0 mt-2">Global Business Development</h4>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 lg-mb-30">
					<div class="blog__two-item">
						<div class="blog__two-item-content">
							<video width="100%" controls>
								<source src="public/assets/video/the_inner_circle.mp4" type="video/mp4">
								Your browser does not support HTML video.
							</video>
							<h4 class="mb-0 mt-2">Press Releases Sent Via Major Newswire Outlets</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Area End -->
	@include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')