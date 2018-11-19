<?php

namespace App\Models;

use PDO;

/**
 * Post model
 *
 * PHP version 5.4
 */
class Order extends \Core\Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
    public static function getAll()
    {

        $sql = "SELECT * FROM product_order ORDER BY date_created";
        return Order::pdo_query($sql);
    }
    public static function getItem($id)
    {
        $sql = "SELECT * FROM product_order WHERE id=?";
        return Order::pdo_query_one($sql,$id);
    }
    public static function insert($category_name,$description,$category_img,$feature){
        $sql = "INSERT INTO categories (category_name,category_desc,category_img,feature) VALUES(?,?,?,?)";
        Order::pdo_execute($sql,$category_name,$description,$category_img,$feature);
    }
    public static function changeStatus($id,$status,$date)
    {
        $sql="UPDATE product_order SET status=?,status_changed_date=? WHERE id=?";
        Order::pdo_execute($sql,$status,$date,$id);
    }
    public static function getOrderDetail($id)
    {
        $sql="SELECT * FROM order_detail LEFT JOIN product ON order_detail.product_id = product.id WHERE order_id=?";
        return Order::pdo_query($sql,$id);
    }

}
