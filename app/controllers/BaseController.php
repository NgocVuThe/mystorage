<?php 
namespace App\Controller;
use App\Controller\LoadView; 
class BaseController extends LoadView {
    public function __construct()
    {
        $this->base_url = 'http://localhost/mvc_ngoc/products';
        $load = new LoadView();
    }
}