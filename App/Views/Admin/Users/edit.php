<div class="container" style="max-width:940px;">
    <form action="" method='post'>
    <h4 class="font-weight-bold my-2 text-danger">Edit User Details</h4>
    <div class="form-row">
        <input type=hidden name=user_id value=<?php echo $user?$user['user_id']:"";?>>
        <div class="col-6 my-2">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value=<?php echo $user?$user['username']:"";?> >
        </div>
        <div class="col-6 my-2">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value=<?php echo $user?$user['name']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label>Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value=<?php echo $user?$user['address']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label>Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" value=<?php echo $user?$user['phone']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value=<?php echo $user?$user['email']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="checkbox" name="admin" value=admin <?php echo $user['admin']==1?'checked':"";?>> Admin
        </div>
    </div>
        <button class="btn btn-primary mt-3" type="submit" value=submit>Submit</button>
    </form>
</div>

