<?php

namespace App\Controllers\Admin;
use \Core\View;
use App\Models\Order;
use App\Models\Product;
/**
 * User admin controller
 *
 * PHP version 5.4
 */
class Orders extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        // Make sure an admin user is logged in for example
        // return false;
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        if(isset($_POST['submit']))
        {
            if(isset($_POST['status']))
            {
                $status=1;
            }else{
                $status=0;
            }
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date=date("Y-m-d H:i:s");
            Order::changeStatus($_POST['id'],$status,$date);
            header('location: ?admin/orders/index');
        }else{
            $data['orders'] = Order::getAll();
            View::render('Admin/Template/header.php');
            View::render('Admin/Orders/list.php', $data);
            View::render('Admin/Template/footer.php');
        }
    }

    public function detailAction()
	{
		
        $data['order']=Order::getItem($this->route_params['id']);
        $data['orders_detail']=Order::getOrderDetail($this->route_params['id']);
		if (empty($data['order']))
        {
               header('location: ?admin/orders/index');
		}
        View::render('Admin/Template/header.php');
        View::render('Admin/Orders/detail.php', $data);
        View::render('Admin/Template/footer.php');
    }
    public function editAction()
	{
		if(isset($_POST['submit'])){
            if($_FILES["image_file"]["name"]!="")
            {
                $image=$_FILES["image_file"]["name"]; 
                $folder="../assets/images/";
                move_uploaded_file($_FILES["image_file"]["tmp_name"], $folder.$image);
            }else{
                $image=NULL;
            }
            Product::update($_POST['id'],$_POST['product_name'],$_POST['price'],$_POST['description'],$image,$_POST['category_id']);
            header('location: ?admin/products/index');
        }else{
            $data['product']=Product::getItem($this->route_params['id']);
            $data['categories']=Category::getAll();
            if (empty($data['product']))
            {
                   header('location: ?admin/products/index');
            }
            View::render('Admin/Template/header.php');
            View::render('Admin/Products/product_form.php', $data);
            View::render('Admin/Template/footer.php');
        }
    }
    public function addAction()
    {
        if(isset($_POST['submit'])){
            if($_FILES["image_file"]["name"]!="")
            {
                $image=$_FILES["image_file"]["name"]; 
                $folder="../assets/images/";
                move_uploaded_file($_FILES["image_file"]["tmp_name"], $folder.$image);
            }else{
                $image='noimage.jpg';
            }
            Product::insert($_POST['product_name'],$_POST['price'],$_POST['description'],$image,$_POST['category_id']);
            header('location: ?admin/products/index');
        }else{
            $data['categories']=Category::getAll();
            View::render('Admin/Template/header.php');
            View::render('Admin/Products/product_form.php',$data);
        }
    }
    public function deleteAction()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=date("Y-m-d H:i:s");
        Product::delete($this->route_params['id'],$date);
        header('location: ?admin/products/index');
    }
}
