﻿<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>楚河棋院—在线课堂</title>
	<meta name="description" content="" />
	<meta name="author" content="" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- CSS -->
  	<link rel="stylesheet" href="css/classroom.css" />
  	<!-- JS -->
	<link rel="stylesheet" href="css/style_bar.css" />
	<link rel="stylesheet" href="css/mystyle.css" />
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/chess.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	
	<!-- JS
	================================================== -->
<script language=JavaScript>
function InputCheck(reg_form)
{
  if (reg_form.username.value == "")
  {
    alert("用户账号不可为空！");
    reg_form.username.focus();
    return (false);
  }
  if (reg_form.passwd.value == "")
  {
    alert("用户密码不能为空！");
    reg_form.passwd.focus();
    return (false);
  }
}
</script>

</head>
<body style="background-image: url(images/chess_desk_bg.jpg);">
	<div style="float:left;margin-top:30px; margin-left:30px;">
	<div style="margin-bottom:100px;">
		<a style="font: normal normal normal 18px/23px 'Century Gothic', sans-serif;color:#ffffff; " href="index.html">退出课堂</a>
	</div>
	<div style=" float:left;">
		<input onclick="set_opening()" type="button" value="摆&nbsp;&nbsp;&nbsp;&nbsp;棋" style="font: normal normal normal 18px/23px 'Century Gothic', sans-serif;">
	</div>
	<div style="float:left; margin-left:50px;">
		<input onclick="pack_chess()" type="button" value="装&nbsp;&nbsp;&nbsp;&nbsp;盒" style="font: normal normal normal 18px/23px 'Century Gothic', sans-serif;">
	</div>
	<div id="class_time" style="margin-top:150px;">
			<p id="tea_name" style="font: normal normal normal 18px/23px 'Century Gothic', sans-serif; color:#ffffff;">老&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;师: <span style="color:red">缺席</span></p>
			<p id="stu_name"   style="padding-top:20px;font: normal normal normal 18px/23px 'Century Gothic', sans-serif;color:#ffffff;">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生: <span style="color:red">缺席</span></p>
			<p id="start_time" style="padding-top:20px;font: normal normal normal 18px/23px 'Century Gothic', sans-serif; color:#ffffff;">开始时间:</p>
			<p id="end_time"   style="padding-top:20px;font: normal normal normal 18px/23px 'Century Gothic', sans-serif;color:#ffffff;">已上时长:</p>
	</div>
	</div>
	<!-- <div style="clear:both;"></div> -->
	<div class="desk" style="float:left;margin-top:30px; margin-left:150px;">
	<div style="margin-bottom:5px; color:#ffffff;">
		<font style="padding-left:60px;">一</font>
		<font style="padding-left:35px;">二</font>
		<font style="padding-left:35px;">三</font>
		<font style="padding-left:35px;">四</font>
		<font style="padding-left:33px;">五</font>
		<font style="padding-left:33px;">六</font>
		<font style="padding-left:33px;">七</font>
		<font style="padding-left:33px;">八</font>
		<font style="padding-left:33px;">九</font>
	</div>
<!-- 	<div style="display:none;text-align:center;z-index:9999; border:0px solid; height:50px; width:120px; border-color:white; position:absolute; margin-top:255px; margin-left:235px;">
		<p style="normal normal normal 18px/23px 'Century Gothic', sans-serif;color:red;">对方</p>
		<p style="normal normal normal 18px/23px 'Century Gothic', sans-serif;color:red;">正在走棋</p>
	</div> -->
	<div id = "chessboard" class="chessboard">
		<table style="position:absolute; left:550px;top:15px;">
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>		
		</table>
		<table style="position:absolute; left:550px; top:310px;">
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>		
		</table>	
	</div>
	<div style="clear:both"></div>
		<div style="margin-bottom:5px; color:#ffffff;">
		<font style="padding-left:60px;">九</font>
		<font style="padding-left:35px;">八</font>
		<font style="padding-left:35px;">七</font>
		<font style="padding-left:35px;">六</font>
		<font style="padding-left:32px;">五</font>
		<font style="padding-left:33px;">四</font>
		<font style="padding-left:33px;">三</font>
		<font style="padding-left:33px;">二</font>
		<font style="padding-left:33px;">一</font>

	</div>
</div>

</body>
</html>