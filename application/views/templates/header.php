<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Service Page - The Beautiful Brainsys Manager</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('vendor/fortawesome/font-awesome/css/font-awesome.min.css')?>" />
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap_mod.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" color-on-scroll="400" style="background-color: #532b28 !important;">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-header">Welcome <?php echo $_SESSION['user']->mail?></a>
                    <a class="dropdown-item" href="#">Profil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Admin</a>
                </div>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="http://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" data-color="popover-warning" target="_blank">
                The Beautiful Brainsys Manager
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="test" data-toggle="dropdown">WEB</a>
                            <ul class="dropdown-menu" aria-labelledby="test">
                                <a class="dropdown-item" href="#">List Hosted</a>
                                <a class="dropdown-item" href="#">New Wordpress</a>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DNS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/disconnect">DISCONNECT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="container">
            <div class="section">
                <div class="container">