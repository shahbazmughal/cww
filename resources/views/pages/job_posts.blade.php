@include('includes.header')
<style>
    .page__banner-content > span {
        font-size: 100px;
    }
    .job-posts-list {
        margin-top: 20px;
    }
    .job-post-item {
        margin-bottom: 20px;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
    }
    .job-post-image {
        max-width: 100px;
        height: auto;
    }
    .limit-words {
        display: -webkit-box;
        -webkit-line-clamp: 1; /* Number of lines to show */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        width: 100%; /* Adjust width as needed */
    }
</style>
@include('includes.menu')

<!-- Page Banner Area Start -->
<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>Job Posts</span>
                    <ul>
                        <li><a href="/">Home</a><span>|</span></li>
                        <li>Job Posts</li>
                    </ul>
                    <h1>Job Posts</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Job Posts List Start -->
<div class="job-posts-list section-padding">
    <div class="container">
        <div class="row">
        @if($jobPosts->isEmpty())
            <p>No job posts available.</p>
        @else
            @foreach($jobPosts as $jobPost)
                <div class="col-xl-4 col-lg-6 lg-mb-30">
					<div class="blog__two-item page">
						<div class="blog__two-item-image">
                            @if($jobPost->job_post_image)
                            <a href="/job_posts/id"><img src="public/{{ Storage::url($jobPost->job_post_image) }}" alt="Job Post Image" width="200"></a>
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
							<p><strong>Name:</strong> {{ $jobPost->first_name }} {{ $jobPost->last_name }}</p>
                            <p><strong>Email:</strong> {{ $jobPost->email }}</p>
                            <p class="limit-words"><strong>Message:</strong> {{ $jobPost->message }}</p>
							<a class="btn-six" href="/job_posts/id">Read More<i class="far fa-chevron-double-right"></i></a>
						</div>
					</div>
				</div>
            @endforeach
        @endif

           
        </div>
    </div>
</div>
<!-- Job Posts List End -->

@include('includes.footer')
@include('includes.scripts')