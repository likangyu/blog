<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $cfg['title'];?></title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/style.css" />
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>
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
          <?php if(!session('aid')){?>
          <li><?php echo $blog['title'];?></li>
          <?php }else{?>
          <li><a href="<?php echo U("/Home/Auser/index");?>">个人首页</a></li>
          <?php }?>
        </ol>

        <div class="col-md-3">

            <div class="panel panel-default">
                  <div class="panel-heading">作者简介</div>
                  <div class="panel-body">
                    <?php echo $blog['author'];?>
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">博文介绍<a href="<?php echo U("/Home/Auser/grzladd");?>" style="float:right;"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>&nbsp</a></div>
                  <div class="panel-body">
                    <?php echo html_entity_decode($blog['bwjs']);?>...<br/>
                    <hr style="height:1px;border:none;border-top:1px solid #555555;" /><p style="float:right;font-weight:800;"><?php echo $blog['author'];?></p>
                  </div>
            </div>

        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                  <div class="panel-heading">
                        <?php echo $blog['title'];?>&nbsp(<?php echo date("Y-m-d h:i:s",$blog['intime']);?>)<a href="#" style="float:right;"><?php echo $blog['lx']?>(<?php echo $blog['bk']?>发表)</a>
                  </div>
                  <div class="panel-body">
                        <?php echo html_entity_decode($blog['content']);?>...
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">
                        用户评论&nbsp共<?php echo $count;?>条
                        <?php if(!session('aid')){?>
                        <a href="<?php echo U("/Home/Index/login");?>?pid=<?php echo $blog['pid'];?>" style="float:right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp编辑</a>
                        <?php }else{?>
                        <a href="<?php echo U("/Home/Index/pl");?>?pid=<?php echo $blog['pid'];?>" style="float:right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp编辑</a>
                        <?php }?>
                  </div>
                  <?php foreach($pls as $pl):?>
                  <?php if($blog['pid']){?>
                  <div class="panel-body">
                        <h4 style="color:#66CCFF;font-weight:600;"><?php echo $pl['piauthor'];?></h4>
                        <h5><?php echo $pl['picontent'];?></h5><h6 style="font-weight:600;"><?php echo date("Y-m-d h:i:s",$pl['intime']);?></h6><div style="float:right;"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>( )&nbsp<span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>( )&nbsp<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></div>
                  </div>
                  <?php }else{?>
                  <?php }?>
                  <?php endforeach;?>
            </div>
        </div>
  </div>


</body>
</html>