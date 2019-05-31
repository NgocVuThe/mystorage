<?php
namespace App\Controller;
class LoadView
{   
    private $__content = array();
    public function load($view, $data=array())
    {
        extract($data);
        // var_dump($data);die;
        ob_start();
        require "app/views/" . $view. ".php";
        $content = ob_get_clean();
        $this->__content[] = $content;
        require "app/views/layout/master.php";
    }

    public function show()
    {
        foreach ($this->__content as $value) {
            echo $value;
            // var_dump($value);die;
        }
    }
}