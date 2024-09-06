@include('includes.header')
<style>
    .page__banner-content > span {
        font-size: 100px;
    }
    .ck-editor__editable[role="textbox"] {min-height: 300px;}
    input#job_post_image {
        height: 3.5rem;
        line-height: 2.6rem;
        font-size: 15px;
        color: var(--body-color);
    }
    input#job_post_image:focus {
        color: var(--text-heading-color);
        outline: none;
        box-shadow: none;
        border-color: var(--primary-color-1);
    }
    .ck.ck-button, a.ck.ck-button {
        position: static !important;
    }
</style>
@include('includes.menu')

<!-- Page Banner Area Start -->
<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>Submit Job</span>
                    <ul>
                        <li><a href="/">Home</a><span>|</span></li>
                        <li>Submit Job</li>
                    </ul>
                    <h1>Submit Job</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->

<!-- Contact Form Start -->
<div class="submit__job section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact__four-form t-center">
                    <div class="contact__four-form-title">    
                        <h2>Job Post Submission Form</h2>
                    </div>
                    <form action="{{ route('job_posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="fal fa-user"></span>
                                    <input type="text" name="first_name" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="fal fa-user"></span>
                                    <input type="text" name="last_name" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="far fa-envelope-open"></span>
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="fal fa-book"></span>
                                    <input type="text" name="job_title" placeholder="Job Title" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <input class="form-control" type="file" id="job_post_image" name="job_post_image">
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="contact__two-right-form-item conbix-contact-item">
                                    <span class="far fa-comments"></span>
                                    <textarea id="editor" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact__two-right-form-item">
                                    <button class="btn-one" type="submit">Submit Job Post <i class="far fa-chevron-double-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form End -->

@include('includes.footer')

@include('includes.scripts')

<script type="text/javascript" src="public/assets/js/ckeditor.js"></script>
<script type="text/javascript" src="public/assets/js/editor.js"></script>
<script>
    $(document).ready(function() {
        $('#jobPostForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('job_posts.store') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#alert-container').html(
                        `<div class="alert alert-success alert-dismissible fade show" role="alert">
                            ${response.success}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>`
                    );
                    $('#jobPostForm')[0].reset();
                    window.location.href = "{{ route('job_posts.index') }}";
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                    $.each(errors, function(key, error) {
                        errorHtml += `<p>${error}</p>`;
                    });
                    errorHtml += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                    errorHtml += '<span aria-hidden="true">&times;</span></button></div>';
                    $('#alert-container').html(errorHtml);
                }
            });
        });
    });
</script>
@include('includes.html')