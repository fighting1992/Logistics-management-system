<?php 
    $login_user = $this -> session -> userdata('login_user');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xx物流</title>
<link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/user/css/index.css');?>">
<style>
     #container_index{
         background-color: #fff;
         height:400px;
     }
     .center{
         border:1px solid #eee;
         width:500px;
         margin-left:200px;
     }
     .record{
         font-size: 14px;
         margin-bottom:5px;
         text-indent:50px;
         color:#c93;
     }
      .h_t{
         color:#000;
         font-weight:bold;
         font-size: 20px;
         margin:10px 10px;
     }
     .wrapper{
         margin-bottom:15px;
     }
     .order{
         font-size: 16px;
         margin-left:10px;
     }
</style>
</head>

<body>
  <div id="header">
          <div class="top">
               <div class="icontainer"> 欢迎你！ <?php if($login_user){ echo $login_user->username;}else{ ?>
                请<a href="<?php echo site_url('userIndex/login');?>"  class="top_a1">登录</a><?php }?>
               </div>
                 
         </div>
     <div class="top_nav">
       <div class="icontainer fix">
         <div class="logo"> <a href="#"><img src="<?php echo site_url('assets/user/images/logo.jpg" alt="xx物流');?>" /></a> </div>
         <div class="top_right">
         <div class="top_tels">
                     全国统一客服热线：<em>95500 / 9988886666</em>
         </div>
         </div>
         </div>
      </div>
      <div style="width: 1000px; margin: 0px auto; overflow: hidden; position: relative;
        height: 100px; cursor: pointer;">
		<img src="<?php echo site_url('assets/user/images/QQ图片20140226220005.jpg');?>"/>
	 </div>
     <div class="nav">
       <div class="icontainer">
          <ul>
            <li class="current on"> <a href="<?php echo site_url('userIndex/index');?>"  class="a1">首页</a> </li>
            <li> <a class="a1">公司新闻</a></li>
            <li> <a class="a1" href="<?php echo site_url('userIndex/make_order');?>">订单预定</a></li>
            <li> <a class="a1">业务咨询</a></li>
            <li> <a class="a1">客户服务</a></li>
            <li> <a class="a1">关于我们</a></li>
          </ul>
           <a href="#"><img class="top_tel" src="<?php echo site_url('assets/user/images/tel_top.jpg"')?> /></a> 
        </div>
       </div>
  </div>
    <div id="container_index" class="fix">
       <div class="center">
         <p class="h_t">我的订单：</p>
         
         <?php   foreach($records as $row){
         ?>
         <div class="wrapper">
         <p class="order"><?php echo $row->order_id; ?></p>
         	<?php if($row->items){
         	foreach($row->items as $item){ ?>
         	<p class="record"><b><?php echo $item->address_record;?></b>&nbsp;&nbsp;&nbsp; <?php echo $item->date_record;?></p>
         
         	<?php } ?>
         	</div>
         <?php }else{?><p class="record"> <?php echo "暂无物流信息";}}?></p>
       </div>                            
    </div>
 </body>