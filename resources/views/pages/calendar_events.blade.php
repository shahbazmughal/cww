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
		.calendar .event-container {
			background: var(--primary-color-1) !important;
		}
			
		@media (max-width: 520px) {
			.calendar td {
				padding: 5px 0px;
				height: 50px;
			}
			.calendar .day.has-event:after {
				top: calc(50% + 14px);
			}
			.calendar-container {
				margin: 0px auto;
			}
			.calendar .event-container {
				padding: 20px;
			}
			.calendar .event-container .event-date {
				margin-bottom: 2px;
			}
			.calendar .event-container .event {
				padding: 8px 12px;
			}
			.calendar .event-container .close {
				z-index: 2;
				width: 20px;
				height: 20px;
				top: 10px;
				right: 10px;
			}
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
    $(document).ready(function () {
        $.ajax({
            url: '{{ route('events.fetch') }}',
            method: 'GET',
            success: function (response) {
                $('#container').simpleCalendar({
                    fixedStartDay: 0, // begin weeks by Sunday
                    disableEmptyDetails: true,
                    events: response.map(event => ({
                        startDate: new Date(event.startDate),
                        endDate: new Date(event.endDate),
                        summary: event.summary
                    })),
                });
            },
            error: function (xhr, status, error) {
                console.error('Failed to fetch events:', error);
            }
        });
    });
</script>


	@include('includes.html')