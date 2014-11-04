<!DOCTYPE html>
<html lang="en">
<body>
    <div id="sonha"></div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>      
</body>
<script type="text/javascript">
$(document).ready(function(){
$.ajax({
url: "http://iga.soha.vn/index.php?option=com_gameevent&controller=api&action=GC_A&tmpl=component-ajax&tc=2",
dataType: "html",
success : function(data){
alert('success');
}, 
error: function(request,error) 
{
 console.log(arguments);
 alert ( " Can't do because: " + error );
}
});
});
  </script>
</html>