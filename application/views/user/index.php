<?php 
    $login_user = $this -> session -> userdata('login_user');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xx物流</title>
<link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/user/css/index.css');?>">
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
            <li class="current on"> <a href="#"  class="a1">首页</a> </li>
            <li> <a class="a1">公司新闻</a></li>
            <li> <a class="a1" href="<?php echo site_url('userIndex/make_order');?>">订单预定</a></li>
            <li> <a class="a1">业务咨询</a></li>
            <li> <a class="a1">客户服务</a></li>
            <li> <a class="a1">关于我们</a></li>
          </ul>
           <a href="#"><img class="top_tel" src="<?php echo site_url('assets/user/images/tel_top.jpg"')?> /></a> </div>
       </div>
    </div>
    <div id="container_index" class="fix">
  <div class="left">
    <div class="select_box fix">
      <ul>
        <li class="h30">
			<input type="button" value="" class="btn_select" />
        </li>
		<form action="show_order" method="post">
            <li class="h115">
                <textarea name="wen">请输入您的快递单号</textarea>
            </li>
            <li class="btn_li">
              <input name="重置" type="reset" class="btn_sub" value="" />
              <input type="submit" value="" class="btn_sure" />
            </li>
		</form>
      </ul>
    </div>
    <div class="web_select">
      <div class="title">
        <input value="网点范围" type="button"/>
        <!--<P>网点范围</P>-->
      </div>
      <div class="web_selectbox">
        <table cellpadding="0" cellspacing="0">
          <tr>
		  	 <td>安徽</td>
			 <td><span>北京</span></td>
           	 <td><span>重庆</span></td>
			 <td>福建</a></td>
			 <td>甘肃</a></td>
			
          </tr>
          <tr>
		    <td>广东</td>
			<td>广西</td>
			<td>贵州</td>
			<td>海南</td>
			<td>河北</td>
           
          </tr>
          <tr>
		    <td>河南</td>
			<td>黑龙江</td>
		    <td>湖北</td>
			<td>湖南</td>
			<td>吉林</td>
           
                    
          </tr>
          <tr>
            <td><span>江苏</span></td>
			<td>江西</td>
			<td>辽宁</td>
			<td>内蒙古</td>
			<td>宁夏</td>
           
          </tr>
          <tr>
          
             <td>青海</td>
			 <td>山东</td>
			 <td>山西</td>
			 <td>陕西</td>
			 <td><span>上海</span></td>
          </tr>
          <tr>
           
            <td>四川</td>
			<td>天津</td>
			<td>西藏</td>
			<td>新疆</td>
			<td>云南</td>
          </tr>
          <tr>
		   <td><span>浙江</span></td>
           <td>香港</td>
           <td>台湾</td>
			<td>澳门</td>
            <td></td>
          </tr>
        </table>
       </div>
      </div>
      <div class="buiness_box">
      <div class="tit"><img src="<?php echo site_url('assets/user/images/title1.gif')?>" alt="业务介绍" /></div>
      <div class="buiness_bg">
        <div class="city fix">
			<a>市内件</a>
			<a>省际件</a>
			<a>国际件</a>
			<a>时效件</a> 
			<a>增值服务</a>
			<a>特色服务</a> 
			
		</div>
      </div>
    </div>
    <div class="buiness_box">
      <div class="tit"><img src="<?php echo site_url('assets/user/images/title2.gif')?>" alt="业务介绍" /></a> </div>
      <div class="buiness_bg">
        <div class="wtbg">
          <div class="service">
            <ul class="fix">
              <li><img class="telimg" src="<?php echo site_url('assets/user/images/icon_tel.gif')?>" alt="" /></li>
              <li><img src="<?php echo site_url('assets/user/images/icon_01.gif')?>"  alt="" class="yellow_img" />手机客户端下载</li>
              <li><img src="<?php echo site_url('assets/user/images/icon_02.gif')?>" alt="" class="yellow_img" />投诉与建议</li>
              <li><img src="<?php echo site_url('assets/user/images/icon_03.gif')?>" alt="" class="yellow_img" />违禁品</li>
              <li><img src="<?php echo site_url('assets/user/images/icon_04.gif')?>"  alt="" class="yellow_img" />详情单知识</li>
              <li><img src="<?php echo site_url('assets/user/images/icon_05.gif')?>"  alt="" class="yellow_img" />用户寄件流程</li>
              <li><img src="<?php echo site_url('assets/user/images/icon_06.gif')?>" alt="" class="yellow_img" />寄件注意事项</li>
              <li><img src="<?php echo site_url('assets/user/images/icon_07.gif')?>"  alt="" class="yellow_img" />淘宝业务服务标准</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="right">
      <div class="banner">
        <div class="banner_img">
         <ul>
           <li><a><img src="<?php echo site_url('assets/user/images/banner3.jpg')?>" alt="" /></a></li>
         </ul>
        </div>
       </div>
     <div class="news_box fix">
      <div class="flt">
          <div class="newstit fix"><h2>公司新闻<span>NEWS</span></h2><a  class="more"></a> </div>
        <div class="news_lst fix">
          <ul>
			  
           		 <li><a  target="_blank">
								致广大客户书</a>
								<span>2014-2-25 </span>
						
				</li>
           		
           		 <li><a  target="_blank">
								《长三角地区快递业务发展报告
								……
								</a>
								<span>2014-2-25 </span>
						
				</li>
           		
           		 <li><a target="_blank">
								北京局号召首都邮政业向葛明洋
								……
								</a>
								<span>2014-2-14 </span>
						
				</li>
           		
           		 <li><a target="_blank">
								在线下单，微信轻松搞定！</a>
								<span>2014-2-11 </span>
						
				</li>
           		
           		 <li><a  target="_blank">
								申通快递祝全国人民新春快乐，
								……
								</a>
								<span>2014-1-26 </span>
						
				</li>
           		
           		 <li><a  target="_blank">
								申通快递关于2014年春节期
								……
								</a>
								<span>2014-1-22 </span>
						
				</li>
           		
           		 <li><a target="_blank">
								热烈庆祝申通快递有限公司荣获
								……
								</a>
								<span>2014-1-16 </span>
						
				</li>
           		
           		 <li><a target="_blank">
								创新、细化、发展、共赢---
								……
								</a>
								<span>2014-1-15 </span>
						
				</li>
           		
           		 <li><a target="_blank">
								申通快递驾驶员关立平当选上海
								……
								</a>
								<span>2014-1-14 </span>
						
				</li>
           		
           		 <li><a  target="_blank">
								申通快递华东分拨中心扩建项目
								……
								</a>
								<span>2014-1-14 </span>
						
				</li>
           		
		
          </ul>
        </div>
      </div>
      <div class="flt new_right">
        <div class="newstit fix"> <h2>行业资讯<span>INFORMATION</span></h2><a class="more"></a> </div>
         <div class="news_lst fix">
          <ul>
            
           		 <li><a target="_blank">
								国家邮政局关于2014年1月
								……
								</a>
								<span>2014-2-24 </span>
						
				</li>
           		
           		 <li><a  target="_blank">
								国家邮政局公布2014年1月
								……
								</a>
								<span>2014-2-24 </span>
						
				</li>
           		
           		 <li><a target="_blank">
								 北京局号召首都邮政业向葛明
								……
								</a>
								<span>2014-2-14 </span>
						
				</li>
           		
           		 <li><a target="_blank">
								关于印发《无法投递又无法退回
								……
								</a>
								<span>2014-2-11</span>
						
				</li>
           		
           		 <li><a  target="_blank">
								国家邮政局关于2013年快递
								……
								</a>
								<span>2014-2-7</span>
						
				</li>
           		
           		 <li><a target="_blank">
								中共中央政治局委员、国务院副
								……
								</a>
								<span>2014-1-7</span>
						
				</li>
           		
           		 <li><a target="_blank">
								2014年全国邮政管理工作会
								……
								</a>
								<span>2014-1-7</span>
						
				</li>
           		
           		 <li><a target="_blank">
								国家邮政局发出紧急通知，开展
								……
								</a>
								<span>2013-12-23</span>
						
				</li>
           		
           		 <li><a target="_blank">
								马军胜局长夜巡快递企业 “你
								……
								</a>
								<span>2013-11-14 </span>
						
				</li>
           		
           		 <li><a target="_blank">
								100亩地一站式仓储  百草
								……
								</a>
								<span>2013-11-8 </span>
						
				</li>
           		
		
          </ul>
        </div>
      </div>
    </div>
    <div class="sto">
      <div class="title"> 走进我们<span>ABOUT US</span> </div>
      <div class="img_lst fix">
        <ul>
          <li>
            <div class="pics"> <a ><img src="<?php echo site_url('assets/user/images/rczp_banner.jpg')?>" /></a>
              <div class="names"> <a  class="name_a">杂志</a><a href="#" class="more_a"><img src="images/more.png"  width="26" height="5" /></a> </div>
            </div>
          </li>
          <li>
            <div class="pics"> <a ><img src="<?php echo site_url('assets/user/images/cx_img2.jpg')?>" /></a>
              <div class="names"> <a class="name_a">视频</a><span class="btn_1"></span><span class="btn_2"></span><span class="btn_3"></span></a> </div>
            </div>
          </li>
          <li class="nomr">
            <div class="pics"> <a ><img src="<?php echo site_url('assets/user/images/zhaoping.jpg')?>" /></a>
              <div class="names"> <a  class="name_a">人才招聘</a><a class="more_a" href="#"><img src="images/more.png"  width="26" height="5" /></a> </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
</div>
  </div>
</body>
</html>
