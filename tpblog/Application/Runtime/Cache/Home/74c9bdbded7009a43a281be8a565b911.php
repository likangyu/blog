<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $cfg['title'];?></title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/style.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/logo.css" />
  <link rel="shortcut icon" href="../favicon.ico"> 
  <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="http://localhost/tpblog/public/bootstrap/css/style6.css" />
  <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>
  <script async src="http://localhost/tpblog/public/js/f.js"></script>
  
</head>
<body style="background:url(http://localhost/sucai/6.jpg);background-size:100% 100%;">
  
  <?php include(THEME_PATH . "nav.php");?>
	<div class="container">

        <div class="v">
            <p class="letter-b letter-hover"  style="font-family:"微软雅黑";font-weight:bold;">博</p>
            <p class="letter-l letter-hover"  style="font-family:"微软雅黑";font-weight:bold;">客</p>
            <p class="letter-u letter-hover pn">b</p>
            <p class="letter-r letter-hover pn">o</p>
            <p class="letter-r letter-hover pn">k</p>
            <p class="letter-r letter-hover pn">e</p>
        </div>

    	  <div class="jumbotron">
          
          <p style="color: #FFFFFF; text-shadow: 0 -1px 0 #374683;"><?php echo $cfg['intro'];?></p>
          <?php if(session('aid')){?>
          <p style="float:right;color: #c00; -webkit-text-stroke: 1px #000;"><a href="<?php echo U("/Home/Auser/index");?>">个人首页</a></p>
          <?php }else{?>
          <p style="float:right;color: #c00; -webkit-text-stroke: 1px #000;"><a href="<?php echo U("/Home/Index/login");?>">个人首页</a></p>
          <?php }?>
          <h5 style="color: #FFFFFF; text-shadow: 0 -1px 0 #374683;">http://blog.com 知名博客网站认证<span class="glyphicon glyphicon-ok" aria-hidden="true"></span><h5>
        </div>	

        <ol class="breadcrumb">
          <li><a href="<?php echo U("/Home/Index/index");?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp首页</p></a></li>
        </ol>

        <div class="col-md-3">

            <div class="panel panel-default">
                  <div class="panel-heading">作者简介</div>
                  <div class="panel-body">
                    <!-- 代码部分begin -->
                    
                    <ul>
                      <li style="list-style-type:none;">
                        <img src="http://localhost/tpblog/public/bootstrap/images/1.jpg" width="190" height="190" alt="">
                        <div class="cover">
                          <a href=""><i class="fa fa-plus"></i></a>
                          
                          <h4>微距</h4>
                          <p>来自微距摄影</p>
                          
                        </div>
                      </li>
                    </ul>
                    
                    <!-- 代码部分end -->

                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">分类<a href="<?php echo U("/Home/Auser/grzladd");?>" style="float:right;"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp</a></div>
                  <div class="panel-body">
                      <p>全部博文(<?php echo $count;?>)</p>
                      <p style="color:66CCFF;font-weight:600;">趣闻(<?php echo $qwcount;?>)<a href="<?php echo U('/Home/Index/lbread');?>?lx=趣闻&pl=<?php echo $pl['wyan'];?>" style="float:right;">查看</a></p>
                      <p style="color:66CCFF;font-weight:600;">人文(<?php echo $rwcount;?>)<a href="<?php echo U('/Home/Index/lbread');?>?lx=人文" style="float:right;">查看</a></p>
                      <p style="color:66CCFF;font-weight:600;">美食(<?php echo $mscount;?>)<a href="<?php echo U('/Home/Index/lbread');?>?lx=美食" style="float:right;" style="float:right;">查看</a></p>
                      <p><a href="#">更多</a></p>
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading">博文推荐<a href="<?php echo U("/Home/Index/pl");?>" style="float:right;">推荐</a></div>
                  <div class="panel-body">
                      <p>全部博文(<?php echo $count;?>)</p>
                      <p>趣闻</p>
                      <p>人文</p>
                      <p>美食</p>
                      <p><a href="#">更多</a></p>
                  </div>
            </div>

            <div class="panel panel-default">
                  <div class="panel-heading"><a href="<?php echo U("/Home/Index/haoshu");?>">好书购买</a><a href="<?php echo U("/Home/Auser/grzladd");?>" style="float:right;"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>&nbsp</a></div>
                  <div class="panel-body">
                      <?php foreach($haos as $hao):?>
                      <p><?php echo html_entity_decode($hao['imge']);?></p>
                      <p><center><?php echo $hao['name'];?>(<?php echo $hao['sauthor'];?>)</center></p>
                      <?php endforeach;?>
                  </div>
            </div>

        </div>

        <div class="col-md-9">
            <?php foreach($blogs as $blog):?>
            <div class="panel panel-default">
                  <div class="panel-heading">
                        <?php echo $blog['title'];?>
                        <p style="float:right;">博主:<?php echo $blog['bk'];?>&nbsp&nbsp<span class="glyphicon glyphicon-share" aria-hidden="true"></span></p>
                  </div>
                  <div class="panel-body">
                        <?php echo mb_substr(strip_tags(html_entity_decode($blog['content'])),0,80);?>...
                        <p style="float:right;"><a href="<?php echo U('/Home/Index/read');?>?pid=<?php echo $blog['pid'];?>&llan=1">查看全文</a></p>
                  </div>
            </div>
            <?php endforeach;?>
            <?php echo $show;?>
        </div>
        <div style="text-align:center;clear:both;">
            <script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
            <script src="/follow.js" type="text/javascript"></script>
        </div>
                        
                            <ul class="ca-menu">
                                <li>
                                    <a href="#">
                                        <span class="ca-icon"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">视讯</h2>
                                            
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="ca-icon"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">图片</h2>
                                            
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="ca-icon"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">记录</h2>
                                            
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="ca-icon"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">扫一扫</h2>
                                            
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="ca-icon"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">配置</h2>
                                            
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="ca-icon"><span class="glyphicon glyphicon-film" aria-hidden="true"></span></span>
                                        <div class="ca-content">
                                            <h2 class="ca-main">视频</h2>
                                            
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>



	</div>
  <p id="yi" align="center">©Copyright 博客 All rights reserved </p>
  <p align="center">| 资讯 | 公共媒体 | 粤</p>
</body>
</html>