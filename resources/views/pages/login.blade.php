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
                            <form action="#" id="loginform" method="POST">	
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="alert alert-success" id="msg-success">
                                    You are successfully loggedin!
                                </div>
                                <div class="alert alert-danger" id="msg-danger">
                                    Invalid username or password
                                </div>
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
    <script>
        $(document).ready(function() {
            $('#loginform').on('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
                $(".theme-loader2").show();
                $(".alert").hide();
                $.ajax({
                    url: '{{ route('login') }}', // URL to send the request to
                    method: 'POST', // HTTP method
                    data: $(this).serialize(), // Serialize the form data
                    success: function(response) {
                        // Handle a successful response
                        var obj = JSON.parse(response);
                        $(".theme-loader2").hide();
                        if(obj.success == true) {
                            $("#msg-success").show();
                            $("#msg-danger").hide();
                            $("#loginform")[0].reset();
                            $(".theme-loader2").show();
                            setTimeout(() => {
                                window.location.href = "/";
                            }, 1500);
                        } else {
                            $("#msg-success").hide();
                            $("#msg-danger").show();
                        }
                    },
                    error: function(xhr) {
                        // Handle errors
                        $(".theme-loader2").hide();
                        $("#msg-success").hide();
                        $("#msg-danger").show();
                        $("#msg-danger").text(xhr.responseText.message);
                        // alert('An error occurred: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>
	@include('includes.html')