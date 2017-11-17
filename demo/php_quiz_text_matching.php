<?php
/**
 * TODO : Text Matching Problem
 * @author : SonHA (hason61vn@gmail.com)
 * Acceptance Criteria : 
 * Subtext:	Google => Output: 1, 36	
 * Subtext:	google => Output: 1, 36	
 * Subtext:	oo => Output: 2, 37, 94
 * Subtext:	Oo => Output: 2, 37, 94
 * Subtext:	a => Output: 11, 15, 46, 51, 65, 89	
 * Subtext:	X => Output: <no matches>	
 * Subtext:	Sx => Output: <no matches>
 */
class String {
    public $text;
    public $subtext;
    
    public function getPosition($text, $subtext){
        $result = "";
        
        //if subtext is bigger than the text
        if(strlen($text) < strlen($subtext) || strlen($subtext) == 0 || strlen($text) == 0) {
            return "&lt;no matches&gt;";
        }
        
        $textUpper = strtoupper($text);
        $subTextUpper = strtoupper($subtext);
        
        for($i = 0; $i <= strlen($text) - 1; $i++) {
            if($textUpper[$i] == $subTextUpper[0] && $i + (strlen($subTextUpper) -1) <= strlen($textUpper) - 1) {
                $isMatch = 1;
                $location = $i; //get matched location
                for($j = 0; $j <= strlen($subTextUpper) - 1; $j++) {
                    if($textUpper[$i+$j] != $subTextUpper[$j]) {
                        $isMatch = $isMatch * -1;
                        $i = $location + $j;//set new location to start
                        $j = strlen($subTextUpper) - 1; // end current loop
                    } 
                }
                
                if($isMatch == 1) {
                    $result .= strlen($result) == 0 ? ($location + 1) : ', '.($location + 1);
                    $i += strlen($subTextUpper) - 1;//set new location to start
                }
            }
        }
        
        return  strlen($result) == 0 ? "&lt;no matches&gt;" : $result;
    }
}

$question = new String();
$question->text = "Google is a search engine service, google is also an engine for a lot of other services and tools";
$question->subtext = "google";
echo $question->getPosition($question->text, $question->subtext);
?>