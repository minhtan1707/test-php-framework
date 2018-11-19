<div class="container" style="max-width:940px;">
    <div class="row">
        <div class="col-lg-12">
        <h4 class="font-weight-bold my-2 text-danger">Add Category</h4>
        <form action="" method=post enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-12 py-2">
                    <input type="text" name="category_name" class="form-control" placeholder="Category name">
                </div>
                <div class="col-12 py-2">
                    <label for="messageform">Description</label>
                    <textarea class="form-control" name="description" id="messageform" rows="4"></textarea>
                </div>
                <div class="col-12 py-2">
                    
                    <input type="checkbox" name="feature" value="feature"> Feature Category
                </div>
                <div class="col-12 py-2">
                <input type="file" name="category_image" size="20" accept="image/*" /></div>
                <div class="col-12">
                <button class="btn btn-danger mt-4" type="submit" name=submit value=submit>Submit</button>
                </div>
            </div>
            

            </form>
        </div>

    </div>
</div>
