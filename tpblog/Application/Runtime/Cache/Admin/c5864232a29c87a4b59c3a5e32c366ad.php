<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>博客管理</title>
	<script src="http://blog.com/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://blog.com/tpblog/public/bootstrap/css/bootstrap.css" />
	<script src="http://blog.com/tpblog/public/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="http://blog.com/tpblog/public/simditor/styles/simditor.css" />

    <script type="text/javascript" src="http://blog.com/tpblog/public/simditor/scripts/module.js"></script>
    <script type="text/javascript" src="http://blog.com/tpblog/public/simditor/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="http://blog.com/tpblog/public/simditor/scripts/uploader.js"></script>
    <script type="text/javascript" src="http://blog.com/tpblog/public/simditor/scripts/simditor.js"></script>
</head>
<body>
	<div class="container">
		<?php include(THEME_PATH . "nav.php");?>
		<div class="page-header">
		  <h1>
		  	博客添加
		  	<small class="pull-right">
		  		<a href="<?php echo U("/Admin/Blog/index");?>" class="btn btn-default">返回到列表</a>
		  	</small>
		  </h1>
		</div>

            <form action="<?php echo U('Admin/Blog/save');?>?pid=<?php echo $blog['pid'];?>" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
                    <div class="col-sm-10">
                        <input type="text" name='title' class="form-control" value="<?php echo $blog['title'];?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">作者</label>
                    <div class="col-sm-10">
                        <input type="text" name='author' class="form-control" value="<?php echo $blog['author'];?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">正文</label>
                    <div class="col-sm-10">
                        <textarea id='content' style="height:400px;" class="form-control" name="content"><?php echo $blog['content'];?></textarea>
                        <script>
                            var editor = new Simditor({
                              textarea: $('#content'),
                              upload:{
                                url:"<?php echo U('/Admin/Blog/upload');?>",
                                fileKey:"file1",
                              }
                              //optional options
                            });
                        </script>
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