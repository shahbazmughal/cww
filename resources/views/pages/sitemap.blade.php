@include('includes.header')

	<link rel="stylesheet" href="public/assets/css/sitemap.css"> 

	@include('includes.menu')
	
	<!-- Page Banner Area Start -->
	<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
						<span>Site Map</span>
							<ul>
								<li><a href="/">Home</a><span>|</span></li>
								<li>Site Map</li>
							</ul>
						<h1>Site Map</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->
	<!-- site map Start -->
	<div class="site__map section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<nav class="primary">
						<ul>
							<li id="home">
							<a href="/">Home</a>
							<ul>
								<li>
									<a href="">CWW Mindset</a>
									<ul>
									<li><a href="/about">About</a></li>
										<li><a href="/faq">FAQ</a></li>
										<li><a href="/calendar_events">CALENDAR EVENTS</a></li>
										<li><a href="/submit_events">SUBMIT CALENDAR EVENT</a></li>
									</ul>
								</li>
								<li>
									<a href="">Why CWW</a>
									<ul>
									<li><a href="/testimonials">TESTIMONIALS</a></li>
										<li><a href="/benefits">BENEFITS</a></li>
									</ul>
								</li>
								<li>
									<a href="">CONNECT</a>
									<ul>
										<li><a href="/member_search">FIND MEMBERS</a></li>
										<li>
											<a href="">JOB POST SUBMISSION</a>
											<ul>
												<li><a href="/job_posts" class="multi">CURRENT JOB POSTS</a></li>
												<li><a href="/submit_job" class="multi">SUBMIT A JOB POST</a></li>
											</ul>
										</li>
										<li>
											<a href="">COMMUNITY POST SUBMISSION</a>
											<ul>
												<li><a href="/community_posts" class="multi">See Community Posts</a></li>
												<li><a href="//submit_community" class="multi">Submit A Community Post</a></li>
											</ul>
										</li>
										<li>
											<a href="/blog_posts">CWW CHRONICLES</a>
											<a href="/press_releases">MEDIA ROOM</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="">Helpful Links</a>
									<ul>
									<li><a href="/calendar_events">Events</a></li>
										<li><a href="/privacy-policy">Privacy Policy</a></li>
										<li><a href="/terms-of-service">Terms of Services</a></li>
										<li><a href="/sitemap">Site Map</a></li>
									</ul>
								</li>
								<li>
									<a href="">Branding Workshow</a>
									<ul>
									<li><a href="/member-spotlight">Pinnacle Memeber Spotlight</a></li>
										<li><a href="/inner-circle-magazine">Inner Circle Magazine</a></li>
										<li><a href="/video-marketing">CWW Visual Promotions</a></li>
										<li><a href="/contact">SUBMIT CALENDAR EVENT</a></li>
									</ul>
								</li>
								<li>
									<a href="/contact">CWW MINDSET</a>
								</li>
							</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- site map End -->

	@include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')