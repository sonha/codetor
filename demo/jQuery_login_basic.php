<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
    <style>
        *{
   margin: 0px;
   padding: 0px;
  }
  #login{
   width: 400px;
   height: 270px;
   margin: 0px auto;
   border: 1px solid #000;
  }
  #form{
   padding-top: 10px;
  }
  h3{
   width: 100%;
   height: 30px;
   background: #00d8d8;
   color: #edf8f9;
   text-indent: 20px;
  }
  label{
   width: 150px;
   font-size: 20px;
   padding-left: 20px;
  }
  .input{
   width: 200px;
   height: 30px;
   line-height: 30px;
   margin-left: 20px;
   margin-top: 10px;
   font-size: 20px;
  }
  input[type="submit"]{
   float: right;
   margin-top: 10px;
   margin-right: 74px;
   width: 60px;
   height: 30px;
  }
    </style>
</head>
<body>
<div id="login">
  <h3>Login Here</h3>
  <div id="form">
   <form action="" method="">
    <label>Username</label>
    <input type="text" id="username" value="" class="input">
    <label>&nbsp;</label>
    <p>&nbsp;</p>
    <label>Password</label>
    <input type="password" id="password" value="" class="input">
    <label>&nbsp;</label>
    <p>&nbsp;</p>
    <input type="submit" value="Login" id="ok">
    <input type="reset" value="reset" id="reset">
   </form>
  </div>
  <div id="welcome">
</div>
    
</body>
<script type="text/javascript">
  $(document).ready(function() {
   $("#reset").hide();
   $("#welcome").hide();
   $("#ok").click(function() {
    if ( $("#username").val().length < 5 ) {
     $("p").eq(0).html("Username không được ít hơn 5 ký tự");
     return false;
    } else {
     username = $("#username").val();
     $("p").eq(0).html("");
    }
    if ( $("#password").val().length < 6 ) {
     $("p").eq(1).html("Password không được ít hơn 6 ký tự");
     return false;
    } else {
     password = $("#password").val();
     $("p").eq(1).html("");
    }
    if (username && password) {
     $("#form").hide();
     $("h3").html("Wellcome");
     $("#welcome").html("</span>Xin chào: "+username+"</span><br/><a href='#'>Đến trang chủ </a><br/><a href='#' class='reset'>Quay lại đăng nhập </a>").css("text-indent","20px");
     $("#welcome").show();
     return false;
    }
   })
   $(".reset").live("click",function() {
    $("#reset").click();
    $("#form").show();
    $("#welcome").hide();
   })
  })
 </script>
</html>