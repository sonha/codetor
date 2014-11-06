<html>
<head>
<style>
p.exFloat {
    float: left;
}
p.exClear {
    clear: left;
} 
</style>
</head>
<body>
<p class="exFloat"><img src="images/img_webstandard.gif" alt="HỌC WEB CHUẨN" /></p>
<p>Dòng text này không sử dụng thuộc tính clear, nên bị ảnh hưởng float của thành phần p có class
=exFloat</p>
<p class="exClear">Dòng text này có sử dụng thuộc tính clear, nên không bị ảnh hưởng float của 
thành phần p class=exFloat</p>
</body>
</html>