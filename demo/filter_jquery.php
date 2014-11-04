<style>
body { font-family:'Arial'; color:#646464; }    	
	.continents-wrap { float:left; width:20%; margin:0 5% 0 0; padding:0; }		
	.flowers-wrap { float:left; width:20%; margin:0 5% 0 0; padding:0; position:relative; }	
	.flowers { float:left; width:50%; }
	.flowers div { float:left; width:90%; height:68px; line-height:68px; padding:0 5%; background:#eee; margin:0 0 1px; position:relative; }	
</style>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<div class="flowers-wrap">
            
                <h3 style="font-size:14px; font-weight:normal;">Available Flowers</h3>
                <p style="font-size:12px;"><strong>Filter flowers by colour:</strong></p>
                <form>
                    <label style="font-size:12px;"><input type="checkbox" id="red" /> Red</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="yellow" /> Yellow</label><br> 
                    <label style="font-size:12px;"><input type="checkbox" id="pink" /> Pink</label><br>                     
                    <label style="font-size:12px;"><input type="checkbox" id="purple" /> Purple</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="green" /> Green</label><br>  
                    <label style="font-size:12px;"><input type="checkbox" id="other" /> Other</label>
                </form>
                <p style="font-size:12px;"><strong>Filter flowers by size:</strong></p>
                <form>
                    <label style="font-size:12px;"><input type="checkbox" id="tiny" /> Tiny</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="small" /> Small</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="medium" /> Medium</label><br>                  
                    <label style="font-size:12px;"><input type="checkbox" id="large" /> Large</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="giant" /> Giant</label>
                </form>                
                                            
          	</div>
            
            <div class="continents-wrap">
            
                <h3 style="font-size:14px; font-weight:normal;">Available Continents</h3>
                
                <div class="continents" style="font-size:12px;">
                	<div>Africa <input type="checkbox" id="africa" /></div>
                    <div>Europe <input type="checkbox" id="europe" /></div>
                    <div>Asia <input type="checkbox" id="asia" /></div>
                    <div>North America <input type="checkbox" id="north-america" /></div>
                    <div>South America <input type="checkbox" id="south-america" /></div>
                    <div>Antarctica <input type="checkbox" id="antarctica" /></div>    
                    <div>Australasia <input type="checkbox" id="australasia" /></div>               
                </div>                
                
          	</div>
            
            <div class="flowers">
            	<div class="flower" data-id="aloe" data-category="green small medium africa">Aloe</div>
           		<div class="flower" data-id="lavendar" data-category="purple green medium africa europe">Lavender</div>
           		<div class="flower" data-id="stinging-nettle" data-category="green large africa europe asia">Stinging Nettle</div>
       			<div class="flower" data-id="gorse" data-category="green yellow large europe">Gorse</div>  
                <div class="flower" data-id="hemp" data-category="green large asia">Hemp</div>  
                <div class="flower" data-id="titan-arum" data-category="purple other giant asia">Titan Arum</div>  
                <div class="flower" data-id="golden-wattle" data-category="green yellow large australasia">Golden Wattle</div>  
                <div class="flower" data-id="purple-prairie-clover" data-category="purple green other medium north-america">Purple Prairie Clover</div> 
                <div class="flower" data-id="camellia" data-category="pink other large north-america">Camellia</div> 
                <div class="flower" data-id="scarlet-carnation" data-category="red medium north-america">Scarlet Carnation</div> 
                <div class="flower" data-id="indian-paintbrush" data-category="red medium north-america">Indian Paintbrush</div>  
                <div class="flower" data-id="moss-verbena" data-category="purple other small south-america">Moss Verbena</div>  
                <div class="flower" data-id="climbing-dayflower" data-category="blue tiny south-america">Climbing Dayflower</div>  
                <div class="flower" data-id="antarctic-pearlwort" data-category="green yellow large antarctica">Antarctic Pearlwort</div>                 	
       		</div>
              <script>
                              $('.flowers-wrap, .continents-wrap').delegate('input[type=checkbox]', 'change', function() {
    				var $lis = $('.flowers > div'),
						$checked = $('input:checked');	
					if ($checked.length) {							
                        var selector = '';
                        $($checked).each(function(index, element){
							if(selector === '') {
								selector += "[data-category~='" + element.id + "']";                  
							} else {
								selector += ",[data-category~='" + element.id + "']";
							}
                        });                        
						$lis.hide(); 
                        console.log(selector);
						$('.flowers > div').hide().filter(selector).show();			   
					} else {
						$lis.show();
					}
				});
              </script>