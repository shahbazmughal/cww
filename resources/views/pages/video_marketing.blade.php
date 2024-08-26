@include('includes.header')
	<style>
		.page__banner-content > span {
			font-size: 60px;
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
                        <span>Visual Promotions</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>CWW Visual Promotions</li>
						</ul>
						<h1>CWW Visual Promotions</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->

    <!-- News Details Area Start -->
    <div class="news__details section-padding">
        <div class="container">

			<div class="row align-items-start mb-5">
                <h2 class="text-center mb-30 pb-30">CWW Visual Promotions — For Maximum Impact</h2>
				<div class="col-xl-6 xl-mb-30">
					<div class="team__details-thumb dark__image">
						<img class="img__full" src="/public/assets/img/banner/video-marketing.png" alt="">
					</div>
				</div>
				<div class="col-xl-6">
					<div class="team__details-content ml-20 xl-ml-0">
                        <h3 class="mb-20">The importance and effectiveness of visual promotion have been on a rapid rise.</h3>
						<p>Creating your video, whether for personal or corporate purposes, comes with a host of benefits. Here are just a few of the numerous advantages:</p>
						<div class="team__details-content-contact">
							<div class="project__details-area-list">
                                <span><i class="far fa-check"></i> Cultivates trust and credibility by humanizing individuals and organizations.</span>
                                <span><i class="far fa-check"></i> Offers easy accessibility, reaching a wide-ranging audience.</span>
                                <span><i class="far fa-check"></i> Effectively captures your achievements, expertise, and professionalism in a way that printed content cannot.</span>
                                <span><i class="far fa-check"></i> Elevates the professional appeal of your website and marketing endeavors.</span>
                                <span><i class="far fa-check"></i> Serves as a lasting record of key milestones in your journey, whether related to your work, business, career, or life.</span>
                            </div>
						</div>
                        <p>Our team of visual promotion experts is dedicated to guiding you through every step of the process, ensuring the creation of a refined and professional video that can be a cherished personal keepsake or a valuable asset for your professional pursuits.</p>

                        <div class="footer__three-widget-solution">
							<ul class="text-light">
								<li><a href="/member-spotlight" class="text-dark"><i class="far fa-chevron-double-right"></i>Click here to embark on this distinctive journey.</a></li>								
							</ul>
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