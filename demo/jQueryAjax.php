<!DOCTYPE html>
<html lang="en">
<body>
    <div id="sonha"></div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
  <script type="text/javascript">
  $(document).ready(function(){
  $.ajax({
  url : "http://api.flickr.com/services/feeds/photos_public.gne?tags=resig&tagmode=all&format=json&jsoncallback=?",
  dataType : "json",
  success : function(data) {
  console.log(data);
  $.each(data.items, function(i, item){
  console.log(i);
  console.log(item);
    // $("<img />").attr("src", item.media.m).appendTo('#sonha');
    $("<img />").attr({src: item.media.m, alt : item.title, title : item.title}).appendTo('#sonha');
  });
  }
  });
  });
  </script>
</body>
</html>