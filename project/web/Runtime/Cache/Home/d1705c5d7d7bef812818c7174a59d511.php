<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- 新增qq头文件 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="名门新娘婚纱礼服,婚纱礼服,晚礼服,小礼服,礼服旗袍,韩式婚纱,上海婚纱礼服,深圳婚纱礼服,福州婚纱礼服,杭州婚纱礼服店,厦门婚纱礼服馆" />
<meta name="Description" content="一站式婚纱礼服商城，婚纱礼服，晚礼服，旗袍，小礼服等一站式购物，可线下试穿购买，深圳，杭州，福州，厦门，上海等均有实体店铺！" />
<!-- bootstrap -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- bootstrap -->
<title>个人中心</title>
<!-- bootstrap -->
<style type="text/css">
  *{margin:0;padding:0;list-style:none}
  a:hover{text-decoration:none}
</style>
<link href="/Public/boots/css/bootstrap.min.css" rel="stylesheet">
<!-- bootstrap -->
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="/Public/Home/Content/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|名门新娘婚纱礼服官方商城 - O2O婚纱领导品牌" href="feed.php" />
<link href="/Public/Home/Content/css.css" rel="stylesheet" type="text/css" />

<!--QQJS-->

<link href="/Public/Home/qq/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Home/qq/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="/Public/Home/qq/js/lrtk.js"></script>
</head>
<body class="am-with-topbar-fixed-top">
<script type="text/javascript" src="/Public/Home/Scripts/jquery-1.9.1.min.js"></script><script type="text/javascript" src="/Public/Home/Scripts/jquery.json.js"></script><script type="text/javascript" src="/Public/Home/Scripts/transport_jquery.js"></script><script type="text/javascript" src="/Public/Home/Scripts/utils.js"></script> 
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script> 
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#index#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>

<!--QQjs start-->
<div class="main-im">
  <div id="open_im" class="open-im">&nbsp;</div>  
  <div class="im_main" id="im_main">
    <div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
    <a href="http://wpa.qq.com/msgrd?v=3&uin=2998130500&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
      <div class="qq-container"></div>
      <div class="qq-hover-c"><img class="img-qq" src="/Public/Home/qq/images/qq.png"></div>
      <span> QQ在线咨询</span>
    </a>
    <div class="im-tel">
      <div>售前咨询热线</div>
      <div class="tel-num">400-123-45678</div>
      <div>售后咨询热线</div>
      <div class="tel-num">010-12345678</div>
    </div>
    <div class="im-footer" style="position:relative">
      <div class="weixing-container">
        <div class="weixing-show">
          <div class="weixing-txt">微信扫一扫<br>关注js代码</div>
          <img class="weixing-ma" src="/Public/Home/qq/images/weixing-ma.jpg">
          <div class="weixing-sanjiao"></div>
          <div class="weixing-sanjiao-big"></div>
        </div>
      </div>
      <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
      <div style="clear:both"></div>
    </div>
  </div>
</div>
<block> 
<div  name = "content" class="container-fluid ">
    <ul class="nav nav-tabs importent">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo U('Home/Index/index');?>"><span class=" glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;首页</a>
           <a class="navbar-brand" href="<?php echo U('Home/Goods/index');?>"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span>&nbsp;&nbsp;商品页</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo U('Home/Cart/index');?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;购物车</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;客户评论</a></li>
            <li><a href="#"></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>&nbsp;&nbsp;社区 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>
                <li><a href="#">游戏吧</a></li>
                <li role="separator" class="divider"></li>

                <li><a href="<?php echo U('Home/Fashion/index');?>">潮流动态</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Joke/index');?>">开心一刻</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Feedback/index');?>">反馈信息</a></li>
              </ul>
            </li>
          </ul>
          <?php  if(empty($_SESSION['username'])){ ?>
          <ul class="nav navbar-nav navbar-right">
            <li style="margin-right:10px;"><a href="<?php echo U('Home/Login/index');?>">登录</a></li>
            <li style="margin-right:10px;"><a href="#">注册</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;关于我们 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="<?php echo U('Home/Job/index');?>">招聘管理</a></li>
                <!-- <li><a href="#">婚庆推荐</a></li> -->
               
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Recommend/index');?>">优秀婚庆推荐</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Teamintro/index');?>">团队介绍</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;用户 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo U('Home/Login/index');?>">登录</a></li>
                <li><a href="<?php echo U('Home/Register/index');?>">注册</a></li>
                <li><a href="<?php echo U('Home/Personal/index');?>">个人中心</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Admin/Index/index');?>">后台入口</a></li>
              </ul>
            </li>
            <?php  }else{ ?> 
          <ul class="nav navbar-nav navbar-right">

            <li style="margin-right:10px;"><a href="<?php echo U('Home/Order/index');?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;我的订单</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;关于我们 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="<?php echo U('Home/Job/index');?>">招聘管理</a></li>
                <!-- <li><a href="#">婚庆推荐</a></li> -->
               
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Recommend/index');?>">优秀婚庆推荐</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Teamintro/index');?>">团队介绍</a></li>
              </ul>
            </li>
  <!-- <img src="/Public/Home/Images/touxiang.png" style="border-radius:100px;"> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
 if(empty($xj['pic'])){ echo '<img src="/Public/Home/Images/touxiang.jpg" width="30px" height="30px" style="border-radius:50%;">'; }else{ echo '<img src="'.$xj['pic'].'" width="30px" height="30px" style="border-radius:50%;" >'; } ?>&nbsp;&nbsp;<?php  echo $_SESSION['username']; ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <!-- <li><a href="<?php echo U('Home/Login/index');?>">登录</a></li> -->
                <li><a href="<?php echo U('Home/Personal/index');?>">个人中心</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Admin/Index/index');?>">后台入口</a></li>
                <li><a href="<?php echo U('Home/Loginout/index');?>">退出</a></li>
              </ul>
            </li>
            <?php } ?>
         </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </ul>
</div>
   <!-- </ul> -->



<style type="text/css">
  a:hover{
    text-decoration:none;
  }
</style>
	<div style="width:80%;margin:20px auto;height:800px;">
	  <div style="width:250px;float:left">
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px"><span style="margin-left:10px;font-size:20px;"><a href="<?php echo U('Home/Personal/index');?>" style="padding:10px 150px 7px 7px">个人中心</a></span></div>
	     <div style="width:250px;height:278px;margin-top:20px;border:1px solid #ccc">
	       <div style="width:250px;height:250px"> 
	                <?php  if(empty($xj[pic])){ echo '<img src="/Public/Home/Images/touxiang.jpg" width="248px" height="248px" style="border-radius:50%;">'; }else{ echo '<img src="'.$xj[pic].'" width="248px" height="248px" style="border-radius:50%;" >'; } ?>
	       </div>
	       <div style="width:250px;height:30px;line-height:30px;text-align:center"><span style="font-size:18px">用户名:</span><?php echo ($xj["username"]); ?></div>
	     </div>
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Personal/information');?>" style="padding:10px 150px 7px 7px">个人资料</a></span></div>
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Personal/change');?>" style="padding:10px 150px 7px 7px">修改密码</a></span></div>
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Order/index');?>" style="padding:10px 150px 7px 7px">个人订单</a></span></div>
       <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Orderby/index');?>" style="padding:10px 130px 7px 7px">未完成订单</a></span></div>
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Order/delivered');?>" style="padding:10px 130px 7px 7px">已发货订单</a></span></div>
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Order/unfilled');?>" style="padding:10px 130px 7px 7px">未发货订单</a></span></div>
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Order/received');?>" style="padding:10px 130px 7px 7px">已收货订单</a></span></div>
       <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Order/assess');?>" style="padding:10px 150px 7px 7px">我的评价</a></span></div>
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px;color:#ccc">收货地址</span></div>
	     <div style="width:250px;height:50px;border:1px solid #ccc;line-height:50px;margin-top:20px"><span style="margin-left:10px;font-size:20px"><a href="<?php echo U('Home/Orderaddress/addaddress');?>" style="padding:10px 110px 7px 7px">添加收货地址</a></span></div>
	     <div style="width:250px;height:500px;border:1px solid #ccc;margin-top:20px">
	       <div style="width:220px;height:40px;margin:10px;font-size:18px">最新活动</div>
	       <div style="width:220px;height:240px;"><img src="/Public/Home/img/1.jpg"></div>
	     </div>
	  </div>


	  <div style="width:700px;float:right;border:1px solid #ccc">
	     <form action="<?php echo U('Home/Orderaddress/index');?>" method="get">
              <div style="float:left">
                <label>显示 
                  <select name="num">
                    
                    <option <?php echo $_GET['num'] == 5 ? 'selected' : '' ?> value="5">5</option>
                    <option <?php echo $_GET['num'] == 10 ? 'selected' : '' ?> value="10">10</option>
                    <option <?php echo $_GET['num'] == 20 ? 'selected' : '' ?> value="20">20</option>
                  </select>
                  条
                </label>
              </div>
              <div style="float:right">
                <label>收货人姓名:<input value="<?php echo ($_GET['keyword']); ?>" name="keyword" type="search" placeholder=""></label>
                <button type="submit" class="btn btn-info">查询</button>
              </div>
        </form>
     </div>
  <div style="width:700px;float:right;border:1px solid #ccc">   
      <div style="width:700px;margin:10px auto;border-bottom:1px solid #ccc">
        <div class="col-sm-12">
	          <!-- 订单列表遍历 -->
	            <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info">
	              <thead>
	                <tr role="row" style="text-align:center">
	                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">收货人姓名</th>
	                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">手机号</th>
	                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">收货地址</th>
	                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">默认</th>
	                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">操作</th>
	                </tr>
	              </thead>
	              <tbody>
	                <?php if(is_array($orderaddress)): foreach($orderaddress as $k=>$vo): ?><tr class="gradeA odd" role="row">
                      <input type="hidden" class="sid" value="<?php echo ($vo["id"]); ?>">
	                    <td><?php echo ($vo["oname"]); ?></td>
	                    <td><?php echo ($vo["tel"]); ?></td>
	                    <td><?php echo ($vo["address"]); ?></td>
	                    <td> 
                      <?php if ($vo['default']==1): ?>
                        <span class="name">设为默认</span>
                      <?php else: ?>
                        <span class="nam">默认地址</span>
                      <?php endif ?>

                      </td>
	                    <td>
                      <!-- <button type="button" class="btn btn-danger btn-update btn-circle" style="width:70px">设为默认</button> -->
                      <a href="<?php echo U('Home/Orderaddress/xg',array('id'=>$vo['id']));?>" type="button" class="btn btn-info btn-circle" style="width:70px;color:#000">修改</a>
                      <button type="button" class="btn btn-danger btn-del btn-circle" style="width:70px;color:#000">删除</button></td>
	    
	                  </tr><?php endforeach; endif; ?>
	              </tbody>
	            </table>
	          
	          </div>
      </div>
  </foreach>
</div>
<div style="width:700px;border:1px solid #ccc;float:right">
  <style type="text/css">
            #pages a,#pages span{ background-color: #fff;
                    border: 1px solid #ddd;
                    color: #337ab7;
                    float: left;
                    line-height: 1.42857;
                    margin-left: -1px;
                    padding: 6px 12px;
                    position: relative;
                    text-decoration: none;}
            #pages span {
                  background-color: #337ab7;
                  border-color: #337ab7;
                  color: #fff;
                  cursor: default;
                  z-index: 2;
                  }
        </style>
       
        <div>
             <div id="pages">
                <?php echo ($pages); ?>
              </div>
	  </div>
	</div>
	<script type="text/javascript" src="/Public/Admin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
    //绑定单击事件
    $('.btn-del').click(function(){
      // alert('222');

      //获取id
      var id = $(this).parents('tr').find('.sid').val();
      // alert(id);
      var url = "<?php echo U('Home/Orderaddress/ajaxdel');?>";
      // alert(url);
      var btn = $(this);
      //ajax
      $.get(url,{id:id},function(data){
        // alert(data);
        if(data == 1){
          // alert('成功');
         btn.parents('tr').remove();
        }else{
          alert('失败');
        }
      })

    })

    // $('.btn-update').click(function(){
    //   // alert('222');
    //   // alert($(this).parent().prev().html())
    //   //获取id
      

    // })
    $('.name').live('click',function(){
      var id = $(this).parents('tr').find('.sid').val();
      // alert(id);
      var url = "<?php echo U('Home/Orderaddress/amend');?>";
      // alert(url);
      var btn = $(this);

      //ajax
      $.get(url,{id:id},function(data){
        // alert(data);
        if(data == 1){
           $('.name').html('设为默认');
           $('.nam').html('设为默认');
           btn.html('默认地址') 
           $('.nam').addClass('name').removeClass('nam');
           // $btn.parent.html('是');
           // $('.name').html('是');
          // alert('成功');
         // btn.parents('tr').update();

        }else{
          alert('失败');
        }
      })
    })
    </script>


<div style ="clear:both"></div>
<div style="width:100%">
<div class="am-g am-cf am-margin-top-sm  bg_d4d2d3" style="margin-top:20px">
  <div class="am-container am-padding am-text-left bg_d4d2d3 page_list">
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=6" style="text-decoration:none">
            <h4>厦门实体店</h4>
            <p style="margin-bottom:12px;">地址：厦门市思明区厦禾路820号帝豪大厦2901室</p>
            <p>电话：0592-3300517</p>
            <p>QQ群：325104579</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=4" style="text-decoration:none">
        <h4>杭州实体店</h4>
        <p style="margin-bottom:12px;">地址：杭州市下城区文晖路42号现代置业大厦西楼10楼1003室</p>
        <p>电话：0571-87173525</p>
        <p>QQ群：85497724</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=3" style="text-decoration:none">
        <h4>上海实体店</h4>
        <p style="margin-bottom:12px;">地址：徐汇区石龙路569号1号楼304室</p>
        <p>电话：021-51506021</p>
        <p>QQ群：368612346</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=2" style="text-decoration:none">
        <h4>深圳实体店</h4>
        <p style="margin-bottom:12px;">地址：福田区车公庙深南大道6025号英龙大厦11楼11-12室</p>
        <p>电话：0755-33983228</p>
        <p>QQ群：162289364</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=5" style="text-decoration:none">
        <h4>福州实体店</h4>
        <p style="margin-bottom:12px;">地址：东二环泰禾广场7号楼1520-1523（靠近二化）</p>
        <p>电话：0591-87581700</p>
        <p>QQ群：338577915</p>
        </a>
    </div>
    
 
    
    <div class="am-u-sm-6 am-u-md-2   am-padding-sm  am-text-center">
      <p class="text-center"><img src="/Public/Home/Picture/code.jpg"></p>
      <p class="text-center">扫一扫</p>
      <p class="text-center">更多精彩活动</p>
    </div>
    <div class="am-cf am-margin-bottom am-show-sm-only bg_fff"></div>
  </div>
</div>
<div class="am-g am-cf am-margin-0  foot_bg">
  <div class="page_foot  am-text-center ">
          <ul>
          
                      <li><a href="category.php?id=690"  target="_blank" >精品婚纱</a></li>
                    <li>|</li>
                      <li><a href="article.php?id=2"  target="_blank" >隐私保护</a></li>
                    <li>|</li>
                      <li><a href="article.php?id=3"  target="_blank" >咨询热点</a></li>
                    <li>|</li>
                      <li><a href="article_cat.php?id=3"  target="_blank" >实体店预约</a></li>
                    <li>|</li>
                      <li><a href="wholesale.php" >批发方案</a></li>
                    <li>|</li>
                      <li><a href="myship.php" >配送方式</a></li>
                    <li>|</li>
                      <li><a href="article_cat.php?id=5"  target="_blank" >新手上路 </a></li>
                  
          </ul>
  </div>
</div>
<div class="am-g am-cf am-margin-0">
  <div class="am-container am-padding-sm ">
    <div class="am-u-sm-12 am-u-md-2 am-text-center"><p style="line-height:40px; font-size:20px; font-weight:700; color:#B9B9B9; "><img src="/Public/Home/Picture/400.png" style="vertical-align:middle; margin-top:-6px; ">4008297758</p></div>
    <div class="am-u-sm-12 am-u-md-7 am-text-center"><p class="am-text-sm"> 版权所有 2010-2014 名门新娘 名门新娘官方旗舰店<br> 并保留所有权利 ICP备案证书号：浙ICP备12016981号 </p></div>
    <div class="am-u-sm-12 am-u-md-3 am-text-center"><p> <span style="display:inline-block; vertical-align:bottom;"><wb:follow-button height="24" width="67" type="red_1" uid="2991975565"></wb:follow-button></span><img style="margin-left:20px;" src="/Public/Home/Picture/sm_83x30.png"> </p></div>
</div>
</div>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?055c4ad45be338b80ddab1d09a7194d6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src="/Public/Home/Scripts/amazeui.min.js"></script>
<script src="/Public/Home/Scripts/layer.js"></script> 
<script type="text/javascript">
$(document).ready(function(e) {
  $('.pic_modal').on('click',function(){
    var id = $(this).data('target');
    var url = 'quick_view.php?id='+id+'&_'+ Math.random();
    var s_height,if_height, s_width ,if_width;
    if_height = s_height = (document.documentElement.clientHeight-30)/18*17 ;
    s_width = document.documentElement.clientWidth ;
    if_width = s_height;
    if(s_width < if_width){
      if_width = s_width
      if_height = s_width;
    }
    if(if_width > 630){
      if_height = if_height - 120;
    }else if(if_width > 550){
      if_height = if_height - 20;
    }else if(if_width > 300){
      if_height = if_height + 130;
    }else{
      if_height = if_height + 180;
    }
    if_width = 960;
    if_height = 720;
    
    layer.open({
      title :'产品预览',
      type: 2,
      shade: [0.5, '#339999'],
      shadeClose :false,
      move: false,
      area: [if_width +'px', if_height+'px'],
      fix: true, //不固定
      maxmin: false,
      content: [url, 'no'],
      
    });
  });
  
  $('.dropdown-toggle').on('click',function(){
    $(this).siblings('.dropdown-menu').toggle('fast');
  });
  
});
</script>
<script language="javascript">
<!--
function validate(type)
{
  var frm  = document.forms['theForm'];
  var contactor = frm.elements['contactor'] ? Utils.trim(frm.elements['contactor'].value) : '';
  var mobile = frm.elements['mobile'] ? Utils.trim(frm.elements['mobile'].value) : '';
  
  var msg = ""; 
  
  if (mobile.length==0)
  {
    msg += "- 手机号不能为空" + '\n';
  }
  else if (mobile.length>0)
  {
    if (!Utils.isMobile(mobile))
    {
    msg += "- 您输入的手机号格式不正确" + '\n';
    }
  }
  if (contactor.length==0)
  {
    msg += "- 联系人不能为空" + '\n';
  }
  
  
  if (msg.length > 0)
  {
    alert(msg);
    return;
  }
  else
  {
           
      var send_sms_btn =  'send_sms_btn';
      var tips_msg = '公司核名';
            var data = $('#theForm').serialize()
      $.ajax({
        url:"booking.php?act=save",
        dataType:'json',
        type:"POST",
        data:data+'&type='+type,
        beforeSend:function() {  
             $("#"+send_sms_btn).html("正在提交...").attr('disabled',true);
        },  
        complete:function(result) {  
        $("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
        },  
        success:function(result){
          
          if(result.err_no==0)
          {
             alert(result.err_msg); 
             $("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
             document.theForm.reset();
             $('.close').trigger('click')
             return;
          }
          else
          {
             alert(result.err_msg); 
             $("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
             return;
          }
        },
        error:function(){
          $("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
          alert("出错了,请刷新页面重试:(");
        }
      });
    
  }
}
-->
</script> 

<script src="/Public/boots/js/jquery-1.11.3.min.js"></script>

<script src="/Public/boots/js/bootstrap.min.js"></script>

</body>
</html>