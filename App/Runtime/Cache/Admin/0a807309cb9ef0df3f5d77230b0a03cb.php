<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>浙江工商大学报表管理系统 | <?php echo ($meta_title); ?></title>
    <!-- CSS -->
    <link href="/report/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/report/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/report/Public/Admin/css/main.css" rel="stylesheet" type="text/css">
    <link href="/report/Public/Admin/css/my-custom-styles.css" rel="stylesheet" type="text/css">
    <link href="/report/Public/Admin/css/style-switcher.css" rel="stylesheet" type="text/css">

    <!-- CSS for demo style switcher. you can remove this -->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/report/Public/Admin/ico/kingadmin-favicon144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/report/Public/Admin/ico/kingadmin-favicon114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/report/Public/Admin/ico/kingadmin-favicon72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/report/Public/Admin/ico/kingadmin-favicon57x57.png">
    <link rel="shortcut icon" href="/report/Public/Admin/ico/favicon.png">
    
    
    <style>
        body{padding: 0}
    </style>

</head>
<body>

    <div class="wrapper">
        <!-- TOP BAR -->
<div class="top-bar" style="height:60px;">
    <div class="container">
        <div class="row">
            <!-- begin -->
            <div class="col-md-2 logo">
                <a href="Home/Index/index"></a>
                <h1 class="sr-only"> </h1>
            </div>
            <!-- end  -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3"> </div>
                    <div class="col-md-9">
                        <div class="top-bar-right">
                            <!-- responsive menu bar icon -->
                            <a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
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
                                                                <img class="media-object" src="/report/Public/Home/img/user1.png" alt="Antonio">
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
                                                                <img class="media-object" src="/report/Public/Home/img/user2.png" alt="Antonio">
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
                                                                <img class="media-object" src="/report/Public/Home/img/user3.png" alt="Antonio">
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
                                                                <img class="media-object" src="/report/Public/Home/img/user4.png" alt="Antonio">
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
                                                                <img class="media-object" src="/report/Public/Home/img/user5.png" alt="Antonio">
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
                                        <img src="/report/Public/Home/img/user-avatar.png" alt="User Avatar" />
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
        <div class="content">
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
                </ul>
            </li>
          
        </ul>
    </nav>
  
    <!-- end sidebar content -->
</div>
                    <div class="col-md-10 content-wrapper" style="height:800px">
                        
    <div class="row" style="background-color:white;height:40px">
        <div class="col-lg-4 ">
            <ul class="breadcrumb">
            <!-- 该处可以通过后台传值动态设置 -->
                <li><i class="fa fa-home"></i><a href="#">一级目录</a></li>
                <li><a href="#">二级目录</a></li>
                <li class="active">三级目录</li>
            </ul>
        </div>
        <div class="col-lg-8 ">
            <div class="top-content">
                
            </div>
        </div>
    </div>
                        <!-- body data start-->
                          
    <!-- 主体 -->
    <div id="indexMain" class="index-main">
          欧阳铁磊     浙江工商大学
          页面名称：<?php echo ($pageName); ?>
 
    </div>

                        <!-- body data end-->
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
    &copy; 2015-2016
</footer>
<!-- END FOOTER -->

    </div>
    
      <!-- js file include-->
    <!-- Javascript -->
    <load src="/report/Public/Admin/js/jquery/jquery-2.1.0.min.js"></script>
    <load src="/report/Public/Admin/js/bootstrap/bootstrap.min.js"></script>
    <load src="/report/Public/Admin/js/plugins/modernizr/modernizr.js"></script>
    <load src="/report/Public/Admin/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
    <load src="/report/Public/Admin/js/king-common.js"></script>
    <load src="/report/Public/Admin/js/deliswitch.js"></script>
    <load src="/report/Public/Admin/js/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>

    


<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
</body>
</html>