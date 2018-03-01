<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $cfg['title'];?></title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/style.css" />
  <link type="text/css" rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/login.css">
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="http://localhost/tpblog/public/bootstrap/js/jquery-1.8.0.min.js"></script>
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
          <li>用户登录</li>
        </ol>

        <div class="col-md-2">

            

        </div>

        <div class="col-md-10">
            <div class="page-header">
              <h1>
                欢迎登录
                <small class="pull-right">
                  <a href="<?php echo U("/Home/Index/index");?>" class="btn btn-default">返回首页</a>
                </small>
              </h1>
            </div>

            <form action="<?php echo U('Home/Index/login');?>?do=chk" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">用户</label>
                    <div class="col-sm-4">
                        <input type="text" name='auser' class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-4">
                        <input type="password" name='apass' class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">验证码</label>
                    <div class="col-sm-2">
                        <input type="text" name='verify' class="form-control" value=""><img src="{:U('verify')}" onClick="this.src=this.src+'?'+Math.random();" class="verifyimg reloadverify" style="vertical-align:middle; cursor: pointer;">看不清？请点击图片
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">登录</button>
                    </div>
                </div>

            </form>
            
        </div>
        
        <div class="container">
          <div class="col-md-3">
          </div>
          <div class="col-md-9" style="padding: 0px 63px;">
            <div class="bj_right">
              <p style="font-weight: bold;">使用以下账号直接登录</p>
                  <a href="#" class="zhuce_qq">QQ注册</a>
                  <a href="#" class="zhuce_wb">微博注册</a>
                  <a href="#" class="zhuce_wx">微信注册</a>
              <p style="font-weight: bold;"><a href="#">其他方式</a></p>
            </div>
          </div>
        </div>
          
        
  </div>


</body>
</html>