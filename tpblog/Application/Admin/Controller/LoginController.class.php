<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    
    /**
     * 后台登录页面
     * @return [type] [description]
     */
    public function index(){
    	$do=I("get.do");
    	if($do=='chk'){
    		$auser=I("post.auser");
    		$apass=I("post.apass");
    		$admin=D('admin');

    		$where=array(
    			'auser'=>$auser,
    			'apass'=>$apass,
    			);
    		$user=$admin->where($where)->find();
    		if(!$user){
    			return $this->error("帐号或密码错误","/tpblog/index.php/Admin/Login");
    		}
    		session("aid",$user['aid']);
    		return $this->error("登录成功","/tpblog/index.php/Admin/Index/index");
    	}
        
    	$this->display();
    }

    function logout(){
        session('aid',null);
        return $this->success("退出成功","/tpblog/index.php/Admin/Login/index");
    }	
}
?>