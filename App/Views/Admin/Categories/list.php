<div class="container" style="max-width:940px;">

    <h4 class="font-weight-bold my-2 text-danger">Categories List</h4>
    <ul class='list-group my-3'>
    <?php //print_r($categories);?>
        <?php foreach($categories as $category):?>
        <li class='list-group-item'>

                <div class="row">
                    <div class="col-4">
                    <a href="<?php echo '?admin/categories/detail/'.$category['category_id'];?>" class=text-danger>
                        <img src="<?php echo '../assets/images/'.$category['category_img'];?>" style="max-width:100%"></a>
                    </div>
                    <div class="col-8">
                        <p class=ml-1><strong>
                            <?php echo $category['category_name'];?> </strong></p>
                        <p class>
                            <?php echo $category['category_desc'];?> </p>
                    </div>
                </div>
        </li>
        <?php endforeach;?>
    </ul>
    <a class='btn btn-danger mt-2 mb-5' href="<?php echo '?admin/categories/add';?>">Add Categories</a>