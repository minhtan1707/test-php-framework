<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Post;

/**
 * Posts controller
 *
 * PHP version 5.4
 */
class Posts extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $posts = Post::getAll();
        View::render('base.php');
        View::render('Posts/index.php', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction()
    {
        if(isset($_POST['submit'])){
            Post::add($_POST['title'],$_POST['content']);
            header('location: /test-route/public/?posts/index');
        }else{
            View::render('Posts/add.php'    );
        }
 
    }
    
    /**
     * Show the edit page
     *
     * @return void
     */
    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Route parameters: <pre>' .
             htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}
