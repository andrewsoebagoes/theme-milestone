<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
    <meta name="msapplication-tap-highlight" content="no">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Milestone">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Milestone">

    <meta name="theme-color" content="#4C7FF0">

    <title><?= get_title(); ?></title>

    <!-- page stylesheets -->
    <!-- end page stylesheets -->
    
    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="<?= asset('theme/assets/vendor/bootstrap/dist/css/bootstrap.css') ?>" />
    <!-- <link rel="stylesheet" href="<?= asset('theme/assets/vendor/pace/themes/blue/pace-theme-minimal.css') ?>" /> -->
    <link rel="stylesheet" href="<?= asset('theme/assets/vendor/font-awesome/css/font-awesome.css') ?>" />
    <link rel="stylesheet" href="<?= asset('theme/assets/vendor/animate.css/animate.css') ?>" />
    <link rel="stylesheet" href="<?= asset('theme/assets/styles/app.css" id="load_styles_before') ?>" />
    <link rel="stylesheet" href="<?= asset('theme/assets/styles/app.skins.css') ?>" />
    <!-- endbuild -->
    
    
    <!-- Datatable -->
    <link rel="stylesheet" href="<?= asset('theme/assets/vendor/datatables/media/css/dataTables.bootstrap4.css')?>">
    <link rel="stylesheet" href="<?= asset('theme/assets/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css') ?>" />

    <style>
        .logo-lg img {
            max-height: 65px !important;
            height: auto;
            max-width: 100%;
        }

        html[data-sidenav-size=condensed]:not([data-layout=topnav]) .wrapper .leftside-menu .logo,
        .leftside-menu {
            background-color: #FFF;
        }
    </style>
</head>

<body>

    <div class="app">
        <!--sidebar panel-->
        <?= get_sidebar(); ?>
        <!-- /sidebar panel -->
        <!-- content panel -->
        <div class="main-panel">
            <!-- top header -->
            <?= get_nav(); ?>
            <!-- /top header -->

            <!-- main area -->
            <div class="main-content">
                <div class="content-view">
            <?php if (get_module_name()) : ?>
                <h5 style="margin-bottom: 20px;"><?= get_module_name() ?></h5>
                
                <div class="page-title-left">
                    <?php if (get_breadcrumbs()) : ?>
                        <ol class="breadcrumb m-0">
                            <?php foreach (get_breadcrumbs() as $breadcrumb) : ?>
                                <li class="breadcrumb-item mb-3 mt-3"><a href="<?= isset($breadcrumb['url']) ? $breadcrumb['url'] : 'javascript:void(0)' ?>"><?= $breadcrumb['title'] ?></a></li>
                                <?php endforeach ?>
                            </ol>
                            <?php endif ?>
                        </div>
                        
                        
                        <?php endif ?>
                        
