function speed(){window.onbeforeunload=function(){return"Are you sure you want leave?"},$("#WordsRead").mouseout(function(){responsiveVoice.speak($("#readWords").text())})}!function(e,t,o){var a,n=e.getElementsByTagName(t)[0];e.getElementById(o)||(a=e.createElement(t),a.id=o,a.src="//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1623335627974998",n.parentNode.insertBefore(a,n))}(document,"script","facebook-jssdk"),$(window).on("load",function(e){"#_=_"==window.location.hash&&(window.location.hash="",history.pushState("",document.title,window.location.pathname),e.preventDefault());var t=$("#thongbao").html(),o=$("#error").html();""!=o&&alert(o),1==t&&$("#register").modal("show")}),$(".header-profile-wrapper").on("click",function(){$(".header-profile-inner").toggle("slow",function(){$(".header-profile-inner").addClass("is-active")})}),$(document).ready(function(){$.ajaxSetup({headers:{"X-CSRF-Token":$("meta[name=_token]").attr("content")}}),$(".delete_course").on("click",function(){var e=$(this).data("id");1==confirm($("#confirmDelete").val())&&($("#"+e).slideUp(300),$.ajax({url:"/deleteCourse",type:"POST",data:{id:e}}))}),$(".progress-bar").each(function(){var e=$(this).attr("data-progress");$(this).css("width",e+"%")}),$(".bar-success").each(function(){var e=$(this).attr("data-progress");$(this).css("width",e+"%")}),$(".mempal-button").on("click",function(){var e=$(this).find('input[type="hidden"]'),t=e.val(),o=$(this).data("user-id"),a=$(this).data("unfollow"),n=$(this).data("follow"),i=$(this).data("fullname"),s=$(this).closest(".people-rows").attr("data-user-follow"),r=$(this),c=$(this).data("action");$.ajax({url:c,type:"POST",data:{id:o,follow:t,idUser:s,username:i},success:function(e){1==e?(r.removeClass("green"),r.find(".text").text(a)):(r.addClass("green"),r.find(".text").text(n))}})})}),responsiveVoice.speak($("#readWords").text()),$("#WordsRead").mouseout(function(){responsiveVoice.speak($("#readWords").text())}),$(document).on("click",".next-button",function(){var e=$("#idLesson").val(),t=$("#idCourse").val(),o=$(this).attr("data-id-course");"undefined"!=typeof Storage&&(localStorage.clickcount>5&&(localStorage.clickcount=0),localStorage.clickcount?localStorage.clickcount=Number(localStorage.clickcount)+1:localStorage.clickcount=1);var a=window.location.href.replace(new RegExp("(.*/)[^/]+$"),"$1");$.ajax({url:$("#back-to-top").data("action-question"),type:"POST",data:{id:o,idLesson:e,idCourse:t,number:localStorage.clickcount},success:function(e){1==e?(window.onbeforeunload=null,alert("Xin chúc mừng! Bạn đã hoàn thành bài học."),window.onbeforeunload=function(){},window.location.href=a):($("#gardening-area").html(e),speed())}})}),$(document).on("click",".shiny-box",function(){var e=$("#idLesson").val(),t=$("#idCourse").val(),o=$(this).parent().attr("data-question"),a=$(this).attr("data-choice-id");if(o==a){$(this).css("background-color","#34c035");var n=1}else{var n=0;$(this).css("background-color","#e34040")}$(".shiny-box").addClass("disable"),$.ajax({url:$("#back-to-top").data("action-answer"),type:"POST",data:{correct:n,idLesson:e,idCourse:t,question:o}})});
