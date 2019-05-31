<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
// use App\Model\BaseModel;
require_once('config/database.php');

class Product extends Model
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