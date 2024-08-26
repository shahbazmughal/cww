@include('includes.header')
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	
	<style>
		.page__banner-content > span {
            font-size: 70px;
        }
		.team__area-item-content {
			text-align: left !important;
			margin: -60px 15px 0 !important;
			overflow: hidden;
		}
		.team__area-item-content.page h4 {
			margin-bottom: 10px;
			font-size: 18px;
			line-height: 1.5;
		}
		.team__area-item-content .simple-btn-2 i {
			margin-left: 0;
			margin-right: 7px;
			font-size: 16px;
		}
		.team__area-item-content .simple-btn-2 {
			margin-top: 15px;
			margin-bottom: 0px;
			font-size: 13px;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			display: flex;
			align-items: center;
		}
		.team__area-item-content .simple-btn-2 span {
			white-space: nowrap;
			display: inline-block;
			overflow: hidden;
			text-overflow: ellipsis;
		}
		.form-select{
			color: var(--body-color);
			border-radius: 6px;
			width: 100%;
			height: 60px;
			border: 1px solid var(--border-color-2);
			padding: 0 15px;
			background: var(--bg-white);
		}
		.form-select:focus {
			color: var(--text-heading-color);
			outline: none;
			box-shadow: none;
			border-color: var(--primary-color-1);
		}
		.team__area-item-image {
			display: block;
			background: #f0f0f0;
		}
		.team__area-item-image img {
			width: 100%;
			margin-bottom: 50px;
		}
		span.location-away {
			font-size: 14px;
			color: #999;
		}
		.section-padding {
			padding: 120px 0px 70px;
		}
		.contact__two-map {
			margin-top: 0;
		}
		.select2-container--default .select2-selection--single {
			background-color: #fff;
			border: 1px solid var(--border-color-2);
			border-radius: 6px !important;
		}
		.select2-dropdown {
			border: 1px solid var(--border-color-2);
		}
		.select2-container .select2-selection--single {
			height: 60px;
		}
		.select2-container--default .select2-selection--single .select2-selection__rendered {
			color: var(--body-color);
			line-height: 58px;
			padding: 0 15px !important;
		}
		.select2-container--default .select2-selection--single .select2-selection__arrow {
			height: 60px;
			right: 8px;
		}
		.select2-search--dropdown .select2-search__field {
			padding: 10px;
			height: 40px;
		}
		.select2-search--dropdown {
			padding: 10px;
		}
	</style>
	@include('includes.menu')
	
	<!-- Page Banner Area Start -->
	<div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Member Search</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Member Search</li>
						</ul>
						<h1>Member Search</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->


	<!-- Contact Area Start -->
	<div class="pb-0 mt-120">
        <div class="container">
            <div class="row contact__two-box">
                <div class="col-xl-12 col-lg-6">
                    <div class="contact__two-right">
                        <h3 class="mb-5 text-center">The results shown are in proximity to your search.</h3> 
                        <div class="contact__two-right-form">
                            <form action="#" method="get" id="form-members">
                                <div class="row">
                                    <div class="col-md-6 mb-50">
										<label class="fw-bold">Industry</label>
                                        <div class="contact__two-right-form-item">
											<select class="form-select m-select2" name="industry" data-placeholder="Select Industry">
												<option value="">Select Industry</option>
												<option value="175"> Behavioral Health</option>
												<option value="216">****738972 71477 738972 100154 1 Inner Circle Lifetime 3/27/2024 3/27/2024 Continental Who's Who Custom Wall Plaque Expanded Biographical Profile Access to Benefits And Privileges 900 0 0 49 949 _x000B__x000B_</option>
												<option value="206">Academia</option>
												<option value="42">Accounting</option>
												<option value="53">Administarative and Support Service</option>
												<option value="49">Advertising/Marketing/Public Relations</option>
												<option value="79">Aerospace/Aviation</option>
												<option value="59">Agriculture and food production</option>
												<option value="62">Architecture and Design</option>
												<option value="64">Arts</option>
												<option value="134">Arts and Crafts</option>
												<option value="43">Arts: Fine Arts/Visual/Graphic Design</option>
												<option value="54">Arts: Literary/Poetry</option>
												<option value="90">Arts: Performing</option>
												<option value="130">Astrology/Numerology</option>
												<option value="9">Author</option>
												<option value="50">Automotive</option>
												<option value="159">Biopharma and Pharmaceutical Industry</option>
												<option value="46">Building and Construction</option>
												<option value="200">Business</option>
												<option value="16">Business Development/Strategic Planning</option>
												<option value="152">Business lending</option>
												<option value="207">Business Litigation</option>
												<option value="102">Business Management/Operations/Logistics</option>
												<option value="194">C Corp</option>
												<option value="155">Civil Litigation</option>
												<option value="204">Clean Energy</option>
												<option value="174">Coaching</option>
												<option value="37">Communications/Media</option>
												<option value="192">Community practice</option>
												<option value="20">Community/Charities/Nonprofit Organizations</option>
												<option value="111">Compliance</option>
												<option value="97">Conflict Resolution/Mediation</option>
												<option value="196">Construction and Demolition Industry</option>
												<option value="156">Consultancy </option>
												<option value="165">Consulting</option>
												<option value="213">Consulting Firm</option>
												<option value="11">Consulting Services</option>
												<option value="51">Contracting</option>
												<option value="151">Corporate restructuring and turnaround</option>
												<option value="56">Cosmetics/Beauty/Spa</option>
												<option value="157">Counseling Children</option>
												<option value="116">Courier Services</option>
												<option value="60">Customer Service</option>
												<option value="177">Dental</option>
												<option value="202">Digital &amp; Business Transformation</option>
												<option value="73">Distribution</option>
												<option value="114">E-Commerce</option>
												<option value="55">Ecology/Environment/Forestry</option>
												<option value="120">Economics/Statistics</option>
												<option value="13">Education</option>
												<option value="139">Education: Graduate Student/Ph. D Candidate</option>
												<option value="31">Education: Higher Education/College/University</option>
												<option value="115">Education: Primary Education</option>
												<option value="118">Education: Secondary Education</option>
												<option value="93">Education: Special Education</option>
												<option value="105">Education: Teacher</option>
												<option value="164">Educational Administration</option>
												<option value="209">Elder Law </option>
												<option value="82">Emergency Rescue Services Engineering</option>
												<option value="23">Engineering</option>
												<option value="30">Entertainment</option>
												<option value="41">Entrepreneur</option>
												<option value="183">Environmental Consulting</option>
												<option value="181">Estate Planning Law</option>
												<option value="214">Estate Planning Probate Law </option>
												<option value="58">Event Management/Promotions</option>
												<option value="72">Executive/Officer</option>
												<option value="94">Facilities Management/Maintenance</option>
												<option value="201">Family Law </option>
												<option value="208">Family Law Legal Services </option>
												<option value="88">Fashion</option>
												<option value="33">Finance</option>
												<option value="40">Finance: Banking/Credit Services</option>
												<option value="80">Finance: Investment Services</option>
												<option value="91">Finance: Mortgages/ Loans</option>
												<option value="119">Floral</option>
												<option value="6">Food Service/Restaurant</option>
												<option value="121">Funeral Services</option>
												<option value="89">Gaming/Casino</option>
												<option value="45">Government/Municipal</option>
												<option value="189">Harley Davidson-Motorcycle Mechanics</option>
												<option value="47">Health and Fitness Healthcare</option>
												<option value="167">Health Care System</option>
												<option value="184">Health Prevention &amp; Coaching </option>
												<option value="172">Healthcare</option>
												<option value="215">Healthcare Construction</option>
												<option value="162">Healthcare Nurse Education</option>
												<option value="158">Healthcare Support Systems and Design</option>
												<option value="198">Healthcare,Business Development,Government</option>
												<option value="2">Healthcare: Administration</option>
												<option value="65">Healthcare: Dentistry</option>
												<option value="12">Healthcare: Doctor</option>
												<option value="14">Healthcare: Health Services/Mental Wellness/Therapy</option>
												<option value="5">Healthcare: Nursing</option>
												<option value="24">Healthcare: Other</option>
												<option value="85">Healthcare: Physical Therapy</option>
												<option value="136">Healthcare: Physician Assistant</option>
												<option value="212">High Quality Seed &amp; Crop Products</option>
												<option value="69">Home Improvement</option>
												<option value="187">Home Inspection/Property Management</option>
												<option value="98">Hospitality</option>
												<option value="92">Human Resources</option>
												<option value="141">Human Services</option>
												<option value="188">Humanitarian Work and Leadership</option>
												<option value="176">Hydrogen</option>
												<option value="170">Immigrant Woman Empowerment Consulting</option>
												<option value="168">Independent lecturer and researcher in addiction treatment, prevention and related issues (i.e., suicide and self-inflicted injury, eating disorders)</option>
												<option value="4">Information Technology</option>
												<option value="145">Information Technology: Hardware</option>
												<option value="44">Information Technology: Systems/Network Administration</option>
												<option value="70">Information Technology: Web Design</option>
												<option value="205">Insurance Coverage and Liability Defense Law</option>
												<option value="34">Insurance Services</option>
												<option value="195">Intellectual Property Trademark Copyright</option>
												<option value="127">Intellectual Property: Patents and Trademarks</option>
												<option value="109">Internet Company</option>
												<option value="101">Jewelry Journalism</option>
												<option value="18">Kennel/Pet Care/Grooming</option>
												<option value="75">Law Enforcement/Security/Corrections</option>
												<option value="190">Law Firm</option>
												<option value="113">Lawn Care/Landscaping</option>
												<option value="163">Leadership &amp; Innovation</option>
												<option value="203">Leadership Coaching &amp; Support,Manufacturing</option>
												<option value="160">Legal</option>
												<option value="25">Legal Services: Attorney/Partner/Judge</option>
												<option value="66">Legal Services: Other</option>
												<option value="138">Legal Services: Paralegal/Clerk</option>
												<option value="15">Libraries/Museums/Galleries</option>
												<option value="83">Lifestyle and Business Coaching</option>
												<option value="122">Linguistic/Translation/Interpreting</option>
												<option value="180">Literary, Publishing Company</option>
												<option value="185">LLC</option>
												<option value="108">Mail and Postal Services</option>
												<option value="67">Management</option>
												<option value="36">Manufacturing/Production/Machinery</option>
												<option value="28">Massage Therapy/Spa</option>
												<option value="166">Mathematics Education</option>
												<option value="154">Medical</option>
												<option value="87">Membership Organizations</option>
												<option value="147">Merchandising</option>
												<option value="26">Military/Defense/Armed Services</option>
												<option value="71">Mining/Oil and Gas Extraction</option>
												<option value="77">Music/Music Management</option>
												<option value="149">n/a</option>
												<option value="123">Nautical/Marine</option>
												<option value="146">Negotiations/Contract Administration</option>
												<option value="179">Non-profit</option>
												<option value="131">Notary Public</option>
												<option value="74">Nutrition/Dietician</option>
												<option value="182">Occupational Safety Health and Construction</option>
												<option value="211">Oceanography Marine and Atmospheric Science</option>
												<option value="191">Oncology Care</option>
												<option value="169">Ophthalmology</option>
												<option value="133">Other</option>
												<option value="57">Personal Development</option>
												<option value="161">Pharmaceutical</option>
												<option value="193">Pharmaceutical Services</option>
												<option value="21">Pharmaceuticals/Biotechnology</option>
												<option value="125">Philanthropy/Fundraising</option>
												<option value="153">Photo Art,Interior Design Model,Portfolio</option>
												<option value="38">Photography</option>
												<option value="144">Politics</option>
												<option value="103">Private Investigations</option>
												<option value="150">Private Practice</option>
												<option value="63">Product Development</option>
												<option value="129">Product Management</option>
												<option value="178">Project Management</option>
												<option value="142">Public Health</option>
												<option value="99">Public Safety</option>
												<option value="61">Public Service</option>
												<option value="48">Public Speaking</option>
												<option value="52">Publishing/Editing/Typesetting</option>
												<option value="140">Purchasing</option>
												<option value="96">Quality Control/Safety</option>
												<option value="3">Real Estate</option>
												<option value="19">Recruitment/Executive Search Firm</option>
												<option value="76">Religion/Spiritual Services</option>
												<option value="104">Repair</option>
												<option value="110">Research (Non-Scientific)</option>
												<option value="35">Research and Development (Science and Technology)</option>
												<option value="32">Residential Care/ Nursing Home/ Long Term Care</option>
												<option value="171">Residential Real Estate </option>
												<option value="1">Retail</option>
												<option value="81">Retired</option>
												<option value="8">Sales</option>
												<option value="100">Sciences: Chemical, Physics, Biological, Etc</option>
												<option value="106">Security</option>
												<option value="199">Senior Living/Healthcare</option>
												<option value="117">Social Services</option>
												<option value="132">Social Services: Adult Services/Geriatric</option>
												<option value="107">Social Services: Child Care</option>
												<option value="135">Social Services: Education/Adult and Child</option>
												<option value="39">Social Services: Family Counseling / Parenting</option>
												<option value="17">Social Services: Rehabilitation/Counseling</option>
												<option value="197">Spa Services </option>
												<option value="124">Speech Pathology</option>
												<option value="112">Sports/Recreation</option>
												<option value="210">Supply Chain Managemet</option>
												<option value="143">technology: Digital Media/</option>
												<option value="29">Technology: Digital Media/Electronics Telecommunications</option>
												<option value="10">Television/Film/Radio</option>
												<option value="84">Trade Industry/Import/Export</option>
												<option value="22">Training</option>
												<option value="68">Transcription Services</option>
												<option value="78">Transportation Services and Logistics</option>
												<option value="27">Travel/Tourism</option>
												<option value="173">University Hospital</option>
												<option value="7">Utilities/Energy/Resources</option>
												<option value="126">Veterinary</option>
												<option value="128">Volunteer</option>
												<option value="137">Waste Management</option>
												<option value="186">Water Marine Insurance</option>
												<option value="86">Wholesale</option>
												<option value="148">Wildlife</option>
												<option value="95">Zoology</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-50">
										<label class="fw-bold">Title</label>
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <input type="text" name="title" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-50">
										<label class="fw-bold">Name</label>
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <input type="text" name="name" placeholder="Full Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-50">
										<label class="fw-bold">Company</label>
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <input type="text" name="Company" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 md-mb-30">
										<label class="fw-bold">Keyword</label>
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <input type="text" name="keyword" placeholder="Keyword">											
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-50">
										<label class="fw-bold">Location</label>
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <input type="text" name="Location" value="" placeholder="Location">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact__two-right-form-item">
                                            <button class="btn-one" type="submit">Find Members <i class="far fa-chevron-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>        
    <!-- Contact Area End -->


	<!-- Member Search Start -->
	<div class="member__search section-padding">
        <div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Muhammad Azam Razzak</a></h4>
							<p>Active 3 weeks ago</p>
							
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> <span>Dubai - UAE</span>
							</div>
							<span class="location-away">1246 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Zacharias Sundstrom</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Helsinki - Finland
							</div>
							<span class="location-away">2979 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Maria Iskra</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i>  Poznan - NY
							</div>
							<span class="location-away">3179 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Dr. Sven Grutzmeier</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Stockholm - Sweden
							</div>
							<span class="location-away">3196 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Jacob Rix</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Copenhagen - NY
							</div>
							<span class="location-away">3367 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Ole Jakobson</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Vedbaek - NY
							</div>
							<span class="location-away">3369 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">S¯ren Br¯gger Christensen</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Niva - NY
							</div>
							<span class="location-away">3371 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Susanne Borcher Stormer</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Bagsvaerd - NY
							</div>
							<span class="location-away">3372 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Bernt M. Christensen</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Helsinge - NY
							</div>
							<span class="location-away">3384 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Achim Deboeser</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> <span>Schondorf am Ammersee - Bavaria</span>
							</div>
							<span class="location-away">3440 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Oliver Von Schweinitz</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Hamburg - Germany
							</div>
							<span class="location-away">3468 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Philo K. Holland, III</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Wuerzburg - Bavaria
							</div>
							<span class="location-away">3483 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Ubaldo Caracino</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Milan - Italy
							</div>
							<span class="location-away">3549 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Thomas R. Barth</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Herrliberg - Switzerland
							</div>
							<span class="location-away">3560 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Natalie Kouzeleas</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Marano Ticino - NO
							</div>
							<span class="location-away">3575 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Servaas Dankers</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Tilburg - Netherlands
							</div>
							<span class="location-away">3685 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Sallian Wildeman-Cox</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Dordrecht - the Netherlands
							</div>
							<span class="location-away">3697 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Natalie Pothier</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Brussels - NY
							</div>
							<span class="location-away">3717 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Thomas de Schaepdrijver</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Aalst Oost- Vlaanderen - Belgium
							</div>
							<span class="location-away">3732 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Ann Biebuyck</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Deinze - Belgium
							</div>
							<span class="location-away">3754 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Louis Levy-Garboua</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Paris - France
							</div>
							<span class="location-away">3829 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Sophie Uettwiler</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Paris - France
							</div>
							<span class="location-away">3831 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Sabine Chen</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Paris - France
							</div>
							<span class="location-away">3831 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Stefan Lavau</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Paris - France
							</div>
							<span class="location-away">3832 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Joelle Gauthier</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Nozay - France
							</div>
							<span class="location-away">3837 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Keveisha Robinson Clark</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Roxbury - MA
							</div>
							<span class="location-away">3850 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">James E. Higgins</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Braintree - MA
							</div>
							<span class="location-away">3871 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">John Lewis</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Boston - MA
							</div>
							<span class="location-away">3884 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Paul Masterson</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> S. Ockendon - Essex
							</div>
							<span class="location-away">3887 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Dr. Khalid Ahmed</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Harlow - Essex
							</div>
							<span class="location-away">3893 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Margaret Short</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Waltham - MA
							</div>
							<span class="location-away">3898 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Emanuela Todeva</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> London - UK
							</div>
							<span class="location-away">3902 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Mark Delicata</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Scunthorpe - North Lincolnshire
							</div>
							<span class="location-away">3903 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Sir Mohammed E. Hawas</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Croydon - UK
							</div>
							<span class="location-away">3906 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Sean M. Connors</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Greenfield - MA
							</div>
							<span class="location-away">3913 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Patrick J. Ingoldsby</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Cheshire - MA
							</div>
							<span class="location-away">3970 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Antony Dodworth</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Crewe - Cheshire
							</div>
							<span class="location-away">3982 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Dina S. Guyetsky</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Newton - MA
							</div>
							<span class="location-away">3985 miles away</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Sergey Zemlyansky</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Gloucester - MA
							</div>
							<span class="location-away">3988 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Regis Lemaitre</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Alloa - CLK
							</div>
							<span class="location-away">3997 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Kyle A. Kaplanis</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Newquay, Cornwall - UK
							</div>
							<span class="location-away">4131 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Tracey L. Jonasson</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Upper Sackville - NS
							</div>
							<span class="location-away">4132 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Steven J. McArdle</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i>  Zurgena Almeria - Spain
							</div>
							<span class="location-away">4250 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Pedro Abad</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> <span>Valverde del Majano - Segovia</span>
							</div>
							<span class="location-away">4278 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Timothy C.S.A. Lujan</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Tumon - Guam
							</div>
							<span class="location-away">4593 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Endymion M. Chen</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Barrigada Heights - NY
							</div>
							<span class="location-away">4593 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Manny Rem D. Santos</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Tamuning - Guam
							</div>
							<span class="location-away">4593 miles away</span>
						</div>
					</div>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-50">
					<div class="team__area-item">
						<div class="team__area-item-image">
							<img src="public/assets/img/avatar/gravatar.jpg" alt="">
						</div>
						<div class="team__area-item-content page">
							<h4><a href="member_profile">Karen C. Gayle</a></h4>
							<p>Active 3 weeks ago</p>
							<div class="simple-btn-2" >
								<i class="fas fa-map-marker-alt"></i> Hagatna - NY
							</div>
							<span class="location-away">4593 miles away</span>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
	<!-- Member Search End -->
	
	
    <!-- Map Area Start -->
    <div class="contact__two-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.569654581897!2d-73.70087029999999!3d40.6614158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c264620af71877%3A0x4119ece99ee38d07!2s33%20W%20Hawthorne%20Ave%2C%20Valley%20Stream%2C%20NY%2011580%2C%20USA!5e0!3m2!1sen!2s!4v1724675610950!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> 
    <!-- Map Area End --> 
	@include('includes.footer')
	
	@include('includes.scripts')
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".m-select2").select2({
				placeholder: 'Select an option'
			});
		});
	</script>
	@include('includes.html')