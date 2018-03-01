<!DOCTYPE HTML>
<html>
<head>
	<title>系统设置</title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<?php include(THEME_PATH . "nav.php");?>
		<div class="page-header">
		  <h1>
		  	系统设置
		  </h1>
		</div>

            <form action="<?php echo U('Admin/Setting/save');?>" method="post" class="form-horizontal">

                <?php foreach($setting as $key=>$val):?>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"><?php echo $key?></label>
                    <div class="col-sm-10">
                        <input type="text" name='<?php echo $key?>' class="form-control" value="<?php echo $val;?>">
                    </div>
                </div>
            <?php endforeach;?>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </div>
            </form>
		
	</div>
</body>
</html>