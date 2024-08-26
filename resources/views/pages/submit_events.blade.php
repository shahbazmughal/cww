@include('includes.header')
    <link href="public/assets/css/jquery.datepicker2.css" rel="stylesheet" />
	<style>
        .page__banner-content > span {
            font-size: 60px;
        }
		.ck-editor__editable[role="textbox"] {min-height: 200px;}
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
        .jquery-datepicker.theme-light {
            z-index: 999;
        }
        .jquery-datepicker.theme-light .datepicker-box .box-row.row-week .box-cell.cell-selected {
            background: #3d4955;
            color: #FFFFFF;
        }
        .jquery-datepicker {
            width: 300px;
            height: 300px;
        }
        .jquery-datepicker.theme-light .datepicker-box .box-row.row-week .box-cell.cell-today {
            /* background: #FFFFFF;
            color: #3d4955; */
            font-weight: 800;
        }
        .jquery-datepicker .datepicker-box .box-row .box-cell {
            cursor: pointer;
        }
    </style>
	@include('includes.menu')
	
	<!-- Page Banner Area Start -->
	<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Submit Caldender</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Submit Caldender Event</li>
						</ul>
						<h1>Submit Caldender</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->

	<!-- Content Area Start -->
	<div class="contact__three pb-3 section-padding">
        <div class="container">
            <div class="row">
				<div class="text-center">
					<h2 class="mb-10">Instructions</h2>
					<p class="mb-20">The CWW team will review your event details and potentially post them directly to our events calendar.</p>
				</div>
                <div class="col-xl-4 col-md-6 lg-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="public/assets/img/icon/call.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Event Details</h4>
							<p>Enter the details <br>regarding your event.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 md-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="public/assets/img/icon/services-1.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Image Represent</h4>
                            <p>Upload an image to <br>represent your event.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="public/assets/img/icon/services-2.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Submit Review</h4>
							<p>Submit the form for review.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Content Area End -->

	<!-- Submit Caldender Events Start -->
	<div class="submit__community section-padding pt-5">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
                    <div class="contact__four-form t-center">
                        <div class="contact__four-form-title">	
                            <h2>Submit an Event Form</h2>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <input type="text" name="event_title" placeholder="Event title" required="required">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="contact__two-right-form-item conbix-contact-item">
										<input class="form-control" type="file" name="job_post[image]" id="job_post_image">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <input type="text" name="start_date" placeholder="Start Date" data-select="datepicker" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <input type="text" name="end_date" placeholder="End Date" data-select="datepicker" required="required">											
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="contact__two-right-form-item conbix-contact-item">
                                        <div id="editor"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact__two-right-form-item">
                                        <button class="btn-one" type="submit">Submit Caldender Post <i class="far fa-chevron-double-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- Submit Caldender Events End -->

	@include('includes.footer')
	
	@include('includes.scripts')
	<script type="text/javascript" src="public/assets/js/ckeditor.js"></script>
	<script type="text/javascript" src="public/assets/js/editor.js"></script>
    <script type="text/javascript" src="public/assets/js/jquery.datepicker2.js"></script>
	@include('includes.html')