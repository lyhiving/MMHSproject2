<?php
namespace Admin\Controller;
use Think\Controller;
class ThinkauthgroupController extends CommonController {
	//显示权限组列表
    public function index(){
        // echo '后台权限组列表';
        //创建对象
        $group = M('think_auth_group');
      // var_dump($_SESSION);

       //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 5;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "title like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }


        // 查询满足要求的总记录数
        $count = $group->where($where)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;

         //执行查询
        $group = $group->where($where)->limit($limit)->select();

        // 分页显示输出
        $pages = $Page->show();
    
        // $access = M('think_auth_group_access');

        
        //分配变量
        $this->assign('group',$group);
        $this->assign('pages',$pages);
    	//解析模板
    	$this->display();
    }

    //显示权限组的添加页面
    public function add(){
    	// echo '权限组添加';
    	//解析模板
    	$this->display();
    }

    //处理权限组的数据添加
    public function insert(){
     // var_dump($_POST);
        //创建表对象
        $group = M('think_auth_group');

        // var_dump($_POST);
        // die();
          
        //创建数据
        $group->create();
       $res = $group->add();
       // var_dump($res);

        $access = M('think_auth_group_access');
        $_POST['group_id'] = $res;
        $access->create();
        $acc = $access->add(); //id

        
        $access->query("select uid from hs_think_auth_group_access where group_id = $acc");
        // $r = $access->_sql();
        // echo $r;
        // die();


       // echo $ass;

       // die();
       
   //   $rule = _sql();
   // var_dump($rule);
   //   die();
        //执行添加
       // if($admin->add()){
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功', U('Admin/Thinkauthrule/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败');
       }

    }

    //权限组的修改
    public function save(){
        // var_dump($_GET);
        $id = I('get.id');
        //创建表对象
        $rule = M('think_auth_rule');
        //查询当前权限组的数据
        $info = $rule->find($id);
        // var_dump($info);die;
   

        //分配变量
        $this->assign('info',$info);

        //解析模板
        $this->display();
    }

    //执行修改
    public function update(){
        // var_dump($_POST);
         //创建数据表对象
        $rule = M('think_auth_rule');
     
        //创建数据
        $res = $rule->create();
        //执行修改
       $res =  $rule->save();
       // var_dump($res);
        //执行添加
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('更新成功', U('Admin/Thinkauthrule/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败');
       }
    }
   public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $rule = M('think_auth_rule');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $rule->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }


}