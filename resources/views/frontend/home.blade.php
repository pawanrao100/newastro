@php

    $content = content('category.content');

    $categories = App\Models\Category::whereHas('services',function($q){$q->where('status',1);})->whereHas('services.user')->where('status',1)->latest()->take(6)->get();

@endphp
@php

$content = content('banner.content');

$categories1 = App\Models\Category::where('status', 1)
    ->orderBy('name','ASC')
    ->take(6)
    ->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Best-astro.com">
    <meta name="author" content="Ansonika">
    <title>{{ @$general->sitename . '-' . $pageTitle }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="http://tradewavetrading.com/best-astro/html/img/favicon.ico" type="image/x-icon">
  
    <!-- BASE CSS -->
    <link href="http://tradewavetrading.com/best-astro/html/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="http://tradewavetrading.com/best-astro/html/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="http://tradewavetrading.com/best-astro/html/css/home.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="http://tradewavetrading.com/best-astro/html/css/custom.css" rel="stylesheet">
    <link href="http://tradewavetrading.com/best-astro/html/css/icon_fonts/font/ElegantIcons.woff">
    <link href="http://tradewavetrading.com/best-astro/html/css/icon_fonts/font/ustom_icons.woff?34716924">

</head>

<body>
				
	<header class="header clearfix element_to_stick">
		<div class="container-fluid">
		<div id="logo">
			<a href="{{ route('home') }}">
				<img src="http://tradewavetrading.com/best-astro/html/img/logo.png"  height="55" alt="Best-astro.com" class="logo_normal">
				<img src="http://tradewavetrading.com/best-astro/html/img/logo_sticky.png" height="45" alt="Best-astro.com" class="logo_sticky">
			</a>
		</div>
		<div class="st_search"><form action="{{route('experts.search')}}" method="get">
			<input class="form-control" type="text" name="search" placeholder="Find a professional...">


		 </form></div>
		<nav class="main-menu">
			<div id="header_menu">
				<a href="#0" class="open_close">
					<i class="icon_close"></i><span>Menu</span>
				</a>
				<a href="index.html"><img src="http://tradewavetrading.com/best-astro/html/img/logo.png"  height="45" alt=""></a>
			</div>
			<ul>

				
				 <li>
					<a href="{{ route('home') }}" class="show-submenu">Home</a>
				 
				</li>
				<li>
					<a href="{{route('category.all')}}" class="show-submenu">Categories</a>
					 
				</li>
				 
				 
			</ul>
		</nav>
		<ul id="top_menu">
			 
			<li><a href="#sign-in-dialog" id="sign-in" class="btn_access">Log In</a></li>
			<li><a href="register.html" class="btn_access green">Sign Up </a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		
	</div>
	</header>
	<!-- /header -->
	
	<main>
	    <div class="header-video">
	        <div id="hero_video">
		        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.7)">
		            <div class="container">
		                <div class="row justify-content-between">
		                    <div class="col-xl-6 col-lg-6 col-md-5 text-left">
		                        <h1>{{ __(@$content->data->title) }}</h1>
		                        <p>{{ __(@$content->data->sub_title) }} </p>
		                        <form method="post" action="listing.html">
		                            <div class="d-flex">
		                                <div class="row no-gutters custom-search-input">
		                                    <div class="col-md-9">
		                                        <div class="form-group">
		                                            <input class="form-control" name="search" type="text" placeholder="Find a professional...">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-3">
		                                        <input type="submit" value="Find">
		                                    </div>
		                                </div>
		                                <!-- /row -->
		                            </div>
		                            <!-- <div class="search_trends">
		                                <h5>Trending:</h5>
		                                <ul>
		                                    <li><a href="#0">doctor</a></li>
		                                    <li><a href="#0">lawyer</a></li>
		                                    <li><a href="#0">teacher</a></li>
		                                    <li><a href="#0">psychologist</a></li>
		                                </ul>
		                            </div> -->
		                        </form>
		                    </div>

							<div class="col-lg-6 col-md-6 text-left bdr-l ">
		                        <h1>Are you an Astro Expert ?</h1>
		                        <p>Book now and list your service for Free!</p>
								<a href="register.html" class="btn_1 medium w-92">List your services for Free</a>
								</div>

		                </div>
						<a href="#first_section" class="btn_explore"><span class="pulse_bt"><i class="arrow_down"></i></span></a>
		            </div>
				
		        </div>
				
		    </div>
			
			<img src="http://tradewavetrading.com/best-astro/html/img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
			<video autoplay="true" loop="loop" muted="" id="teaser-video" class="teaser-video"><source src="http://tradewavetrading.com/best-astro/html/video/intro.mp4" type="video/mp4"><source src="http://tradewavetrading.com/best-astro/html/video/intro.ogv" type="video/ogg"></video>
	    </div>
	    <!-- /hero_single -->
	    <div class="bg_gray" id="first_section">
	        <div class="container margin_60_40">
	            <div class="main_title center">
	                <span><em></em></span>
	                <h2>{{__(@$content->data->title)}}</h2>
	                <p>{{__(@$content->data->sub_title)}}</p>
	            </div>
	            <!-- /main_title -->
	            <div class="owl-carousel owl-theme categories_carousel">
                @foreach ($categories as $category)
					<div class="item">
						<a href="{{route('category.details',Str::slug($category->name))}}">
							<span>98</span>
							<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{getFile('category',$category->image)}}" alt="" class="owl-lazy">
							<h3>{{__($category->name)}}</h3>
							<small>Avg price $40 Hr.</small>
						</a>
					</div>
                    @endforeach
			
				</div>
				<!-- /carousel -->
	        </div>
	        <!-- /container -->
	    </div>
	    <!-- /bg_gray -->
	    <div class="container margin_60_40">
	        <div class="main_title center">
	            <span><em></em></span>
	            <h2>Popular Professionals</h2>
	            <p>Lorem Ipsum is simply dummy text of the printing.</p>
	        </div>
	        <div class="row add_bottom_15">
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
	                <div class="strip">
	                    <figure>
	                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
							<div class="score"><strong>9.5</strong></div>
	                        <img src="img/lazy-placeholder.png" data-src="img/professionals_photos/home_1.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-page.html" class="strip_info">
	                            <div class="item_title">
	                                <h3>Dr. Maria Cornfield <small>2+ Exp.</small></h3>
									 
	                                <small>Astrologer</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
	                        
	                        <li>
	                            <div ><span>Avg price $35 Hr.</span></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
	                <div class="strip">
	                    <figure>
	                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
							<div class="score"><strong>9.5</strong></div>
	                        <img src="img/lazy-placeholder.png" data-src="img/professionals_photos/home_3.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-page.html" class="strip_info">
	                            <div class="item_title">
	                                <h3>Lucy Shoemaker <small>2+ Exp.</small></h3>
	                                <small>Astrologer</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
	                        <li>
	                           <div ><span>Avg price $35 Hr.</span></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
	                <div class="strip">
	                    <figure>
	                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
							<div class="score"><strong>9.5</strong></div>
	                        <img src="img/lazy-placeholder.png" data-src="img/professionals_photos/home_3.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-page.html" class="strip_info">
	                            <div class="item_title">
	                                <h3>Prof. Luke Lachinet <small>9+ Exp.</small></h3>
	                                <small>Astrologer</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
	                      
	                        <li>
	                           <div ><span>Avg price $35 Hr.</span></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
	                <div class="strip">
	                    <figure>
	                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a><div class="score"><strong>9.5</strong></div>
	                        <img src="img/lazy-placeholder.png" data-src="img/professionals_photos/home_4.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-page.html" class="strip_info">
	                            <div class="item_title">
	                                <h3>Dr. Marta Rainwater <small>5+ Exp.</small></h3>
	                                <small>Astrologer</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
	                      
	                        <li>
	                           <div ><span>Avg price $35 Hr.</span></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
	                <div class="strip">
	                    <figure>
	                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a><div class="score"><strong>9.5</strong></div>
	                        <img src="img/lazy-placeholder.png" data-src="img/professionals_photos/home_5.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-page.html" class="strip_info">
	                            <div class="item_title">
	                                <h3>Tom Manzone <small>6+ Exp.</small></h3>
	                                <small>Astrologer</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
	                      
	                        <li>
	                           <div ><span>Avg price $35 Hr.</span></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
	                <div class="strip">
	                    <figure>
	                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a><div class="score"><strong>9.5</strong></div>
	                        <img src="img/lazy-placeholder.png" data-src="img/professionals_photos/home_6.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-page.html" class="strip_info">
	                            <div class="item_title">
	                                <h3>Carl Cornfield <small>12+ Exp.</small></h3>
	                                <small>Astrologer</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
	                        <li>
	                           <div ><span>Avg price $35 Hr.</span></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!-- /strip grid -->
	        </div>
	        <!-- /row -->
	        <p class="text-center add_bottom_30"><a href="listing.html" class="btn_1 medium">View All</a></p>
	        <div class="row">
	            <div class="col-12">
	                <div class="main_title version_2">
	                    <span><em></em></span>
	                    <h2>Weekly Rate Offer</h2>
	                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
	                    <a href="#0">View All</a>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="list_home">
	                    <ul>
	                        <li>
	                            <a href="detail-page.html">
	                                <figure>
	                                    <img src="img/professional_list_placeholder.png" data-src="img/professional_list_1.jpg" alt="" class="lazy">
	                                </figure>
	                                <div class="score"><strong>9.5</strong></div>
	                                <em>Astrologer</em>
	                                <h3>Laura Marting</h3>
	                                <small>8 Patriot Square E2 9NF</small>
	                                <ul>
	                                    <li><span class="ribbon off">-30%</span></li>
	                                    <li>Average price $35</li>
	                                </ul>
	                            </a>
	                        </li>
	                        <li>
	                            <a href="detail-page.html">
	                                <figure>
	                                    <img src="img/professional_list_placeholder.png" data-src="img/professional_list_2.jpg" alt="" class="lazy">
	                                </figure>
	                                <div class="score"><strong>8.0</strong></div>
	                                <em>Astrologer</em>
	                                <h3>Anna Smith</h3>
	                                <small>27 Old Gloucester St, 4563</small>
	                                <ul>
	                                    <li><span class="ribbon off">-40%</span></li>
	                                    <li>Average price $30</li>
	                                </ul>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="list_home">
	                    <ul>
	                        <li>
	                            <a href="detail-page.html">
	                                <figure>
	                                    <img src="img/professional_list_placeholder.png" data-src="img/professional_list_3.jpg" alt="" class="lazy">
	                                </figure>
	                                <div class="score"><strong>9.5</strong></div>
	                                <em>Astrologer</em>
	                                <h3>Dr. Stefany Lens</h3>
	                                <small>27 Old Gloucester St, 4563</small>
	                                <ul>
	                                    <li><span class="ribbon off">-30%</span></li>
	                                    <li>Average price $20</li>
	                                </ul>
	                            </a>
	                        </li>
	                        <li>
	                            <a href="detail-page.html">
	                                <figure>
	                                    <img src="img/professional_list_placeholder.png" data-src="img/professional_list_4.jpg" alt="" class="lazy">
	                                </figure>
	                                <div class="score"><strong>8.0</strong></div>
	                                <em>Astrologer</em>
	                                <h3>Lucy Clarks</h3>
	                                <small>22 Hertsmere Rd E14 4ED</small>
	                                <ul>
	                                    <li><span class="ribbon off">-50%</span></li>
	                                    <li>Average price $35</li>
	                                </ul>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- /container -->
		<div class="bg_gray">
			<div class="container margin_60_40 how">
				<div class="main_title center">
					<span><em></em></span>
					<h2>How does it work?</h2>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="row justify-content-center align-items-center add_bottom_45">
					<div class="col-lg-5">
						<div class="box_about">
							<strong>1</strong>
							<h3>Search for a Professional</h3>
							<p>Search over 12.000 verifyed professionals that match your criteria.</p>
							<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/arrow_about.png" alt="" class="arrow_1 lazy">
						</div>
					</div>
					<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
						<figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/about_1.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center add_bottom_45">
					<div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
						<figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/about_2.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
					</div>
					<div class="col-lg-5">
						<div class="box_about">
							<strong>2</strong>
							<h3>View Professional Profile</h3>
							<p>View professional introduction and read reviews from other customers.</p>
							<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/arrow_about.png" alt="" class="arrow_2 lazy">
						</div>
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center add_bottom_25">
					<div class="col-lg-5">
						<div class="box_about">
							<strong>3</strong>
							<h3>Enjoy the Consultation</h3>
							<p>Connect with your professional booking an appointment, via chat!</p>
						</div>
					</div>
					<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
					   <figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/about_3.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
			</div>
	    <!-- /bg_gray -->
	    <div class="call_section version_2 lazy" data-bg="url(http://tradewavetrading.com/best-astro/html/img/bg_call_section.jpg)">
	        <div class="container clearfix">
	            <div class="col-lg-5 col-md-6 float-right wow">
	                <div class="box_1">
	                    <div class="ribbon_promo"><span>Free</span></div>
	                    <h3>Are you a Expert?</h3>
	                    <p>Join Us to increase your online visibility. You'll have access to even more customers who are looking to professional service or consultation.</p>
	                    <a href="#" class="btn_1">Join Now</a>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--/call_section-->
	</main>
	<!-- /main -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h3 data-target="#collapse_4">About Us</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						<div class="follow_us">
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/twitter_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/facebook_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/instagram_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="http://tradewavetrading.com/best-astro/html/img/youtube_icon.svg" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<h3 data-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="#">Join Us</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="#">Top Categories</a></li>
							<li><a href="#">Best Rated</a></li>
							<li><a href="#">Best Price</a></li>
							<li><a href="#">Latest Submissions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="">Top Categories</a></li>
							<li><a href="#">Best Rated</a></li>
							<li><a href="#">Best Price</a></li>
							<li><a href="#">Latest Submissions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="">Top Categories</a></li>
							<li><a href="#">Best Rated</a></li>
							<li><a href="#">Best Price</a></li>
							<li><a href="#">Latest Submissions</a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-12">
					<ul class="additional_links text-center float-none">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2021 Best Astro</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
	
	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
	
	<!-- Sign In Modal -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<form action="dashboard.html">
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="email">
						<i class="icon_mail_alt"></i>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" id="password" value="">
						<i class="icon_lock_alt"></i>
					</div>
					<div class="clearfix add_bottom_15">
						<div class="checkboxes float-left">
							<label class="container_check">Remember me
							  <input type="checkbox">
							  <span class="checkmark"></span>
							</label>
						</div>
						<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
					</div>
					<div class="text-center">
						<input type="submit" value="Log In" class="btn_1 full-width mb_5">
						Don’t have an account? <a href="register.html">Sign up</a>
					</div>

				</form>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Modal -->

	<!-- COMMON SCRIPTS -->
    <script src="http://tradewavetrading.com/best-astro/html/js/common_scripts.min.js"></script>
    <script src="http://tradewavetrading.com/best-astro/html/js/common_func.js"></script>
    <script src="http://tradewavetrading.com/best-astro/html/assets/validate.js"></script>

</body>
</html>