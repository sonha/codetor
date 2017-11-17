<!DOCTYPE html>
<html>
<head>
<link href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.0.3/css/normalize.min.css" rel="stylesheet" type="text/css" />
<link href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.0.3/css/foundation.min.css" rel="stylesheet" type="text/css" />
  <meta charset="utf-8">
  <title>JS Bin</title>
</head>
<body>
      <div class="row">
          <div class="small-12 columns">
              <div class="board">
                  <i class="fi-<?php echo $icon;?>"></i> 
              <h1><?php echo 'Test counting';?></h1>
    <a id="retry" href="../" class="button success radius large">Alibaba <i class="fi-refresh"></i></a>
	<br />
					AnPSoft
					</span> 2016<br />
					<span id="counter" class="label alert round">	
						
              </div>
          </div>
      </div>
    <script>
    	var sec = 30;
    	var counter = document.getElementById('counter');
    	counter.innerText = sec;
    	i = setInterval(function(){
    		--sec;
    		
    		if (sec === 1){
    			clearInterval(i);
    			window.location = document.getElementById('retry').href;
    		}
    		counter.innerText=sec;
    		},1000);
    	</script>
</body>
</html>