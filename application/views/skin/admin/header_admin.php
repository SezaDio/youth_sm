<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        
        <!-- load bootsrap -->
        <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        
        <!-- Ionicons -->
        <link href="<?php echo base_url('asset/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css" />
        
        <!-- Theme style -->
        <link href="<?php echo base_url('asset/css/style.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- DataTables CSS --> 
        <link href="<?php echo base_url('asset/css/jquery.dataTables.css'); ?>" rel="stylesheet" type="text/css">
       
        
        
    </head>
	<script src="<?php echo base_url('asset/js/instafeed.js-master/instafeed.min.js'); ?>" type="text/javascript"></script>
    <script type="text/javascript">
    var userFeed = new Instafeed({
		get: 'user',
		userId: '367806601',
		clientId: '60e2f0527b724be4af2dc7215295ed9d',
		accessToken: '367806601.60e2f05.51d0b11fa9b0411da4064bd86357f0dd'
    });
    userFeed.run();
	</script>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Administrator
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Seza Dio F. <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url('asset/img/circle.png'); ?>" class="img-circle" alt="User Image">
                                    <p>
                                        Administrator
                                        <small>Last login : <?php //$login= $result_last_login->fetch_object(); echo $login->login_terakhir;?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('account/logout'); ?>" class="btn btn-danger btn-sm"> Log Out </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>