<?php
//http://stackoverflow.com/questions/15256571/php-oop-shopping-cart-design-type-hinting-advice
const WEIGHT_COEFFICIENT = 11;//$11/kg
const DIMENSION_COEFFICIENT = 11;//$11/m3
class Cart {
    protected $products = array();
    public function addProduct(Product $product) {
        $this->products[] = $product;
    }
    
    public function getSubTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getItemPrice();
        }
        return $total;
    }
}

class Product {
    protected $amazon_price;
    protected $product_weight;
    protected $width;
    protected $height;
    protected $depth;
    protected $fee_by_weight;
    protected $fee_by_dimension ;
   function __construct($amazon_price, $product_weight, $width, $height, $depth) {
        $this->amazon_price = $amazon_price;
        $this->product_weight = $product_weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->fee_by_weight = $this->product_weight * WEIGHT_COEFFICIENT;
        $this->fee_by_dimension  = $this->width * $this->height * $this->depth * DIMENSION_COEFFICIENT;
   }
   function getItemPrice(){
        return $this->amazon_price + $this->getShippingFee();
   }
   
   function getFeeByWeight() {
       return $this->fee_by_weight;
   }
   
   function getFeeByDimension() {
       return $this->fee_by_dimension;
   }
   
   function getShippingFee() {
       return max($this->fee_by_weight,$this->fee_by_dimension);
   }
}
// $physics = new Product(12, 3, 3,12,3,4);
// echo $physics->getPrice();

$cart = new Cart();
$cart->addProduct(new Product(99,6,0.21,0.18,0.7));
// $cart->addProduct(new Product(15, 3, 3,12,3,4));
$sub_total = $cart->getSubTotal();
echo $sub_total;
?>