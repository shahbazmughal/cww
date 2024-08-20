@include('includes.header')

    @include('includes.menu')
    
    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Register</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Register</li>
						</ul>
						<h1>Register Now</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->
    <!-- Request Quote Page Start -->
    <div class="request__quote section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <form action="#" method="post" id="register-form">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="mb-3">Register Now</h3>
                                <p class="mb-1">Ready to join a prestigious network of accomplished professionals? Start your journey with Continental Who’s Who today.</p>
                                <p class="mb-1">Your application will be validated and approved shortly.</p>
                                <p class="mb-1">Please note that all fields are required.</p>
                                <hr />
                            </div>

                            <h4 class="mt-4 mb-3">Personal Information</h4>
							<div class="col-md-4 mb-30">
                                <div class="request__quote-item">
                                    <label>First Name<span> *</span></label>
									<input type="text" name="firstname" placeholder="First" required>
								</div>
							</div>
							<div class="col-md-4 mb-30">
								<div class="request__quote-item">
                                     <label>Last Name<span> *</span></label>
									<input type="text" name="lastname" placeholder="Last" required>
								</div>
							</div>
							<div class="col-md-4 mb-30">
								<div class="request__quote-item">
									<label>Email Address<span> *</span></label>
									<input type="email" name="email" placeholder="email" required>
								</div>
							</div>

                            <h4 class="mt-4 mb-3">Location Information</h4>
							<div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Address</label>
									<input type="text" name="address" placeholder="Address" >
								</div>
							</div>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>City</label>
									<input type="text" name="city" placeholder="City" >
								</div>
							</div>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>State<span> </span></label>
									<select class="form-control" name="b_state"  required="required">
                                        <option value="AL">US - Alabama</option>
                                        <option value="AK">US - Alaska</option>
                                        <option value="AZ">US - Arizona</option>
                                        <option value="AR">US - Arkansas</option>
                                        <option value="CA">US - California</option>
                                        <option value="CO">US - Colorado</option>
                                        <option value="CT">US - Connecticut</option>
                                        <option value="DE">US - Delaware</option>
                                        <option value="FL">US - Florida</option>
                                        <option value="GA">US - Georgia</option>
                                        <option value="HI">US - Hawaii</option>
                                        <option value="ID">US - Idaho</option>
                                        <option value="IL">US - Illinois</option>
                                        <option value="IN">US - Indiana</option>
                                        <option value="IA">US - Iowa</option>
                                        <option value="KS">US - Kansas</option>
                                        <option value="KY">US - Kentucky</option>
                                        <option value="LA">US - Louisiana</option>
                                        <option value="ME">US - Maine</option>
                                        <option value="MD">US - Maryland</option>
                                        <option value="MA">US - Massachusetts</option>
                                        <option value="MI">US - Michigan</option>
                                        <option value="MN">US - Minnesota</option>
                                        <option value="MS">US - Mississippi</option>
                                        <option value="MO">US - Missouri</option>
                                        <option value="MT">US - Montana</option>
                                        <option value="NE">US - Nebraska</option>
                                        <option value="NV">US - Nevada</option>
                                        <option value="NH">US - New Hampshire</option>
                                        <option value="NJ">US - New Jersey</option>
                                        <option value="NM">US - New Mexico</option>
                                        <option value="NY">US - New York</option>
                                        <option value="NC">US - North Carolina</option>
                                        <option value="ND">US - North Dakota</option>
                                        <option value="OH">US - Ohio</option>
                                        <option value="OK">US - Oklahoma</option>
                                        <option value="OR">US - Oregon</option>
                                        <option value="PA">US - Pennsylvania</option>
                                        <option value="RI">US - Rhode Island</option>
                                        <option value="SC">US - South Carolina</option>
                                        <option value="SD">US - South Dakota</option>
                                        <option value="TN">US - Tennessee</option>
                                        <option value="TX">US - Texas</option>
                                        <option value="UT">US - Utah</option>
                                        <option value="VT">US - Vermont</option>
                                        <option value="VA">US - Virginia</option>
                                        <option value="WA">US - Washington</option>
                                        <option value="WV">US - West Virginia</option>
                                        <option value="WI">US - Wisconsin</option>
                                        <option value="WY">US - Wyoming</option>
                                        <option value="AB">CA - Alberta</option>
                                        <option value="BC">CA - British Columbia</option>
                                        <option value="MB">CA - Manitoba</option>
                                        <option value="NB">CA - New Brunswick</option>
                                        <option value="NL">CA - Newfoundland and Labrador</option>
                                        <option value="NT">CA - Northwest Territories</option>
                                        <option value="NS">CA - Nova Scotia</option>
                                        <option value="NU">CA - Nunavut</option>
                                        <option value="ON">CA - Ontario</option>
                                        <option value="PE">CA - Prince Edward Island</option>
                                        <option value="QC">CA - Quebec</option>
                                        <option value="SK">CA - Saskatchewan</option>
                                        <option value="YT">CA - Yukon</option>
                                    </select>
								</div>
							</div>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Zip Code</label>
									<input type="text" name="zip" placeholder="Zip Code" >
								</div>
							</div>

                            <h4 class="mt-4 mb-3">Business Information</h4>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Title</label>
									<input type="text" name="title" placeholder="Title" >
								</div>
							</div>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Company Name</label>
									<input type="text" name="company" placeholder="Company Name" >
								</div>
							</div>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Business Type</label>
									<textarea name="business" placeholder="Business Type"></textarea>
								</div>
							</div>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Product / Services</label>
									<textarea name="product" placeholder="Product / Services"></textarea>
								</div>
							</div>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Business Phone</label>
									<input type="text" name="business-phonr" placeholder="Business Phone">
								</div>
							</div>
                            <div class="col-md-6 mb-30">
								<div class="request__quote-item">
									<label>Mobile Phone (Not for Public)</label>
									<input type="text" name="mobile-no" placeholder="Mobile Phone (Not for Public)">
								</div>
							</div>
                            <div class="col-lg-12">
                                <button class="btn-one mt-30" type="submit" id="register">Register <i class="far fa-chevron-double-right"></i></button>
                            </div>
						</div>
                    </form>
                    <div class="alert alert-success" id="register-success">
                        <i class="fa fa-thumbs-up"></i> We have received your registration application and will approve it as soon as possible.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request Quote Page End -->
	@include('includes.footer')
	
	@include('includes.scripts')