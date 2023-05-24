<h1>Produc controller</h1>
<?php
    class ProductController extends BaseController{

        private $productModel;
        public function __construct(){
            $this->loadModel('ProductModel.php');
            $this->productModel=new ProductModel;
        }
        public function index( ){
            $listProductHot = $this->productModel->getlistProductHot();
            $listProductNewArrival= $this->productModel->getListProductNewArrival();
            
            $arrayDatas=[
                'listProductHot' =>$listProductHot,
                'listProductNewArrival'=>$listProductNewArrival,
                'headingHot' => 'Heading Hot',
                'headingNewArrival'=>'Heading New Arrival'
            ];
            return $this->view('product.list_product',$arrayDatas);
        }
        public function Create(){
            return $this->view('product.create_product');
        }
    }
?>