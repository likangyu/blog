<!DOCTYPE HTML>
<html>
<head>
  <title><?php echo $cfg['title'];?></title>
  <script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/style.css" />
  <script src="../../../public/bootstrap/js/bootstrap.js"></script>

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
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp个人资料

                  </div>
                  <div class="panel-body">
                       <form action="<?php echo U('Home/Auser/grzladd');?>?id=<?php echo session('aid');?>&gid=<?php echo $grzl['gid'];?>" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">头像</label>
                                <div class="col-sm-6">
                                    <textarea id='content' style="height:100px;width:100px;" class="form-control" name="content" value="<?php echo $grzl['tx'];?>"><?php echo $grzl['tx'];?></textarea>
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
                                <label for="inputEmail3" class="col-sm-2 control-label">昵称</label>
                                <div class="col-sm-10">
                                    <input type="text" name='nc' style="width:500px;" class="form-control" value="<?php echo $grzl['nc'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">职业</label>
                                <div class="col-sm-10">
                                    <input type="text" name='zy' style="width:500px;" class="form-control" value="<?php echo $grzl['zy'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">住址</label>
                                <div class="col-sm-10">
                                    <input type="text" name='zz' style="width:500px;" class="form-control" value="<?php echo $grzl['zz'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">QQ</label>
                                <div class="col-sm-10">
                                    <input type="text" name='qq' style="width:500px;" class="form-control" value="<?php echo $grzl['qq'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">电子邮箱</label>
                                <div class="col-sm-10">
                                    <input type="text" name='yx' style="width:500px;" class="form-control" value="<?php echo $grzl['yx'];?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-6">
                                    <textarea id='content' style="height:400px;" class="form-control" name="bz"><?php echo $grzl['bz'];?></textarea>
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

            <div class="panel panel-default">
                  <div class="panel-heading">
                        用户评论
                        <?php if(!session('aid')){?>
                        <?php }else{?>
                        <a href="<?php echo U("/Home/Index/pl");?>" style="float:right;">编辑</a>
                        <?php }?>
                  </div>
                  <?php if($blog['pid']){?>
                  <div class="panel-body">
                        <h4><?php echo $pl['piauthor'];?></h4>
                        <h5><?php echo $pl['picontent'];?></h5>
                  </div>
                  <?php }else{?>
                  <?php }?>
            </div>
        </div>
  </div>


</body>
</html>