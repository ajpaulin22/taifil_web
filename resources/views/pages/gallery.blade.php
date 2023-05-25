

@extends('layout.layout')

@section('content')
<body class="smoothscroll enable-animation ">
<div id="header" class="sticky clearfix">
</div>				<section class="page-header dark page-header-xs">
		<div class="container">
			<h1>Gallery</h1>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-sm-push-3">
                        <div class="col-sm-12 gallery">
	                        <a href="/gallery/Classroom"><h4 class="text-primary">Classroom</h4></a>
                        	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img class="d-block w-100" src="../pictures/117166566_1420457064820496_2258023372956153217_n.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="../pictures/1684291703181.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="../pictures/1684291704704.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="/#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="/#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>
	                    </div>
                        <div class="col-sm-12 gallery">
	                        <a href="/gallery/Library"><h4 class="text-primary">Library</h4></a>
	                        <hr>
	                    </div>
	                	                    <div class="col-sm-12 gallery">
	                        <a href="/gallery/Meeting-Room"><h4 class="text-primary">Meeting Room</h4></a>
	                        <hr>
	                    </div>
                            <div class="col-sm-12 gallery">
	                        <a href="/gallery/Speech-Library"><h4 class="text-primary">Speech Library</h4></a>
	                        <hr>
	                    </div>
	                				</div>
				<div class="col-sm-3 col-sm-pull-9">
					<div class="side-nav margin-bottom-60">

	<!-- <div class="side-nav-head">
		<button class="fa fa-bars"></button>
		<h4>CATEGORIES</h4>
	</div>
	<ul class="list-group list-group-bordered list-group-noicon uppercase">
					<li class="list-group-item"><a href="/events/categories/events"><span class="size-11 text-muted pull-right">(9)</span> Events</a></li>
					<li class="list-group-item"><a href="/events/categories/news-and-updates"><span class="size-11 text-muted pull-right">(13)</span> News and Updates</a></li>
					<li class="list-group-item"><a href="/events/categories/class-activities"><span class="size-11 text-muted pull-right">(3)</span> Class Activities</a></li>
					<li class="list-group-item"><a href="/events/categories/news-release"><span class="size-11 text-muted pull-right">(1)</span> NEWS RELEASE</a></li>
		
	</ul> -->
	<!-- /side navigation -->


</div>
					<!-- <div class="tabs nomargin-top margin-bottom-60"> -->

	<!-- tabs -->
	<!-- <ul class="nav nav-tabs nav-bottom-border nav-justified">
		<li class="active">
			<a href="#popular" data-toggle="tab">
				Popular
			</a>
		</li>
		<li>
			<a href="#recent" data-toggle="tab">
				Recent
			</a>
		</li>
	</ul>

	tabs content
	<div class="tab-content margin-bottom-60 margin-top-30">

		POPULAR
		<div id="popular" class="tab-pane active">
							<div class="row tab-post">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<a href="/events/posts/nat-test-august-2019-results">
								
								<img src="/images/noimage.jpg" width="50" alt="" />
								
						</a>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<a href="/events/posts/nat-test-august-2019-results" class="tab-post-link" style="word-wrap: break-word;">NAT Test August 2019 Results</a>
						<small>September 06, 2019</small>
					</div>
				</div>
							<div class="row tab-post">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<a href="/events/posts/mr-and-ms-pad-2018">
																								<img src="/images/featured_images/mr-and-ms-pad-2018/thumbnail/0EE684ED-836E-41A4-827C-17A42B95D295-min.jpg" width="50" alt="0EE684ED-836E-41A4-827C-17A42B95D295-min.jpg" />
																
						</a>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<a href="/events/posts/mr-and-ms-pad-2018" class="tab-post-link" style="word-wrap: break-word;">Mr. and Ms. PAD  2018</a>
						<small>August 10, 2018</small>
					</div>
				</div>
							<div class="row tab-post">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<a href="/events/posts/a-ramen-kind-of-day">
																								<img src="/images/featured_images/a-ramen-kind-of-day/thumbnail/5BDE8BDA-1463-4AF4-B78E-BF7CC2B42396-min.jpg" width="50" alt="5BDE8BDA-1463-4AF4-B78E-BF7CC2B42396-min.jpg" />
																
						</a>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<a href="/events/posts/a-ramen-kind-of-day" class="tab-post-link" style="word-wrap: break-word;">A Ramen Kind of Day</a>
						<small>September 23, 2018</small>
					</div>
				</div>
					</div>
		/POPULAR


		RECENT
		<div id="recent" class="tab-pane">

							<div class="row tab-post">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<a href="/events/posts/nat-test-june-2021-results">
								
								<img src="/images/noimage.jpg" width="50" alt="" />
								
						</a>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<a href="/events/posts/nat-test-june-2021-results" class="tab-post-link" style="word-wrap: break-word;">NAT Test  - June 2021 Results</a>
						<small>July 16, 2021</small>
					</div>
				</div>
							<div class="row tab-post">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<a href="/events/posts/nat-test-december-2020-results">
								
								<img src="/images/noimage.jpg" width="50" alt="" />
								
						</a>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<a href="/events/posts/nat-test-december-2020-results" class="tab-post-link" style="word-wrap: break-word;">NAT Test December 2020 Results</a>
						<small>January 15, 2021</small>
					</div>
				</div>
							<div class="row tab-post">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<a href="/events/posts/nat-test-october-2020-results">
								
								<img src="/images/noimage.jpg" width="50" alt="" />
								
						</a>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<a href="/events/posts/nat-test-october-2020-results" class="tab-post-link" style="word-wrap: break-word;">NAT TEST OCTOBER 2020 RESULTS</a>
						<small>November 12, 2020</small>
					</div>
				</div>
					</div>
		/RECENT

	</div> -->

<!-- </div>					<h3 class="size-16 margin-bottom-20">TAGS</h3>
<div class="margin-bottom-60">
			<a class="tag" href="/events/tags/company-outing">
			<span class="txt">company outing</span>
			<span class="num">1</span>
		</a>
			<a class="tag" href="/events/tags/graduation">
			<span class="txt">graduation</span>
			<span class="num">2</span>
		</a>
			<a class="tag" href="/events/tags/jlpt-news">
			<span class="txt">JLPT news</span>
			<span class="num">4</span>
		</a>
			<a class="tag" href="/events/tags/ramen">
			<span class="txt">ramen</span>
			<span class="num">1</span>
		</a>
			<a class="tag" href="/events/tags/sports">
			<span class="txt">sports</span>
			<span class="num">1</span>
		</a>
			<a class="tag" href="/events/tags/日本語能力試験">
			<span class="txt">日本語能力試験</span>
			<span class="num">7</span>
		</a>
	</div> 
<hr>	-->
			</div>
			</div>
		</div>
	</section>
			<div id="loading_modal" class="modal loading_modal" data-backdrop="static">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12 text-center">
                  <img src="/images/ajax-loader.gif" height="100" class="block-centered">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- <footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4 class="letter-spacing-1">ADDRESS</h4>
				<address>
					<span class="block margin-bottom-10"><strong><i class="fa fa-map-marker"></i></strong> Unit F 4th Floor N.T. Center Building
					Alabang–Zapote Road, Tierra Nueva Village
					Cupang, Muntinlupa City , 1771 Philippines</span>
				</address>
			</div>
			<div class="col-md-3">
				<h4 class="letter-spacing-1">CONTACT US</h4>
				<ul class="footer-posts list-unstyled">
					<li>
						<strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:(02) 842-8197"> (02) 8842 - 8197</a>
					</li>
					<li>
						<strong><i class="fa fa-fax"></i> Fax:</strong> <a href="fax:(02) 555-0253"> (02) 8555 - 0253</a>
					</li>
					<li>
						<strong><i class="fa fa-mobile"></i> Cellphone:</strong> <a href="tel:(0917) 834-5736">   (0917) 834-5736</a>
					</li>
					<li>
						<strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:padfoundation2007@gmail.com">padfoundation2007@gmail.com</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h4 class="letter-spacing-1">PARTNERS</h4>
				<ul class="footer-posts list-unstyled">
					<li><a href="http://www.ntphil.com/?page=page5"><i class="fa fa-angle-right"></i> NT Philippines </a></li>
					<li><a href="http://www.nt-totalcare.com/"><i class="fa fa-angle-right"></i> NT Total Care</a></li>
					<li><a href="http://www.tropicalparadisesubic.com/"><i class="fa fa-angle-right"></i> Tropical Paradise Retirement Village</a></li>
					<li><a href="https://www.ntli-ryugaku.com/"><i class="fa fa-angle-right"></i> NT Language, Inc.</a></li>
					<li><a href="https://www.facebook.com/taifil.manpower/"><i class="fa fa-angle-right"></i> Tai-Fil Manpower Services Corp.</a></li>
				</ul>
			</div>

			<div class="col-md-3">

				Newsletter Form
				<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
				<div class="margin-top-20">
					<a href="https://www.facebook.com/pad.foundation" target="_blank" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>
					
					<a href="https://twitter.com/pad_foundation" target="_blank" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">

						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<ul class="pull-right nomargin list-inline mobile-block">
				<li><a href="#">Terms &amp; Conditions</a></li>
				<li>&bull;</li>
				<li><a href="#">Privacy</a></li>
			</ul>
			&copy; All Rights Reserved  2023, PAD Foundation Inc.
		</div>
	</div>
</footer>		-->
</div> 
		<a href="#" id="toTop"></a>
<div id="preloader">
	<div class="inner">
		<span class="loader"></span>
	</div>
</div>			<script type="text/javascript">

		var plugin_path = '/plugins/';

		var is_home = "";
	</script>
	<script type="text/javascript" src="/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/js/scripts.js"></script>
	</body>
@endsection