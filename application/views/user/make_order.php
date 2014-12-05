<?php 
    $login_user = $this -> session -> userdata('login_user');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xx物流</title>
<link href="<?php echo site_url('assets/assets/bootstrap/css/bootstrap.min.css'); ?>"

 rel="stylesheet" />
    <link href="<?php echo site_url('assets/assets/bootstrap/css/bootstrap-responsive.min.css'); ?>"

 rel="stylesheet" />
    <link href="<?php echo site_url('assets/assets/bootstrap/css/bootstrap-fileupload.css'); ?>"

 rel="stylesheet" />
    <link href="<?php echo site_url('assets/assets/font-awesome/css/font-awesome.css'); ?>"

 rel="stylesheet" />
    <link href="<?php echo site_url('assets/css/style.css'); ?>"

 rel="stylesheet" />
    <link href="<?php echo site_url('assets/css/style-responsive.css'); ?>"

 rel="stylesheet" />
    <link href="<?php echo site_url('assets/css/style-default.css'); ?>"

 rel="stylesheet" id="style_color" />

    <link href="<?php echo site_url('assets/assets/fancybox/source/jquery.fancybox.css'); ?>"

 rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/uniform/css/uniform.default.css'); ?>"

 />

    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/chosen-bootstrap/chosen/chosen.css'); ?>"

 />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/jquery-tags-input/jquery.tagsinput.css'); ?>"

 />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/clockface/css/clockface.css'); ?>"

 />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css'); ?>"

 />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/bootstrap-datepicker/css/datepicker.css'); ?>"

 />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/bootstrap-timepicker/compiled/timepicker.css'); ?>"

 />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/bootstrap-colorpicker/css/colorpicker.css'); ?>"

 />
    <link rel="stylesheet" href="<?php echo site_url('assets/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css'); ?>"

 />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/bootstrap-daterangepicker/daterangepicker.css'); ?>"

 />
<link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/user/css/index.css');?>">
<style>
     #container_index{
         background-color: #fff;
     }
     #form{
         margin-left:300px;
     }
</style>
</head>

<body>
  <div id="header">
          <div class="top">
               <div class="icontainer"> 欢迎你！ <?php if($login_user){ echo $login_user->username;?><a href="<?php echo site_url("userIndex/my_order/$login_user->user_id");?>">我的订单</a><?php }else{ ?>
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
       <form action="<?php echo site_url('userIndex/do_order');?>" method="post" id="form">
           <input type="hidden" class="input-large" name="order_id"/>
           <div class="control-group">
                <label class="control-label">用户名</label>
                <div class="controls">
                      <select class="input-large m-wrap" tabindex="1" name="user_id">
                      <?php foreach($records as $row){
                      ?>
                      <option value="<?php echo $row->user_id?>"><?php echo $row->username?></option>
                      <?php }?>
                      </select>
                </div>
           </div>
           <div class="control-group">
                <label class="control-label">下单日期</label>
                <div class="controls">
                      <input id="dp1" type="text" value="2014-01-01" size="16" class="input-large" name="date">
                      <span class="help-inline"></span>
                </div>
           </div>
           <div class="control-group">
                <label class="control-label">货物名称</label>
                <div class="controls">
                      <input type="text" class="input-large" name="goods_name"/>
                      <span class="help-inline"></span>
                </div>
           </div>
           <div class="control-group">
                <label class="control-label">货物重量</label>
                <div class="controls">
                      <input type="text" class="input-large" name="goods_weight"/>
                      <span class="help-inline"></span>
                </div>
           </div>
           <input type="hidden" class="input-large" name="order_state" value="暂无记录"/>
           <input type="hidden" class="input-large" name="order_cost" value="未计算"/>
           <div class="control-group">
                <label class="control-label">邮寄地址</label>
                <div class="controls">
                      <input type="text" class="input-large" name="order_address"/>
                      <span class="help-inline"></span>
                </div>
           </div>
           <div class="form-actions">
                <button type="submit" class="btn btn-success">提交</button>
                <button type="button" class="btn">取消</button>
           </div>
       </form>                   
    </div>
 </body>
 <script src="<?php echo site_url('assets/js/jquery-1.8.2.min.js'); ?>"></script>
   <script src="<?php echo site_url('assets/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/ckeditor/ckeditor.js'); ?>"></script>
   <script src="<?php echo site_url('assets/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap/js/bootstrap-fileupload.js'); ?>"></script>
   <script src="<?php echo site_url('assets/js/jquery.blockui.js'); ?>"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo site_url('assets/js/excanvas.js'); ?>"></script>
   <script src="<?php echo site_url('assets/js/respond.js'); ?>"></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/chosen-bootstrap/chosen/chosen.jquery.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/uniform/jquery.uniform.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/clockface/js/clockface.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/jquery-tags-input/jquery.tagsinput.min.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-daterangepicker/date.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js'); ?>"></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/bootstrap-inputmask/bootstrap-inputmask.min.js'); ?>"></script>
   <script src="<?php echo site_url('assets/assets/fancybox/source/jquery.fancybox.pack.js'); ?>"></script>


   <!--common script for all pages-->
   <script src="<?php echo site_url('assets/js/common-scripts.js'); ?>"></script>

   <!--script for this page-->
   <script src="<?php echo site_url('assets/js/form-component.js'); ?>"></script>