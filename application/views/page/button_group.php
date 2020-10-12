<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Button Group</title>
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
								<h4 class="page-title pull-left">button Group</h4>
								<ul class="breadcrumbs pull-left">
									<li><a href="<?= site_url("home/dashboard") ?>">Home</a></li>
									<li><span>button Group</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- button Group srea start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Basic Button Group</h4>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary">Left</button>
                                    <button type="button" class="btn btn-primary">Middle</button>
                                    <button type="button" class="btn btn-primary">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Left</button>
                                    <button type="button" class="btn btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-secondary">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success">Left</button>
                                    <button type="button" class="btn btn-success">Middle</button>
                                    <button type="button" class="btn btn-success">Right</button>
                                </div>
                                <br>
                                <br>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-danger">Left</button>
                                    <button type="button" class="btn btn-danger">Middle</button>
                                    <button type="button" class="btn btn-danger">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning">Left</button>
                                    <button type="button" class="btn btn-warning">Middle</button>
                                    <button type="button" class="btn btn-warning">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-info">Left</button>
                                    <button type="button" class="btn btn-info">Middle</button>
                                    <button type="button" class="btn btn-info">Right</button>
                                </div>
                                <br>
                                <br>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-light">Left</button>
                                    <button type="button" class="btn btn-light">Middle</button>
                                    <button type="button" class="btn btn-light">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success">Left</button>
                                    <button type="button" class="btn btn-success">Middle</button>
                                    <button type="button" class="btn btn-success">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-dark">Left</button>
                                    <button type="button" class="btn btn-dark">Middle</button>
                                    <button type="button" class="btn btn-dark">Right</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- button Group srea end -->
                    <!-- button toolbar srea start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Basic toolbar</h4>
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-primary mb-xl-3">1</button>
                                    <button type="button" class="btn btn-primary mb-xl-3">2</button>
                                    <button type="button" class="btn btn-primary mb-xl-3">3</button>
                                    <button type="button" class="btn btn-primary mb-xl-3">4</button>
                                    <button type="button" class="btn btn-primary mb-xl-3">5</button>
                                    <button type="button" class="btn btn-primary mb-xl-3">6</button>
                                    <button type="button" class="btn btn-primary mb-xl-3">7</button>
                                    <button type="button" class="btn btn-primary mb-xl-3">9</button>
                                </div>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-success mb-xl-3">10</button>
                                    <button type="button" class="btn btn-success mb-xl-3">11</button>
                                    <button type="button" class="btn btn-success mb-xl-3">12</button>
                                    <button type="button" class="btn btn-success mb-xl-3">14</button>
                                </div>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-info mb-xl-3">15</button>
                                    <button type="button" class="btn btn-info mb-xl-3">16</button>
                                </div>
                                <br>
                                <br>
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-secondary mb-xl-3">17</button>
                                    <button type="button" class="btn btn-secondary mb-xl-3">18</button>
                                    <button type="button" class="btn btn-secondary mb-xl-3">19</button>
                                    <button type="button" class="btn btn-secondary mb-xl-3">20</button>
                                    <button type="button" class="btn btn-secondary mb-xl-3">21</button>
                                    <button type="button" class="btn btn-secondary mb-xl-3">22</button>
                                    <button type="button" class="btn btn-secondary mb-xl-3">23</button>
                                    <button type="button" class="btn btn-secondary mb-xl-3">24</button>
                                </div>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-warning mb-xl-3">25</button>
                                    <button type="button" class="btn btn-warning mb-xl-3">26</button>
                                    <button type="button" class="btn btn-warning mb-xl-3">27</button>
                                    <button type="button" class="btn btn-warning mb-xl-3">28</button>
                                    <button type="button" class="btn btn-warning mb-xl-3">29</button>
                                </div>
                                <br>
                                <br>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-danger mb-xl-3">31</button>
                                    <button type="button" class="btn btn-danger mb-xl-3">32</button>
                                    <button type="button" class="btn btn-danger mb-xl-3">33</button>
                                    <button type="button" class="btn btn-danger mb-xl-3">34</button>
                                    <button type="button" class="btn btn-danger mb-xl-3">35</button>
                                    <button type="button" class="btn btn-danger mb-xl-3">36</button>
                                    <button type="button" class="btn btn-danger mb-xl-3">37</button>
                                </div>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-dark mb-xl-3">38</button>
                                    <button type="button" class="btn btn-dark mb-xl-3">39</button>
                                    <button type="button" class="btn btn-dark mb-xl-3">40</button>
                                    <button type="button" class="btn btn-dark mb-xl-3">41</button>
                                    <button type="button" class="btn btn-dark mb-xl-3">42</button>
                                    <button type="button" class="btn btn-dark mb-xl-3">43</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- button toolbar srea end -->
                    <!-- button Sizing srea start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Button Sizing</h4>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-lg btn-primary">Left</button>
                                    <button type="button" class="btn btn-lg btn-primary">Middle</button>
                                    <button type="button" class="btn btn-lg btn-primary">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-lg btn-secondary">Left</button>
                                    <button type="button" class="btn btn-lg btn-secondary">Middle</button>
                                    <button type="button" class="btn btn-lg btn-secondary">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-lg btn-success">Left</button>
                                    <button type="button" class="btn btn-lg btn-success">Middle</button>
                                    <button type="button" class="btn btn-lg btn-success">Right</button>
                                </div>
                                <br>
                                <br>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-md btn-danger">Left</button>
                                    <button type="button" class="btn btn-md btn-danger">Middle</button>
                                    <button type="button" class="btn btn-md btn-danger">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-md btn-warning">Left</button>
                                    <button type="button" class="btn btn-md btn-warning">Middle</button>
                                    <button type="button" class="btn btn-md btn-warning">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-md btn-info">Left</button>
                                    <button type="button" class="btn btn-md btn-info">Middle</button>
                                    <button type="button" class="btn btn-md btn-info">Right</button>
                                </div>
                                <br>
                                <br>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-primary">Left</button>
                                    <button type="button" class="btn btn-sm btn-primary">Middle</button>
                                    <button type="button" class="btn btn-sm btn-primary">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-success">Left</button>
                                    <button type="button" class="btn btn-sm btn-success">Middle</button>
                                    <button type="button" class="btn btn-sm btn-success">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-dark">Left</button>
                                    <button type="button" class="btn btn-sm btn-dark">Middle</button>
                                    <button type="button" class="btn btn-sm btn-dark">Right</button>
                                </div>
                                <br>
                                <br>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-xs btn-primary">Left</button>
                                    <button type="button" class="btn btn-xs btn-primary">Middle</button>
                                    <button type="button" class="btn btn-xs btn-primary">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-xs btn-success">Left</button>
                                    <button type="button" class="btn btn-xs btn-success">Middle</button>
                                    <button type="button" class="btn btn-xs btn-success">Right</button>
                                </div>
                                <div class="btn-group mb-xl-3" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-xs btn-dark">Left</button>
                                    <button type="button" class="btn btn-xs btn-dark">Middle</button>
                                    <button type="button" class="btn btn-xs btn-dark">Right</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- button Sizing srea end -->
                    <!-- button Nesting srea start -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Button Nesting</h4>
                                <div class="row">
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-primary">1</button>
                                        <button type="button" class="btn btn-primary">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-success">1</button>
                                        <button type="button" class="btn btn-success">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-danger">1</button>
                                        <button type="button" class="btn btn-danger">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop3" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-warning">1</button>
                                        <button type="button" class="btn btn-warning">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop4" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-info">1</button>
                                        <button type="button" class="btn btn-info">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop5" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-xl-5">
                                        <h4 class="header-title">Button Nesting Flat</h4>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-flat btn-light">1</button>
                                        <button type="button" class="btn btn-flat btn-light">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop6" type="button" class="btn btn-flat btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-flat btn-success">1</button>
                                        <button type="button" class="btn btn-flat btn-success">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop7" type="button" class="btn btn-flat btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-flat btn-info">1</button>
                                        <button type="button" class="btn btn-flat btn-info">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop8" type="button" class="btn btn-flat btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-flat btn-warning">1</button>
                                        <button type="button" class="btn btn-flat btn-warning">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop9" type="button" class="btn btn-flat btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-flat btn-danger">1</button>
                                        <button type="button" class="btn btn-flat btn-danger">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop10" type="button" class="btn btn-flat btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group col-lg-4 col-md-6 mb-3" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-flat btn-dark">1</button>
                                        <button type="button" class="btn btn-flat btn-dark">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop11" type="button" class="btn btn-flat btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- button Nesting srea end -->
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
