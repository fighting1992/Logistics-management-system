<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>用户信息表</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
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
   <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/assets/uniform/css/uniform.default.css'); ?>"

 />
   <link rel="stylesheet" href="<?php echo site_url('assets/assets/data-tables/DT_bootstrap.css'); ?>"

 />

</head>
<!-- END HEAD -->
<?php include 'common.php'?>
<!-- BEGIN BODY -->
<body class="fixed-top">
   
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                                                用户基本信息
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                                                      物流管理系统
                           <span class="divider">/</span>
                       </li>
                       <!--<li>
                                                      车辆信息管理
                           <span class="divider">/</span>
                       </li>-->
                       <li class="active">
                                                      用户基本信息
                       </li>
                      <!-- <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> 用户基本信息</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     <div class="btn-group">
                                         <button >
                                            <a class="b_add" href="<?php echo site_url('user/add');?>">添加 <i class="icon-plus"></i></a>
                                         </button>
                                     </div>
                                     <!--<div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Print</a></li>
                                             <li><a href="#">Save as PDF</a></li>
                                             <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                     </div>-->
                                 </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                     <thead>
                                     <tr>
                                         <th>用户id</th>
                                         <th>用户名</th>
                                         <th>用户密码</th>
                                         <th>电子邮箱</th>
                                         <th>联系方式</th>
                                         <th>家庭住址</th>
                                         <th>编辑</th>
                                         <th>删除</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <?php foreach($users as $row){
                                     
                                     ?>
                                     <tr class="">
                                         <td><?php echo $row->user_id;?></td>
                                         <td><?php echo $row->username;?></td>
                                         <td><?php echo $row->password;?></td>
                                         <td ><?php echo $row->email;?></td>
                                         <td ><?php echo $row->tel;?></td>
                                         <td ><?php echo $row->home_add;?></td>
                                         <td><a href="<?php echo site_url("user/edit/$row->user_id")?>">编辑</a></td>
                                         <td><a href="<?php echo site_url("user/delete/$row->user_id")?>">删除</a></td>
                                     </tr>
                                     <?php }?>
                                     
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->


   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo site_url('assets/js/jquery-1.8.3.min.js'); ?>" ></script>
   <script src="<?php echo site_url('assets/js/jquery.nicescroll.js'); ?>"  type="text/javascript"></script>
   <script src="<?php echo site_url('assets/assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
   <script src="<?php echo site_url('assets/js/jquery.blockui.js'); ?>" ></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo site_url('assets/js/excanvas.js'); ?>" ></script>
   <script src="<?php echo site_url('assets/js/respond.js'); ?>" ></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo site_url('assets/assets/uniform/jquery.uniform.min.js'); ?>" ></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/data-tables/jquery.dataTables.js'); ?>" ></script>
   <script type="text/javascript" src="<?php echo site_url('assets/assets/data-tables/DT_bootstrap.js'); ?>" ></script>


   <!--common script for all pages-->
   <script src="<?php echo site_url('assets/js/common-scripts.js'); ?>" ></script>

   <!--script for this page only-->
   <script src="<?php echo site_url('assets/js/user_table.js'); ?>" ></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>
</body>
<!-- END BODY -->
</html>