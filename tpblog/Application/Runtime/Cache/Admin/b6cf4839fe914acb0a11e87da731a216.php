<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>博客管理</title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<?php include(THEME_PATH . "nav.php");?>
		<div class="page-header">
		  <h1>
		  	博客管理 
		  	<small class="pull-right">
		  		<a href="<?php echo U("/Admin/Blog/add");?>" class="btn btn-default">添加博客</a>
		  	</small>
		  </h1>
		</div>


		<table class="table table-striped">
      <thead>
        <tr>
          <th>pid</th>
          <th>标题</th>
          <th>作者</th>
          <th>添加时间</th>
          <th>修改时间</th>
          <th>管理</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach( $blogs as $blog ):?>
        <tr>
          <th><?php echo $blog['pid'];?></th>
          <td><?php echo $blog['title'];?></td>
          <td><?php echo $blog['author'];?></td>
          <td><?php echo date("Y-m-d h:i:s",$blog['intime']);?></td>
          <td><?php echo date("Y-m-d h:i:s",$blog['uptime']);?></td>
          <td>
          	<a href="<?php echo U("/Admin/Blog/add");?>?pid=<?php echo $blog['pid'];?>">编辑</a>
          	<a href="<?php echo U("/Admin/Blog/delete");?>?pid=<?php echo $blog['pid'];?>">删除</a>
          </td>
        </tr>
   	  <?php endforeach;?>
      </tbody>
    </table>
    <?php echo $show;?>
	</div>
</body>
</html>