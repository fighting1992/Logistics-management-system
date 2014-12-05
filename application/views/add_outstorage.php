<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>添加出库信息</title>
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


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <?php include 'common.php';?>
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
                                              添加出库信息
                   </h3>
                   
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> 添加出库信息</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="<?php echo site_url('outstorage/do_add')?>" method="post" class="form-horizontal">
                            <input type="hidden" class="input-large" name="id"/>
                            <div class="control-group">
                                <label class="control-label">管理员id</label>
                                <div class="controls">
                                    <select class="input-large m-wrap" tabindex="1" name="staff_id">
                                    <?php foreach($staffs as $row){
                                     
                                     ?>
                                            <option value="<?php echo $row->staff_id?>"><?php echo $row->staff_id?></option>
                                     <?php }?>
                                    </select>
                                        <span class="help-inline"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">出库日期</label>
                                <div class="controls">
                                    <input id="dp1" type="text" value="2014-01-01" size="16" class="input-large" name="date">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">货物名称</label>
                                <div class="controls">
                                        <input type="text" class="input-large" name="name"/>
                                        <span class="help-inline"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">货物数量</label>
                                <div class="controls">
                                        <input type="text" class="input-large" name="num"/>
                                        <span class="help-inline"></span>
                                </div>
                            </div>           
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">提交</button>
                                <button type="reset" class="btn">取消</button>
                            </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
            
                

         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
</div>


   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->

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
  <!-- END JAVASCRIPTS -->


</body>
<!-- END BODY -->
</html>