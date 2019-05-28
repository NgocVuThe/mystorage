<?php
    // require_once('app/controllers/HomeController.php');
    // require_once('app/controllers/ProductController.php');
    require_once('vendor/autoload.php');
    use App\Controller\HomeController;
    use App\Controller\ProductController;

    $controller = new ProductController();
    $controller->controller();
?>