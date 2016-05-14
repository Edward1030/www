<!DOCTYPE html>
<html lang="en" xmlns:wb="http://open.weibo.com/wb">
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>楚河在线棋院</title>
    <meta name="description" content="象棋在线教学 中国象棋 棋院" />
    <meta name="keywords" content="在线棋院 在线教学 中国象棋" />
    <meta name="mr_edward@163.com" content="象棋教学">
    <!-- Favicon-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>	
   <link href="css/mystyle.css"        rel="stylesheet"> 
   <link href="css/word.css"           rel="stylesheet">   
   <link href="css/person_center.css"  rel="stylesheet"> 
   <script src="js/user_info_banner.js"></script> 
<!-- 代码部分begin -->
</head>
<body onload="make_person_center_dynamic_part();">
<div style="width:100%; height:94px; border-bottom:1px solid red;">
	<div id = "title" style="float:left; margin-top:20px; border:solid 0px;"> 
	<p  style="margin-left:80px; font-family:KaiTi; font-size:30px; font-weight:bold;">楚河<span style="font-size:21px;">在线棋院</span></p>
	</div>

</div>
<div style="clear:both;"></div>
<div style="border:solid 0px; height:530px; width:100%">
    <div style="border:solid 0px; width:1200px; margin:auto;"> 
    <div id= "xuanxiang" style = "float:left; height:320px; width:160px; margin-top:40px; border-right:solid 0px;">
        <ul class="nav nav-pills nav-stacked">
           <li>                           <a id="xkjf" href="javascript:;"><img src="images/icon/kc.png" style="vertical-align:bottom; height:25px; width:25px;"/><span class="span_sty"> 课程选择</span></a></li>
           <li  style="margin-top:35px; "><a id="yxkc" href="javascript:;"><img src="images/icon/fy.png" style="vertical-align:bottom; height:25px; width:25px;"><span class="span_sty"> 已选缴费</span></img></a></li>
           <li  style="margin-top:35px; "><a id="xxxg" href="javascript:;"><img src="images/icon/zx.png" style="vertical-align:bottom; height:25px; width:25px;"><span class="span_sty"> 个人信息</span></img></a></li>
           <li  style="margin-top:35px; "><a id="qjgl" href="javascript:;"><img src="images/icon/qj.png" style="vertical-align:bottom; height:25px; width:25px;"><span class="span_sty"> 请假管理</span></img></a></li>
        </ul>
    </div>
    <div class="con_page" style="float:left;margin-top:40px; margin-left:40px;height: 520px; width:1000px; border-left:solid 1px; padding-left:50px;">
        <div id="xkjf_li" style="position:absolute;margin-left:10px;">
            <div style = "margin-top:10px;">
                <p style="float:left;">课程选择：</p>
                <div style="float:left;">
                <label class="checkbox-inline">
                  <input type="radio" name="course_opt" id="optionsRadios1" 
                     value="基础课程" checked> 基础课程
                </label>
                <label class="checkbox-inline">
                  <input type="radio" name="course_opt" id="optionsRadios2" 
                     value="入门课程"> 入门课程
                </label>
                <label class="checkbox-inline">
                  <input type="radio" name="course_opt" id="optionsRadios3" 
                     value="提高课程"> 提高课程
                </label>
                <label class="checkbox-inline">
                  <input type="radio" name="course_opt" id="optionsRadios4" 
                     value="进阶课程"> 进阶课程
               </label>
               <label class="checkbox-inline">
                  <input type="radio" name="course_opt" id="optionsRadios5" 
                     value="职业化课程"> 职业化课程
               </label>
               </div>
            </div>
            <div style="clear:both"></div>
            <div style="border:0px solid; margin-top:0px;">
                <div style="float:left; border:solid 0px;" >
                    <p style="">时间选择：</p>
                </div>
                <div style="float:left; border:solid 0px; margin-left:20px;">
                    <div class="radio" style="margin-top:5px;">
                       <label >
                          <input class="" type="radio" name="time_opt" id="optionsRadios6" 
                             value="周一、周三、周五。19点~20点（一课时）" checked>每周一、周三、周五&nbsp;19点~20点（一课时）
                       </label>
                    </div>
                    <div class="radio" style="margin-top:5px;">
                       <label>
                          <input type="radio" name="time_opt" id="optionsRadios7" 
                             value="周一、周三、周五。20点~21点（一课时）" > 每周一、周三、周五&nbsp;20点~21点（一课时）
                       </label>
                    </div>
                    <div class="radio"  style="margin-top:10px;">
                        <label>
                            <input type="radio" name="time_opt" id="optionsRadios8" 
                             value="周二、周四。19点~20点（一课时）">
                             每周二、周四&nbsp;19点~20点（一课时）
                        </label>
                    </div>
                    <div class="radio"  style="margin-top:10px;">
                        <label>
                            <input type="radio" name="time_opt" id="optionsRadios9" 
                             value="周二、周四。20点~21点（一课时）">
                             每周二、周四&nbsp;20点~21点（一课时）
                        </label>
                    </div>
                    <div class="radio"  style="margin-top:10px;">
                       <label>
                          <input type="radio" name="time_opt" id="optionsRadios10" 
                             value="周六、周日。09点~11点（两课时）">
                            每周六、周日&nbsp;09点~11点（两课时）
                       </label>
                    </div>
                    <div class="radio"  style="margin-top:10px;">
                       <label>
                          <input type="radio" name="time_opt" id="optionsRadios11" 
                             value="周六、周日。15点~17点（两课时）">
                            每周六、周日&nbsp;15点~17点（两课时）
                       </label>
                    </div>
                    <div class="radio"  style="margin-top:10px;">
                       <label>
                          <input type="radio" name="time_opt" id="optionsRadios12" 
                             value="周六、周日。18点~20点（两课时）">
                            每周六、周日&nbsp;18点~20点（两课时）
                       </label>
                    </div>
                    <div class="radio"  style="margin-top:10px;">
                       <label>
                          <input type="radio" name="time_opt" id="optionsRadios13" 
                             value="其它">
                            其它（需要与客服沟通，帮助安排上课时间。）
                       </label>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            <div style="border:0px solid; ">
            <div style="border:0px solid; margin-top:0px;">
                <p style="">总需课时：&nbsp;<span style="font-weight:normal;" id="ks">10节课</span></p>
            </div>
            <div style="clear:both"></div>
            <div style="border:0px solid; margin-top:0px;">
                <p style="">课时计费: &nbsp;<span style="font-weight:normal;" id="sf">60元/课</span></p>
            </div>
            <div style="clear:both"></div>
            <div style="border:0px solid; margin-top:0px;">
                <p style="">总需费用: &nbsp;<span style="font-weight:normal;" id="ks_sf">600元</span></p>
            </div>
            <div style="clear:both"></div>
            <div style="border:0px solid; margin-top:0px;" id="jf">
                <p style="float:left;">单次缴费：&nbsp;<span style="font-weight:normal;" id="dcjf" >600元</span></p>
            </div>
            <div style="clear:both"></div>
            <div style="clear:both"></div>
            <div style="border:solid 0px;">
            <p style="font-weight:bold;float:left; margin-left:150px;">&nbsp;&nbsp;&nbsp;</p><button onclick="fkm_ff()"  class='btn btn-primary' style=" padding:2px 5px 2px 5px;"/><span class="span_sty">添&nbsp;加&nbsp;选&nbsp;课</span></button><span style="color:red; margin-left:20px;font: normal normal normal 18px/23px 'Century Gothic', sans-serif;" id="fkm_ts"></span>
            </div>
            <div style="clear:both"></div>
          </div>
        </div>
        <div class="con_page" id="yxkc_li" style="position:absolute; display:none">
            <div style="margin-top:10px;">
                <p style=""><span style="color:red;">*</span>续费：请点击课程对应的续费按钮，依据弹出提示续费。</p>
                <p style=""><span style="color:red;">*</span>退款：请联系客服人员，我们会在一个工作日内核对可退金额，并以您指定的方式把资金退换。</p>
            </div>
            <div style="position:absolute;margin-top:32px; height:300px; width:900px;border:0px solid;" class="xkjl_table">
                <table class="table" style="padding-left:50px;>" border=1px; >
                    <thead>
                         <tr style="background-color:rgb(82,170,231)">
                            <th>课程</th>
                            <th>总需课时</th>
                            <th>已上课时</th>
                            <th>总需费用</th>
                            <th>已付金额</th>
                            <th>可退金额</th>
                            <th>上课时间</th>
                            <th>续费</th>
                         </tr>
                    </thead>
                    <tbody id="course_recorder_tbody">
                   </tbody>
                </table>
            </div>
            <div style="clear:both"></div>
            <div id="tsk" style="display:none;margin-top:83px; background-color:rgb(247,251, 247);opacity:0.99999;filter:alpha(opacity=99);margin-left:238px;width:662px; height:200px; border:solid 1px;">
              <div id="tsk_xx" style="height:170px; border:0px solid;">

              </div>
              <div style="clear:both"></div>
              <div style="height:30px; border:0px solid;">
                  <p onclick="tsk_fh()" style="margin-left:580px; margin-top:0px; color:black;font:bold 14px/14px 'Century Gothic'; ">返&nbsp;&nbsp;&nbsp;回</p>
              </div>
            </div>
        </div>
        <div class="con_page" id="xxxg_li" style="position:absolute; display:none;">
            <div style="margin-left:120px; margin-top:20px; border:0px solid;">
            <form   name="infoform" name="loginform" onsubmit="return reg_param_check()" action="modify_user_info.php" method="post">
                <ol>
                    <li style=""><span>登陆名称：</span><input class="ipt"  onblur="check_nick_name()"  id="nick_name"  name="nick_name"  type="text"      size="40"  readonly="readonly"  style="border:0px;"/></li>
                    <li style="padding-top:20px;"><span>密&nbsp;&nbsp;码：</span><input class="ipt"  onblur="check_same_pwd_1()" id="pwd"  name = "pwd"  style="margin-top:10px;"        type="password"  size="40"     /><span id="first_pwd" style="color:green;">&nbsp;&nbsp;*</span></li>
                    <li style="padding-top:20px;"><span>再次输入：</span><input class="ipt"                id="ch_pwd"             name = "ch_pwd"  onblur="check_same_pwd_2()" style="margin-top:10px;"        type="password"  size="40"     /><span id="second_pwd" style="color:green;">&nbsp;&nbsp;*</span></li>
                    <li style="padding-top:20px;"><span>真实姓名：</span><input class="ipt"                id="real_name"          onblur="check_real_name()" name="real_name"  style="margin-top:10px;"  type="text"      size="40"     /><span id="check_real_name" style="color:green;">&nbsp;&nbsp;*</span></li>
                    <li style="padding-top:20px;"><span>手&nbsp;&nbsp;机：</span><input class="ipt"   onblur="check_tel()" id="tel" name = "tel" style="margin-top:10px;"        type="text"      size="40"     /><span id="check_tel" style="color:green;">&nbsp;&nbsp;*</span></li>
                    <li style="padding-top:20px;"><span>QQ&nbsp;&nbsp;&nbsp;：</span><input class="ipt"   onblur="check_qq()" id="qq"  name = "qq"  style="margin-top:10px;"        type="text"      size="40"     /><span id="check_qq" style="color:green;">&nbsp;&nbsp;*</span></li>
                    <li style="padding-top:20px;"><span>验证码&nbsp;：</span><input class="ipt"   onblur="check_code_1()" id="check_code"  name = "check_code"  style="margin-top:10px; width:100px;"        type="text"      size="40"     /><span id="check_code_txt" onclick="get_code()" style="color:green; margin-left:30px;">&nbsp;&nbsp;点击获取</span></li>
                    <li>      <input class="btn btn-primary"    style="margin-top:10px; margin-left:200px;"   type="submit"   value=" 修改" /></li>
                 </ol>
            </form>
            </div>
        </div>
        <div id="qjgl_li" style="position:absolute; display:none">
            <p style="margin-top:100px;margin-left:100px; color:red;"> 该功能暂未上线，请假事宜请与客服联系。</p>
        </div>
    </div>
    </div>
</div>
<script language="javascript">
$=jQuery;
$("#xkjf").click(function(){
    // css change
    $("#xkjf").css({"background-color":"rgb(82,170,231)"});
    $("#yxkc").css({"background-color":"#ffffff"});
    $("#xxxg").css({"background-color":"#ffffff"});
    $("#qjgl").css({"background-color":"#ffffff"});
    // content change
    $("#xkjf_li").css({"display":"inline"});
    $("#yxkc_li").css({"display":"none"});
    $("#xxxg_li").css({"display":"none"});
    $("#qjgl_li").css({"display":"none"});
});

$("#yxkc").click(function(){
    // css change
    $("#xkjf").css({"background-color":"#ffffff"});
    $("#yxkc").css({"background-color":"rgb(82,170,231)"});
    $("#xxxg").css({"background-color":"#ffffff"});
    $("#qjgl").css({"background-color":"#ffffff"});
    // content change
    $("#xkjf_li").css({"display":"none"});
    $("#yxkc_li").css({"display":"inline"});
    $("#xxxg_li").css({"display":"none"});
    $("#qjgl_li").css({"display":"none"});
    // get content through ajax
    $.post("get_course_info.php", {}, function(result){
          var ret = result.replace(/\s/g,'');
          arr     = ret.split("##");
          var html_str = ""
          for(var i = 0; i < arr.length; ++i){
            var items = arr[i].split("#");
            if (items.length != 7){
              continue;
            }
            var course_name = items[0];
            var class_num   = items[1];
            var has_attend  = items[2];
            var total_fee   = items[3];
            var has_pay     = items[4];
            var refund      = items[5];
            var class_time  = items[6];
            if(class_num == "-1"){
              html_str += "<tr>";
              html_str += "<td>"+ course_name + "</td>";
              html_str += "<td>"+ "空"  + "</td>";
              html_str += "<td>"+ has_attend + "节</td>";
              html_str += "<td>"+ "空" + "</td>";
              html_str += "<td>"+ has_pay + "元</td>";
              html_str += "<td>"+ refund + "元</td>";
              html_str += "<td onmouseover='this.style.cssText=\"color:blue;\"' onmouseout='this.style.cssText=\"color:black;\"' onclick='ck(\""+ course_name +"\" , \"" + class_time + "\")'>"+ "<span style='text-decoration:underline;'>查看</span>" + "</td>";
              html_str += "<td onmouseover='this.style.cssText=\"color:blue;\"' onmouseout='this.style.cssText=\"color:black;\"'  onclick='xf(\""+ course_name + "\")'><span style='text-decoration:underline;'>续费</span></td></tr>";
            }else{
              html_str += "<tr>";
              html_str += "<td>"+ course_name + "</td>";
              html_str += "<td>"+ class_num + "节</td>";
              html_str += "<td>"+ has_attend + "节</td>";
              html_str += "<td>"+ total_fee + "元</td>";
              html_str += "<td>"+ has_pay + "元</td>";
              html_str += "<td>"+ refund + "元</td>";
              html_str += "<td onmouseover='this.style.cssText=\"color:blue;\"' onmouseout='this.style.cssText=\"color:black;\"' onclick='ck(\""+ course_name +"\" , \"" + class_time + "\")'>"+ "<span style='text-decoration:underline;'>查看</span>" + "</td>";
              html_str += "<td onmouseover='this.style.cssText=\"color:blue;\"' onmouseout='this.style.cssText=\"color:black;\"'  onclick='xf(\""+ course_name + "\")'><span style='text-decoration:underline;'>续费</span></td></tr>";
            }

            // 插入html
          }
          $("#course_recorder_tbody").html(html_str);
        });
});

$("#xxxg").click(function(){
    // css change
    $("#xkjf").css({"background-color":"#ffffff"});
    $("#yxkc").css({"background-color":"#ffffff"});
    $("#xxxg").css({"background-color":"rgb(82,170,231)"});
    $("#qjgl").css({"background-color":"#ffffff"});
    // content change
    $("#xkjf_li").css({"display":"none"});
    $("#yxkc_li").css({"display":"none"});
    $("#xxxg_li").css({"display":"inline"});
    $("#qjgl_li").css({"display":"none"});
    // get content through ajax
    $.post("get_user_info.php", {}, function(result){
          var ret = result.replace(/\s/g,'');
          var arr     = ret.split("#");
          if(arr.length != 6){
            return null;
          }
          var user_id  = arr[0];
          var name     = arr[1];
          var pwd      = arr[2];
          var tel      = arr[3];
          var qq       = arr[4];
          $("#nick_name").val(user_id);
          $('#pwd').val(pwd);
          $('#ch_pwd').val(pwd);
          $('#real_name').val(name);
          $('#tel').val(tel);
          $('#qq').val(qq);
        });
});

$("#qjgl").click(function(){
    // css change
    $("#xkjf").css({"background-color":"#ffffff"});
    $("#yxkc").css({"background-color":"#ffffff"});
    $("#xxxg").css({"background-color":"#ffffff"});
    $("#qjgl").css({"background-color":"rgb(82,170,231)"});
    // content change
    $("#xkjf_li").css({"display":"none"});
    $("#yxkc_li").css({"display":"none"});
    $("#xxxg_li").css({"display":"none"});
    $("#qjgl_li").css({"display":"inline"});
});
</script>
<!-- ============================================================== -->
<script type="text/javascript">
$ = jQuery;
$("#optionsRadios1").click(function(){
  $("#ks").text("10节课");
  $("#sf").text("60元/课");
  $("#ks_sf").text("600元");
  $("#dcjf").text("600元");
  $("#tb").attr('href', 'https://item.taobao.com/item.htm?id=525913860534');
  $("#tb").attr('target', '_blank');
});
$("#optionsRadios2").click(function(){
    $("#ks").text("40节课");
    $("#sf").text("100元/课");
    $("#ks_sf").text("4000元");
    $("#dcjf").text("1000元");
    $("#tb").attr('href', 'https://item.taobao.com/item.htm?id=526175304692');
    $("#tb").attr('target', '_blank');
});
$("#optionsRadios3").click(function(){
  $("#ks").text("60节课");
  $("#sf").text("100元/课");
  $("#ks_sf").text("6000元");
  $("#dcjf").text("1500元");
  $("#tb").attr('href', 'https://item.taobao.com/item.htm?id=526056203642');
  $("#tb").attr('target', '_blank');
});
$("#optionsRadios4").click(function(){
  $("#ks").text("不固定");
  $("#sf").text("150元/课");
  $("#ks_sf").text("不固定");
  $("#dcjf").text("1500元");
  $("#tb").attr('href', 'https://item.taobao.com/item.htm?id=526056203642');
  $("#tb").attr('target', '_blank');
});
$("#optionsRadios5").click(function(){
  $("#ks").text("不固定");
  $("#sf").text("150元/课");
  $("#ks_sf").text("不固定");
  $("#dcjf").text("1500元");
  $("#tb").attr('href', 'https://item.taobao.com/item.htm?id=526056203642');
  $("#tb").attr('target', '_blank');
});
</script>
<!-- ============================================================== -->
<script type="text/javascript">
    $=jQuery;
    function check_nick_name(){
        var nick_name = $("input#nick_name").val();
        $.post("check_nick_name.php", {nick_name:nick_name}, function(result){
            // 检查昵称是否有重复
            ret = result.replace(/\s/g,'');
            if(ret == "False" && nick_name != ""){
                $("#check_nick_name").html('<span id="check_nick_name" style="color:green;">&nbsp;&nbsp;*</span>');
            }else if(ret == "True" && nick_name != ""){
                $("#check_nick_name").html('<span id="check_nick_name" style="color:red;">&nbsp;&nbsp;登陆名已存在</span>');
            }
            // 检查长度
            if(nick_name.length >= 20){
                $("#check_nick_name").html('<span id="check_nick_name" style="color:red;">&nbsp;&nbsp;长度需要小于6</span>');
            }
            // 检查是否有空格
            if (nick_name.indexOf(" ") != -1) {
                $("#check_nick_name").html('<span id="check_nick_name" style="color:red;">&nbsp;&nbsp;不能含有空格</span>');
             };
        });
    };
    // 密码监测出发
    function check_same_pwd_1(){
        var pwd       = $("input#pwd").val();
        var ch_pwd    = $("input#ch_pwd").val();
        // 密码长度检查
        if(pwd.length == 0){
            $("#second_pwd").html('<span id="second_pwd" style="color:red;">&nbsp;&nbsp;密码不能为空</span>');
            return false;
        }
        //  密码不为空
        if(pwd.length >= 16){
            $("#first_pwd").html('<span id="first_pwd" style="color:red;">&nbsp;&nbsp;密码小于16位</span>');
            return false;
        }
        // 密码一致性检查
        if(ch_pwd.length != 0){
            if(ch_pwd != pwd){
                $("#second_pwd").html('<span id="second_pwd" style="color:red;">&nbsp;&nbsp;两次密码不一致</span>');
                return false;
            }else{
                $("#second_pwd").html('<span id="second_pwd" style="color:green;">&nbsp;&nbsp;*</span>');
                $("#first_pwd").html('<span id="first_pwd" style="color:green;">&nbsp;&nbsp;*</span>');
            }
        }
        return true;
    };
    //
    function check_same_pwd_2(){
        var pwd       = $("input#pwd").val();
        var ch_pwd    = $("input#ch_pwd").val();
        // 密码长度检查
        if(ch_pwd.length == 0){
            $("#second_pwd").html('<span id="second_pwd" style="color:red;">&nbsp;&nbsp;密码不能为空</span>');
            return false;
        }
        //  密码不为空
        if(ch_pwd.length >= 16){
            $("#first_pwd").html('<span id="first_pwd" style="color:red;">&nbsp;&nbsp;密码小于16位</span>');
            return false;
        }
        // 密码一致性检查
        if(pwd.length != 0){
            if(ch_pwd != pwd){
                $("#second_pwd").html('<span id="second_pwd" style="color:red;">&nbsp;&nbsp;两次密码不一致</span>');
                return false;
            }else{
                $("#second_pwd").html('<span id="second_pwd" style="color:green;">&nbsp;&nbsp;*</span>');
                $("#first_pwd").html('<span id="first_pwd" style="color:green;">&nbsp;&nbsp;*</span>');
            }
        }
        return true;
    };
    // 检查真是姓名
    function check_real_name(){
        var real_name       = $("input#real_name").val();
        // 检查是否数据，长度是否合理
        if(isNaN(real_name) == true && real_name.length > 0 && real_name.length < 5 && real_name.indexOf(" ") == -1){
            $("#check_real_name").html('<span id="check_real_name" style="color:green;">&nbsp;&nbsp;*</span>');
        }else{
            $("#check_real_name").html('<span id="check_real_name" style="color:red;">&nbsp;&nbsp;请正确输入姓名</span>');
            return false;
        }
        return true;
    }
    // 检查手机
    function check_tel(){
        var tel       = $("input#tel").val();
        // 检查是否数据，长度是否合理
        if(isNaN(tel) == false && tel.length > 0 && tel.length < 13){
            $("#check_tel").html('<span id="check_tel" style="color:green;">&nbsp;&nbsp;*</span>');
        }else{
            $("#check_tel").html('<span id="check_tel" style="color:red;">&nbsp;&nbsp;请正确输入手机号</span>');
            return false;
        }
        return true;
    }

    //
    function check_qq(){
        var qq       = $("input#qq").val();
        // 检查是否数据，长度是否合理
        if(isNaN(qq) == false && qq.length > 0 && qq.length < 15){
            $("#check_qq").html('<span id="check_qq" style="color:green;">&nbsp;&nbsp;*</span>');
        }else{
            $("#check_qq").html('<span id="check_qq" style="color:red;">&nbsp;&nbsp;请输入正确QQ号码</span>');
            return false;
        }
        return true;
    }
    // 验证码
    var code;
    // 生成验证码
    function get_code(){
      code = "";
      var fake_code = "";
      var code_length = 5;//验证码的长度  
      var checkCode = document.getElementById("check_code");
      var select_char = new Array(1, 2, 3, 4, 5, 6, 7, 8, 9,'A','B','C','D','E','F','G','H','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z');
  
      for (var i = 0; i < code_length; i++) {
        var charIndex = Math.floor(Math.random() * 32);
        fake_code += select_char[charIndex] + " ";
        code      += select_char[charIndex];
      }
      //
      $("#check_code_txt").text(fake_code);
    }
    // 校验验证码
    function check_code_1(){
      var write_code = $("#check_code").val();
      if(write_code.toLowerCase() == code.toLowerCase()){
        $("#check_code_txt").css({"color":"green"});
        return true;
      }else{
        $("#check_code_txt").css({"color":"red"});
        return false;
      }
    }
    // submit出发onclick事件   
    function reg_param_check(){
        var nick_name = $("input#nick_name").val();
        // 检查长度
        if(nick_name.length >= 20){
            $("#check_nick_name").html('<span id="check_nick_name" style="color:red;">&nbsp;&nbsp;长度需要小于6</span>');
            return false;
        }
        // 检查是否有空格
        if (nick_name.indexOf(" ") != -1) {
            $("#check_nick_name").html('<span id="check_nick_name" style="color:red;">&nbsp;&nbsp;不能含有空格</span>');
            return false;
        }
        var ret_1 = check_same_pwd_1();
        var ret_2 = check_same_pwd_2();
        var ret_3 = check_real_name();
        var ret_4 = check_tel();
        var ret_5 = check_qq();
        var ret_6 = check_code_1();
                            
        return (ret_1 && ret_2 && ret_3 && ret_4 && ret_5 && ret_6);
    };
    // 付款吗付费
    function fkm_ff(){
        var course_opt = $('input[name="course_opt"]').filter(':checked').val();
        var time_opt   = $('input[name="time_opt"]').filter(':checked').val();
        // var fkm        = $("input#fkm").val();
        $.post("take_course.php", {course_opt:course_opt, time_opt:time_opt}, function(result){
          ret = result.replace(/\s/g,'');
          if(ret == "0"){
            //$("#fkm_ts").text("该课程已选，请在“已选缴费”中使用课时卡续费！");
            document.getElementById('yxkc').click()
          }else if(ret == "4"){
            //$("#fkm_ts").text("核对成功，请在“已选缴费”中查看！");
            document.getElementById('yxkc').click()
          }else{
            //$("#fkm_ts").text("系统错误，请放心，并未消费课时卡！");
          }
        });
    }
    // 付款吗续费
    function fkm_xf(course_name){
        var course_name = course_name;
        var fkm        = $("input#fkm_xf").val();
        if(fkm.length == 6){
          $.post("renew.php", {course_name:course_name, fkm:fkm}, function(result){
            ret = result.replace(/\s/g,'');
            if(ret == "0"){
              $("#xf_ts").text("已超限额，续费失败！");
            }else if(ret == "1"){
              $("#xf_ts").text("该课时卡无效！");
            }else if(ret == "2"){
              $("#xf_ts").text("该课时卡已使用！");
            }else if(ret == "3"){
              $("#xf_ts").text("该课程不能使用该“课时卡”！");
            }else if(ret = "4"){
              $("#xf_ts").text("续费成功，请在选课记录中查看！");
            }else{
              $("#xf_ts").text("系统错误，请放心，并未消费课时卡！");
            }
          });
        }else{
          $("#xf_ts").text("卡号有误,请更正填写！");
        }
    }
    // 查看
    function ck(course_name, class_time){
      // 显示提示框
      $("#tsk").fadeIn(100);
      $("#tsk_xx").html("<p style='padding-top:50px; padding-left:120px;'>课程名称："+ course_name+"</p><p style='padding-top:20px; padding-left:120px;'>课程时间："+ class_time+"</p>")
    }
    // 续费
    function xf(course_name){
      $("#tsk").fadeIn(100);
      var html_str = "<p style='padding-top:20px; padding-left:40px;'>续费课时：&nbsp;&nbsp;&nbsp;"+ course_name+"</p>";
      if(course_name == "基础课程"){
          html_str    += "<p style='padding-top:20px; padding-left:40px;'>购课时卡：&nbsp;&nbsp;&nbsp;<a href='https://item.taobao.com/item.htm?id=525913860534' target='_blank'>淘宝店链接 （需购买600元课时卡）</a></p>";
      }else if(course_name == "入门课程"){
          html_str    += "<p style='padding-top:20px; padding-left:40px;'>购课时卡：&nbsp;&nbsp;&nbsp;<a href='https://item.taobao.com/item.htm?id=526175304692' target='_blank'>淘宝店链接 （需购买1000元课时卡）</a></p>";
      }else{
          html_str    += "<p style='padding-top:20px; padding-left:40px;'>购课时卡：&nbsp;&nbsp;&nbsp;<a href='https://item.taobao.com/item.htm?id=526056203642' target='_blank' >淘宝店链接（需购买1500元课时卡）</a></p>";
      }
      
      html_str    += "<p style='float:left;padding-top:20px; padding-left:40px;'>课时卡号：&nbsp;&nbsp;&nbsp;</p><input  style='margin-top:20px;' id='fkm_xf' size=20;   type='Text' /><input  style='margin-top:20px;'  onclick='fkm_xf(\""+ course_name +"\")' type='button' value='确认'/><span style='color:red; margin-left:20px;font: normal normal normal 18px/23px \"Century Gothic\", sans-serif;' id='xf_ts'></span>";
      $("#tsk_xx").html(html_str);
    }
    // 续费
    function tsk_fh(course_name){
        $("#tsk").fadeOut(100);
        $("#yxkc").click();
    }
</script>
</body>
</html> 