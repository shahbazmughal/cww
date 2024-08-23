@include('includes.header')
	<style>

		.ck-editor__editable[role="textbox"] {min-height: 300px;}
		input#job_post_image:focus {
			color: var(--text-heading-color);
			outline: none;
			box-shadow: none;
			border-color: var(--primary-color-1);
		}
	</style>
	@include('includes.menu')
	
		<!-- Page Banner Area Start -->
		<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span></span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li></li>
						</ul>
						<h1></h1>
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
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="fal fa-user"></span>
                                        <input type="text" name="fname" placeholder="First Name" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="fal fa-user"></span>
                                        <input type="text" name="lname" placeholder="Last Name" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="far fa-envelope-open"></span>
                                        <input type="email" name="email" placeholder="Email Address" required="required">											
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="fal fa-book"></span>
                                        <input type="text" name="job_title" placeholder="Job Title">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
										<input class="form-control" type="file" name="job_post[image]" id="job_post_image">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <span class="far fa-comments"></span>
                                        <div id="editor"></div>
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
	<script type="text/javascript" src="public/assets/js/ckeditor.js"></script>
	<script type="text/javascript" src="public/assets/js/editor.js"></script>
	@include('includes.scripts')
	@include('includes.html')