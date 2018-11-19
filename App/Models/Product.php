<?php

namespace App\Models;

use PDO;

/**
 * Post model
 *
 * PHP version 5.4
 */
class Product extends \Core\Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        //$host = 'localhost';
        //$dbname = 'mvc';
        //$username = 'root';
        //$password = 'secret';
    
        // try {
        //     //$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        //     $db = static::getDB();

        //     $stmt = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');
        //     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //     return $results;
            
        // } catch (PDOException $e) {
        //     echo $e->getMessage();
        // }
            
        $sql = "SELECT * FROM product WHERE trash='0' ORDER BY id ";
        return Product::pdo_query($sql);
    }
    public static function getItem($id)
    {
        $sql = "SELECT * FROM product WHERE id=? AND trash='0' ORDER BY id";
        return Product::pdo_query_one($sql,$id);
    }
    public static function update($product_id,$product_name,$price,$description,$image_file,$category_id){
        if($image_file!=NULL)
        {
            $sql = "UPDATE product SET product_name=?,price=?,description=?,image_file=?,category_id=? WHERE id=?";
            Product::pdo_execute($sql,$product_name,$price,$description,$image_file,$category_id,$product_id);
        }else{
            $sql = "UPDATE product SET product_name=?,price=?,description=?,category_id=? WHERE id=?";
            Product::pdo_execute($sql,$product_name,$price,$description,$category_id,$product_id);
        }
    }
    public static function insert($product_name,$price,$description,$image_file,$category_id){
        $sql = "INSERT INTO product (product_name,price,description,image_file,category_id) VALUES(?,?,?,?,?)";
        Product::pdo_execute($sql,$product_name,$price,$description,$image_file,$category_id);
    }
    public static function delete($id,$date,$trash=1)
    {
        $sql="UPDATE product SET trash=?,trash_date=? WHERE id=?";
        Product::pdo_execute($sql,$trash,$date,$id);
    }
    public static function getWhereCategory($id)
    {
        $sql = "SELECT * FROM product WHERE category_id=? AND trash='0' ORDER BY id";
        return Product::pdo_query($sql,$id);
    }
}
