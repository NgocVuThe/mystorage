<?php
    namespace App\Controller;
    // require_once('app/models/Product.php');
    use App\Model\Product;

    class ProductController extends BaseController
    {   
        
        public function controller()
        {
            $url = isset( $_GET['url'] ) ? $_GET['url'] : '/';

            switch ($url) {

                case $url ==='products':
                    $this->index();
                    break;

                case $url === 'create-products':
                    $method = $_SERVER['REQUEST_METHOD'];
                    if($method=='GET'){
                        $this->create();
                    }else if($method=='POST'){
                        if(isset($_POST['btnsubmit'])){
                            $this->submit();
                        }
                    }
                    break;

                case $url === 'edit-products':
                    $method = $_SERVER['REQUEST_METHOD'];
                    if($method == 'GET'){
                        $this->editProduct();
                    }else if($method == 'POST'){
                        if(isset($_POST['update'])){
                            $this->updateProduct();
                        }
                    }
                    break;
                
                case $url === 'delete-products':
                    $this->del();
                    break;
                default:
                    
                    break;
            }
            // var_dump($url);die;
        }

        public function index()
        {
            $path = "";
            $products = Product::all();
            $view = "app/views/product/index.php";
            include_once "app/views/layout/master.php";
        }

        public function create()
       {
            $path = "";
            $view = "app/views/product/create.php";
            include_once "app/views/layout/master.php";
        } 

        public function submit()
        {
            $product = new Product();
            $product->name = $_POST['name'];
            $product->slug = $_POST['slug'];
            $product->price = $_POST['price'];
            $product->description = $_POST['description'];
            $product->short_description = $_POST['short_description'];
            $product->status = $_POST['status'];
            // var_dump($product);die;

            $product->save();
            header("location: ".$this->base_url);
        }

        public function del()
        {
            $products = new Product();
            $id = $_GET['id'];
            $products->delete($id);
            header("location: ".$this->base_url);
        }

        public function editProduct()
        {   
            if(isset($_GET['id'])){
                $path = "";
                $id = $_GET['id'];
                $products = Product::find($id);
                $view = "app/views/product/edit.php";
                include_once "app/views/layout/master.php";
            }
        }

        public function updateProduct()
        {
            $id = $_POST['id'];
            $products = Product::find($id);
           
            $products->name = $_POST['name'];
            $products->slug = $_POST['slug'];
            $products->price = $_POST['price'];
            $products->status =  $_POST['status'];
            $products->description = $_POST['description'];
            $products->short_description = $_POST['short_description'];

            $products->update();
            header("location: ".$this->base_url);
        }   
    }

?>