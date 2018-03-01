<?php
namespace Home\Controller;
use Think\Controller;
class AuserController extends AdmController {
    
    function __construct(){
        parent::__construct();
        $this->setting=D("Admin/Setting");
        $this->cfg=$this->setting->getAll();
    }


    public function index(){

        $grzlModel=D("grzl");
        $pageModel=D("page");
        $setting=D("Admin/Setting");
        $pinglun=D("pinglun");

        $plcount=$pinglun->where(array('pyan'=>session('aid')))->count();
        $count=$pageModel->where(array('yan'=>session('aid')))->count();
        $cfg=$setting->getAll();
        $page=new \Think\Page($count,$cfg['pagenum']);

        
        $grzl=$grzlModel->where(array('yan'=>session('aid')))->find();

        
        $this->assign('cfg',$this->cfg);
        $this->assign('plcount',$plcount);
        $this->assign('count',$count);

        $blogs=$pageModel->where(array('yan'=>session('aid')))->select();
        $pls=$pinglun->where(array('pyan'=>session('aid')))->select();
        
        $this->assign('grzl',$grzl);
        $this->assign('blogs',$blogs);
        $this->assign('pls',$pls);
        $this->assign("show",$page->show());
        $this->display();
        
    }

    //添加博文
    public function add(){
        $pid=I("get.pid");
        $bk=I("get.bk");
        $id=session('aid');

        $grzlModel=D("grzl");
        $pageModel=D("page");
        $grzl=$grzlModel->where(array('yan'=>$id))->find();
        $blog=$pageModel->where(array('pid'=>$pid))->find();
        if(IS_POST){
            $title=I("post.title");
            $author=I("post.author");
            $content=I("post.content");
            $lx=I("post.lx");
            $bwjs=I("post.bwjs");
            $rule=array(
                array("title","require","标题不能为空"),
                array("author","require","作者不能为空"),
                array("content","require","正文不能为空"),
                );
            if(!$pageModel->validate($rule)->create()){
                return $this->error($pageModel->getError(),"/tpblog/index.php/Home/Auser/add");
            }

            $insert=array(
                    'title'  =>$title,
                    'author' =>$author,
                    'content'=>$content,
                    'yan'    =>$id,
                    'lx'     =>$lx,
                    'bk'     =>$bk,
                    'bwjs'   =>$bwjs,
                );
            if($pid>0){
                $insert['uptime']=time();
                $pageModel->where(array('pid'=>$pid))->save($insert);
            }else{
                $insert['intime']=time();
                $pageModel->add($insert);
            }
            
            return $this->success('操作成功',"/tpblog/index.php/Home/Auser/index");
        
        }

        $this->assign('blog',$blog);
        $this->assign('grzl',$grzl);
        $this->display();
    }

    //删除当前用户发表的博文
    public function delete(){
        $pid=I("get.pid");
        D("page")->where(array('pid'=>$pid))->delete();
        return $this->redirect("/Home/Auser/index");
    }

    //删除当前用户的评论
    public function pldelete(){
        $piid=I("get.piid");
        D("pinglun")->where(array('piid'=>$piid))->delete();
        return $this->redirect("/Home/Auser/index");
    }

    //相册
    public function xc(){
        $grzlModel=D("grzl");
        $xcModel=D("xc");

        $grzl=$grzlModel->where(array('yan'=>session('aid')))->find();
        $xp=$xcModel->where(array('xyan'=>session('aid')))->find();
      

        $this->assign('grzl',$grzl);
        $this->assign('xp',$xp);
        $this->display();
    }

    //上传相册相片
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
        $upload->saveName  =     '';
        $info=$upload->uploadOne($_FILES['file1']);
        if(!$info){
            $result['msg']=$upload->getError();
        }else{
            $url='/Uploads/'.$info['savepath'].$info['savaname'];
            $result['file_path']=$url;
            $result['success']=true;
        }

        $model = M('xc');
       
        // 保存当前数据对象
        $data['xname'] = $url;
        
        
        
        $model->add($data);

        $this->ajaxReturn($result);
    }

    //添加相册相片
    public function xcadd(){
        $upload = new \Think\Upload();// 实例化上传类
        $info=$upload->uploadOne($_FILES['file1']);
        

        $xyan=I("get.id");
        $xcModel=D("xc");


        if(IS_POST){
            
            $content=I("post.content");
            $xpsm=I("post.xpsm");
            $rule=array(
                array("content","require","相片不能为空"),
                );
            if(!$xcModel->validate($rule)->create()){
                return $this->error($xcModel->getError(),"/tpblog/index.php/Home/Auser/xcadd");
            }

            $insert=array(
                    'xz'     =>$content,
                    'xyan'   =>$xyan,
                    'xpsm'   =>$xpsm,
                    
                    );
            
            $xcModel->add($insert);
            
            
            return $this->success('操作成功',"/tpblog/index.php/Home/Auser/xc");
        
        }

        
        $this->display();
    }

    //个人资料添加
    public function grzladd(){

        

        
        $gid=I("get.gid");
        

        $adminModel=D("admin");
        $grzlModel=D("grzl");
        $grzl=$grzlModel->where(array('gid'=>$gid))->find();
        

        if(IS_POST){
            
            $tx=I("post.content");
            $nc=I("post.nc");
            $zy=I("post.zy");
            $zz=I("post.zz");
            $qq=I("post.qq");
            $yx=I("post.yx");
            $bz=I("post.bz");
            $id=session('aid');

            $rule=array(
                array("nc","require","昵称不能为空"),
                array("zy","require","职业不能为空"),
                array("zz","require","住址不能为空"),
                );
            if(!$grzlModel->validate($rule)->create()){
                return $this->error($grzlModel->getError(),"/tpblog/index.php/Home/Auser/grzladd");
            }

            $insert=array(
                    'tx'  =>$tx,
                    'nc'  =>$nc,
                    'zy'  =>$zy,
                    'zz'  =>$zz,
                    'qq'  =>$qq,
                    'yx'  =>$yx,
                    'bz'  =>$bz,
                    'yan' =>$id,
                );
            if($gid>0){
                
                $grzlModel->where(array('gid'=>$gid))->save($insert);
            }else{
                
                $grzlModel->add($insert);
            }
            
            return $this->success('操作成功',"/tpblog/index.php/Home/Auser/index");
            
        }

        $this->assign('grzl',$grzl);
        
        $this->display();
        
        
    }
}