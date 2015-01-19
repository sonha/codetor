<?php
	$height = 5;// chieu cao cua tam giac
	//in ra tam giac can
	for($i = 1; $i <= $height; $i++){
		for($j = 1; $j <= $height - $i; $j++){
			//echo "&nbsp"; //Tạo khoảng trắng trong html
			echo "_";
		}			
		for($k = 1; $k <= 2*$i-1; $k++)
			echo "*";
		echo "<br/>";
	}
	echo "<br/>";
	//mảng
	$arrNumber = array(4, 5, 2, 3, 1, 8, 6, 9, 7);
	$tong = 0;
	$max = $arrNumber[0];
	$min = $arrNumber[0];
	$count = count($arrNumber);
	//không dùng hàm
	for($i = 0; $i < $count; $i++){
		$tong = $tong + $arrNumber[$i];
		if($arrNumber[$i] > $max) 
			$max = $arrNumber[$i];
		if($arrNumber[$i] < $min) 
			$min = $arrNumber[$i];
	}
	echo "Tong : $tong <br /> Max: $max <br /> Min: $min";
	echo "<br /> Dung ham";
	//dùng hàm 
	echo "<br /> Tong: ".(array_sum($arrNumber));
	unset($arrNumber[$count -1]); //xóa phần tử cuối cùng
	$count = $count -1;
	var_dump($arrNumber);
	//sắp xếp lại mảng theo thứ tự tăng dần
	for($i = 0; $i < $count - 1; $i++){
		for($j = $i+1; $j < $count; $j++){
			if($arrNumber[$i] > $arrNumber[$j]){
				$tmp = $arrNumber[$i];
				$arrNumber[$i] = $arrNumber[$j];
				$arrNumber[$j] = $tmp;
			}
		}
	}
	echo "<br /> ";
	var_dump($arrNumber);
?>