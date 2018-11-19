
<div class="container" style="max-width:940px;">

<h4 class="font-weight-bold my-2 text-danger">Product Details</h4>
    <div class="row mt-3">
        
        <div class="col-3">
        <img class="img-fluid" src="<?php echo '../assets/images/'.$product['image_file'];?>"></div>
        <div class="col-6">
        <h5><?php echo 'Name: '.$product['product_name'];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Price: '.$product['price'].'$';?></h6>
        <p class="card-text"><?php echo $product['description'];?></p>
        <form action="<?php echo '/admin/product?act=edit&id='.$product['id'];?>" method=post>
        <input type=submit class="btn btn-primary" value=Edit></a>
                </form>
        <a href="<?php echo '/admin/product?act=delete&id='.$product['id']; ?>"class="btn btn-danger mt-2 px-3">Delete</a>
        
        </div>
        

        
        

    </div>
</div>

