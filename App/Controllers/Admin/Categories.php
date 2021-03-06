<?php

namespace App\Controllers\Admin;
use \Core\View;
use App\Models\Product;
use App\Models\Category;
/**
 * User admin controller
 *
 * PHP version 5.4
 */
class Categories extends \Core\Controller
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
        $data['categories'] = Category::getAll();
        View::render('Admin/Template/header.php');
        View::render('Admin/Categories/list.php', $data);
        View::render('Admin/Template/footer.php');
    }

    public function detailAction()
	{
		$data['category'] = Category::getItem($this->route_params['id']);
		$data['products']= Product::getWhereCategory($this->route_params['id']);
		if (empty($data['category']))
        {
               header('location: ?admin/products/index');
		}
        View::render('Admin/Template/header.php');
        View::render('Admin/Categories/detail.php', $data);
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
            if($_FILES["category_image"]["name"]!="")
            {
                $image=$_FILES["category_image"]["name"]; 
                $folder="../assets/images/";
                move_uploaded_file($_FILES["category_image"]["tmp_name"], $folder.$image);
            }else{
                $image='noimage.jpg';
            }
        if($_POST['feature']=='feature'){
            $feature=TRUE;
        }else{
            $feature=FALSE;
        }
            Category::insert($_POST['category_name'],$_POST['description'],$image,$feature);
            header('location: ?admin/categories/index');
        }else{
            View::render('Admin/Template/header.php');
            View::render('Admin/Categories/add.php');
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
