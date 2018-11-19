<?php

namespace App\Models;

use PDO;

/**
 * Post model
 *
 * PHP version 5.4
 */
class Category extends \Core\Model
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
            
        $sql = "SELECT * FROM categories ORDER BY category_id";
        return Category::pdo_query($sql);
    }
    public static function getItem($id)
    {
        $sql = "SELECT * FROM categories WHERE category_id=? ORDER BY category_id";
        return Category::pdo_query_one($sql,$id);
    }
    public static function insert($category_name,$description,$category_img,$feature){
        $sql = "INSERT INTO categories (category_name,category_desc,category_img,feature) VALUES(?,?,?,?)";
        Category::pdo_execute($sql,$category_name,$description,$category_img,$feature);
    }

}
