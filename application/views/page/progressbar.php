<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Progressbar</title>
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
								<h4 class="page-title pull-left">Progressbar</h4>
								<ul class="breadcrumbs pull-left">
									<li><a href="<?= site_url("home/dashboard") ?>">Home</a></li>
									<li><span>Progressbar</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- progress area start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Progress</h4>
                                <div class="progress_area">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress area end -->
                    <!-- progress area start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Progress With Labels</h4>
                                <div class="progress_area">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress area end -->
                    <!-- progress area start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Progress With Height</h4>
                                <div class="progress_area">
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress" style="height: 15px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress area end -->
                    <!-- progress area start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Progress With Backgrounds</h4>
                                <div class="progress_area">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress area end -->
                    <!-- progress area start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Progress With Multiple Bars</h4>
                                <div class="progress_area">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress area end -->
                    <!-- progress area start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Progress With Striped</h4>
                                <div class="progress_area">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress area end -->
                    <!-- progress area start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Animated stripes</h4>
                                <div class="progress_area">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress area end -->
                    <!-- progress area start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Animated Height</h4>
                                <div class="progress_area">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                    </div>
                                    <br>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                    </div>
                                    <br>
                                    <div class="progress" style="height: 15px;">
                                        <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                    </div>
                                    <br>
                                    <div class="progress" style="height: 22px;">
                                        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                    <br>
                                    <div class="progress" style="height: 28px;">
                                        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- progress area end -->
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
