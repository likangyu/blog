<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $cfg['title'];?></title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/style.css" />
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="http://localhost/tpblog/public/simditor/styles/simditor.css" />

  <script type="text/javascript" src="http://localhost/tpblog/public/simditor/scripts/module.js"></script>
  <script type="text/javascript" src="http://localhost/tpblog/public/simditor/scripts/hotkeys.js"></script>
  <script type="text/javascript" src="http://localhost/tpblog/public/simditor/scripts/uploader.js"></script>
  <script type="text/javascript" src="http://localhost/tpblog/public/simditor/scripts/simditor.js"></script>
</head>
<body style="background:url(http://localhost/sucai/5.jpg);background-size:100% 100%;">
  <?php include(THEME_PATH . "nav.php");?>
  <div class="container">
    	  <div class="jumbotron">
          <h1><?php echo $cfg['title'];?></h1>
          <p><?php echo $cfg['intro'];?></p>
        </div>	

        <ol class="breadcrumb">
          <li><a href="<?php echo U("/Home/Index/index");?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp首页</a></li>
          <li><a href="<?php echo U("/Home/Auser/index");?>">返回</a></li>
        </ol>

        

        <div class="col-md-12">
            <div class="panel panel-default">
                  <div class="panel-heading">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp发表博文

                  </div>
                  <div class="panel-body">
                       <form action="<?php echo U('Home/Auser/add');?>?pid=<?php echo $blog['pid'];?>&bk=<?php echo $grzl['nc'];?>" method="post" class="form-horizontal">
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
                                <label for="inputEmail3" class="col-sm-2 control-label">博文介绍</label>
                                <div class="col-sm-6">
                                    <textarea id='content' style="height:400px;" class="form-control" name="bwjs"></textarea>
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
                                <label for="inputEmail3" class="col-sm-2 control-label">类型</label>
                                <div class="col-sm-4">
                                    <input type="text" name='lx' class="form-control" value="<?php echo $blog['author'];?>">
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

            
        </div>
  </div>


</body>
</html>