@include('includes.header')
	<link rel="stylesheet" href="public/assets/css/simple-calendar.css" />
    <style> 
        .page__banner-content > span {
            font-size: 60px;
        }
		.calendar-container{
			position: relative;
			margin: 50px auto;
			max-width: 1200px;
		}
		.calendar thead td {
			height: 30px;
			padding: 5px 0px;
		}
		.calendar td {
			padding: 15px 5px;
			height: 120px;
			border: 1px solid #CBD1D2;
		}
		.calendar header .simple-calendar-btn:before {
			top: 14px;
			left: 13px;
		}
		.calendar header .simple-calendar-btn {
			width: 40px;
			height: 40px;
		}
		.calendar .day.has-event:after {
			top: calc(50% + 27px);
			left: calc(50% - 4px);
			width: 7px;
			height: 7px;
		}
    </style>

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
				<div id="container" class="calendar-container"></div>
            </div>
        </div>
    </div>
	<!-- Caldender Events End -->

	@include('includes.footer')

    
	
	@include('includes.scripts')

	<script type="text/javascript" src="public/assets/js/jquery.simple-calendar.js"></script>
	<script>
		var $calendar;
		$(document).ready(function () {
			let container = $("#container").simpleCalendar({
			fixedStartDay: 0, // begin weeks by sunday
			disableEmptyDetails: true,
			events: [
				// generate new event after tomorrow for one hour
				{
				startDate: new Date(new Date().setHours(new Date().getHours() + 24)).toDateString(),
				endDate: new Date(new Date().setHours(new Date().getHours() + 25)).toISOString(),
				summary: 'Visit of the Eiffel Tower'
				},
				// generate new event for yesterday at noon
				{
				startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
				endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
				summary: 'Restaurant'
				},
				// generate new event for the last two days
				{
				startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
				endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
				summary: 'Visit of the Louvre'
				}
			],

			});
			$calendar = container.data('plugin_simpleCalendar')
		});
	</script>
	
	@include('includes.html')