@include('includes.header')
	<style>
        .page__banner-content > span {
            font-size: 60px;
        }
	</style>
	@include('includes.menu')
	
	<!-- Page Banner Area Start -->
	<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Community Posts</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Community Posts</li>
						</ul>
						<h1>Community Posts</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->

	<!-- Blog Area Start -->
	<div class="blog__two section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-6 mb-30">
					<div class="blog__two-item page">
						<div class="blog__two-item-image">
							<a href="./community_posts/id"><img src="public/assets/img/blog/blog-3.jpg" alt=""></a>
							<div class="blog__two-item-image-date">
								<span class="text-three">24</span>
								<span class="text-five">Dec</span>
							</div>
						</div>
						<div class="blog__two-item-content">
							<div class="blog__two-item-content-meta">
								<ul>
									<li><a href="#"><i class="far fa-user"></i>By-Cww</a></li>
									<li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
								</ul>
							</div>
							<h4><a href="./community_posts/id">Community Posts Here</a></h4>
							<a class="btn-six" href="./community_posts/id">Read More<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__two-item page">
						<div class="blog__two-item-image">
							<a href="./community_posts/id"><img src="public/assets/img/blog/blog-13.jpg" alt=""></a>
							<div class="blog__two-item-image-date">
								<span class="text-three">21</span>
								<span class="text-five">Dec</span>
							</div>
						</div>
						<div class="blog__two-item-content">
							<div class="blog__two-item-content-meta">
								<ul>
									<li><a href="#"><i class="far fa-user"></i>By-Cww</a></li>
									<li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
								</ul>
							</div>
							<h4><a href="./community_posts/id">Community Posts Here</a></h4>
							<a class="btn-six" href="./community_posts/id">Read More<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__two-item page">
						<div class="blog__two-item-image">
							<a href="./community_posts/id"><img src="public/assets/img/blog/blog-10.jpg" alt=""></a>
							<div class="blog__two-item-image-date">
								<span class="text-three">19</span>
								<span class="text-five">Dec</span>
							</div>
						</div>
						<div class="blog__two-item-content">
							<div class="blog__two-item-content-meta">
								<ul>
									<li><a href="#"><i class="far fa-user"></i>By-Cww</a></li>
									<li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
								</ul>
							</div>
							<h4><a href="./community_posts/id">Community Posts Here</a></h4>
							<a class="btn-six" href="./community_posts/id">Read More<i class="far fa-chevron-double-right"></i></a>
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