@include('includes.header')
	<style>
		.page__banner-content > span {
			font-size: 70px;
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
                        <span>Media Room</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Media Room</li>
						</ul>
						<h1>Media Room</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->

    <!-- News Details Area Start -->
    <div class="news__details section-padding pb-0">
        <div class="container">
            <!-- pricing__area-item -->
			<div class="row align-items-start">
                <h2 class="text-center mb-10">Media Room</h2>
                <p class="text-center mb-30 pb-30">Breaking News and Notable Achievements: Discover the Latest Press Releases from Continental Who's Who</p>
			</div>
        </div>
    </div>
    <!-- News Details Area End -->

    <!-- Blog Area Start -->
	<div class="blog__two section-padding pt-0">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-6 mb-30">
                    <div class="blog__two-item page">
						<div class="blog__two-item-image">
							<a href="/press_releases/details"><img src="/public/assets/img/blog/blog-5.jpg" alt=""></a>
							<div class="blog__two-item-image-date">
								<span class="text-three">05</span>
								<span class="text-five">Feb</span>
							</div>
						</div>
						<div class="blog__two-item-content">
							<div class="blog__two-item-content-meta">
								<ul>
									<li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
									<li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
								</ul>
							</div>
							<h4><a href="/press_releases/details">US Shoots Down Balloon</a></h4>
							<a class="btn-six" href="/press_releases/details">Read More<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 xl-mb-30">
					<div class="blog__two-item page">
						<div class="blog__two-item-image">
							<a href="/press_releases/details"><img src="/public/assets/img/blog/blog-5.jpg" alt=""></a>
							<div class="blog__two-item-image-date">
								<span class="text-three">05</span>
								<span class="text-five">Feb</span>
							</div>
						</div>
						<div class="blog__two-item-content">
							<div class="blog__two-item-content-meta">
								<ul>
									<li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
									<li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
								</ul>
							</div>
							<h4><a href="/press_releases/details">US Shoots Down Balloon</a></h4>
							<a class="btn-six" href="/press_releases/details">Read More<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__two-item page">
						<div class="blog__two-item-image">
							<a href="/press_releases/details"><img src="/public/assets/img/blog/blog-5.jpg" alt=""></a>
							<div class="blog__two-item-image-date">
								<span class="text-three">05</span>
								<span class="text-five">Feb</span>
							</div>
						</div>
						<div class="blog__two-item-content">
							<div class="blog__two-item-content-meta">
								<ul>
									<li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
									<li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
								</ul>
							</div>
							<h4><a href="/press_releases/details">US Shoots Down Balloon</a></h4>
							<a class="btn-six" href="/press_releases/details">Read More<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
            <div class="row mt-80 t-center">
                <div class="col-xl-12">
                    <div class="theme__pagination">
                        <ul>
                            <li><a class="active" href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#"><i class="far fa-ellipsis-h"></i></a></li>
                            <li><a href="#">05</a></li>
                            <li><a href="#"><i class="fas fa-chevron-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>                
            </div>
		</div>
	</div>
	<!-- Blog Area End -->



    @include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')