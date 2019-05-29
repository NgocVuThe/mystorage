<?php
namespace App\Model;
class Route
{
    public function get($route, $action){
        $url = isset($_GET['url']) ? $_GET['url'] : '/';
        // var_dump($action);die;
        if("/$url" == $route){
            $explain = explode('@', $action);
            $controller = $explain[0];
            $function = $explain[1];
            $class = "\\App\\Controller\\" . $controller;
            $obj = new $class;
            // var_dump($obj);die;
            return $obj->$function();
        }
    }
}