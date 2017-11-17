<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="Codeto Viet nam">
    <meta property="og:description" content="Hoc lap trinh tot nhat Viet Nam">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://mentor.heykorean.dev/index.php/qa/view/175787"/>
    <meta property="og:image" content="http://s3.amazonaws.com/heykorean.image.public/common/SNS/2016/02/20/2OvOvtYwEK0.png">
    <meta property="og:site_name" content="HeyKorean.com">
    <meta property="fb:app_id" content="154780491386487" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="title" content="Gioi thieu Codeto Vietnam">
    <meta name="keywords" content="Trung tam lap trinh Codeto, Lap trinh PHP tai Ha Noi">
    <meta name="description" content="Trung tam lap trinh tot nhat Vietnam">

    <title>Document</title>
<script src="jquery-1.8.3.min.js"></script>
</head>
<body>
<ul>
	<li>
		<a href="#" class="p-facebook-share"><img src="http://mentor.heykorean.dev/assets/mentor_new/images/fb-icon.png" data-pin-nopin="true"></a>
	</li>
	<li>
		<a href="#" class="p-twitter-tweet"><img src="http://mentor.heykorean.dev/assets/mentor_new/images/tw-icon.png" data-pin-nopin="true"></a>
	</li>
</ul>
</body>
<script type="text/javascript">
      jQuery(".p-facebook-share").on("click", function(e) {
  	e.preventDefault();
  	var title = jQuery('meta[property="og:title"]').attr('content');
  	var url = jQuery('meta[property="og:url"]').attr('content');
  	snsShowPage("facebook", title, url, "");
  });
  
  jQuery(".p-twitter-tweet").on("click", function(e) {  	
  	e.preventDefault();
  	var title = jQuery('meta[property="og:title"]').attr('content');
  	var url = jQuery('meta[property="og:url"]').attr('content');
  	snsShowPage("twitter", title, url, "");
  });
  	function snsShowPage(type, title, surl, thumnail) {
    //this.getShortUrl(longurl);
    surl = encodeURIComponent(surl);
    title = encodeURIComponent(title);

    switch (type) {
    	/*
        case 'me2day':
            var tag = 'í—¤ì´ì½”ë¦¬ì•ˆ';
            var link = 'http://me2day.net/posts/new?new_post[body]="' + title + '":' + surl + '&new_post[tags]=' + encodeURIComponent(tag);
            popwin = window.open(link, 'popwin', 'menubar=yes,toolbar=yes,status=yes,resizable=yes,location=yes,scrollbars=yes');
            if (popwin)
                popwin.focus();
            break;
			*/
      case 'twitter':
          var link = 'http://twitter.com/home?status=' + title + ':' + surl;
          //popwin = window.open(link,'popwin');
          popwin = window.open(link, 'popwin', 'menubar=yes,toolbar=yes,status=yes,resizable=yes,location=yes,scrollbars=yes');
          if (popwin)
              popwin.focus();
          break;
			/*
        case 'gonggam':
            var writer = 'í—¤ì´ì½”ë¦¬ì•ˆ';
            var link = 'http://csp.cyworld.com/bi/bi_recommend_pop.php?url=' + surl + '&thumbnail=' + thumnail + '&writer=' + encodeURIComponent(writer);
            popwin = window.open(link, 'popwin', 'width=400,height=364,scrollbars=no,resizable=no');
            if (popwin)
                popwin.focus();
            break;
			*/
      case 'facebook':
          var link = 'http://www.facebook.com/sharer.php?u=' + surl + '&t=' + encodeURIComponent(title);
          popwin = window.open(link, 'recom_icon_pop', 'width=600,height=500,scrollbars=no,resizable=no');
          if (popwin)
              popwin.focus();
          break;
    }
	}
</script>
</html>