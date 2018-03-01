<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">博客</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo U('/Home/Index/lbread');?>?lx=趣闻">趣闻 <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo U('/Home/Index/lbread');?>?lx=人文">人文</a></li>
        <li><a href="<?php echo U('/Home/Index/lbread');?>?lx=美食">美食</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">旅游</a></li>
            <li><a href="#">科技</a></li>
            <li><a href="#">娱乐</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" action="<?php echo U("/Home/Index/search");?>" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="title" placeholder="搜索关键字">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php if(!session('aid')){?>
        <li><a href="<?php echo U("/Home/Index/login")?>">登录</a></li>
        <li><a href="<?php echo U("/Home/Index/add")?>">注册</a></li>
        <?php }else{?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp欢迎 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo U("/Home/Index/logout")?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp退出</a></li>
            <li><a href="#">注销</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <?php }?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>