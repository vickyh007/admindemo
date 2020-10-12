<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add New Vessels</title>
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

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html"><img src="<?= base_url("assets/images") ?>/demo-logo.png" alt="logo" class="logo-horizontal"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                          <ul class="notification-area pull-right">
							</li>
								<li class="dropdown">
									<i class="ti-user dropdown-toggle" data-toggle="dropdown">
									</i>
									Arron Stone
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
									<li>
								<a href="#">Logout</a>

								</li>
								  
							</ul>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-top header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-dashboard"></i><span>Create Fixture</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-pie-chart"></i><span>Liabraries/Reports</span></a>
                                    </li>
                                    <li class="mega-menu">
                                        <a href="javascript:void(0)"><i class="ti-palette"></i><span>Administration</span></a>
                                </li>
                                         
                                    </li>
                                    <li class="mega-menu">
                                        <a href="javascript:void(0)"><i class="ti-layers-alt"></i> <span>Info/Support</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-slice"></i><span>Master</span></a>
                                        <ul class="submenu">
                                            <li><a href="#">Add Role</a></li>
                                            <li><a href="#">Add Fixture</a>
                                             <ul class="submenu">
                                            <li><a href="#">Vessels</a></li>
                                            <li><a href="#">User Management</a></li>                                            <li><a href="#">Role Management</a></li>
                                        </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <div class="col-lg-3 clearfix wrapper">
                    	<div class="search-box pull-left wrapper">
								<form action="#">
									<input type="text" name="search" placeholder="Fixture ID" required>
									<i class="ti-search"></i>
								</form>
							</div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area end -->
         <div class="main-content-inner">
              
                <!-- market value area start -->
                <div class=" mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0"></h4>
                                    <div class="pull-right">
<a href="<?= site_url("home/dashboard2") ?>"><button class="btn btn-success">Save</button></a>
<a href="<?= site_url("home/dashboard2") ?>"><button class="btn">Close</button></a>
</div>
                                </div>
                                <div class="market-status-table">
                                    <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body row">
                                        <h4 class="header-title wrapper">vessel</h4>
                                        <div class="form-group col-md-6">
                                            <label for="example-text-input" class="col-form-label">Vessel Name</label>
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Ex-name: (if any)</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                        <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Imo Number</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                        <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Class</label>
                                            <input class="form-control" id="example-search-input">
                                        </div>                                        <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Year Built</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                        <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Country of Built</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                        <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Flag</label>
                                            <input class="form-control" type="number">
                                        </div>                                        <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Port of Registry</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                        <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">P & l dub</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">SSW Dwt</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">SSW Draft</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">GRT</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">NRT</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Suez GRT</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Suez NRT</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Air Draft</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                 <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">LOA</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">BEAM</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">TYPE OF VESSEL: (GEARED/GEARLESS):</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">NO OF CRANES (FOR GEARED ONLY)</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">NO OF GRABS (FOR GEARED ONLY)</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">CRANE CAPACITY</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">GRAB CAPACITY</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">HOLD HATCHES</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">GRAIN M3/BALE M3</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">GRAIN/FEET / BALE C/FEET</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                          <div class="form-group col-md-12">
                                            <label for="example-search-input" class="col-form-label">OWNERS/DISPONENT M3</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                         <div class="form-group col-md-12">
                                            <label for="example-search-input" class="col-form-label">Whether the Shipping Company is eligible for "Right of First Refusal" Policy of Govt. of India</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-12">
                                            <label for="example-search-input" class="col-form-label">Nationality of Shipping Company & Vessel</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-12">
                                            <label for="example-search-input" class="col-form-label">If others, please indicate country of incorporation of the Owners / Performing Owners</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-12">
                                            <label for="example-search-input" class="col-form-label">If others, please indicate country of incorporation of the Head-Owners (if different from performing Owne</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-12">
                                            <label for="example-search-input" class="col-form-label">Name of the Owner / Performing Owner</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Name of Head Owner</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Vessel's Present Position</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">ETA Load Port</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">VESSEL DOCUMENTS</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">Vessel has all required valid documents</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">ISM Certificate No.</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                   <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">SMC Certificate No.</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>                                                                                                                  <div class="form-group col-md-6">
                                            <label for="example-search-input" class="col-form-label">DOC Certificate No.</label>
                                            <input class="form-control" type="search" id="example-search-input">
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                           <button class="btn btn-success pull-right"><i class="fa  fa-plus mr-1"></i> Add Field</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Textual inputs end -->
                            
                          
                        </div>
                    </div>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- market value area end -->
                 
                </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?= $_footer ?>
        <!-- footer area end-->
    </div>
    <!-- main wrapper start -->
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

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="<?= base_url("assets/js") ?>/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?= base_url("assets/js") ?>/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="<?= base_url("assets/js") ?>/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="<?= base_url("assets/js") ?>/maps.js"></script>
    <!-- others plugins -->
    <script src="<?= base_url("assets/js") ?>/plugins.js"></script>
    <script src="<?= base_url("assets/js") ?>/scripts.js"></script>
</body>

</html>
