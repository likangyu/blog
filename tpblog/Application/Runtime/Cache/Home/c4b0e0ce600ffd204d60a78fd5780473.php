<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $cfg['title'];?></title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/style.css" />
  <link rel="stylesheet" type="text/css" href="http://localhost/tpblog/public/simditor/styles/simditor.css" />

    <script type="text/javascript" src="http://localhost/tpblog/public/simditor/scripts/module.js"></script>
    <script type="text/javascript" src="http://localhost/tpblog/public/simditor/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="http://localhost/tpblog/public/simditor/scripts/uploader.js"></script>
    <script type="text/javascript" src="http://localhost/tpblog/public/simditor/scripts/simditor.js"></script>

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
          <li><a href="<?php echo U("/Home/Index/read?pid=$pid");?>">返回</a></li>
        </ol>

        <div class="col-md-3">

            <div class="panel panel-default">
                  <div class="panel-heading">作者简介</div>
                  <div class="panel-body">
                    <?php echo $blog['author'];?>
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">博客标题</div>
                  <div class="panel-body">
                      <?php echo $blog['title'];?>(<?php echo $blog['lx']?>)
                  </div>
            </div>

        </div>

        <div class="col-md-9">
            <div class="page-header">
              <h1>
                欢迎评论
                <small class="pull-right">
                  <a href="<?php echo U("/Home/Index/index");?>" class="btn btn-default">返回首页</a>
                </small>
              </h1>
            </div>

            <form action="<?php echo U('Home/Index/pl');?>?pid=<?php echo $blog['pid'];?>&id=<?php echo session('aid');?>" method="post" class="form-horizontal">
                

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">评论者</label>
                    <div class="col-sm-10">
                        <input type="text" name='piauthor' class="form-control" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">评论区</label>
                    <div class="col-sm-10">
                        <textarea id='content' style="height:400px;" class="form-control" name="picontent"></textarea>
                        <script>
                            var editor = new Simditor({
                              textarea: $('#content'),
                              upload:{
                                url:"<?php echo U('/Admin/Blog/upload');?>",
                                fileKey:"file1",
                              }
                              allowedTags:['p'],
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
  </div>


</body>
</html>