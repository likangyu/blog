<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>管理员登录</title>
	<script src="http://blog.com/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://blog.com/tpblog/public/bootstrap/css/bootstrap.css" />
	<script src="http://blog.com/tpblog/public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary"  style="margin-top:200px;">
				  <div class="panel-heading">管理员登录</div>
				  <div class="panel-body">
				    	<form action="<?php echo U('Admin/Login/index?do=chk');?>" method="post" class="form-horizontal">
							  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">用户</label>
								    <div class="col-sm-10">
								      	<input type="text" name='auser' class="form-control">
								    </div>
							  </div>
							  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
								    <div class="col-sm-10">
								      	<input type="password" name='apass' class="form-control">
								    </div>
							  </div>
							  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      	<button type="submit" class="btn btn-default">登录</button>
								    </div>
							  </div>
						</form>
				  </div>
				  <div class="panel-footer text-right">版权所有 盗版必究</div>
			</div>
		</div>	
	</div>
</body>
</html>