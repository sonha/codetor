<?php
/**
 * Created by PhpStorm.
 * User: Ha Anh Son
 * Date: 07/02/2015
 * Time: 5:43 CH
 */
?>
<div class="list-group">
    <a href="#" class="list-group-item active">Danh mục sản phẩm</a>
    <?php foreach($allCategory as $category) : ?>
        <a href="category.php?catid=<?php echo $category['id'];?>" class="list-group-item"><i class="icon-laptop"></i> <?php echo $category['name'];?></a>
    <?php endforeach;?>
</div>