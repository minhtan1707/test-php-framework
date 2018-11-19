<?php

namespace App\Controllers\Admin;
use \Core\View;
use App\Models\User;

/**
 * User admin controller
 *
 * PHP version 5.4
 */
class Users extends \Core\Controller
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
        $data['users'] = User::getAll();
        View::render('Admin/Template/header.php');
        View::render('Admin/Users/list.php', $data);
        View::render('Admin/Template/footer.php');
    }
    public function deleteAction()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=date("Y-m-d H:i:s");
        User::delete($this->route_params['id'],$date);
        header('location: ?admin/users/index');
    }
    public function editAction()
	{
		if(isset($_POST['username'])){
            if($_POST['admin']=='admin'){
                $admin=true;
            }else{
                $admin=false;
            }
            User::update($_POST['user_id'],$_POST['username'],$_POST['name'],$_POST['address'],$_POST['phone'],$_POST['email'],$admin);
            header('location: ?admin/users/index');
        }else{
            $data['user']=User::getItem($this->route_params['id']);
            if (empty($data['user']))
            {
                   header('location: ?admin/users/index');
            }
            View::render('Admin/Template/header.php');
            View::render('Admin/Users/edit.php', $data);
            View::render('Admin/Template/footer.php');
        }
    }
}
