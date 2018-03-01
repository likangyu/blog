<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
		  	管理员管理 
		  	<small class="pull-right">
		  		<a href="<?php echo U("/Admin/Auser/add");?>" class="btn btn-default">添加管理员</a>
		  	</small>
		  </h1>
		</div>


		<table class="table table-striped">
      <thead>
        <tr>
          <th>aid</th>
          <th>用户名</th>
          <th>管理按钮</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach( $data['users'] as $user ):?>
        <tr>
          <th><?php echo $user['aid'];?></th>
          <td><?php echo $user['auser'];?></td>
          <td>
          	<a href="<?php echo U("/Admin/Auser/add");?>?aid=<?php echo $user['aid'];?>">编辑</a>
          	<a href="<?php echo U("/Admin/Auser/delete");?>?aid=<?php echo $user['aid'];?>">删除</a>
          </td>
        </tr>
   	  <?php endforeach;?>
      </tbody>
    </table>
	</div>
</body>
</html>