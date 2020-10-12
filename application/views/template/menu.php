<?php
    $current = $this->uri->segment(2);

    $header_dashboard = ($current == "dashboard" || $current == "dashboard2" || $current == "dashboard3") ? 'class="active"' : '';

    $header_charts = ($current == "barchart" || $current == "linechart" || $current == "piechart") ? 'class="active"' : '';

    $header_ui_features = ($current == "accordion" || $current == "alert" || $current == "badge" || $current == "button" || $current == "button_group" || $current == "cards" || $current == "dropdown" || $current == "list_group" || $current == "media_object" || $current == "modal" || $current == "pagination" || $current == "popovers" || $current == "progressbar" || $current == "tab" || $current == "typography" || $current == "form" || $current == "grid") ? 'class="active"' : '';

    $header_icons = ($current == "fontawesome" || $current == "themify") ? 'class="active"' : '';

    $header_tables = ($current == "table_basic" || $current == "table_layout" || $current == "datatable") ? 'class="active"' : '';

    $header_pages = ($current == "pricing") ? 'class="active"' : '';

    $dashboard = ($current == "dashboard") ? 'class="active"' : '';
    $dashboard2 = ($current == "dashboard2") ? 'class="active"' : '';
    $dashboard3 = ($current == "dashboard3") ? 'class="active"' : '';
    $dashboard3_horizontalmenu = ($current == "dashboard3_horizontalmenu") ? 'class="active"' : '';

    $barchart = ($current == "barchart") ? 'class="active"' : '';
    $linechart = ($current == "linechart") ? 'class="active"' : '';
    $piechart = ($current == "piechart") ? 'class="active"' : '';

    $accordion = ($current == "accordion") ? 'class="active"' : '';
    $alert = ($current == "alert") ? 'class="active"' : '';
    $badge = ($current == "badge") ? 'class="active"' : '';
    $button = ($current == "button") ? 'class="active"' : '';
    $button_group = ($current == "button_group") ? 'class="active"' : '';
    $cards = ($current == "cards") ? 'class="active"' : '';
    $dropdown = ($current == "dropdown") ? 'class="active"' : '';
    $list_group = ($current == "list_group") ? 'class="active"' : '';
    $media_object = ($current == "media_object") ? 'class="active"' : '';
    $modal = ($current == "modal") ? 'class="active"' : '';
    $pagination = ($current == "pagination") ? 'class="active"' : '';
    $popovers = ($current == "popovers") ? 'class="active"' : '';
    $progressbar = ($current == "progressbar") ? 'class="active"' : '';
    $tab = ($current == "tab") ? 'class="active"' : '';
    $typography = ($current == "typography") ? 'class="active"' : '';
    $form = ($current == "form") ? 'class="active"' : '';
    $grid = ($current == "grid") ? 'class="active"' : '';

    $fontawesome = ($current == "fontawesome") ? 'class="active"' : '';
    $themify = ($current == "themify") ? 'class="active"' : '';

    $table_basic = ($current == "table_basic") ? 'class="active"' : '';
    $table_layout = ($current == "table_layout") ? 'class="active"' : '';
    $datatable = ($current == "datatable") ? 'class="active"' : '';

    $pricing = ($current == "pricing") ? 'class="active"' : '';
    $maps = ($current == "maps") ? 'class="active"' : '';
    $invoice = ($current == "invoice") ? 'class="active"' : '';
?>

<div class="sidebar-menu">
    <div class="main-menu">
        <div class="menu-inner">
			<div class="sidebar-header">
				<div class="logo">
					<a href="<?= site_url("home/dashboard") ?>"><img src="<?= base_url("assets/images") ?>/demo-logo.png" class="" alt="logo"></a>
				</div>
			 
			 
			</div>
            <nav>
                <ul class="metismenu" id="menu">
                    <li <?= $header_dashboard ?>>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Create Fixture</span></a>
                        <!--<ul class="collapse">-->
                        <!--    <li <?= $dashboard ?>><a href="<?= site_url("home/dashboard") ?>">Dashboard 1</a></li>-->
                        <!--    <li <?= $dashboard2 ?>><a href="<?= site_url("home/dashboard2") ?>">Dashboard 2</a></li>-->
                        <!--    <li <?= $dashboard3 ?>><a href="<?= site_url("home/dashboard3") ?>">Dashboard 3</a></li>-->
                        <!--</ul>-->
                    </li>
                    <li <?= $dashboard3_horizontalmenu ?>><a href="<?= site_url("home/dashboard3_horizontalmenu") ?>"><i class="ti-layout-sidebar-left"></i> <span>Liabraries/Reports</span></a></li>
                        <li <?= $dashboard3_horizontalmenu ?>><a href="<?= site_url("home/dashboard3_horizontalmenu") ?>"><i class="ti-layout-sidebar-left"></i> <span>Administration</span></a></li>
                        
                    <li <?= $header_charts ?>>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Info/Support</span></a>
                        <!--<ul class="collapse">-->
                        <!--    <li <?= $barchart ?>><a href="<?= site_url("home/barchart") ?>">Bar Chart</a></li>-->
                        <!--    <li <?= $linechart ?>><a href="<?= site_url("home/linechart") ?>">Line Chart</a></li>-->
                        <!--    <li <?= $piechart ?>><a href="<?= site_url("home/piechart") ?>">Pie chart</a></li>-->
                        <!--</ul>-->
                    </li>
                    <li <?= $header_ui_features ?>>
                        <a href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span>Master</span></a>
                        <ul class="collapse">
                            <li <?= $accordion ?>><a href="<?= site_url("home/accordion") ?>">Add Role</a></li>
                            <li <?= $button ?>><a href="javascript:void(0)" aria-expanded="true">Add Fixture</a>
                                 <ul class="collapse">
                            <li <?= $accordion ?>><a href="<?= site_url("home/accordion") ?>">Vessels</a></li>
                            <li <?= $alert ?>><a href="<?= site_url("home/alert") ?>">user Management</a></li>
                            <li <?= $badge ?>><a href="<?= site_url("home/badge") ?>">Role Management</a></li>
                        </ul>
                            </li>
                             
                        </ul>
                    </li>
                   
                </ul>
            </nav>
        </div>
    </div>
</div>