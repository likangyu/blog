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
<body style="background:url(http://localhost/sucai/login.jpg);">
  <?php include(THEME_PATH . "nav.php");?>
  <div class="container">
    	<div class="jumbotron">
          <h1><?php echo $cfg['title'];?></h1>
          <p><?php echo $cfg['intro'];?></p>
        </div>	

        <ol class="breadcrumb">
          <li><a href="<?php echo U("/Home/Index/index");?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp首页</a></li>
          <li>用户注册</li>
        </ol>

        <div class="col-md-2">

            

        </div>

        <div class="col-md-10">
            <div class="page-header">
              <h1>
                欢迎注册
                <small class="pull-right">
                  <a href="<?php echo U("/Home/Index/index");?>" class="btn btn-default">返回首页</a>
                </small>
              </h1>
            </div>

            <?php if(!$user){?>
            <form action="<?php echo U('Home/Index/add');?>?aid=<?php echo $user['aid'];?>" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">用户</label>
                    <div class="col-sm-4">
                        <input type="text" name='auser' class="form-control" value="<?php echo $user['auser'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-4">
                        <input type="password" name='apass' class="form-control" value="<?php echo $user['apass'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">提交</button>
                        <button type="submit" class="btn btn-default"><a href="#">管理员注册</a></button>
                    </div>
                </div>
            </form>
            <?php }else{?>
                <div class="page-header">
                  <h1>
                    注册成功！
                    <small class="pull-right">
                      <a href="<?php echo U("/Home/Index/index");?>" class="btn btn-default">返回首页</a>
                    </small>
                  </h1>
                </div>
            <?php }?>
        </div>
  </div>


</body>
</html>