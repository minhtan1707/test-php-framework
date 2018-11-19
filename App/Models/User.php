<?php

namespace App\Models;

use PDO;

/**
 * Post model
 *
 * PHP version 5.4
 */
class User extends \Core\Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
            
        $sql = "SELECT * FROM users WHERE trash='0' ORDER BY user_id";
        return Product::pdo_query($sql);
    }
    public static function getItem($id)
    {
        $sql = "SELECT * FROM users WHERE user_id=? AND trash='0' ORDER BY user_id";
        return Product::pdo_query_one($sql,$id);
    }
    public static function update($user_id,$username,$name,$address,$phone,$email,$admin){
            $sql = "UPDATE users SET username=?,name=?,address=?,phone=?,email=?,admin=? WHERE user_id=?";
            Product::pdo_execute($sql,$username,$name,$address,$phone,$email,$admin,$user_id);
        
    }

    public static function delete($id,$date,$trash=1)
    {
        $sql="UPDATE users SET trash=?,trash_date=? WHERE user_id=?";
        Product::pdo_execute($sql,$trash,$date,$id);
    }

    
}
