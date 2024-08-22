@include('includes.header')
    <style> 
        .page__banner-content > span {
            font-size: 60px;
        }
    </style>
    <link rel="stylesheet" href="public/assets/css/flatpickr.min.css" />
	@include('includes.menu')
	
		<!-- Page Banner Area Start -->
		<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Caldender Events</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Caldender Events</li>
						</ul>
						<h1>Caldender Events</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->

    <!-- Caldender Events Start -->
    <div class="calender__events section-padding">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </div>
	<!-- Caldender Events End -->

	@include('includes.footer')

    <script type="text/javascript" src="public/assets/js/flatpickr.js"></script>
	
	@include('includes.scripts')