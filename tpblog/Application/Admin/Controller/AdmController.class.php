<?php
namespace Admin\Controller;
use Think\Controller;
class AdmController extends Controller {
	function __construct(){
		parent::__construct();
		//判断SESSION中的AID 是否存在
		$this->aid=session('aid');
	    if($this->aid<1){
	    	return $this->error("帐号或密码错误","/tpblog/index.php/Admin/Login/index");
	    }
	    //判断AID是否有效
	    $this->user=D("admin")->where(array('aid'=>$this->aid))->find();
	    if(!$this->user){
	    	return $this->error("无效的帐号","/tpblog/index.php/Admin/Login/index");
	    }

	    
	}
	
}


?>