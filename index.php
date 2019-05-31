<?php
    require_once('vendor/autoload.php');
    use App\Controller\HomeController;
    use App\Controller\ProductController;
    use App\Controller\Route;
    
    Route::get("/products", 'ProductController@index');
    Route::get("/create-products", 'ProductController@create');
    Route::get("/edit-products", 'ProductController@editProduct');
    Route::get("/delete-products", 'ProductController@del');
?>