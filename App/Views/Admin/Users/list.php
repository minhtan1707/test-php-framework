<div class="container" style="max-width:940px;">

    <h4 class="font-weight-bold my-2 text-danger">Users List</h4>
    <table class="table table-hover">
        <thead class=text-danger>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Admin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($users as $user): ?>
            <tr>
                <td>
                    <p class="my-1">
                        <?php echo $user['username'];?>
                    </p>
                </td>
                <td>
                    <p class="my-1">
                        <?php echo $user['name'];?>
                    </p>
                </td>
                <td>
                    <p class="my-1">
                        <?php echo $user['address'];?>
                    </p>
                </td>
                <td>
                    <p class="my-1">
                        <?php echo $user['phone'];?>
                    </p>
                </td>
                <td>
                    <p class="my-1">
                        <?php echo $user['email'];?>
                    </p>
                </td>
                <td>
                    <p class="my-1">
                        <?php echo $user['admin']==1?"<i class='fa fa-check'></i>":"<i class='fa fa-times'></i>";?>
                    </p>
                </td>
                <td>

                    <a href="<?php echo '?admin/users/edit/'.$user['user_id']; ?>">
                        <i class="fa fa-user-edit" style="color:blue"></i>
                    </a>
                    <a href="<?php echo '?admin/users/delete/'.$user['user_id']; ?>">
                        <i class="fa fa-user-minus" style="color:red"></i>
                    </a>
                </td>

            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>