<!DOCTYPE HTML>
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
                  <div class="panel-heading">博客浏览量<a href="<?php echo U("/Home/Auser/grzladd");?>" style="float:right;"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>&nbsp</a></div>
                  <div class="panel-body">
                      
                  </div>
            </div>

        </div>

        <div class="col-md-9">
            <?php foreach($blogs as $blog):?>
            <div class="panel panel-default">
                  <div class="panel-heading">
                        <?php echo $blog['title'];?>&nbsp(<?php echo date("Y-m-d h:i:s",$blog['intime']);?>)<a href="#" style="float:right;"><?php echo $blog['lx']?></a>
                  </div>
                  
                  <div class="panel-body">
                        <?php echo html_entity_decode($blog['content']);?>...
                  </div>
            
                  <div class="panel-heading">
                        用户评论&nbsp共<?php echo $count;?>条
                        <?php if(!session('aid')){?>
                        <?php }else{?>
                        <a href="<?php echo U("/Home/Index/pl");?>?pid=<?php echo $blog['pid'];?>" style="float:right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp编辑</a>
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
            <?php endforeach;?>
            
        </div>
  </div>


</body>
</html>