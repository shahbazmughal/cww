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
            @if($communityPosts->isEmpty())
            <p>No community posts available.</p>
            @else
                @foreach($communityPosts as $communityPost)
                    <div class="col-xl-4 col-lg-6 mb-30">
                        <div class="blog__two-item page">
                            <div class="blog__two-item-image">
                                @if($communityPost->community_post_image)
                                <a href="/community_posts/id"><img src="public/{{ Storage::url($communityPost->community_post_image) }}" alt="Community Post Image" width="200"></a>
                                @endif
                                <div class="blog__two-item-image-date">
                                    <span class="text-three">19</span>
                                    <span class="text-five">Dec</span>
                                </div>
                            </div>
                            <div class="blog__two-item-content">
                                <div class="blog__two-item-content-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                        <li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
                                    </ul>
                                </div>
                                <p><strong>Name:</strong> {{ $communityPost->first_name }} {{ $communityPost->last_name }}</p>
                                <p><strong>Email:</strong> {{ $communityPost->email }}</p>
                                <p class="limit-words"><strong>Message:</strong> {{ $communityPost->message }}</p>
                                <a class="btn-six" href="/community_posts/id">Read More<i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row mt-80 t-center">
            <div class="col-xl-12">
                <div class="theme__pagination">
                    <ul>
                        <!-- Previous Page Link -->
                        @if ($communityPosts->onFirstPage())
                            <li><a class="disabled" aria-disabled="true">«</a></li>
                        @else
                            <li><a href="{{ $communityPosts->previousPageUrl() }}">«</a></li>
                        @endif

                        <!-- First Page -->
                        <li><a href="{{ $communityPosts->url(1) }}" class="{{ $communityPosts->currentPage() == 1 ? 'active' : '' }}">1</a></li>

                        <!-- Show ellipsis if current page is greater than 3 -->
                        @if ($communityPosts->currentPage() > 3)
                            <li><a class="disabled" aria-disabled="true">...</a></li>
                        @endif

                        <!-- Display Current Page and Next Page (if not at the end) -->
                        @for ($i = max(2, $communityPosts->currentPage() - 1); $i <= min($communityPosts->currentPage() + 1, $communityPosts->lastPage() - 1); $i++)
                            <li><a href="{{ $communityPosts->url($i) }}" class="{{ $communityPosts->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a></li>
                        @endfor

                        <!-- Show ellipsis if there are more pages after the current and next page -->
                        @if ($communityPosts->currentPage() + 1 < $communityPosts->lastPage() - 1)
                            <li><a class="disabled" aria-disabled="true">...</a></li>
                        @endif

                        <!-- Last Page -->
                        @if ($communityPosts->lastPage() > 1)
                            <li><a href="{{ $communityPosts->url($communityPosts->lastPage()) }}" class="{{ $communityPosts->currentPage() == $communityPosts->lastPage() ? 'active' : '' }}">{{ $communityPosts->lastPage() }}</a></li>
                        @endif

                        <!-- Next Page Link -->
                        @if ($communityPosts->hasMorePages())
                            <li><a href="{{ $communityPosts->nextPageUrl() }}">»</a></li>
                        @else
                            <li><a class="disabled" aria-disabled="true">»</a></li>
                        @endif
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