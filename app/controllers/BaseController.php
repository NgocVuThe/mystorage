<?php 
namespace App\Controller;

class BaseController {
    public function __construct()
    {
        $this->base_url = 'http://localhost/mvc_ngoc/products';
    }
}