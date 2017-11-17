<?php
/**https://docs.google.com/document/d/1NpOmuT3BxqrsstwSj8nP9-Mvmx1Li6KO9NMtudNc9xw/edit
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */
class String {
    public $text;
    public $subtext;

    public function getPosition($text, $subtext){
        $result = "";
        if(strlen($text) < strlen($subtext) || strlen($subtext) == 0 || strlen($text) == 0 ) {
            return "&lt;no matches&gt;";
        }

        $textUpper = strtoupper($text);
        $subTextUpper = strtoupper($subtext);

        for($i = 0; $i <= strlen($text) - 1; $i++) {
            // echo "-textUpper $i la ".$textUpper[$i]."<br>";
            if($textUpper[$i] == $subTextUpper[0] && $i + (strlen($subTextUpper) -1) <= strlen($textUpper) - 1) {
                $isMatch = 1;
                $location = $i; // vi tri trung
                echo 'location ' . $location.'<br>';

                for($j = 0; $j <= strlen($subTextUpper) - 1; $j++) {
                    echo '--$j la ' .$j.'<br>';
                    echo '--$i la ' .$i.'<br>';
                    echo '--$textUpper[$i+$j] '. $textUpper[$i+$j].'<br>';
                    if($textUpper[$i+$j] != $subTextUpper[$j]) {
                        $isMatch = $isMatch * -1;
                        $i = $location + $j;//set new location to start
                        echo '---$isMatch '. $isMatch.'<br>';
                        echo '---$j ' . $j.'<br>';
                        echo '---$i ' . $i.'<br>';
                        $j = strlen($subTextUpper) - 1; // end current loop
                    }
                }

                if($isMatch == 1) {
                    echo '---$isMatch '. $isMatch.'<br>';
                    echo '---$i '. $i.'<br>';
                    echo '---$j '. $j.'<br>';
                    echo '---$location '. ($location + 1).'<br>';
                    // die('bbvv');
                    $result .= strlen($result) == 0 ? ($location + 1) : ', '.($location + 1);
                    $i += strlen($subTextUpper) - 1;//set new location to start
                }
            }
        }

        // var_dump(strlen($result) );die;

        return  strlen($result) == 0 ? "&lt;no matches&gt;" : $result;
    }
}

$question = new String();

$question->text = "Google is a search engine service, google is also an engine for a lot of other services and tools";
$question->subtext = "";
echo $question->getPosition($question->text, $question->subtext);

?>