<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>List Group</title>
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
						<div class="col-sm-6">
							<div class="breadcrumbs-area clearfix">
								<h4 class="page-title pull-left">List Group</h4>
								<ul class="breadcrumbs pull-left">
									<li><a href="<?= site_url("home/dashboard") ?>">Home</a></li>
									<li><span>List Group</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- Basic List Group start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Basic List Group</h4>
                                <ul class="list-group">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Basic List Group end -->
                    <!-- Active Items start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Active Items</h4>
                                <ul class="list-group">
                                    <li class="list-group-item active">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Active Items end -->
                    <!-- Links And Buttons start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Links And Buttons</h4>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        Cras justo odio
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Links And Buttons end -->
                    <!-- Disabled Items start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Disabled Items</h4>
                                <ul class="list-group">
                                    <li class="list-group-item disabled">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Disabled Items end -->
                    <!-- Buttons Items start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Buttons Items</h4>
                                <div class="list-group">
                                    <button type="button" class="list-group-item list-group-item-action active">
                                        Cras justo odio
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                                    <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action" disabled="">Vestibulum at eros</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Buttons Items end -->
                    <!-- Flush start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Flush</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Flush end -->
                    <!-- Contextual Classes start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Contextual Classes</h4>
                                <ul class="list-group">
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                                    <li class="list-group-item list-group-item-secondary">This is a secondary list group item
                                    </li>
                                    <li class="list-group-item list-group-item-success">This is a success list group item</li>
                                    <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                                    <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                                    <li class="list-group-item list-group-item-info">This is a info list group item</li>
                                    <li class="list-group-item list-group-item-light">This is a light list group item</li>
                                    <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Contextual Classes end -->
                    <!-- Contextual Classes Links start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Contextual Classes Links</h4>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">This
                                        is a primary list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">This
                                        is a secondary list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">This
                                        is a success list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This
                                        is a danger list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This
                                        is a warning list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">This
                                        is a info list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-light">This
                                        is a light list group item</a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This
                                        is a dark list group item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contextual Classes Links end -->
                    <!-- With Badges start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">With Badges</h4>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Cras justo odio
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span class="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Morbi leo risus
                                        <span class="badge badge-primary badge-pill">1</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Cras justo odio
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span class="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Morbi leo risus
                                        <span class="badge badge-primary badge-pill">1</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Morbi leo risus
                                        <span class="badge badge-primary badge-pill">1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- With Badges end -->
                    <!-- Custom Content start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Custom Content</h4>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                        <small>Donec id elit non mi porta.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Custom Content end -->
                </div>
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
