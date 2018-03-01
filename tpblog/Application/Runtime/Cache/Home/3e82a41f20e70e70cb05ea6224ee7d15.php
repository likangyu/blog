<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $cfg['title'];?></title>
	<script src="http://blog.com/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://blog.com/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://blog.com/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://blog.com/tpblog/public/bootstrap/css/style.css" />
	<script src="http://blog.com/tpblog/public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
  <?php include(THEME_PATH . "nav.php");?>
  <div class="container">
    	<div class="jumbotron">
          <h1><?php echo $cfg['title'];?></h1>
          <p><?php echo $cfg['intro'];?></p>
        </div>	

        <ol class="breadcrumb">
          <li><a href="<?php echo U("/Home/Index/index");?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp首页</a></li>
          <li><?php echo $blog['title'];?></li>
        </ol>

        <div class="col-md-3">

            <div class="panel panel-default">
                  <div class="panel-heading">作者简介</div>
                  <div class="panel-body">
                    <?php echo $blog['author'];?>
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">博客浏览量</div>
                  <div class="panel-body">
                      
                  </div>
            </div>

        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                  <div class="panel-heading">
                        <?php echo $blog['title'];?>
                  </div>
                  <div class="panel-body">
                        <?php echo html_entity_decode($blog['content']);?>...
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">
                        用户评论
                        <?php if(!session('aid')){?>
                        <?php }else{?>
                        <a href="<?php echo U("/Home/Index/pl");?>" style="float:right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp编辑</a>
                        <?php }?>
                  </div>
                  <?php foreach($pls as $pl):?>
                  <?php if($blog['pid']){?>
                  <div class="panel-body">
                        <h4><?php echo $pl['piauthor'];?></h4>
                        <h5><?php echo $pl['picontent'];?></h5><div style="float:right;"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>( )&nbsp<span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>( )&nbsp<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></div>
                  </div>
                  <?php }else{?>
                  <?php }?>
                  <?php endforeach;?>
            </div>
        </div>
  </div>


</body>
</html>