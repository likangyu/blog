<?php
namespace Admin\Controller;

class AuserController extends AdmController {
    public function index(){
    	
    	$admin=D("admin");
    	$users=$admin->order('aid desc')->select();

    	$data=array();
    	$data['users']=$users;
    	$this->assign("data",$data);


    	$this->display();
    }

    public function add(){
    	
    	$aid=I("get.aid");
    	$admin=D("admin");
    	$user=array(
    		  'aid'=>0,
    		  'auser'=>'',
    		  'apass'=>'',
              'yan'=>''
    		);
    	if($aid>0){
    		$user=$admin->where(array('aid'=>$aid))->find();
    	}

    	$this->assign("user",$user);
    	$this->display();
    }

    public function delete(){
    	$aid=I("get.aid");
    	D("admin")->where(array('aid'=>$aid))->delete();
    	return $this->redirect("/Admin/Auser/index");
    }
    protected function _edit($aid){
    	$admin=D("admin");
    	if(IS_POST){

    		$auser=I("post.auser");
    		$apass=I("post.apass");

    		//验证表单的合法性
    		$rule=array(
    			  array('auser','require',"用户不能为空"),
    			  array('apass','require',"密码不能为空"),
    			);
    		if(!$admin->validate($rule)->create()){
    			return $this->error($admin->getError(),"/tpblog/index.php/Admin/Auser/add");
    		}

    		//验证用户的唯一性
    		$where=array();
    		$where['auser']=$auser;
    		$where['aid']=array('NEQ',$aid);
    		$isArr=$admin->where($where)->find();
    		if($isArr){
    			return $this->error("用户名已经存在","/tpblog/index.php/Admin/Auser/add");
    		}

    		//修改数据
    		$insert=array(
    			'auser'=>$auser,
    			'apass'=>$apass,
				);
    		$is=$admin->where(array('aid'=>$aid))->save($insert);
    		return $this->success("成功修改{$is}条数据","/tpblog/index.php/Admin/Auser/index");
    	}
    }



    public function save(){
    	
    	$aid=I("get.aid");
    	if($aid>0){
    		return $this->_edit($aid);
    	}


    	$admin=D("admin");

    	if(IS_POST){

    		$auser=I("post.auser");
    		$apass=I("post.apass");

    		//验证表单的合法性
    		$rule=array(
    			  array('auser','require',"用户不能为空"),
    			  array('apass','require',"密码不能为空"),
    			);
    		if(!$admin->validate($rule)->create()){
    			return $this->error($admin->getError(),"/tpblog/index.php/Admin/Auser/add");
    		}

    		//验证用户的唯一性
    		$where=array();
    		$where['auser']=$auser;
    		$isArr=$admin->where($where)->find();
    		if($isArr){
    			return $this->error("用户名已经存在","/tpblog/index.php/Admin/Auser/add");
    		}

    		//插入数据
    		$insert=array(
    			'auser'=>$auser,
    			'apass'=>$apass,
                'yan'  =>1,
				);
    		$aid=$admin->add($insert);
    		if($aid){
    			return $this->success('操作成功',"/tpblog/index.php/Admin/Auser/index");
    		}else{
    			return $this->error('操作失败',"/tpblog/index.php/Admin/Auser/index");
    		}
    	}
    }




}