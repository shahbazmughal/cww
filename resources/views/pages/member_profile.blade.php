@include('includes.header')
	<style>
		.page__banner-content > span {
            font-size: 70px;
        }
	</style>
	@include('includes.menu')
	
	<!-- Page Banner Area Start -->
	<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Member profile</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Member profile</li>
						</ul>
						<h1>Member profile</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->
	<!-- Member profile Start -->
	<div class="member__profile section-padding">\
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 xl-mb-30">
					<div class="team__details-thumb dark__image">
						<img class="img__full" src="public/assets/img/avatar/gravatar.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6">
					<div class="team__details-content ml-20 xl-ml-0">
						<span>Business Expert</span>
						<h2>Courtney Henry</h2>
						<p>Most gardens consist of a mix of natural and constructed although even very 'natural' gardens are always an inherently artificial creation. Natural elements present in a garden principally.</p>
						<div class="team__details-content-contact">
							<div class="team__details-content-contact-item mb-25">
								<i class="far fa-envelope"></i>
								<div class="team__details-content-contact-item-info">
									<span>Quick Email</span>
									<h5><a href="mailto:henry@support.com">henry@support.com</a></h6>
								</div>
							</div>
							<div class="team__details-content-contact-item mb-25">
								<i class="fal fa-phone-alt"></i>
								<div class="team__details-content-contact-item-info">
									<span>Tell With US</span>
									<h5><a href="tel:+125(895)658568">+125 (895) 658 568</a></h5>
								</div>
							</div>
							<div class="team__details-content-contact-item mb-45">
								<i class="far fa-map-marker-alt"></i>
								<div class="team__details-content-contact-item-info">
									<span>Office Location</span>
									<h5><a href="#">PV3M+X68, United Kingdom</a></h5>
								</div>
							</div>
							<a class="btn-one" href="contact.html">Get in Touch<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-80">
				<div class="col-xl-6 col-lg-6 lg-mb-30">
					<div class="team__details-experience">
						<h3>Educational Experience</h3>
						<p>User generated content in real-time will have multiple touchpoints for offshoring. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.</p>
						<div class="team__details-experience-area">
							<div class="team__details-experience-area-item b-b">
								<h6>1<span>st</span></h6>
								<h4>Junior Technician</h4>
								<p>2022 - Present <span>(Consulter)</span></p>
							</div>
							<div class="team__details-experience-area-item b-l">
								<h6>2<span>nd</span></h6>
								<h4>Business Expert</h4>
								<p>2019 - 2021 <span>(Company)</span></p>
							</div>
							<div class="team__details-experience-area-item b-t">
								<h6>3<span>rd</span></h6>
								<h4>Finance Manager</h4>
								<p>2017 - 2019 <span>(Company)</span></p>
							</div>
							<div class="team__details-experience-area-item b-l b-t">
								<h6>4<span>th</span></h6>
								<h4>Junior Consultant</h4>
								<p>2015 - 2017 <span>(Consulter)</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="team__details-skills ml-20 xl-ml-0">
						<h3>Professional Skills</h3>
						<p>User generated content in real-time will have multiple touchpoints for offshoring. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.</p>
						<div class="team__details-skills-item">
							<div class="team__details-skills-item-content">
								<h6>Web Development</h6> 
								<span class="team__details-skills-item-count text-two"><span class="counter">80</span>%</span>
							</div>
							<div class="team__details-skills-item-inner">
								<div class="team__details-skills-item-bar" data-width="80"></div>
							</div>
						</div>
						<div class="team__details-skills-item mt-25">
							<div class="team__details-skills-item-content">
								<h6>Graphic Design</h6> 
								<span class="team__details-skills-item-count text-two"><span class="counter">89</span>%</span>
							</div>
							<div class="team__details-skills-item-inner">
								<div class="team__details-skills-item-bar" data-width="89"></div>
							</div>
						</div>
						<div class="team__details-skills-item mt-25">
							<div class="team__details-skills-item-content">
								<h6>Web Design</h6> 
								<span class="team__details-skills-item-count text-two"><span class="counter">87</span>%</span>
							</div>
							<div class="team__details-skills-item-inner">
								<div class="team__details-skills-item-bar" data-width="87"></div>
							</div>
						</div>
						<div class="team__details-skills-item mt-25">
							<div class="team__details-skills-item-content">
								<h6>Web Application</h6> 
								<span class="team__details-skills-item-count text-two"><span class="counter">66</span>%</span>
							</div>
							<div class="team__details-skills-item-inner">
								<div class="team__details-skills-item-bar" data-width="66"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('includes.footer')
	
	@include('includes.scripts')