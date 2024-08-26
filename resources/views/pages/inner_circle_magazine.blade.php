@include('includes.header')
	<style>
		.page__banner-content > span {
			font-size: 70px;
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
                        <span>The Inner Circle</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>The Inner Circle Magazine</li>
						</ul>
						<h1>The Inner Circle Magazine</h1>
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
                <h2 class="text-center mb-30 pb-30">The Inner Circle Magazine: Your Voice, Your Impact</h2>
				<div class="col-xl-6 xl-mb-30">
					<div class="team__details-thumb dark__image">
						<img class="img__full" src="/public/assets/img/banner/magazine.png" alt="">
					</div>
				</div>
				<div class="col-xl-6">
					<div class="team__details-content ml-20 xl-ml-0">
						<p>The Inner Circle Magazine, proudly presented by Continental Who's Who, is more than just a publication; it's your gateway to a world of opportunities and connections. Serving as a dynamic marketing platform for our esteemed members, The Inner Circle Magazine unveils the human stories behind the profiles, adding a personal touch to our organization.</p>
						<div class="team__details-content-contact">
							<div class="team__details-content-contact-item mb-25">
								<div class="team__details-content-contact-item-info">
									<h3 class="mb-30">Key Highlights:</h3>
								</div>
							</div>
							<div class="project__details-area-list pb-0">
                                <span><i class="far fa-check"></i>Welcome New Members: In every issue, we introduce our latest members, showcasing their capabilities and expertise. It's a moment to celebrate the diverse talent that enriches our community.</span>
                                <span><i class="far fa-check"></i>Member Profiles: The magazine shines a spotlight on our members by featuring their online profiles in this prestigious printed publication. It's a chance to stand out and make a lasting impression.</span>
                                <span><i class="far fa-check"></i>Insightful Articles: Our engaging articles cover a wide range of topics relevant to professionals in various industries, including finance, law, healthcare, marketing, and more. Members are encouraged to contribute their articles and success stories, making their voices heard.</span>
                                <span><i class="far fa-check"></i>Member Interviews: Dive deep into the inspiring journeys and remarkable milestones achieved by our members through professional and in-depth Q&amp;As. Explore their career paths and life experiences that empower and inspire.</span>
                                <span><i class="far fa-check"></i> You’ve submitted a request that either meets the above criteria or that you feel qualifies you personally, your business, someone else as a Spotlight candidate.</span><span><i class="far fa-check"></i> Advertising Opportunities: With its extensive circulation across our global network and beyond, The Inner Circle Magazine offers powerful advertising opportunities. Showcase your reputable business, high-quality products, or services to a wide audience of professionals and readers.</span>
                            </div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
                <div class="col-xl-12 project__details-area-list">
                    <div class="project__details-area">
                        <p class="mb-35">The Inner Circle Magazine is not just a publication; it's a testament to our commitment to connecting professionals, celebrating their achievements, and providing a platform for growth and recognition. To receive The Inner Circle Magazine, membership with Continental Who's Who is required, ensuring that you become part of this vibrant and influential community. Join us in shaping the narrative of excellence.</p>
                        <p class="mb-35">Become a Member to Receive The Inner Circle Magazine and Unlock Your Potential.</p>                          
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="mb-30">The Inner Circle Magazine:</h3>
                    <div data-url="https://issuu.com/oikantik/docs/julie_harrigan_-_magazine_fall_2023" style="width: 100%; height: 800px;" class="issuuembed issuu-isrendered"><iframe src="https://e.issuu.com/embed.html?identifier=0ccdo2uxohno&amp;embedType=script&amp;u=oikantik&amp;d=julie_harrigan_-_magazine_fall_2023&amp;p=1" style="border:none;width:100%;height:100%;" title="Document: &quot;The Inner Circle Magazine Fall 2023&quot; loaded from Issuu.com" sandbox="allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-scripts allow-same-origin allow-popups allow-forms" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen allow="clipboard-write"></iframe></div>
                    <script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
                </div>
            </div>

        </div>
    </div>
    <!-- News Details Area End -->



    @include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')