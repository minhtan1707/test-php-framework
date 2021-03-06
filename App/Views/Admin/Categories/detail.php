
    <div class="container" style="max-width:940px;">

<h4 class="font-weight-bold my-2 text-danger">Category Detail</h4>
<h5 class="my-4 text-danger"><?php echo isset($message) ?$message:"";?></h5>
<div class="row">
    <div class="col-4">
        <img src="<?php echo '../assets/images/'.$category['category_img'];?>" style="max-width:100%"></a>
    </div>
    <div class="col-8">
        <p class=ml-1><strong>
        <?php echo $category['category_name'];?> </strong></p>
        <p class>
        <?php echo $category['category_desc'];?> </p>
    </div>
</div>
<?php //print_r($products)?>
<h5 class="font-weight-bold my-2 text-danger">Product List</h4>
         <?php foreach($products as $product): ?>
            <div class="row border py-3">
                <div class="col-3 my-1">
                        <a href=<?php echo '?admin/products/item/'.$product['id']; ?>><img class="img-fluid" src="<?php echo '../assets/images/'.$product['image_file'];?>" style="max-width:100%"></a>
                </div>         
                <div class="col-7 my-1">
                            <h5 class="my-1"><strong><?php echo $product['product_name'];?></strong></h5>
                            <p class="my-1 text-muted"><?php echo 'Price: '.$product['price'].'$';?></p>
                            <p class="my-1"><?php echo $product['description'];?></p>
                </div>      
                <div class="col-2 my-1 k-flex">
                    <a href="<?php echo '?admin/products/edit/'.$product['id']; ?>"class="btn btn-primary mt-2 px-3">Edit</a>
                    <a href="<?php echo '?admin/products/delete/'.$product['id']; ?>"class="btn btn-danger mt-2 px-3">Delete</a>
                    
                </div>       
                    
                </div>                  
            <?php endforeach;?>
    </div>
