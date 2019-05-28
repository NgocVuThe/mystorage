<?php
    require_once('vendor/autoload.php');
    use App\Controller\HomeController;
    use App\Controller\ProductController;

    $controller = new ProductController();
    $controller->controller();

    Route::url("/")

?>

<html>
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
</body>