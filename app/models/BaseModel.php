<?php
// namespace App\Model;

// use PDO;

// class BaseModel {
//     protected $conn;
//     private $host = 'localhost';
//     private $pass = '';
//     private $user = 'root';
//     private $dbName = 'db_vu_ngoc';
//     private $charset = 'utf8';

//     public function __construct()
//     {
//         try {
//             $this->conn = new PDO("mysql:host=$this->host; dbname=$this->dbName; charset=$this->charset", $this->user, $this->pass);
//             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//             return true;
//         } catch(PDOException $e){
//             var_dump($e->getMessages());die;
//         }
//     }

//     public function save()
//     {
//         $field = implode(",", $this->columns);
//         $bindData = ':'.implode(",:", $this->columns);
//         $data="";
//         foreach($this->columns as $col){
//             if($this->{$col} != null){
//                 $data .= "" . $this->{$col}. ", ";
//             }
//         }
//         $data = rtrim($data, ", ");
//         $dataArr = explode(",", $data);
//         $subKey = explode(",", $bindData);
//         $ArrTotal = array_combine($subKey, $dataArr);
//         $this->sql = "INSERT INTO $this->table ($field) VALUES ($bindData)";
//         $stmt = $this->conn->prepare($this->sql);
//         foreach($ArrTotal as  $key => $value){
//                 $stmt->bindValue($key, $value);
//         }
//         try {
//             $stmt->execute();
//             return true;
//         } catch(PDOException $e) {
//             echo "Them moi that bai";die;
//             }
//     }

//     public static function all()
//     {
//         $model = new static();

//         $model->sql = "SELECT * FROM $model->table";
//         $stmt=$model->conn->prepare($model->sql);
//         $stmt->execute();
//         $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
//         return $result;
//     }
    
//     public static function find($id)
//     {
//         $model = new static();
//         $model->sql = "SELECT * FROM $model->table WHERE id = :id";
//         $stmt = $model->conn->prepare($model->sql);
//         $stmt->bindParam(':id', $id);
//         $stmt->execute();
//         // $stmt->close();
//         $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
//         // var_dump($result);die;
//         if(count($result) > 0) {
//             return $result[0];
//         } else {
//             return null;
//         }
//     }

//     public function delete($id)
//     {
//         $this->sql = "DELETE FROM $this->table WHERE id = :id";
//         $stmt = $this->conn->prepare($this->sql);
//         $stmt->bindParam(':id', $id);
//         try {
//             $stmt->execute();
//             return true;
//         } catch(PDOException $e){
//             var_dump($e->getMessage());die;
//         }
//     }

//     public function update()
//     {        
//         $field = ":".implode(",", $this->columns);
//         $data="";
//         foreach($this->columns as $col){
//             if($this->{$col} != null){
//                 $data .= "" .$this->{$col}. ", ";
//             }
//         }
//         $data = rtrim($data, ", ");
//         $this->columns = array_map(function($item)
//             {
//             return $item.'=:'.$item;
//             }, $this->columns);
//         $bindData = implode(",", $this->columns);
//         $dataArr = explode(",", $data);
//         $subKey = explode(",", $field);
//         $arrTotal = array_combine($subKey, $dataArr);
//         // var_dump($arrTotal);die;
//         $this->sql = "UPDATE $this->table SET $bindData WHERE id = :id";
//         // var_dump($this->sql);die;
//         $stmt = $this->conn->prepare($this->sql);
//         $stmt->bindValue(':id', $this->id);
//         // var_dump($stmt);die;
//         foreach ($arrTotal as $key => $value) {
//             $stmt->bindValue($key, $value);
//         // var_dump($stmt);die;
//         }
//         // var_dump($stmt);die;
//         try {
//             $stmt->execute();
//             return true;
//         } catch(PDOException $e){
//             var_dump($e->getMessage());die;
//         }
//     }
// }