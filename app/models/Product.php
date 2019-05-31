<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

require_once('config/database.php');

class Product extends Model
{
    protected $table = 'products';
}