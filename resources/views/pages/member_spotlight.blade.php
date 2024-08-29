@include('includes.header')
	<style>
		.page__banner-content > span {
			font-size: 65px;
		}
		.page__banner-content h1 {
			font-size: 45px;
		}
		.news__details-left-box {
			padding: 70px 30px;
		}
		.news__details-left-box-shape {
			transform: translateX(-50%) translateY(-50%);
			max-width: 220px;
			top: 50%;
		}
		.project__details-area-list span i {
			color: var(--primary-color-4);
			margin-right: 10px;
		}
		.project__details-area-list span {
			max-width: 100%;
		}
	</style>
	@include('includes.menu')
	
	<!-- Page Banner Area Start -->
	<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Pinnacle Member</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Pinnacle Member Spotlight</li>
						</ul>
						<h1>Pinnacle Member Spotlight</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->


	<!-- News Details Area Start -->
    <div class="news__details section-padding">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 mb-5">
                    <div class="news__details-left">
                        <div class="news__details-left-meta">
                            <h3 class="mt-20 text-center">Pinnacle Member Spotlight: Elevating Exposure and Credibility</h3>
                        </div>
                        <div class="news__details-left-box">
                            <div class="news__details-left-box-shape">
                                <img src="/public/logo.png" alt="">
                            </div>
							<p>Celebrating Excellence: Showcasing Our Outstanding Members for Greater Recognition and Trust We would all like to recognize the following member:</p>
                            <h4>Marlene Zullig</h4>
                        </div>                                   
                    </div>
                </div>
            </div>

			<div class="row align-items-center mb-5">
				<div class="col-xl-6 xl-mb-30">
					<div class="team__details-thumb dark__image">
						<img class="img__full" src="/public/logo-lg.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6">
					<div class="team__details-content ml-20 xl-ml-0">
						<span>Company Name</span>
						<h2>Marlene Zullig Art</h2>
						<p>The Pinnacle Member and Business Spotlight is a place of honor on the home page banner of the website. There is no other place on the website that will get you more recognition and exposure.</p>
						<p>And this is the place we reserve for our most notable members. You can nominate someone whom you feel is a deserving candidate, or send a request for you or your business to be considered.</p>
						<div class="team__details-content-contact">
							<!-- <div class="team__details-content-contact-item mb-25">
								<i class="far fa-envelope"></i>
								<div class="team__details-content-contact-item-info">
									<span>Contact Email</span>
									<h5><a href="mailto:zulligm@gmail.com">zulligm@gmail.com</a></h5>
								</div>
							</div> -->
							<div class="team__details-content-contact-item mb-25">
								<i class="fal fa-book"></i>
								<div class="team__details-content-contact-item-info">
									<span>Marlene Zullig shares an inspiring story of</span>
									<h4>Ethics</h4>
								</div>
							</div>
							<a class="btn-one" href="/blog_posts">Read More <i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
                <div class="col-xl-12 project__details-area-list pb-0">
                    <div class="project__details-area">
                        
                        <h3 class="mb-30">Pinnacle Members</h3>
                        <p class="mb-35">In selecting who will appear in the Pinnacle Member Spotlight, we look for members or businesses that meet certain criteria, including the following:</p>
                        <div class="project__details-area-list pb-0">
                            <span><i class="far fa-check"></i> Achievement of all CWW Badges</span>
                            <span><i class="far fa-check"></i> A story or accomplishment that would inspirate or help empower others</span>
                            <span><i class="far fa-check"></i> Nomination by someone who has benefited from your mentorship or expertise</span>
                            <span><i class="far fa-check"></i> Own a business or provide a product or service that is making a difference to others</span>
                            <span><i class="far fa-check"></i> We’ve noticed that your profile deserves special recognition</span>
                            <span><i class="far fa-check"></i> You’ve submitted a request that either meets the above criteria or that you feel qualifies you personally, your business, someone else as a Spotlight candidate.</span>
                        </div>
                          
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- News Details Area End -->



    @include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')