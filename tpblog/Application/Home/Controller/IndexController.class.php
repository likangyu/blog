<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    function __construct(){
    	parent::__construct();
    	$this->setting=D("Admin/Setting");
    	$this->cfg=$this->setting->getAll();
    }


    public function index(){

        $admin=D("admin");
        $users=$admin->order('aid desc')->select();
    	$pageModel=D("page");
        $setting=D("Admin/Setting");
        $grzlModel=D("grzl");
        $pinglun=D("pinglun");
        $haoshu=D('haoshu');

        //统计博文总数
        $count=$pageModel->count();
        $qwcount=$pageModel->where(array('lx'=>'趣闻'))->count();
        $rwcount=$pageModel->where(array('lx'=>'人文'))->count();
        $mscount=$pageModel->where(array('lx'=>'美食'))->count();
        $cfg=$setting->getAll();
        $page=new \Think\Page($count,$cfg['pagenum']);

        
        $this->assign('cfg',$this->cfg);
        $this->assign('qwcount',$qwcount);
        $this->assign('rwcount',$rwcount);
        $this->assign('mscount',$mscount);
        $this->assign('count',$count);

        $grzl=$grzlModel->where(array('yan'=>session('aid')))->find();
        $blogs=$pageModel->order('pid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $pl=$pinglun->find();
        $haos=$haoshu->select();

        $this->assign("users",$users);
        $this->assign('grzl',$grzl);
        $this->assign('blogs',$blogs);
        $this->assign("show",$page->show());
        $this->assign("pl",$pl);
        $this->assign("haos",$haos);
        $this->display();
        
    }
    
    //阅读博客内容
    public function read(){

    	$pid=I("get.pid");
        $llan=I("get.llan");

        $bwliulanliangModel=D("bwliulanliang");
    	$pageModel=D("page");
		$blog=$pageModel->where( array('pid'=>$pid) )->find();
        

        $pinglun=D("pinglun");
        //统计博文评论总量
        $count=$pinglun->where(array('wyan'=>$pid))->count();
        $pls=$pinglun->where(array('wyan'=>$pid))->select();

        $insert=array(
                'llan'=>$llan,
                'bpid'=>$pid,
                );
        $crsj=$bwliulanliangModel->add($insert);

    	$this->assign('blog',$blog);
        $this->assign('pls',$pls);
    	$this->assign('cfg',$this->cfg);
        $this->assign('count',$count);
        $this->display();

    }

    //搜索博客
    public function search(){

        $title=I("post.title");
        $pageModel=D("page");
        $pinglun=D("pinglun");
        $blog=$pageModel->where( array('title'=>$title) )->find();
        $pls=$pinglun->where(array('wyan'=>$pid))->select();
        

        $this->assign('blog',$blog);
        $this->assign('pls',$pls);
        $this->assign('cfg',$this->cfg);
        $this->display();
    }

    //注册用户
    public function add(){

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
                return $this->error($admin->getError(),"/tpblog/index.php/Home/Index/add");
            }

            //验证用户的唯一性
            $where=array();
            $where['auser']=$auser;
            $isArr=$admin->where($where)->find();
            if($isArr){
                return $this->error("用户名已经存在","/tpblog/index.php/Home/Index/add");
            }

            //插入数据
            $insert=array(
                'auser'=>$auser,
                'apass'=>$apass,
                'yan'  =>0,
                );
            $aid=$admin->add($insert);
            if($aid){
                return $this->success('操作成功',"/tpblog/index.php/Home/Index/add");
            }else{
                return $this->error('操作失败',"/tpblog/index.php/Home/Index/add");
            }

        }
        $user=$admin->where(array('aid'=>$aid))->find();

        $this->assign('user',$user);
        $this->display();
    }

    //登录
    public function login(){

        $do=I("get.do");
        if($do=='chk'){
            //获取验证码
            $code = I("verify");
            $verify = new \Think\Verify();
            //判断验证码是否正确
            if ($verify->check($code, 1)){
                $auser=I("post.auser");
                $apass=I("post.apass");
                $admin=D('admin');

                $where=array(
                    'auser'=>$auser,
                    'apass'=>$apass,
                    'yan'  =>0,
                    );
                $user=$admin->where($where)->find();
                if(!$user){
                    
                    return $this->error("帐号或密码错误","/tpblog/index.php/Home/Index/login");
                }
                session("aid",$user['aid']);
                return $this->error("登录成功","/tpblog/index.php/Home/Index/index");
                }
                else {
                    $this->error('验证码错误',"/tpblog/index.php/Home/Index/login");
                }
            
        }

        $this->display();
    }

    //注销用户
    function logout(){
        session('aid',null);
        return $this->success("退出成功","/tpblog/index.php/Home/Index/Index");
    }   

    public function haoshu(){
        $haoshu=D('haoshu');

        if(IS_POST){
            $name=I("post.sname");
            $sauthor=I("post.sauthor");
            $content=I("post.content");
            $rule=array(
                array("sname","require","书名不能为空"),
                array("sauthor","require","推荐者不能为空"),
                array("content","require","图书封面不能为空"),
                );
            if(!$haoshu->validate($rule)->create()){
                return $this->error($haoshu->getError(),"/tpblog/index.php/Home/Index/haoshu");
            }

            $insert=array(
                    'name'    =>$name,
                    'sauthor' =>$sauthor,
                    'imge'    =>$content,
                    );
            $haoshu->add($insert);
            return $this->success('操作成功',"/tpblog/index.php/Home/Index/index");
        
        }

        
        $this->display();
    }

    //编辑用户评论
    public function pl(){
        $pinglun=D("pinglun");
        $pageModel=D("page");
        //验证评论的用户
        $id=I("get.id");
        //验证评论的博文
        $pid=I("get.pid");

        $blog=$pageModel->where( array('pid'=>$pid) )->find();

        if(IS_POST){
            
            $piauthor=I("post.piauthor");
            $picontent=I("post.picontent");
            $rule=array(
                
                array("piauthor","require","作者不能为空"),
                array("picontent","require","正文不能为空"),
                );
            if(!$pinglun->validate($rule)->create()){
                return $this->error($pinglun->getError(),"/tpblog/index.php/Home/Index/pl");
            }

            $insert=array(
                    
                    'piauthor' =>$piauthor,
                    'picontent'=>$picontent,
                    'pyan'     =>$id,
                    'wyan'     =>$pid,
                    'intime'   =>time(),
                );
            
            $pl=$pinglun->add($insert);
            return $this->success('操作成功',"/tpblog/index.php/Home/Index/read?pid=$pid");
        
        }
        $this->assign('pid',$pid);
        $this->assign('blog',$blog);
        $this->display();
        
        
        
    }

    //博文分类阅读页面
    public function lbread(){
        $pageModel=D("page");
        $pinglun=D("pinglun");
        $lx=I('get.lx');

        $blogs=$pageModel->where(array('lx'=>$lx))->select();
        $pl=$pinglun->where()->select();

        $this->assign('blogs',$blogs);
        $this->display();
        

    }

    //生成验证码
    public function verify(){
        $arr = array(
            'imageW'    =>    130,
            'imageH'    =>    34,
            'fontSize'  =>    16,    // 验证码字体大小
            'length'    =>    4,     // 验证码位数
            'useNoise'  =>    false, // 关闭验证码杂点
            'useCurve'  =>    true,
            'bg'        =>    array(238, 238, 238)
        );
        $Verify = new \Think\Verify($arr);
        $Verify->entry(1);


    }

    
}