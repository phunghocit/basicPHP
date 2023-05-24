<h1>
create_product_category controller 
    
</h1>
<?php
    class ProductCategoryController extends BaseController{
        public function index(){
            return $this->view('product_category.list_product_category');

        }
        public function Create(){
            return $this->view('product_category.create_product_category');
        }
    }
?>