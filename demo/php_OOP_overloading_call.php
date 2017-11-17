<?php 
	// declare class
	class toanHoc {
		// declare properties
		// private $x, $y;

		// // overloading
		
		 public function __call($name, $arguments)
        {
            if ($name === 'dienTich'){
                if(count($arguments) === 1 ){
                    return $this->dienTich1($arguments[0]);
                }
                if(count($arguments) === 2){
                    return $this->dienTich2($arguments[0], $arguments[1]);
                }
            }
        }

		
		public function dienTich1($a) {
			return $a * $a;
		}
		public function dienTich2($a, $b) {
			return $a * $b;
		}
// 		public function dienTich($a, $b, $z) {
// 			if ($x + $y > $z && $x + $z > $y && $y + $z > $x) {
// 				$p = ($x + $y + $z) / 2;

// 				return sqrt($p * ($p - $x) * ($p - $y) * ($p - $z));
// 			} else {
// 				return 0;
// 			}
// 		}

		public function getInfo() {
			echo "OK";
		}
	}

	// create instance
	$toanHoc = new toanHoc;
	echo "Dien tich hinh vuong: ".$toanHoc->dienTich(4)."<br/>";
	echo "Dien tich hinh chu nhat : ".$toanHoc->dienTich(4, 5)."<br/>";

	$toanHoc->getInfo();


 ?>