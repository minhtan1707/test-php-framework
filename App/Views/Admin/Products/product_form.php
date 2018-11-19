
    <div class="container" style="max-width:940px;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            <h2>Add Product</h2>
            <form action="" method=post enctype="multipart/form-data">
                <div class="form-row">
                    <input type=hidden name=id value="<?php echo isset($product)?$product['id']:'';?>">
                    <div class="col-6">
                        <input type="text" name="product_name" class="form-control" placeholder="Product name" value="<?php echo isset($product)?$product['product_name']:'';?>">
                    </div>
                    <div class="col-6">

                        <input type="text" name="price" class="form-control" placeholder="Price"  value="<?php echo isset($product)?$product['price']:'';?>">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="imagefile">Change Picture</label>
                    <input type="file" name="image_file" class="form-control" placeholder="Image file name"  value="<?php echo isset($product)?$product['image_file']:'';?>">
                </div>
                <div class="form-group">
                    <label for="messageform">Description</label>
                    <textarea class="form-control" name="description" id="messageform" rows="4"><?php echo isset($product)?$product['description']:'';?></textarea>
                </div>
                <div class=form-group>
                <select name=category_id class=form-control>
                <option value=0>Select Category</option>
                <?php foreach($categories as $category):?>
                <option value=<?php echo $category['category_id'];?> <?php if(isset($product)){if($category['category_id']==$product['category_id']){ echo "selected=selected";}}?>><?php echo $category['category_name'];?></option>
                <?php endforeach;?>
                </select>
                <button class="btn btn-primary mt-2" type="submit" name=submit value=submit>Submit</button>
            </form>
            </div>
        </div>
    </div>

