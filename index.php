<?php
    require_once('vendor/autoload.php');
    use App\Controller\HomeController;
    use App\Controller\ProductController;
    use App\Controller\Route;

    // $controller = new ProductController();
    // $controller->controller();
    
    Route::get("/products", 'ProductController@index');
    Route::get("/create-products", 'ProductController@create');
    Route::get("/edit-products", 'ProductController@editProduct');
    Route::get("/delete-products", 'ProductController@del');
    
    
?>

<!-- <html>
<head>    
header
</head>
<body>
    <div></div>
    <div class="container">
        <div class="col-left">
            nav
        </div>
        <div class="col-right">
            view
        </div>
    </div>
</body> -->