<?php
	$login_user= $this -> session -> userdata("login_user");
?>
<style>
#p1{
    color:#fff;
}
</style>

   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <p class="brand" id="p1">
                                    物流管理系统
               </p>
               
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <!--<img src="<?php echo site_url('assets/img/avatar1_small.jpg');?>" alt="">-->
                               <span class="username"><?php if($login_user){ echo $login_user->admin_name;}else{echo "未登录";}?></span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <!--<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-cog"></i> 个人设置</a></li>-->
                               <li><a href="<?php echo site_url('admin/login');?>"><i class="icon-key"></i> 退出登录</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <!--<li class="sub-menu active">
                  <a class="" href="index.html">
                      <i class="icon-dashboard"></i>
                      <span>Dashboard</span>
                  </a>
              </li>--><?php if($login_user->staff_limit==1||$login_user->staff_limit==4){?>
              <li>
                  <a href="<?php echo site_url('admin/order');?>" class="">
                      <i class="icon-book"></i>
                      <span>订单信息管理</span>
                      
                  </a>
                  
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-cogs"></i>
                      <span>车辆信息管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo site_url('admin/vehicle_basics');?>">车辆基本信息记录</a></li>
                      <li><a class="" href="<?php echo site_url('admin/vehicle_repaired');?>">车辆维修登记</a></li>
                      <li><a class="" href="<?php echo site_url('admin/vehicle_illegal');?>">车辆违章登记</a></li>
                      <li><a class="" href="<?php echo site_url('admin/vehicle_driver');?>">司机基本信息</a></li>
                      <!--<li><a class="" href="gallery.html"> Gallery</a></li>-->
                  </ul>
              </li>
              
              <li class="sub-menu">
                  <a href="<?php echo site_url('admin/send');?>" class="">
                      <i class="icon-th"></i>
                      <span>配送信息管理</span>
                  </a>
              </li>
              <?php }?>
              <?php if($login_user->staff_limit==1||$login_user->staff_limit==2){?>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>仓储信息管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?php echo site_url('admin/instorage');?>">入库管理</a></li><?php }?>
                      <?php if($login_user->staff_limit==1||$login_user->staff_limit==3){?>
                      <li><a class="" href="<?php echo site_url('admin/outstorage');?>">出库管理</a></li><?php }?>
                      <?php if($login_user->staff_limit==1||$login_user->staff_limit==2||$login_user->staff_limit==3){?>
                      <li><a class="" href="<?php echo site_url('admin/total');?>">库存统计</a></li><?php }?>
                      <!--<li><a class="" href="form_validation.html">Form Validation</a></li>
                      <li><a class="" href="dropzone.html">Dropzone File Upload </a></li>-->
                  </ul>
              </li>
              
              <?php if($login_user->staff_limit==1){?>
              <li>
                  <a href="<?php echo site_url('admin/staff');?>" class="">
                      <i class="icon-fire"></i>
                      <span>员工信息管理</span>
                      
                  </a>
                                </li>
              <li >
                  <a href="<?php echo site_url('admin/user');?>" class="">
                      <i class="icon-file-alt"></i>
                      <span>用户信息管理</span>
                      
                  </a>
                  
              </li>
              
              <li>
                  <a class="" href="<?php echo site_url('admin/login');?>">
                    <i class="icon-user"></i>
                    <span>登&nbsp;&nbsp;录&nbsp;&nbsp;页&nbsp;&nbsp;面</span>
                  </a>
              </li>
              <?php }?>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN FOOTER -->
   <div id="footer">
       2014 &copy; 物流管理系统.
   </div>