<?php
    namespace App\Controller;
    // require_once('app/models/Product.php');
    use App\Model\Product;
    use App\Controller\LoadView;
    class ProductController extends BaseController
    {   
        public function index()
        {
            $products = Product::all();
            $path = "";
            $this->load("product/index", ['path' => $path,'products' => $products]);
        }
        public function create()
        {
            $path = "";
            $this->load('product/create',['path' => $path,'data' => 'app/views/product/create.php']);
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
                $this->load('product/edit',['products' => $products,'path' => $path]);
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