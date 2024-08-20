@include('includes.header')

@include('includes.menu')
    <!-- Login Area Start -->
    <div class="getIn__touch-three section-padding page-login" data-background="public/assets/img/pages/getInTouchThree.jpg" style="background-image: url(&quot;public/assets/img/pages/getInTouchThree.jpg&quot;);">
        <img class="getIn__touch-three-shape left-right-animate2" src="public/assets/img/shape/getInTouchThree.png" alt="">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-5 col-lg-5 mx-auto">
                    <div class="getIn__touch-three-right">
                        <h3 class="text-center mb-0">Please sign in</h3>
                        <p class="mb-30 text-center">Access your Continental Who’s Who member account</p>
                        <div class="getIn__touch-three-right-form">
                            <form action="#">	
                                <div class="mt-25">
                                    <input type="text" name="email" placeholder="Email Address" required="required">
                                </div>
                                <div class="mt-25">
                                    <input type="password" name="password" placeholder="Password" required="required">											
                                </div>
                                
                                <div class="mt-25">
                                    <button class="btn-seven col-md-12 text-center d-flex justify-content-center" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .footer__two {
            display: none;
        }
    </style>
    <!-- Login Area End -->
	@include('includes.footer')
	
	@include('includes.scripts')