  $=jQuery;

make_1v1_con();
//make_qp_con();
count_down_timer = setTimeout("count_down('2016/09/25 17:25:00')", 1000);

function make_1v1_con(){
        $.post("/controller/get_course_info.php", {}, function(result){
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
            if (parseInt(has_pay) >0 && parseInt(refund) >= 0){
            if(class_num == "-1"){
              html_str += "<tr>";
              html_str += "<td>"+ course_name + "</td>";
              html_str += "<td>"+ "空"  + "</td>";
              html_str += "<td>"+ has_attend + "节</td>";
              html_str += "<td>"+ "空" + "</td>";
              html_str += "<td>"+ has_pay + "元</td>";
              html_str += "<td>"+ refund + "元</td>";
              html_str += "<td style=\"text-align:center\" onclick='ck(\""+ course_name +"\" , \"" + class_time + "\")'>"+ "<span>查看</span>" + "</td>";
              html_str += "<td ><a style='color:black' href='/controller/judge_stu_or_teacher.php'><span class='span_sty_3' style=\"color:red;\">点击上课 </span></a></td></tr>";
            }else{
              html_str += "<tr>";
              html_str += "<td>"+ course_name + "</td>";
              html_str += "<td>"+ class_num + "节</td>";
              html_str += "<td>"+ has_attend + "节</td>";
              html_str += "<td>"+ total_fee + "元</td>";
              html_str += "<td>"+ has_pay + "元</td>";
              html_str += "<td>"+ refund + "元</td>";
              html_str += "<td style=\"text-align:center\" onclick='ck(\""+ course_name +"\" , \"" + class_time + "\")'>"+ "<span>查看</span>" + "</td>";
              html_str += "<td ><a style='color:black' href='/controller/judge_stu_or_teacher.php'><span class='span_sty_3' style=\"color:red;\">点击上课 </span></a></td></tr>";
            }
          }

            // 插入html
          }
          $("#course_recorder_tbody").html(html_str);
        });
}
// 查看
function ck(course_name, class_time){
  // 显示提示框
  $("#tsk").fadeIn(100);
  $("#tsk_xx").html("<p style='padding-top:50px; padding-left:120px;'>课程名称："+ course_name+"</p><p style='padding-top:20px; padding-left:120px;'>课程时间："+ class_time+"</p>")
}
function tsk_fh(course_name){
    $("#tsk").fadeOut(100);
    $("#xkjf").click();
}

$("#xkjf").click(function(){
    // css change
    $("#xkjf").css({"background-color":"rgb(82,170,231)"});
    $("#yxkc").css({"background-color":"#ffffff"});
    $("#qc").css({"background-color":"#ffffff"});    
    $("#gkk").css({"background-color":"#ffffff"});

    // content change
    $("#xkjf_li").css({"display":"inline"});
    $("#yxkc_li").css({"display":"none"});
    $("#qc_li").css({"display":"none"});
    $("#gkk_li").css({"display":"none"});
});

$("#yxkc").click(function(){
    // css change
    $("#xkjf").css({"background-color":"#ffffff"});
    $("#yxkc").css({"background-color":"rgb(82,170,231)"});
    $("#qc").css({"background-color":"#ffffff"});
    $("#gkk").css({"background-color":"#ffffff"});
    // content change
    $("#xkjf_li").css({"display":"none"});
    $("#yxkc_li").css({"display":"inline"});
    $("#qc_li").css({"display":"none"});
    $("#gkk_li").css({"display":"none"});
});

$("#qc").click(function(){
    // css change
    $("#xkjf").css({"background-color":"#ffffff"});
    $("#yxkc").css({"background-color":"#ffffff"});
    $("#qc").css({"background-color":"rgb(82,170,231)"});
    $("#gkk").css({"background-color":"#ffffff"});
    // content change
    $("#xkjf_li").css({"display":"none"});
    $("#yxkc_li").css({"display":"none"});
    $("#qc_li").css({"display":"inline"});
    $("#gkk_li").css({"display":"none"});
});

$("#gkk").click(function(){
    // css change
    $("#xkjf").css({"background-color":"#ffffff"});
    $("#yxkc").css({"background-color":"#ffffff"});
    $("#qc").css({"background-color":"#ffffff"});
    $("#gkk").css({"background-color":"rgb(82,170,231)"});
    // content change
    $("#xkjf_li").css({"display":"none"});
    $("#yxkc_li").css({"display":"none"});
    $("#qc_li").css({"display":"none"});
    $("#gkk_li").css({"display":"inline"});
});

// 经典棋谱 
function make_qp_con(){
  $.post("/controller/get_qp_info.php", {}, function(ret_json){
      // 基础课程
      var arr_1 = new Array();
      // 入门课程
      var arr_2 = new Array();
      // 提高课程
      var arr_3 = new Array();
      // 进阶课程
      var arr_4 = new Array();
      // 职业化课程
      var arr_5 = new Array();
      ret_json = eval('(' + ret_json + ')');
      for(var i =0; i < ret_json.length; ++i){
        items = ret_json[i].split("@");
        level = items[0];
        train = items[1];
        name  = items[2];
        content=items[3];
        if (level == "零基础"){
          arr_1[train] = 1;
        }else if (level == "入门"){
          arr_2[train] = 1;
        }else if (level == "提高"){
          arr_3[train] = 1;
        }else if (level == "进阶"){
          arr_4[train] = 1;
        }else if (level == "职业化"){
          arr_5[train] = 1;
        }
      }
      html_str =  "<table>";
      html_str += "<tbody>";
      html_str += "<tr><td class=\"td_sty_1\"><img src=\"images/icon/point.svg\" style=\"vertical-align:bottom; height:25px; width:25px;\"/><font class=\"font_sty\">零基础</font></td></tr><tr><td></td>"
      for(key in arr_1){
        html_str += "<td class=\"td_sty\"><a  href=\"stu_practise.html?"+ "零基础&" + key +"\"><font class=\"font_sty_1\" onmouseover=\"this.style.color='red'\" onmouseout=\"this.style.color=''\" >"+ key  +"</font></a></td>";
      }
      html_str += "</tr><tr><td class=\"td_sty_1\"><img src=\"images/icon/point.svg\" style=\"vertical-align:bottom; height:25px; width:25px;\"/><font class=\"font_sty\">入门课程</font></td></tr><tr><td></td>"
      for(key in arr_2){
        html_str += "<td class=\"td_sty\"><a href=\"stu_practise.html?"+ "入门&" + key +"\"><font class=\"font_sty_1\" onmouseover=\"this.style.color='red'\" onmouseout=\"this.style.color=''\" >"+ key  +"</font></a></td>";
      } 
      html_str += "</tr><tr><td class=\"td_sty_1\"><img src=\"images/icon/point.svg\" style=\"vertical-align:bottom; height:25px; width:25px;\"/><font class=\"font_sty\">提高课程</font></td></tr><tr><td></td>"
      for(key in arr_3){
        html_str += "<td class=\"td_sty\"><a href=\"stu_practise.html?"+ "提高&" + key +"\"><font class=\"font_sty_1\" onmouseover=\"this.style.color='red'\" onmouseout=\"this.style.color=''\" >"+ key  +"</font></a></td>";
      }
      html_str += "</tr><tr><td class=\"td_sty_1\"><img src=\"images/icon/point.svg\" style=\"vertical-align:bottom; height:25px; width:25px;\"/><font class=\"font_sty\">进阶课程</font></td></tr><tr><td></td>"
      for(key in arr_4){
        html_str += "<td class=\"td_sty\"><a href=\"stu_practise.html?"+ "进阶&" + key +"\"><font class=\"font_sty_1\" onmouseover=\"this.style.color='red'\" onmouseout=\"this.style.color=''\" >"+ key  +"</font></a></td>";
      }
      html_str += "</tr><tr><td class=\"td_sty_1\"><img src=\"images/icon/point.svg\" style=\"vertical-align:bottom; height:25px; width:25px;\"/><font class=\"font_sty\">职业化课程</font></td></tr><tr><td></td>"
      for(key in arr_5){
        html_str += "<td class=\"td_sty\"><a href=\"stu_practise.html?"+ "职业化&" + key +"\"><font class=\"font_sty_1\" onmouseover=\"this.style.color='red'\" onmouseout=\"this.style.color=''\" >"+ key +"</font></a></td>";
      }
      html_str += "</tr>"
      html_str += "</tbody>";
      html_str += "</table>";

      $("#yxkc_li").html(html_str);
      });
}


// 注册点击听课时间
$("#djtk").click(function(){  
  // 检查信息是完善
  // 获取学生id并跳转
  $.post("/controller/get_user_info_from_session.php", {},  function(ret_str){
    var items  = ret_str.replace(/\s/g,'').split("#");
    var content;
  if(items.length != 2){
    window.location.href="/index.html"; 
  }else{
    if(items[0] == "未知"){
      window.location.href="/stu_info.html"; 
    }else{
      window.location.href="/controller/judge_open_class.php";
    }
  }
  });
}
);

//倒计时
function count_down(dd){
    //取得指定时间的总毫秒数
    var t = new Date(dd).getTime();
    //取得当前毫秒数
    n = new Date().getTime();
    // alert(n);
    //得到时间差
    c = t - n;
    // alert(c);
    if(c<=0){
        //如果差小于等于0  也就是过期或者正好过期，则推出程序
        $('#count_down').text('0天0时0秒0秒');
        // //清除计时器
        // clearInterval(count_down_timer);
        //结束执行
        return;
    }
    //一天共多少毫秒
    var ds = 60*60*24*1000,
    //总毫秒除以一天的毫秒 得到相差的天数
    d = parseInt(c/ds),
    //然后取完天数之后的余下的毫秒数再除以每小时的毫秒数得到小时
    h = parseInt((c-d*ds)/(3600*1000)),
    //减去天数和小时数的毫秒数剩下的毫秒，再除以每分钟的毫秒数，得到分钟数
    m = parseInt((c - d*ds - h*3600*1000)/(60*1000)),
    //得到最后剩下的毫秒数除以1000 就是秒数，再剩下的毫秒自动忽略即可
    s = parseInt((c-d*ds-h*3600*1000-m*60*1000)/1000);
    $('#count_down').text(d + '天' + h + '时' + m + '分' + s + '秒');
    // alert(d + '天' + h + '时' + m + '秒');
    setTimeout("count_down('2016/09/25 17:25:00')", 1000);
}