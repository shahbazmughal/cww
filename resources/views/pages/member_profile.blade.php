@include('includes.header')
	<style>
		.page__banner-content > span {
            font-size: 70px;
        }
		.team__details-content-contact-item-info h5 {
			text-transform: capitalize;
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
						<h1>Associated Member</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->
	<!-- Member profile Start -->
	<div class="member__profile section-padding">
		<div class="container">

			<div class="row align-items-center mb-45">
				<div class="col-xl-6 xl-mb-30">
					<div class="team__details-thumb dark__image">
						<img class="img__full" src="public/logo-lg.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6">
					<div class="team__details-content ml-20 xl-ml-0">
						<span>Retired- Senior Principal Industrial Engineer</span>
						<h2>William L. Anawalt</h2>
						<div class="team__details-content-contact">
							<div class="team__details-content-contact-item mb-45">
								<div class="team__details-content-contact-item-info">
									<span>Business:</span>
									<h5>Engineering</h5>
								</div>
							</div>
							<div class="team__details-content-contact-item mb-45">
								<div class="team__details-content-contact-item-info">
									<span>Type of Organization:</span>
									<h5>Government</h5>
								</div>
							</div>
							<div class="team__details-content-contact-item mb-45">
								<div class="team__details-content-contact-item-info">
									<span>Services:</span>
									<h5>Industrial Engineering Waste Management</h5>
								</div>
							</div>
							<div class="team__details-content-contact-item mb-25">
								<div class="team__details-content-contact-item-info">
									<span>Hobbies/Sports:</span>
									<h5>Flying Pilot Instructor Instrument Rated</h5>
								</div>
							</div>
							@if (!Session::has('user_email'))
							<a class="btn-one" href="/login">View Full profile details<i class="far fa-chevron-double-right"></i></a>
							@endif
						</div>
					</div>
				</div>
			</div>

			@if (Session::has('user_email'))

			<div class="row">
                <div class="col-xl-12 project__details-area-list pb-0">
                    <div class="project__details-area">

						<h4 class="mb-10">Area of Distribution:</h4>
						<p class="mb-45">South Carolina Nationwide</p>
                        
                        <h4 class="mb-10">Expertise:</h4>
                        <p class="mb-45">Senior Principal Industrial Engineer Worked on Savannah River Site Retired from the United States Air force in 1973 as Chief Master Sergeant in Charge of Engineering Team at Rockwell, Westinghouse Corp.</p>

						<h4 class="mb-10">Affiliations:</h4>
						<p class="mb-45">Past President of NW Industrial Engineers Member of Air Craft Owners and Pilots Association since 1946</p>

						<h4 class="mb-10">Work History:</h4>
						<p class="mb-45">Bill Served on the Joint Chiefs of Staff for Two Years 1967- 1969</p>

						<h4 class="mb-10">Family:</h4>
						<p class="mb-45">Wife- Marion Two Sons One Son: a Retired Col. USAF One Son: a Retired Navy Commander One Daughter</p>

						<h4 class="mb-10">Universities/Degrees:</h4>
						<p class="mb-45">B.A. in Business Management- University of Maryland M.A. in Industrial Engineering- Arkansas University</p>

						<h4 class="mb-10">Favorite Vacation Spot:</h4>
						<p class="mb-45">Spain</p>

						<h4 class="mb-10">Hobbies/Supports:</h4>
						<p class="mb-45">Flying Pilot Instructor Instrument Rated</p>

						<h4 class="mb-10">Honors/Awards:</h4>
						<p class="mb-10">Received United States Air Force Joint Services Commendations Medal in 1969</p>
                          
                    </div>
                </div>
            </div>

			@endif

		</div>
	</div>

	@include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')