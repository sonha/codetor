<?php
/**
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */

function create_pyramid($limit) {
    for($row = 1; $row < $limit; $row ++) {
        $stars = str_repeat('*', ($row - 1) * 2 + 1);
        $space = str_repeat(' ', $limit - $row);
        echo $space . $stars . '<br/>';
    }
}
echo "<pre>" ;
create_pyramid(10);

?>