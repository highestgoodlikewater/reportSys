<!DOCTYPE html>
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
    <link href="__PUBLIC__/Home/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/Home/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/Home/css/main.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/Home/css/my-custom-styles.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/Home/css/style-switcher.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]>
    <link href="__PUBLIC__/Home/css/main-ie.css" rel="stylesheet" type="text/css"/>
    <link href="__PUBLIC__/Home/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
    <![endif]-->

    <!-- CSS for demo style switcher. you can remove this -->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="__PUBLIC__/Home/ico/kingadmin-favicon144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="__PUBLIC__/Home/ico/kingadmin-favicon114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="__PUBLIC__/Home/ico/kingadmin-favicon72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="__PUBLIC__/Home/ico/kingadmin-favicon57x57.png">
    <link rel="shortcut icon" href="__PUBLIC__/Home/ico/favicon.png">

</head>
<body>
    <div class="wrapper">
        <include file="Public/Home/View/top.php" />

        <!-- main -->

            <div class="bottom">
                <div class="container">
                    <div class="row">
                        <include file="Public/Home/View/menuLeft.php" />
                        <div class="col-md-10 content-wrapper">
                            <include file="Public/Home/View/menuTop.php" />
                            <!-- main data start-->
                            <div class="container-fluid">
                                <form action="__URL__/index" method="POST">
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

                                <div class="col-md-12">

                                </div>

                            </div>


                            <!-- /main data end-->
                        </div>
                    </div>

                </div>
            </div>


        <!-- /main -->
        <include file="Public/Home/View/footer.php" />
    </div>

    <!-- js file include-->
    <!-- Javascript -->
    <script src="__PUBLIC__/Home/js/jquery/jquery-2.1.0.min.js"></script>
    <script src="__PUBLIC__/Home/js/bootstrap/bootstrap.min.js"></script>
    <script src="__PUBLIC__/Home/js/plugins/modernizr/modernizr.js"></script>
    <script src="__PUBLIC__/Home/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
    <script src="__PUBLIC__/Home/js/king-common.js"></script>
    <script src="__PUBLIC__/Home/js/deliswitch.js"></script>
    <script src="__PUBLIC__/Home/js/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
    <!--<script src="../assets/js/zidingyi/iframe-height.js" type="text/javascript" language="javascript" ></script>-->

</body>
</html>