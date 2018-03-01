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
		      <a class="navbar-brand" href="<?php echo U("/Admin/Index/index");?>">Admin</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo U("/Admin/Blog/index");?>">博客管理 <span class="sr-only">(current)</span></a></li>
		        <li><a href="<?php echo U("/Admin/Auser/index");?>">管理员管理</a></li>
		        <li><a href="<?php echo U("/Admin/Setting/index");?>">系统管理</a></li>
		        
		      </ul>
		      
		      <ul class="nav navbar-nav navbar-right">
		        
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp欢迎 <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo U("/Admin/Login/logout");?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp退出</a></li>
		            
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>	