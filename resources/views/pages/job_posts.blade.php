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
    svg.w-5.h-5 {
        width: 38px;
    }
    .sm\:hidden {
        display: none;
    }
    .hidden.sm\:flex-1 {
        display: flex;
        justify-content: space-between;
    }
    span.relative.shadow-sm.rounded-md {
        box-shadow: none !important;
    }
    a.relative.inline-flex.items-center {
        margin: 5px;
    }
    span.relative.inline-flex.items-center {
        margin: 5px;
    }
    .blog__two-item-image img {
        height: 320px;
        object-fit: cover;
        object-position: top;
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
                    <div class="col-xl-4 col-lg-6 mb-30">
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
        <div class="row mt-80 t-center">
            <div class="col-xl-12">
                <div class="theme__pagination">
                    <ul>
                        <!-- Previous Page Link -->
                        @if ($jobPosts->onFirstPage())
                            <li><a class="disabled" aria-disabled="true">«</a></li>
                        @else
                            <li><a href="{{ $jobPosts->previousPageUrl() }}">«</a></li>
                        @endif

                        <!-- First Page -->
                        <li><a href="{{ $jobPosts->url(1) }}" class="{{ $jobPosts->currentPage() == 1 ? 'active' : '' }}">1</a></li>

                        <!-- Show ellipsis if current page is greater than 3 -->
                        @if ($jobPosts->currentPage() > 3)
                            <li><a class="disabled" aria-disabled="true">...</a></li>
                        @endif

                        <!-- Display Current Page and Next Page (if not at the end) -->
                        @for ($i = max(2, $jobPosts->currentPage() - 1); $i <= min($jobPosts->currentPage() + 1, $jobPosts->lastPage() - 1); $i++)
                            <li><a href="{{ $jobPosts->url($i) }}" class="{{ $jobPosts->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a></li>
                        @endfor

                        <!-- Show ellipsis if there are more pages after the current and next page -->
                        @if ($jobPosts->currentPage() + 1 < $jobPosts->lastPage() - 1)
                            <li><a class="disabled" aria-disabled="true">...</a></li>
                        @endif

                        <!-- Last Page -->
                        @if ($jobPosts->lastPage() > 1)
                            <li><a href="{{ $jobPosts->url($jobPosts->lastPage()) }}" class="{{ $jobPosts->currentPage() == $jobPosts->lastPage() ? 'active' : '' }}">{{ $jobPosts->lastPage() }}</a></li>
                        @endif

                        <!-- Next Page Link -->
                        @if ($jobPosts->hasMorePages())
                            <li><a href="{{ $jobPosts->nextPageUrl() }}">»</a></li>
                        @else
                            <li><a class="disabled" aria-disabled="true">»</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Posts List End -->

@include('includes.footer')
@include('includes.scripts')