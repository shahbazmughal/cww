@include('includes.header')
    
    <style>
        .page__banner-content > span {
            font-size: 90px;
        }
    </style>

	@include('includes.menu')
    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Blog Posts</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Blog Posts</li>
						</ul>
						<h1>Blog Posts</h1>
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
                <div class="col-xl-12 mb-30">
                    <div class="text-center mb-30">
                        <h2 class="mb-20">Success Chronicles</h2>
                        <h4>Charting Journeys to Excellence, One Story at a Time</h4>
                        <span>AuthorUncover Tips and Industry Insights Along the Way</span>
                    </div>
                </div>
				<div class="col-lg-6 mb-30">
					<div class="blog__two-item page">
						<div class="blog__two-item-image">
							<a href="/business_blog"><img src="public/assets/img/blog/blog-3.jpg" alt=""></a>
							<div class="blog__two-item-image-date">
								<span class="text-three">21</span>
								<span class="text-five">Oct</span>
							</div>
						</div>
						<div class="blog__two-item-content">
							<div class="blog__two-item-content-meta">
								<ul>
									<li><a href="#"><i class="far fa-user"></i>Cww-Admin</a></li>
									<li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
								</ul>
							</div>
							<h4><a href="/business_blog">Perceived as a business person with integrity</a></h4>
                            <p class="mb-25">According to an article published on Fortune’s online magazine earlier this year, consumers are completely distrusting of business executives...</p>
							<a class="btn-six" href="/business_blog">Read More<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 lg-mb-30">
					<div class="blog__two-item page">
						<div class="blog__two-item-image">
							<a href="/professional_blog"><img src="public/assets/img/blog/blog-13.jpg" alt=""></a>
							<div class="blog__two-item-image-date">
								<span class="text-three">21</span>
								<span class="text-five">Oct</span>
							</div>
						</div>
						<div class="blog__two-item-content">
							<div class="blog__two-item-content-meta">
								<ul>
									<li><a href="#"><i class="far fa-user"></i>Cww-Admin</a></li>
									<li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
								</ul>
							</div>
							<h4><a href="/professional_blog">Trust is an essential element to any successful</a></h4>
                            <p class="mb-25"> In a time where corruption and mistrust in the business world is exceedingly publicized, why is it important to continue to trust...</p>
							<a class="btn-six" href="/professional_blog">Read More<i class="far fa-chevron-double-right"></i></a>
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