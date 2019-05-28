<?php
namespace App\Controller;

class HomeController extends BaseController
{
    public function index()
    {
            // echo "Trang Index";die;
            include_once "app/views/index.php" ;
    }
}
?>