<!DOCTYPE HTML>
<html>
<head>
	<title>管理员管理</title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<?php include(THEME_PATH . "nav.php");?>
		<div class="page-header">
		  <h1>
		  	管理员添加
		  	<small class="pull-right">
		  		<a href="<?php echo U("/Admin/Auser/index");?>" class="btn btn-default">返回到列表</a>
		  	</small>
		  </h1>
		</div>

            <form action="<?php echo U('Admin/Auser/save');?>?aid=<?php echo $user['aid'];?>" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">用户</label>
                    <div class="col-sm-10">
                        <input type="text" name='auser' class="form-control" value="<?php echo $user['auser'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-10">
                        <input type="password" name='apass' class="form-control" value="<?php echo $user['apass'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </div>
            </form>
		
	</div>
</body>
</html>