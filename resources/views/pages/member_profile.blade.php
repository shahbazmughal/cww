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
						<h1>Member profile</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->
	<!-- Member profile Start -->
	<div class="member__profile section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 xl-mb-30">
					<div class="team__details-thumb dark__image">
						<img class="img__full" src="public/assets/img/avatar/blank.svg" alt="">
					</div>
				</div>
				<div class="col-xl-6">
					<div class="team__details-content ml-20 xl-ml-0">
						<span>Business Expert</span>
						<h2>Muhammad Azam Razzak</h2>
						<p>Financial and Business Consultancy Marsers Consulting</p>
						<div class="team__details-content-contact">
							<div class="team__details-content-contact-item mb-25">
								<div class="team__details-content-contact-item-info">
									<span>Status:</span>
									<h5>Active 3 weeks ago</h5>
								</div>
							</div>
							<div class="team__details-content-contact-item mb-45">
								<div class="team__details-content-contact-item-info">
									<span>Title:</span>
									<h5>Owner</h5>
								</div>
							</div>
							<div class="team__details-content-contact-item mb-45">
								<div class="team__details-content-contact-item-info">
									<span>Company Name:</span>
									<h5>Marsers Consulting</h5>
								</div>
							</div>
							<a class="btn-one" href="contact.html">View Full profile details<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')