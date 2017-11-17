<?php 
$interests = array(
    0 => array(
        'name' => 'item1',
        ), 
    1 => array(
        'name' => 'item2',
        ), 
    2 => array(
        'name' => 'item3',
        ), 
    3 => array(
        'name' => 'item4',
        ), 
    4 => array(
        'name' => 'item5',
        ), 
    5 => array(
        'name' => 'item6',
        ), 
    6 => array(
        'name' => 'item7',
        )
    );
$count = count($interests);
$numItemsPerRow = ceil($count / 2);

//we need this in case of 2-1-1 for example, otherwise you get 2-2
$numItemsOffsetFix = $count % 2 == 1;

$index  = 0;
echo '<div class="columns">';
foreach($interests as $term){
    if ($index > 0 and $index % 4 == 0) {
        echo '</div><div class="columns">';
        if ($numItemsOffsetFix) {
            $numItemsPerRow--;
            $numItemsOffsetFix = false;
        }
    }
    echo '<li>'.$term['name'].'</li>';
    $index++;
}
echo '</div>';
?>