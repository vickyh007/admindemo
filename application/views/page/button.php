<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Button</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url("assets/images") ?>/icon/favicon.ico">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/typography.css">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/default-css.css">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/styles.css">
    <link rel="stylesheet" href="<?= base_url("assets/css") ?>/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url("assets/js") ?>/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?= $_menu ?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
			<div class="header-top">
				<div class="header-area">
					<div class="row align-items-center">
						<!-- nav and search button -->
						<div class="col-md-6 col-sm-8 clearfix">
							<div class="nav-btn pull-left">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<div class="search-box pull-left">
								<form action="#">
									<input type="text" name="search" placeholder="Search..." required>
									<i class="ti-search"></i>
								</form>
							</div>
						</div>
						<!-- profile info & task notification -->
						<div class="col-md-6 col-sm-4 clearfix">
							<ul class="notification-area pull-right">
								<li id="full-view"><i class="ti-fullscreen"></i></li>
								<li id="full-view-exit"><i class="ti-zoom-out"></i></li>
								<li class="dropdown">
									<i class="ti-bell dropdown-toggle" data-toggle="dropdown">
										<span>2</span>
									</i>
									<div class="dropdown-menu bell-notify-box notify-box">
										<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
										<div class="nofity-list">
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
												<div class="notify-text">
													<p>You have Changed Your Password</p>
													<span>Just Now</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
												<div class="notify-text">
													<p>New Commetns On Post</p>
													<span>30 Seconds ago</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
												<div class="notify-text">
													<p>Some special like you</p>
													<span>Just Now</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
												<div class="notify-text">
													<p>New Commetns On Post</p>
													<span>30 Seconds ago</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
												<div class="notify-text">
													<p>Some special like you</p>
													<span>Just Now</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
												<div class="notify-text">
													<p>You have Changed Your Password</p>
													<span>Just Now</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
												<div class="notify-text">
													<p>You have Changed Your Password</p>
													<span>Just Now</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
									<div class="dropdown-menu notify-box nt-enveloper-box">
										<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
										<div class="nofity-list">
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="<?= base_url("assets/images") ?>/author/author-img1.jpg" alt="image">
												</div>
												<div class="notify-text">
													<p>Aglae Mayer</p>
													<span class="msg">Hey I am waiting for you...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="<?= base_url("assets/images") ?>/author/author-img2.jpg" alt="image">
												</div>
												<div class="notify-text">
													<p>Aglae Mayer</p>
													<span class="msg">When you can connect with me...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="<?= base_url("assets/images") ?>/author/author-img3.jpg" alt="image">
												</div>
												<div class="notify-text">
													<p>Aglae Mayer</p>
													<span class="msg">I missed you so much...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="<?= base_url("assets/images") ?>/author/author-img4.jpg" alt="image">
												</div>
												<div class="notify-text">
													<p>Aglae Mayer</p>
													<span class="msg">Your product is completely Ready...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="<?= base_url("assets/images") ?>/author/author-img2.jpg" alt="image">
												</div>
												<div class="notify-text">
													<p>Aglae Mayer</p>
													<span class="msg">Hey I am waiting for you...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="<?= base_url("assets/images") ?>/author/author-img1.jpg" alt="image">
												</div>
												<div class="notify-text">
													<p>Aglae Mayer</p>
													<span class="msg">Hey I am waiting for you...</span>
													<span>3:15 PM</span>
												</div>
											</a>
											<a href="#" class="notify-item">
												<div class="notify-thumb">
													<img src="<?= base_url("assets/images") ?>/author/author-img3.jpg" alt="image">
												</div>
												<div class="notify-text">
													<p>Aglae Mayer</p>
													<span class="msg">Hey I am waiting for you...</span>
													<span>3:15 PM</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li class="settings-btn">
									<i class="ti-settings"></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- header area end -->
				<!-- page title area start -->
				<div class="page-title-area">
					<div class="row align-items-center">
						<div class="col-sm-12">
							<div class="breadcrumbs-area clearfix">
								<h4 class="page-title pull-left">Button</h4>
								<ul class="breadcrumbs pull-left">
									<li><a href="<?= site_url("home/dashboard") ?>">Home</a></li>
									<li><span>Button</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- button srea start -->
                <div class="row">
                    <!-- General button -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">General Buttons</h4>
                                <button type="button" class="btn btn-primary mb-3">Primary</button>
                                <button type="button" class="btn btn-success mb-3">Success</button>
                                <button type="button" class="btn btn-danger mb-3">Danger</button>
                                <button type="button" class="btn btn-warning mb-3">Warning</button>
                                <button type="button" class="btn btn-info mb-3">Info</button>
                                <button type="button" class="btn btn-dark mb-3">Light</button>
                                <button type="button" class="btn btn-secondary mb-3">Light</button>
                                <button type="button" class="btn btn-light mb-3">Light</button>
                            </div>
                        </div>
                    </div>
                    <!-- Falt button -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Falt Buttons</h4>
                                <button type="button" class="btn btn-flat btn-primary mb-3">Primary</button>
                                <button type="button" class="btn btn-flat btn-success mb-3">Success</button>
                                <button type="button" class="btn btn-flat btn-danger mb-3">Danger</button>
                                <button type="button" class="btn btn-flat btn-warning mb-3">Warning</button>
                                <button type="button" class="btn btn-flat btn-info mb-3">Info</button>
                                <button type="button" class="btn btn-flat btn-dark mb-3">Light</button>
                                <button type="button" class="btn btn-flat btn-secondary mb-3">Light</button>
                                <button type="button" class="btn btn-flat btn-light mb-3">Light</button>
                            </div>
                        </div>
                    </div>
                    <!-- rounded button -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">rounded Buttons</h4>
                                <button type="button" class="btn btn-rounded btn-primary mb-3">Primary</button>
                                <button type="button" class="btn btn-rounded btn-success mb-3">Success</button>
                                <button type="button" class="btn btn-rounded btn-danger mb-3">Danger</button>
                                <button type="button" class="btn btn-rounded btn-warning mb-3">Warning</button>
                                <button type="button" class="btn btn-rounded btn-info mb-3">Info</button>
                                <button type="button" class="btn btn-rounded btn-dark mb-3">Light</button>
                                <button type="button" class="btn btn-rounded btn-"> mb-3Light</button>
                                <button type="button" class="btn btn-rounded btn-light mb-3">Light</button>
                            </div>
                        </div>
                    </div>
                    <!-- tags button -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Button tags</h4>
                                <a class="btn btn-primary mb-3" href="#" role="button">Link</a>
                                <button class="btn btn-success mb-3" type="submit">Button</button>
                                <input class="btn btn-warning mb-3" type="button" value="Input">
                                <input class="btn btn-info mb-3" type="submit" value="Submit">
                                <input class="btn btn-danger mb-3" type="reset" value="Reset">
                                <input class="btn btn-dark mb-3" type="reset" value="Reset">
                                <input class="btn btn-secondary mb-3" type="reset" value="Reset">
                            </div>
                        </div>
                    </div>
                    <!-- tags Flat button -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Button tags Flat</h4>
                                <a class="btn btn-flat btn-primary mb-3" href="#" role="button">Link</a>
                                <button class="btn btn-flat btn-success mb-3" type="submit">Button</button>
                                <input class="btn btn-flat btn-warning mb-3" type="button" value="Input">
                                <input class="btn btn-flat btn-info mb-3" type="submit" value="Submit">
                                <input class="btn btn-flat btn-danger mb-3" type="reset" value="Reset">
                                <input class="btn btn-flat btn-dark mb-3" type="reset" value="Reset">
                                <input class="btn btn-flat btn-secondary mb-3" type="reset" value="Reset">
                            </div>
                        </div>
                    </div>
                    <!-- tags rounded  button -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Button tags rounded </h4>
                                <a class="btn btn-rounded btn-primary mb-3" href="#" role="button">Link</a>
                                <button class="btn btn-rounded btn-success mb-3" type="submit">Button</button>
                                <input class="btn btn-rounded btn-warning mb-3" type="button" value="Input">
                                <input class="btn btn-rounded btn-info mb-3" type="submit" value="Submit">
                                <input class="btn btn-rounded btn-danger mb-3" type="reset" value="Reset">
                                <input class="btn btn-rounded btn-dark mb-3" type="reset" value="Reset">
                                <input class="btn btn-rounded btn-secondary mb-3" type="reset" value="Reset">
                            </div>
                        </div>
                    </div>
                    <!-- Outline buttons -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Outline buttons</h4>
                                <button type="button" class="btn btn-outline-primary mb-3">Primary</button>
                                <button type="button" class="btn btn-outline-secondary mb-3">Secondary</button>
                                <button type="button" class="btn btn-outline-success mb-3">Success</button>
                                <button type="button" class="btn btn-outline-danger mb-3">Danger</button>
                                <button type="button" class="btn btn-outline-warning mb-3">Warning</button>
                                <button type="button" class="btn btn-outline-info mb-3">Info</button>
                                <button type="button" class="btn btn-outline-dark mb-3">Dark</button>
                                <button type="button" class="btn btn-outline-light mb-3">Light</button>
                            </div>
                        </div>
                    </div>
                    <!-- Outline Flat buttons -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Outline buttons Flat</h4>
                                <button type="button" class="btn btn-flat btn-outline-primary mb-3">Primary</button>
                                <button type="button" class="btn btn-flat btn-outline-secondary mb-3">Secondary</button>
                                <button type="button" class="btn btn-flat btn-outline-success mb-3">Success</button>
                                <button type="button" class="btn btn-flat btn-outline-danger mb-3">Danger</button>
                                <button type="button" class="btn btn-flat btn-outline-warning mb-3">Warning</button>
                                <button type="button" class="btn btn-flat btn-outline-info mb-3">Info</button>
                                <button type="button" class="btn btn-flat btn-outline-dark mb-3">Dark</button>
                                <button type="button" class="btn btn-flat btn-outline-light mb-3">Light</button>
                            </div>
                        </div>
                    </div>
                    <!-- Sizes buttons -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Sizes buttons</h4>
                                <button type="button" class="btn btn-info btn-xl mb-3">Large button</button>
                                <button type="button" class="btn btn-primary btn-lg mb-3">Large button</button>
                                <button type="button" class="btn btn-success btn-md mb-3">Small button</button>
                                <button type="button" class="btn btn-warning btn-sm mb-3">Small button</button>
                                <button type="button" class="btn btn-danger btn-xs mb-3">Small button</button>
                            </div>
                        </div>
                    </div>
                    <!-- Sizes buttons Flat -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Sizes buttons Flat</h4>
                                <button type="button" class="btn btn-flat btn-info btn-xl mb-3">Large button</button>
                                <button type="button" class="btn btn-flat btn-primary btn-lg mb-3">Large button</button>
                                <button type="button" class="btn btn-flat btn-success btn-md mb-3">Small button</button>
                                <button type="button" class="btn btn-flat btn-warning btn-sm mb-3">Small button</button>
                                <button type="button" class="btn btn-flat btn-danger btn-xs mb-3">Small button</button>
                            </div>
                        </div>
                    </div>
                    <!-- block buttons -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">block buttons</h4>
                                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-info btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-warning btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-success btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-danger btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-dark btn-lg btn-block">Block level button</button>
                            </div>
                        </div>
                    </div>
                    <!-- block buttons Flat -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">block buttons Flat</h4>
                                <button type="button" class="btn btn-flat btn-primary btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-flat btn-info btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-flat btn-warning btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-flat btn-secondary btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-flat btn-success btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-flat btn-danger btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-flat btn-dark btn-lg btn-block">Block level button</button>
                            </div>
                        </div>
                    </div>
                    <!-- Disabled  button -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">General Buttons</h4>
                                <button type="button" class="btn btn-primary mb-3" disabled>Primary</button>
                                <button type="button" class="btn btn-success mb-3" disabled>Success</button>
                                <button type="button" class="btn btn-danger mb-3" disabled>Danger</button>
                                <button type="button" class="btn btn-warning mb-3" disabled>Warning</button>
                                <button type="button" class="btn btn-info mb-3" disabled>Info</button>
                                <button type="button" class="btn btn-dark mb-3" disabled>Light</button>
                                <button type="button" class="btn btn-secondary mb-3" disabled>Light</button>
                                <button type="button" class="btn btn-light mb-3" disabled>Light</button>
                            </div>
                        </div>
                    </div>
                    <!-- Disabled button Falt -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Falt Buttons</h4>
                                <button type="button" class="btn btn-flat btn-primary mb-3" disabled>Primary</button>
                                <button type="button" class="btn btn-flat btn-success mb-3" disabled>Success</button>
                                <button type="button" class="btn btn-flat btn-danger mb-3" disabled>Danger</button>
                                <button type="button" class="btn btn-flat btn-warning mb-3" disabled>Warning</button>
                                <button type="button" class="btn btn-flat btn-info mb-3" disabled>Info</button>
                                <button type="button" class="btn btn-flat btn-dark mb-3" disabled>Light</button>
                                <button type="button" class="btn btn-flat btn-secondary mb-3" disabled>Light</button>
                                <button type="button" class="btn btn-flat btn-light mb-3" disabled>Light</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- button srea end -->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?= $_footer ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="<?= base_url("assets/js") ?>/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url("assets/js") ?>/popper.min.js"></script>
    <script src="<?= base_url("assets/js") ?>/bootstrap.min.js"></script>
    <script src="<?= base_url("assets/js") ?>/owl.carousel.min.js"></script>
    <script src="<?= base_url("assets/js") ?>/metisMenu.min.js"></script>
    <script src="<?= base_url("assets/js") ?>/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url("assets/js") ?>/jquery.slicknav.min.js"></script>
    <!-- others plugins -->
    <script src="<?= base_url("assets/js") ?>/plugins.js"></script>
    <script src="<?= base_url("assets/js") ?>/scripts.js"></script>
</body>

</html>
