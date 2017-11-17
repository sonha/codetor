<?php
class Spintax {
	
	function spin($str, $test=false) {
		
		if (!$test) {
			
			do {
				
				$str = $this->regex($str);
				
			} while ($this->complete($str));
			
			return $str;
			
		} else {
			
			do {
				
				echo "<b>PROCESS: </b>";
				var_dump($str = $this->regex($str));
				echo "<br><br>";
				
			} while ($this->complete($str));
			
			return false;
			
		}
		
	}
	
	function regex($str) {
		
		preg_match("/{[^{}]+?}/", $str, $match);
		
		// Now spin the first captured string
		$attack = explode("|", $match[0]);
		
		$new_str = preg_replace("/[{}]/", "", $attack[rand(0,(count($attack)-1))]);
		
		$str = str_replace($match[0], $new_str, $str);
		
		return $str;
		
	}

	function complete($str) {
		
		$complete = preg_match("/{[^{}]+?}/", $str, $match);
		
		return $complete;
		
	}
	
}

$spintax = new Spintax;
// Add true to the spin functions to debug and see each line as it is spun in the process 
echo $spintax->spin("{{Hello|Hi} my name is {Ron|Ronald}|Another random {sentence|{statement|phrase|saying}}}");
?>