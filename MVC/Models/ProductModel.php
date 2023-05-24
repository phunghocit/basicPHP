<?php 
    class ProductModel{
        public function getlistProductHot(){
            return[
                ['id'=>1,'name'=>'Iphone 12'],
                ['id'=>2,'name'=>'Iphone 13'],
                ['id'=>3,'name'=>'Iphone 14'],
            ];
        }
        public function getListProductNewArrival(){
            return
            [
                ['id'=>4,'name'=>'Iphone 6'],
                ['id'=>5,'name'=>'Iphone 7'],
                ['id'=>6,'name'=>'Iphone 8'],
            ];
        }
    }
?>

