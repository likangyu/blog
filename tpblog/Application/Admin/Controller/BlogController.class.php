<?php
namespace Admin\Controller;

class BlogController extends AdmController {
    public function index(){
    	
        //取出系统配置中的信息
        $setting=D("setting");
        $cfg=$setting->getAll();
    	$pageModel=D("page");
    	
    	$count=$pageModel->count();
    	$page=new \Think\Page($count,$cfg['pagenum']);


    	$blogs=$pageModel->order('pid desc')->limit($page->firstRow.','.$page->listRows)->select();

    	$this->assign("show",$page->show());
    	$this->assign("blogs",$blogs);
    	$this->display();
    }

    public function add(){

        $pid=I("get.pid");
        $pageModel=D("page");
        $blog=array(
              'pid'=>0,
              'title'=>'',
              'author'=>'',
              'content'=>''
            );
        if($pid>0){
            $blog=$pageModel->where(array('pid'=>$pid))->find();
        }

        $this->assign("blog",$blog);
    	$this->display();
    }

    public function delete(){
        $pid=I("get.pid");
        D("page")->where(array('pid'=>$pid))->delete();
        return $this->redirect("/Admin/Blog/index");
    }

    public function save(){
        $pid=I("get.pid");

    	$pageModel=D("page");
    	if(IS_POST){
    		$title=I("post.title");
    		$author=I("post.author");
    		$content=I("post.content");
    		$rule=array(
    			array("title","require","标题不能为空"),
    			array("author","require","作者不能为空"),
    			array("content","require","正文不能为空"),
    			);
    		if(!$pageModel->validate($rule)->create()){
    			return $this->error($pageModel->getError(),"/tpblog/index.php/Admin/Blog/add");
    		}

    		$insert=array(
    				'title'  =>$title,
    				'author' =>$author,
    				'content'=>$content,
                );
            if($pid>0){
                $insert['uptime']=time();
                $pageModel->where(array('pid'=>$pid))->save($insert);
            }else{
                $insert['intime']=time();
                $pageModel->add($insert);
            }
    		
    		return $this->success('操作成功',"/tpblog/index.php/Admin/Blog/index");
    	}
    }

    public function upload(){

        $result=array();
        $result['msg']='';
        $result['success']=false;
        $result['file_path']='';

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $info=$upload->uploadOne($_FILES['file1']);
        if(!$info){
            $result['msg']=$upload->getError();
        }else{
            $url='/Uploads/'.$info['savepath'].$info['savaname'];
            $result['file_path']=$url;
            $result['success']=true;
        }

        $this->ajaxReturn($result);
    }
}