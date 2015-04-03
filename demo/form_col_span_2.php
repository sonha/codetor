<?php $baseUrl = 'http://localhost/codetor/';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="jquery-1.8.3.min.js"></script>
    <title>Editor Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>css/docs.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"/></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    <link rel="stylesheet" href="<?php echo $baseUrl;?>js/docs.min.js">
    <style>
body{
  margin: 12px;
  width: 100%;
}
.info {
      background-color: #d1d2d4;
}
.info2 {
      background-color: #d1d2d4;
      position: absolute;
      margin-top: 456px;
}
#div1{
  height: 30px;
  width: 50%;
  /* border: solid 1px #000000; */
  /* background-color: #0066CC; */
  float: left;  
  /* margin-top: 33px; */
}
#div2{
  height: 30px;
  width: 50%;
  /* border: solid 1px #000000; */
  /* background-color: #66CC00; */
  float: left;
  margin-left: 569px;
  margin-top: -30px;
}
    </style>
</head>
<body>
<div class="container">

  <div id="main">
  <div class="info">
       お 客 様 情 報
  </div>
    <div id="div1">
    <table class="table table-bordered table-responsive">
    <tr>
        <th colspan="" align="left">Test</th>
        <td>フリガナ</td>
        <td>フリガナ</td>
    </tr>
    <tr>
        <td>フリガナ</td>
        <td>フリガナ</td>
    </tr>
     <tr>
       <td>Last Name（パスポート記載の姓）</td>
        <td>First Name（パスポート記載の名）</td>
        <td>First Name（パスポート記載の名）</td>
    </tr>
</table>
    
    </div>
    <div id="div2">
        <table class="table table-bordered table-responsive">
    <tr>
        <th colspan="10" align="left"> Test</th>
    </tr>
    <tr>
        <th rowspan="3" align="left" bgcolor="#d1d2d4">ご氏名（自署）</th>
        <td>フリガナ</td>
        <td>フリガナ</td>
        <td>フリガナ</td>

    </tr>
    <tr>
      <td>姓</td>
      <td>名</td>
      <td>名</td>
    </tr>
     <tr>
       <td>Last Name（パスポート記載の姓）</td>
        <td rowspan="3">First Name（パスポート記載の名）</td>
        <td>bbbbbb</td>
    </tr>
    
    <tr>
        <th rowspan="3" align="left"  bgcolor="#d1d2d4">現住所</th>
        <td>gggggggg</td>
        <td>cofffffffl2</td>
    </tr>
    <tr>
        <td>col1</td>
        <td>aaaavvvvvv</td>
    </tr>
    <tr>
        <td>col1</td>
        <td>bababa444444</td>
        <td>bbbb</td>
    </tr>
    <tr>
        <th rowspan="3" align="left" bgcolor="#d1d2d4">Email</th>
    </tr>
    <tr>
      <td colspan="3" >BAAA</td>
    </tr>
     <tr>
        <td colspan="3" >col2</td>
    </tr>
    <tr>
        <th align="left" bgcolor="#d1d2d4">職業(業種)</th>
        <td></td>
        <td>会社名英語表記</td>
        <td>※ 英語表記がない場合は、会社名をローマ字でご記入ください。</td>
    </tr>
</table>
    
    </div>
    <div class="info2">
       đây là cái div thứ 2
  </div>
  </div>
 </div>
</body>
</html>

