<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $grzl['nc'];?>_<?php echo $cfg['title'];?></title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/style.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/index.auser.css" />
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>
  <script src="http://localhost/tpblog/public/bootstrap/js/enroll.js"></script>
</head>
<body>
  <?php include(THEME_PATH . "nav.php");?>
  <div class="container">
    
    	  <div class="jumbotron">
          <h2><?php echo $grzl['nc'];?>的<?php echo $cfg['title'];?></h2>
          <h4><?php echo $grzl['bz'];?></h4>
          <p><a href="#" class="r">博客认证<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a><a href="#" class="rr" id="enroll">关于博主</a><a href="<?php echo U("/Home/Auser/xc");?>" class="rr" id="enroll">相册</a><a href="#" class="rr" id="enroll">留言</a><a href="#" class="rr" id="enroll">首页</a></p>
        </div>	

        <ol class="breadcrumb">
          <li><a href="<?php echo U("/Home/Index/index");?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp博客首页</a></li>
          <li>个人首页</li>
        </ol>

        <div class="col-md-3">

            <div class="panel panel-default">
                  <div class="panel-heading">
                    个人资料
                    <a href="<?php echo U("/Home/Auser/grzladd");?>?gid=<?php echo $grzl['gid'];?>" style="float:right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp编辑</a>
                  </div>
                  <div class="panel-body">
                    <p>头像:</p><div><?php echo html_entity_decode($grzl['tx']);?></div>
                    <p>昵称:<?php echo $grzl['nc'];?></p>
                    <p>职业:<?php echo $grzl['zy'];?></p>
                    <p>住址:<?php echo $grzl['zz'];?></p>
                    <p>qq:<?php echo $grzl['qq'];?></p>
                    <p>电子邮箱:<?php echo $grzl['yx'];?></p>
                    <p>备注:<?php echo $grzl['bz'];?></p>
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">博客浏览量<a href="<?php echo U("/Home/Auser/grzladd");?>" style="float:right;"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>&nbsp</a></div>
                  <div class="panel-body">
                      <?php foreach( $blogs as $blog ):?>
                      <p><?php echo $blog['title'];?></p>
                      <?php endforeach;?>
                  </div>
            </div>

        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                  <div class="panel-heading">
                        个人空间
                        <a href="<?php echo U("/Home/Auser/add");?>" style="float:right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp发表博文</a>

                  </div>
                  <div class="panel-body">
                        <p>博文(共<?php echo $count;?>篇)</p>
                        <?php foreach( $blogs as $blog ):?>
                        <p><a href="<?php echo U('/Home/Index/read');?>?pid=<?php echo $blog['pid'];?>"><?php echo $blog['title'];?></a>
                        <a href="<?php echo U('/Home/Auser/delete');?>?pid=<?php echo $blog['pid'];?>" style="float:right;">删除</a></p>
                        <?php endforeach;?>
                        <p>评论(共<?php echo $plcount;?>条)</p>
                        <?php foreach( $pls as $pl ):?>
                        <p><a href="<?php echo U('/Home/Index/read');?>?pid=<?php echo $blog['pid'];?>"><?php echo $pl['picontent'];?>(<?php echo $pl['piauthor'];?>)</a>
                        <a href="<?php echo U('/Home/Auser/pldelete');?>?piid=<?php echo $pl['piid'];?>" style="float:right;">删除</a></p>
                        <?php endforeach;?>
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">
                        热点话题
                        <?php if(!session('aid')){?>
                        <?php }else{?>
                        <a href="<?php echo U("/Home/Index/pl");?>" style="float:right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp编辑</a>
                        <?php }?>
                  </div>
                  
                  <div class="panel-body">
                        <div class="media">
                          <div class="media-left media-middle">
                            <a href="#">
                              <img class="media-object" src="http://localhost/sucai/1d36b680940c852e3d10c68016f7eff6.jpg" alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">海岛风光</h4>
                            ...
                          </div>
                          <div class="media-left media-middle">
                            <a href="#">
                              <img class="media-object" src="http://localhost/sucai/8e0dbe5164d7d880371196671e907a5d.jpg" alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">璀璨夜景</h4>
                            ...
                          </div>
                        </div>
                  </div>
                  
            </div>
        </div>
  </div>


</body>
</html>