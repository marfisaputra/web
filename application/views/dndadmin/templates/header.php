<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMS Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet"/>

    <link href="<?php echo base_url('assets/admin/fonts/css/font-awesome.min.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet"/>

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url('assets/admin/css/custom.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/icheck/flat/green.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/css/floatexamples.css');?>" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url('assets/admin/js/jquery.min.js');?>"> </script>
    <script src="<?php echo base_url('assets/admin/js/nprogress.js');?>"></script>
	
    <!-- tinymce -->
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/tinymce.dev.js');?>"></script>
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/table/plugin.dev.js');?>"></script>
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js');?>"></script>
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/wordcount/plugin.js');?>"></script>
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js');?>"></script>


	<!-- Custom js plus plugins -->
		
	<div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js');?>"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/gauge/gauge.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/gauge/gauge_demo.js');?>"></script>
    <!-- chart js -->
    <script src="<?php echo base_url('assets/admin/js/chartjs/chart.min.js');?>"></script>
    <!-- bootstrap progress js -->
    <script src="<?php echo base_url('assets/admin/js/progressbar/bootstrap-progressbar.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/nicescroll/jquery.nicescroll.min.js');?>"></script>
    <!-- icheck -->
    <script src="<?php echo base_url('assets/admin/js/icheck/icheck.min.js');?>"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/moment.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/datepicker/daterangepicker.js');?>"></script>

    <script src="<?php echo base_url('assets/admin/js/custom.js');?>"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/flot/jquery.flot.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/flot/jquery.flot.pie.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/flot/jquery.flot.orderBars.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/flot/jquery.flot.time.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/flot/date.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/flot/jquery.flot.spline.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/assets/admin/js/flot/jquery.flot.stack.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/flot/curvedLines.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/js/flot/jquery.flot.resize.js');?>"></script>
 
</head>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?php echo site_url('home'); ?>" class="site_title"><span>Dasboard Admin</span></a>
                    </div>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
						    <div class="clearfix"></div>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="<?php echo site_url('home'); ?>"><i class="fa fa-home"></i> Home</a> 
                                </li>
                                <li>
                                    <a href="<?php echo site_url('menu'); ?>"><i class="fa fa-list-alt"></i> Menu</a>  
                                </li>
                                <li>
                                    <a href="<?php echo site_url('page'); ?>"><i class="fa fa-file"></i> Page</a>  
                                </li>
                                <li>
                                    <a href="<?php echo site_url('picture'); ?>"><i class="fa fa-file-image-o"></i> Picture</a>  
                                </li>
                                <li>
                                    <a><i class="fa fa-edit"></i> Post <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="<?php echo site_url('berita');?>">Data Post</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('kategori');?>">Data Kategori</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa fa-briefcase"></i> Produk <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="<?php echo site_url('produk');?>">Data Produk</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('produk_kat');?>">Data Kategori Produk</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="<?php echo site_url('user');?>">Data Users</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-bar-chart-o"></i> Visitor <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="php">Today</a>
                                        </li>
                                        <li>
                                            <a href="a">All</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-cog"></i> Setting <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="a">Tema</a>
                                        </li>
                                        <li>
                                            <a href="a">Informasi</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                   Welcome <?php echo $this->session->userdata('username') ?> 
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li>
                                        <a href="<?php echo site_url('account/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>   
                    </nav>
                </div>
            </div>