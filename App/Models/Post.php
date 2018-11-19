<?php

namespace App\Models;

use PDO;

/**
 * Post model
 *
 * PHP version 5.4
 */
class Post extends \Core\Model
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
            
        $sql = "SELECT * FROM posts ORDER BY created_at";
        return Post::pdo_query($sql);
    }
    public static function add($title,$content){
        $sql = "INSERT INTO posts(title,content) VALUES(?,?)";
        Post::pdo_execute($sql, $title,$content);
    }
}
