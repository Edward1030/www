<!DOCTYPE html>
<html lang="en" xmlns:wb="http://open.weibo.com/wb">
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>楚河在线棋院</title>
    <meta name="description" content="象棋在线教学，中国象棋" />
    <meta name="mr_edward@163.com" content="象棋教学">
    <!-- Favicon--> 
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script> 
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">	
    <link href="css/mystyle.css"          rel="stylesheet">  
    <link href="css/admin.css"          rel="stylesheet"> 
    <link href="css/person_center.css"    rel="stylesheet"> 
<!-- 代码部分begin -->
</head>
<body>
<div style="width:100%; height:94px; border-bottom:1px solid red;">
	<div style="float:left; margin-top:0px; border:solid 0px;"> 
	<p  style=" margin-top:34px; font-family:KaiTi; font-size:49px; font-weight:bold;">楚河<span style="font-size:30px;">在线棋院</span></p>
	</div>
    <?php 
     	session_start();
    	if(isset($_SESSION["user_id"])){
          $name = $_SESSION["user_id"];
              if(strlen($_SESSION["user_id"]) >= 6){
                  $name=substr($name, 0, 6)."...";
          } 
        	echo '<div style="margin-top:30px; margin-right:30px; float:right; border:0px solid;"><p style="font: normal normal normal 18px/23px "Century Gothic", sans-serif;padding-top: 35px; padding-bottom: 35px;">您好,&nbsp'.$name.' | <a href="judge_stu_or_teacher.php"><span style="color:red">点击上课</span></a>|<a href="index.html"><span style="color:black;">返回主页</span></a></p></div>';
    	}
    ?>
</div>
<div style="clear:both;"></div>
<div style="border:solid 0px; height:530px; width:100%">
    <div style="border:solid 0px; width:1300px; margin:auto;"> 
    <div id= "xuanxiang" style = "float:left; height:320px; width:150px; margin-top:40px; border-right:solid 0px;">
        <ul class="nav nav-pills nav-stacked">
           <li >                          <a  id="pqls" href="javascript:;"><p>已聘请教师</p></a></li>
           <li  style="margin-top:35px; "><a id="zcxs"  href="javascript:;"><p>已注册学生</p></a></li>
           <li  style="margin-top:35px; "><a id="jfpk"  href="javascript:;"><p>缴费学生管理</p></a></li>
        </ul>
    </div>
    <div style="float:left;margin-top:40px; margin-left:20px;height: 520px; width:1040px; border-left:solid 1px; padding-left:50px;">
        <div id="pqls_li" style="position:absolute;margin-left:10px;">

        </div>
        <div id="zcxs_li" style="position:absolute; display:none">
        </div>
        <div id="jfpk_li" style="position:absolute; display:none;">
        </div>
    </div>
    </div>
</div>
<script language="javascript">
$=jQuery;
$("#pqls").click(function(){
    // css change
    $("#pqls").css({"background-color":"rgb(82,170,231)"});
    $("#zcxs").css({"background-color":"#ffffff"});
    $("#jfpk").css({"background-color":"#ffffff"});
    $("#qjgl").css({"background-color":"#ffffff"});
    // content change
    $("#pqls_li").css({"display":"inline"});
    $("#zcxs_li").css({"display":"none"});
    $("#jfpk_li").css({"display":"none"});
    $("#qjgl_li").css({"display":"none"});
    make_pqls_html();
});

$("#zcxs").click(function(){
    // css change
    $("#pqls").css({"background-color":"#ffffff"});
    $("#zcxs").css({"background-color":"rgb(82,170,231)"});
    $("#jfpk").css({"background-color":"#ffffff"});
    $("#qjgl").css({"background-color":"#ffffff"});
    // content change
    $("#pqls_li").css({"display":"none"});
    $("#zcxs_li").css({"display":"inline"});
    $("#jfpk_li").css({"display":"none"});
    $("#qjgl_li").css({"display":"none"});
    make_zcxs_html();
});

$("#jfpk").click(function(){
    // css change
    $("#pqls").css({"background-color":"#ffffff"});
    $("#zcxs").css({"background-color":"#ffffff"});
    $("#jfpk").css({"background-color":"rgb(82,170,231)"});
    $("#qjgl").css({"background-color":"#ffffff"});
    // content change
    $("#pqls_li").css({"display":"none"});
    $("#zcxs_li").css({"display":"none"});
    $("#jfpk_li").css({"display":"inline"});
    $("#qjgl_li").css({"display":"none"});
    // get content through ajax
    make_jfpk_html();
});

</script>
</body>
</html> 