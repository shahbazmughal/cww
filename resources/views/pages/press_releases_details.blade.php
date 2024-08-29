@include('includes.header')
	<style>
		.page__banner-content > span {
			font-size: 70px;
		}
		.news__details-left-box {
			padding: 70px 30px;
		}
		.news__details-left-box-shape {
			transform: translateX(-50%) translateY(-50%);
			max-width: 220px;
			top: 50%;
		}
		.project__details-area-list span i {
			color: var(--primary-color-4);
			margin-right: 10px;
		}
		.project__details-area-list span {
			max-width: 100%;
		}
	</style>
	@include('includes.menu')
	
	<!-- Page Banner Area Start -->
	<div class="page__banner" data-background="/public/assets/img/pages/page-banner.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="page__banner-content">
                        <span>Media Room</span>
						<ul>
							<li><a href="/">Home</a><span>|</span></li>
							<li>Media Room</li>
						</ul>
						<h1>Media Room</h1>
					</div>
				</div>
			</div>
		</div>
	</div>    
	<!-- Page Banner Area End -->

    <!-- News Details Area Start -->
    <div class="news__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 lg-mb-60">
                    <div class="news__details-left">
                        <div class="news__details-left-meta">
                            <ul>
                                <li>
                                    <div class="news__details-left-meta-date">
                                        <span class="text-three">21</span>
                                        <span class="text-five">Oct</span>
                                    </div>                                    
                                </li>
                                <li><a href="#"><i class="far fa-user"></i>By-Admin</a></li>
                                <li><a href="#"><i class="far fa-comment-dots"></i>Comments (0)</a></li>
                            </ul>
                            <h3 class="mt-20">Perceived as a business person with integrity</h3>
                        </div>
                        <p class="mb-25">According to an article published on Fortune’s online magazine earlier this year, consumers are completely distrusting of business executives. In fact, the article is titled “Business Leaders Get an ‘F’ in Ethics, Yet Again,” based on findings in a late 2015 Gallup poll.</p>
                        <p>The answer to the above question is multi-faceted, but all facets fall under the umbrella of reputation management. Today, your reputation – good or bad – as a business person is liable to be spread at an alarming rate. Neighborhood Facebook forums promote business reviews, Twitter timelines are chocked-full of users who Tweet at businesses to voice both their complaints and praise, and Yelp was born to generate reviews.</p>
                        <div class="dark__image">							
                            <img class="img__full mt-35 mb-30" src="/public/assets/img/blog/blog-details.jpg" alt="">
						</div>
                        <p class="mb-25">In sum, if you are not perceived as a business person with integrity, it is far easier for the local clientele to spread the word than it was 20 years ago. The “old game of telephone” has morphed into “did you read that post on Facebook?”</p>
                        <p>While there is truth to the notion that consumers move quicker to speak about a bad experience, the good news is that a positive review can spread just as quickly. The news of your rare integrity in today’s working world is news that will garner a response from the public. If you are perceived as a business person with integrity, you will build an excellent reputation, which in turn will generate the following:</p>
                        <div class="news__details-left-box">
                            <div class="news__details-left-box-shape">
                                <img src="/public/logo.png" alt="">
                            </div>
                            <h6>Referrals</h6>                                
							<p>With a stellar reputation comes face-to-face conversation about your high standards. An old-fashioned referral can do a world of good for your business. Be sure to acknowledge the referrer with a note or even a small thank-you token.</p>
                        </div>
                        <h6>Advertising</h6>
                        <p>If you have a strong record based in facts, go right ahead and make certain that any and all potential clients are made aware. You do not need false advertising because you have a built-in advertising in your reputation. Center your ads on testimonials and stats.</p>
                        <div class="row mt-35 mb-30 dark__image">
                            <div class="col-sm-6 sm-mb-30">
                                <img class="img__full" src="/public/assets/img/blog/blog-details-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img class="img__full" src="/public/assets/img/blog/blog-details-2.jpg" alt="">
                            </div>
                        </div>
                        <h3 class="mb-20">Customer Trust and Retention</h3>
                        <p class="mb-25">Keeping customers is perhaps more difficult than finding new customers. Show your customers time and time again that you are honest and trustworthy in your practices – but not by using your words. Your actions will speak greater volumes than your words ever could.</p>
                        <p>Even if faced with a situation in which you could stand to make more money by choosing to utilize an unfair or unethical business practice, hold true to your standards. Without your reputation as a business person with integrity, it is possible there will no longer be a business for you to operate. Not to mention…you will sleep better at night.</p>
                        
                        <div class="news__details-left-contact mt-65">
							<h4 class="mb-30">Leave a reply</h4>
                            <div class="news__details-left-contact-form">
                                <form action="#">	
                                    <div class="row">
                                        <div class="col-sm-6 mb-30"> 
                                            <div class="news__details-left-contact-form-item conbix-contact-item">
                                                <span class="fal fa-user"></span>
                                                <input type="text" name="name" placeholder="Full Name" required="required">
                                            </div>										
                                        </div>
                                        <div class="col-sm-6 sm-mb-30">
                                            <div class="news__details-left-contact-form-item conbix-contact-item">
                                                <span class="fal fa-envelope"></span>
                                                <input type="text" name="email" placeholder="Email Address" required="required">											
                                            </div>									
                                        </div>
                                        <div class="col-sm-12 mb-30"> 
                                            <div class="news__details-left-contact-form-item conbix-contact-item">
                                                <span class="fal fa-globe"></span>
                                                <input type="text" name="subject" placeholder="https://" required="required">
                                            </div>										
                                        </div>
                                        <div class="col-sm-12 mb-30"> 
                                            <div class="news__details-left-contact-form-item conbix-contact-item">
                                                <span class="fal fa-pen"></span>
                                                <textarea name="message" placeholder="Type your comments...."></textarea>
                                            </div>										
                                        </div>
                                        <div class="col-lg-12">										
                                            <div class="news__details-left-contact-form-item">
                                                <button class="btn-one" type="submit">Submit Comment<i class="far fa-chevron-double-right"></i></button>
                                            </div>										
                                        </div>
                                    </div>							
                                </form>	
                            </div>						
						</div>                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="all__sidebar">
                        <div class="all__sidebar-item">
                            <h4>Search</h4>
                            <div class="all__sidebar-item-search">
                                <form action="#">
                                    <input type="text" placeholder="Search.....">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="all__sidebar-item">
                            <h4>Our Solutions</h4>
                            <div class="all__sidebar-item-solution">
                                <ul>                                    
                                    <li><a href="#"><i class="far fa-chevron-double-right"></i>Business Consulting<span>(2)</span></a></li>
                                    <li><a href="#"><i class="far fa-chevron-double-right"></i>Human research<span>(3)</span></a></li>
                                    <li><a href="#"><i class="far fa-chevron-double-right"></i>Digital solutions<span>(4)</span></a></li>
                                    <li><a href="#"><i class="far fa-chevron-double-right"></i>strategy & Research<span>(5)</span></a></li>
                                    <li><a href="#"><i class="far fa-chevron-double-right"></i>Business Model<span>(6)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="all__sidebar-item">
                            <h4>Recent Press Release</h4>
                            <div class="all__sidebar-item-post">
                                <div class="post__item">
                                    <div class="post__item-image">
                                        <a href="#"><img src="/public/assets/img/blog/post-3.jpg" alt=""></a>
                                    </div>
                                    <div class="post__item-title">
                                        <h6><a href="#">How to Become a Successful Consultant</a></h6>
                                        <span><i class="far fa-calendar-alt"></i>Dec 31, 2022</span>
                                    </div>
                                </div>                           
                                <div class="post__item">
                                    <div class="post__item-image">
                                        <a href="#"><img src="/public/assets/img/blog/post-4.jpg" alt=""></a>
                                    </div>
                                    <div class="post__item-title">
                                        <h6><a href="#">How to Succeed as a Business Consultant</a></h6>
                                        <span><i class="far fa-calendar-alt"></i>Dec 27, 2022</span>
                                    </div>
                                </div>                           
                                <div class="post__item">
                                    <div class="post__item-image">
                                        <a href="#"><img src="/public/assets/img/blog/post-5.jpg" alt=""></a>
                                    </div>
                                    <div class="post__item-title">
                                        <h6><a href="#">Financial Consulting for Small Businesses</a></h6>
                                        <span><i class="far fa-calendar-alt"></i>Dec 23, 2022</span>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                        <div class="all__sidebar-contact">
							<div class="all__sidebar-contact-image dark__image">
								<img class="img__full" src="/public/assets/img/avatar/avatar-11.jpg" alt="">
							</div>
							<div class="all__sidebar-contact-content">
								<div class="all__sidebar-contact-content-icon">
									<img src="/public/assets/img/icon/question.png" alt="">
								</div>
								<h3>Let's Join us</h3>
								<a class="simple-btn-2" href="/contact">Contact us<i class="far fa-chevron-double-right"></i></a>  
							</div>                                                     
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- News Details Area End -->



    @include('includes.footer')
	
	@include('includes.scripts')
	@include('includes.html')