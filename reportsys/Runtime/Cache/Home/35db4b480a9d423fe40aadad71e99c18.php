<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <title>Index file</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="The Leven Blog">
    <meta name="author" content="Leven">

    <!-- CSS -->
    <link href="/myDemo/reportSys/Public/Home/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/myDemo/reportSys/Public/Home/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/myDemo/reportSys/Public/Home/css/main.css" rel="stylesheet" type="text/css">
    <link href="/myDemo/reportSys/Public/Home/css/my-custom-styles.css" rel="stylesheet" type="text/css">
    <link href="/myDemo/reportSys/Public/Home/css/style-switcher.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]>
    <link href="/myDemo/reportSys/Public/Home/css/main-ie.css" rel="stylesheet" type="text/css"/>
    <link href="/myDemo/reportSys/Public/Home/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
    <![endif]-->

    <!-- CSS for demo style switcher. you can remove this -->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/myDemo/reportSys/Public/Home/ico/kingadmin-favicon144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/myDemo/reportSys/Public/Home/ico/kingadmin-favicon114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/myDemo/reportSys/Public/Home/ico/kingadmin-favicon72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/myDemo/reportSys/Public/Home/ico/kingadmin-favicon57x57.png">
    <link rel="shortcut icon" href="/myDemo/reportSys/Public/Home/ico/favicon.png">

</head>
<body>
    <div class="wrapper">
        <!-- TOP BAR -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="col-md-2 logo">
                <a href="Home/Index/index"><img src="/myDemo/reportSys/Public/Home/img/kingadmin-logo-white.png" alt="Admin | The Leven Blog" /></a>
                <h1 class="sr-only">The Leven Blog</h1>
            </div>
            <!-- end logo -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <!-- search box
                        <div id="tour-searchbox" class="input-group searchbox">
                            <input type="search" class="form-control" placeholder="enter keyword here...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i></button>
                            </span>
                        </div>
                        end search box -->
                    </div>
                    <div class="col-md-9">
                        <div class="top-bar-right">
                            <!-- responsive menu bar icon -->
                            <a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
                            <!-- end responsive menu bar icon -->
                            <!--
                            <button type="button" id="start-tour" class="btn btn-link"><i class="fa fa-refresh"></i> Start Tour</button>
                            -->
                            <button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i></button>
                            <div class="notifications">
                                <ul>
                                    <!-- notification: inbox -->
                                    <li class="notification-item inbox">
                                        <div class="btn-group">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-envelope"></i><span class="count">2</span>
                                                <span class="circle"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="notification-header">
                                                    <em>你收到2条新信息!</em>
                                                </li>
                                                <li class="inbox-item clearfix">
                                                    <a href="#">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img class="media-object" src="/myDemo/reportSys/Public/Home/img/user1.png" alt="Antonio">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading name">Antonius</h5>
                                                                <p class="text">The problem just happened this morning. I can't see ...</p>
                                                                <span class="timestamp">4 minutes ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="inbox-item unread clearfix">
                                                    <a href="#">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img class="media-object" src="/myDemo/reportSys/Public/Home/img/user2.png" alt="Antonio">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading name">Michael</h5>
                                                                <p class="text">Hey dude, cool theme!</p>
                                                                <span class="timestamp">2 hours ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="inbox-item unread clearfix">
                                                    <a href="#">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img class="media-object" src="/myDemo/reportSys/Public/Home/img/user3.png" alt="Antonio">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading name">Stella</h5>
                                                                <p class="text">Ok now I can see the status for each item. Thanks! :D</p>
                                                                <span class="timestamp">Oct 6</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="inbox-item clearfix">
                                                    <a href="#">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img class="media-object" src="/myDemo/reportSys/Public/Home/img/user4.png" alt="Antonio">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading name">Jane Doe</h5>
                                                                <p class="text"><i class="fa fa-reply"></i> Please check the status of your ...</p>
                                                                <span class="timestamp">Oct 2</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="inbox-item clearfix">
                                                    <a href="#">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img class="media-object" src="/myDemo/reportSys/Public/Home/img/user5.png" alt="Antonio">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="media-heading name">John Simmons</h5>
                                                                <p class="text"><i class="fa fa-reply"></i> I've fixed the problem :)</p>
                                                                <span class="timestamp">Sep 12</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-footer">
                                                    <a href="#">查看所有信息</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- end notification: inbox -->
                                    <!-- notification: general -->
                                    <li class="notification-item general">
                                        <div class="btn-group">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bell"></i><span class="count">8</span>
                                                <span class="circle"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="notification-header">
                                                    <em>你收到8条提醒！</em>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comment green-font"></i>
                                                        <span class="text">New comment on the blog post</span>
                                                        <span class="timestamp">1 minute ago</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-user green-font"></i>
                                                        <span class="text">New registered user</span>
                                                        <span class="timestamp">12 minutes ago</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comment green-font"></i>
                                                        <span class="text">New comment on the blog post</span>
                                                        <span class="timestamp">18 minutes ago</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-shopping-cart red-font"></i>
                                                        <span class="text">4 new sales order</span>
                                                        <span class="timestamp">4 hours ago</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-edit yellow-font"></i>
                                                        <span class="text">3 product reviews awaiting moderation</span>
                                                        <span class="timestamp">1 day ago</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comment green-font"></i>
                                                        <span class="text">New comment on the blog post</span>
                                                        <span class="timestamp">3 days ago</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comment green-font"></i>
                                                        <span class="text">New comment on the blog post</span>
                                                        <span class="timestamp">Oct 15</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-warning red-font"></i>
                                                        <span class="text red-font">Low disk space!</span>
                                                        <span class="timestamp">Oct 11</span>
                                                    </a>
                                                </li>
                                                <li class="notification-footer">
                                                    <a href="#">查看所有提醒</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- end notification: general -->
                                </ul>
                            </div>
                            <!-- logged user and the menu -->
                            <div class="logged-user">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <img src="/myDemo/reportSys/Public/Home/img/user-avatar.png" alt="User Avatar" />
                                        <span class="name">Leven</span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user"></i>
                                                <span class="text">头像</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-cog"></i>
                                                <span class="text">设置</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-power-off"></i>
                                                <span class="text">退出</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end logged user and the menu -->
                        </div>
                        <!-- /top-bar-right -->
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

        <!-- main -->

            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 left-sidebar">
    <!-- main-nav -->
    <nav class="main-nav">
        <ul class="main-menu">
            <li >
                <a href="adminIframeIndex.html" target="iframe_a"><i class="fa fa-font fa-fw"></i><span class="text">总览</span></a>
            </li>
            <li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">一级菜单   No.1</span>
                <i class="toggle-icon fa fa-angle-left"></i></a>
                <ul class="sub-menu ">
                    <li><a href="adminIframeIndex.html"  target="iframe_a"><span class="text">二级菜单   No.1</span></a></li>
                    <li><a href="index-dashboard-v2.html"><span class="text">二级菜单   No.2<span class="badge element-bg-color-blue">New</span></span></a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#" class="js-sub-menu-toggle">
                    <i class="fa fa-clipboard fa-fw"></i><span class="text">一级菜单   No.2</span>
                    <i class="toggle-icon fa fa-angle-down"></i>
                </a>
                <ul class="sub-menu open">
                    <li class="active"><a href="1.html" target="iframe_a"><span class="text">二级菜单   No.1</span></a></li>
                    <li><a href="2.html" target="iframe_a"><span class="text">二级菜单   No.2</span></a></li>
                    <li><a href="3.html" target="iframe_a"><span class="text">二级菜单   No.3</span></a></li>
                    <li><a href="4.html" target="iframe_a"><span class="text">二级菜单   No.4</span></a></li>
                    <li><a href="5.html" target="iframe_a"><span class="text">二级菜单   No.5</span></a></li>
                    <li><a href="page-view-message.html" target="iframe_a"><span class="text">二级菜单   No.6</span></a></li>
                    <li><a href="page-search-result.html" target="iframe_a"><span class="text">二级菜单   No.7</span></a></li>
                    <li><a href="page-submit-ticket.html" target="iframe_a"><span class="text">二级菜单   No.8</span></a></li>
                    <li><a href="page-file-manager.html" target="iframe_a"><span class="text">二级菜单   No.9 <span class="badge element-bg-color-blue">New</span></span></a></li>
                    <li><a href="page-projects.html" target="iframe_a"><span class="text">二级菜单   No.10 <span class="badge element-bg-color-blue">New</span></span></a></li>
                    <li><a href="page-project-detail.html" target="iframe_a"><span class="text">二级菜单   No.11 <span class="badge element-bg-color-blue">New</span></span></a></li>
                    <li><a href="page-faq.html" target="iframe_a"><span class="text">二级菜单   No.12 <span class="badge element-bg-color-blue">New</span></span></a></li>
                    <li><a href="page-register.html" target="iframe_a"><span class="text">二级菜单   No.13</span></a></li>
                    <li><a href="page-login.html" target="iframe_a"><span class="text">二级菜单   No.14</span></a></li>
                    <li><a href="page-404.html" target="iframe_a"><span class="text">二级菜单   No.15</span></a></li>
                    <li><a href="page-blank.html" target="iframe_a"><span class="text">二级菜单   No.16</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="js-sub-menu-toggle">
                    <i class="fa fa-bar-chart-o fw"></i><span class="text">一级菜单   No.3</span>
                    <i class="toggle-icon fa fa-angle-left"></i>
                </a>
                <ul class="sub-menu ">
                    <li><a href="charts-statistics.html"><span class="text">二级菜单   No.1</span></a></li>
                    <li><a href="charts-statistics-interactive.html"><span class="text">二级菜单   No.2</span></a></li>
                    <li><a href="charts-statistics-real-time.html"><span class="text">Rea二级菜单   No.3</span></a></li>
                    <li><a href="charts-d3charts.html"><span class="text">二级菜单   No.4</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="js-sub-menu-toggle">
                    <i class="fa fa-edit fw"></i><span class="text">一级菜单   No.4</span>
                    <i class="toggle-icon fa fa-angle-left"></i>
                </a>
                <ul class="sub-menu ">
                    <li><a href="form-inplace-editing.html"><span class="text">二级菜单   No.1</span></a></li>
                    <li><a href="form-elements.html"><span class="text">二级菜单   No.2</span></a></li>
                    <li><a href="form-layouts.html"><span class="text">二级菜单   No.3</span></a></li>
                    <li><a href="form-bootstrap-elements.html"><span class="text">二级菜单   No.4</span></a></li>
                    <li><a href="form-validations.html"><span class="text">二级菜单   No.5</span></a></li>
                    <li><a href="form-file-upload.html"><span class="text">二级菜单   No.6</span></a></li>
                    <li><a href="form-text-editor.html"><span class="text">二级菜单   No.7</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="js-sub-menu-toggle">
                    <i class="fa fa-list-alt fw"></i><span class="text">一级菜单   No.5</span>
                    <i class="toggle-icon fa fa-angle-left"></i>
                </a>
                <ul class="sub-menu ">
                    <li><a href="ui-elements-general.html"><span class="text">二级菜单   No.1</span></a></li>
                    <li><a href="ui-elements-tabs.html"><span class="text">二级菜单   No.2</span></a></li>
                    <li><a href="ui-elements-buttons.html"><span class="text">二级菜单   No.3</span></a></li>
                    <li><a href="ui-elements-icons.html"><span class="text">二级菜单   No.4 <span class="badge element-bg-color-blue">Updated</span></span></a></li>
                    <li><a href="ui-elements-flash-message.html"><span class="text">二级菜单   No.5</span></a></li>
                </ul>
            </li>
            <li>
                <a href="widgets.html">
                    <i class="fa fa-puzzle-piece fa-fw"></i><span class="text">一级菜单   No.6 <span class="badge element-bg-color-blue">Updated</span></span>
                </a>
            </li>
            <li>
                <a href="#" class="js-sub-menu-toggle">
                    <i class="fa fa-gears fw"></i><span class="text">一级菜单   No.7</span>
                    <i class="toggle-icon fa fa-angle-left"></i>
                </a>
                <ul class="sub-menu ">
                    <li><a href="components-wizard.html"><span class="text">二级菜单   No.1</span></a></li>
                    <li><a href="components-calendar.html"><span class="text">二级菜单   No.2</span></a></li>
                    <li><a href="components-maps.html"><span class="text">二级菜单   No.3</span></a></li>
                    <li><a href="components-gallery.html"><span class="text">二级菜单   No.4</span></a></li>
                    <li><a href="components-tree-view.html"><span class="text">二级菜单   No.5 <span class="badge element-bg-color-blue">New</span></span></a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="js-sub-menu-toggle">
                    <i class="fa fa-table fw"></i><span class="text">一级菜单   No.8</span>
                    <i class="toggle-icon fa fa-angle-left"></i>
                </a>
                <ul class="sub-menu ">
                    <li><a href="tables-static-table.html"><span class="text">二级菜单   No.1</span></a></li>
                    <li><a href="tables-dynamic-table.html"><span class="text">二级菜单   No.2</span></a></li>
                </ul>
            </li>
            <li>
                <a href="typography.html"><i class="fa fa-font fa-fw"></i><span class="text">一级菜单   No.9</span></a>
            </li>
            <li>
                <a href="#" class="js-sub-menu-toggle"><i class="fa fa-bars"></i>
                    <span class="text">一级菜单   No.10<span class="badge element-bg-color-blue">New</span></span>
                    <i class="toggle-icon fa fa-angle-left"></i>
                </a>
                <ul class="sub-menu">
                    <li class="">
                        <a href="#" class="js-sub-menu-toggle">
                            <span class="text">二级菜单   No.1</span>
                            <i class="toggle-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#">三级菜单   No.1</a></li>
                            <li><a href="#">三级菜单   No.2</a></li>
                            <li><a href="#">三级菜单   No.3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="text">二级菜单   No.2</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /main-nav -->
    <div class="sidebar-minified js-toggle-minified">
        <i class="fa fa-angle-left"></i>
    </div>
    <!-- sidebar content -->
    <div class="sidebar-content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5><i class="fa fa-lightbulb-o"></i>小提示</h5>
            </div>
            <div class="panel-body">
                <p>您可以在顶部栏中搜索框中的窗口小部件进行搜索。如果你的仪表盘上满是小部件，这非常有用。</p>
            </div>
        </div>
        <h5 class="label label-default"><i class="fa fa-info-circle"></i> Server Info</h5>
        <ul class="list-unstyled list-info-sidebar bottom-30px">
            <li class="data-row">
                <div class="data-name">Disk Space Usage</div>
                <div class="data-value">
                    274.43 / 2 GB
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                            <span class="sr-only">10%</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="data-row">
                <div class="data-name">Monthly Bandwidth Transfer</div>
                <div class="data-value">
                    230 / 500 GB
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%">
                            <span class="sr-only">46%</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="data-row">
                <span class="data-name">Database Disk Space</span>
                <span class="data-value">219.45 MB</span>
            </li>
            <li class="data-row">
                <span class="data-name">Operating System</span>
                <span class="data-value">Linux</span>
            </li>
            <li class="data-row">
                <span class="data-name">Apache Version</span>
                <span class="data-value">2.4.6</span>
            </li>
            <li class="data-row">
                <span class="data-name">PHP Version</span>
                <span class="data-value">5.3.27</span>
            </li>
            <li class="data-row">
                <span class="data-name">MySQL Version</span>
                <span class="data-value">5.5.34-cll</span>
            </li>
            <li class="data-row">
                <span class="data-name">Architecture</span>
                <span class="data-value">x86_64</span>
            </li>
        </ul>
    </div>
    <!-- end sidebar content -->
</div>
                        <div class="col-md-10 content-wrapper">
                            <div class="alert alert-danger top-general-alert">
    <span>如果你<strong>不能在左上方看到的标志</strong> ，请重置权样式切换器的风格（升级主题）。</span>
    <button type="button" class="close">&times;</button>
</div>
<!-- end top general alert -->
<!-- content-wrapper -->

    <div class="row">
        <div class="col-lg-4 ">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="#">一级目录</a></li>
                <li><a href="#">二级目录</a></li>
                <li class="active">三级目录</li>
            </ul>
        </div>
        <div class="col-lg-8 ">
            <div class="top-content">
                <ul class="list-inline quick-access">
                    <li>
                        <a href="charts-statistics-interactive.html">
                            <div class="quick-access-item bg-color-green">
                                <i class="fa fa-bar-chart-o"></i>
                                <h5>CHARTS</h5><em>basic, interactive, real-time</em>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="page-inbox.html">
                            <div class="quick-access-item bg-color-blue">
                                <i class="fa fa-envelope"></i>
                                <h5>INBOX</h5><em>inbox with gmail style</em>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="tables-dynamic-table.html">
                            <div class="quick-access-item bg-color-orange">
                                <i class="fa fa-table"></i>
                                <h5>DYNAMIC TABLE</h5><em>tons of features and interactivity</em>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
                            <!-- main data start-->
                            <div class="container-fluid">
                                <form action="/myDemo/reportSys/index.php/Home/Index/index" method="POST">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-4">
                                            male:&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="1" />
                                            <br/>
                                            female:&nbsp;&nbsp;<input type="radio" name="sex" value="2" />
                                            <br/>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="xybm">
                                                <option value="" selected="selected">&nbsp;</option>
                                                <?php foreach($xybm as $result){?>
                                                    <option value="<?php echo $result['xybm'];?>"><?php echo $result['xybm'];?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="btn btn-primary" type="submit" value="submit"/>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <table class="table">
                                    <caption>基本的表格布局</caption>
                                    <thead>
                                    <tr>
                                        <th>工号</th>
                                        <th>姓名</th>
                                        <th>性别</th>
                                        <th>民族</th>
                                        <th>学院</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($res as $result){ ?>
                                        <tr>
                                            <td><?php echo $result['zgh'];?></td>
                                            <td><?php echo $result['xm'];?></td>
                                            <td><?php echo $result['xb'];?></td>
                                            <td><?php echo $result['mzmc'];?></td>
                                            <td><?php echo $result['xybm'];?></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>


                            <!-- /main data end-->
                        </div>
                    </div>

                </div>
            </div>


        <!-- /main -->
        <footer class="footer">
    &copy; 2015-2016
</footer>
<!-- END FOOTER -->

<!-- STYLE SWITCHER -->
<!--<div class="del-style-switcher">-->
    <!--<div class="del-switcher-toggle toggle-hide"  src="../assets/img/cog.png"></div>-->
    <!--<form>-->
        <!--<section class="del-section del-section-skin">-->
            <!--<h5 class="del-switcher-header">Choose Skins:</h5>-->
            <!--<ul>-->
                <!--<li><a href="#" title="Slate Gray" class="switch-skin slategray" data-skin="../assets/css/skins/slategray.css" onclick="location.reload();">Slate Gray</a></li>-->
                <!--<li><a href="#" title="Dark Blue" class="switch-skin darkblue" data-skin="../assets/css/skins/darkblue.css"  onclick="location.reload();">Dark Blue</a></li>-->
                <!--<li><a href="#" title="Dark Brown" class="switch-skin darkbrown" data-skin="../assets/css/skins/darkbrown.css" onclick="location.reload();">Dark Brown</a></li>-->
                <!--<li><a href="#" title="Light Green" class="switch-skin lightgreen" data-skin="../assets/css/skins/lightgreen.css" onclick="location.reload();">Light Green</a></li>-->
                <!--<li><a href="#" title="Orange" class="switch-skin orange" data-skin="../assets/css/skins/orange.css" onclick="location.reload();">Orange</a></li>-->
                <!--<li><a href="#" title="Red" class="switch-skin red" data-skin="../assets/css/skins/red.css" onclick="location.reload();">Red</a></li>-->
                <!--<li><a href="#" title="Teal" class="switch-skin teal" data-skin="../assets/css/skins/teal.css" onclick="location.reload();">Teal</a></li>-->
                <!--<li><a href="#" title="Yellow" class="switch-skin yellow" data-skin="../assets/css/skins/yellow.css" onclick="location.reload();">Yellow</a></li>-->
            <!--</ul>-->
            <!--<button type="button" class="switch-skin-full fulldark" data-skin="../assets/css/skins/fulldark.css" onclick="location.reload();">Full Dark</button>-->
            <!--<button type="button" class="switch-skin-full fullbright" data-skin="../assets/css/skins/fullbright.css" onclick="location.reload();">Full Bright</button>-->
        <!--</section>-->
        <!--<label class="fancy-checkbox"><input type="checkbox" id="fixed-top-nav"><span>Fixed Top Navigation</span></label>-->
        <!--<p><a href="#" title="Reset Style" class="del-reset-style" onclick="location.reload();">����Ƥ��</a></p>-->
    <!--</form>-->
<!--</div>-->
<!-- END STYLE SWITCHER -->
    </div>

    <!-- js file include-->
    <!-- Javascript -->
    <script src="/myDemo/reportSys/Public/Home/js/jquery/jquery-2.1.0.min.js"></script>
    <script src="/myDemo/reportSys/Public/Home/js/bootstrap/bootstrap.min.js"></script>
    <script src="/myDemo/reportSys/Public/Home/js/plugins/modernizr/modernizr.js"></script>
    <script src="/myDemo/reportSys/Public/Home/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
    <script src="/myDemo/reportSys/Public/Home/js/king-common.js"></script>
    <script src="/myDemo/reportSys/Public/Home/js/deliswitch.js"></script>
    <script src="/myDemo/reportSys/Public/Home/js/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
    <!--<script src="../assets/js/zidingyi/iframe-height.js" type="text/javascript" language="javascript" ></script>-->

</body>
</html>