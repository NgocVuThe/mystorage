<?php
namespace App\Model;
use App\Model\BaseModel;
// require_once('app/models/BaseModel.php');

class Product extends BaseModel
{
    protected $table = 'products';
    public $columns = [
        'name', 
        'slug', 
        'price',  
        'description', 
        'status',
        'short_description', 
    ];
}
?>