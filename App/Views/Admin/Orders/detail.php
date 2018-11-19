<div class="container" style="max-width:940px;">
<div class="col-lg-12">
                <h1 class="text-danger font-weight-bold my-3" style="font-size:22px">Order <?php echo $order['id'];?> </h1>
            
                <div class="row mb-1">
                <div class="col-1"></div>
                    <div class="col-4">
                        
                        <?php   echo 'Customer Name: '.$order['customer_name'].'<br>';
                                echo 'Customer Address: '.$order['customer_address'];
                        ?>
                    </div> 

                    <div class="col-4">
                        <?php   echo 'Phone: '.$order['phone'].'<br>';
                                echo 'Email: '.$order['email'];
                        ?>
                    </div> 

                    <div class="col-3">
                        <?php   
                        echo 'Delivered: ';
                        
                        if($order['status']==0)
                        {
                            echo "No";
                        }else{
                            echo "Yes";
                        }
                        ?>
                    </div> 
                </div>

                <table class="table" style="color:darkslategray">
                <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col" >Product ID</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                </tr>
                <?php
                    foreach ($orders_detail as $order_detail)
                       {
                        echo '</thead>';
                        echo '<tbody>';
                        echo    '<tr>';
                        echo    '<td width=200px><img src='.'../assets/images/'.$order_detail['image_file'].' width=150px></td>';
                        echo    '<th scope="row" width=150px>'.$order_detail['product_id'].'</th>';
                        echo    '<td>'.$order_detail['product_name'].'</td>';
                        echo    '<td>'.$order_detail['quantity'].'</td>';
                        echo    '<td>'.$order_detail['price'].'$</td>';
                        echo    '</tr>';
                        echo '</tbody>';
                       }
                
                ?>   
                
                </table>


                <?php
                // Display the paging information
               // echo '<div id="paging" class="d-flex justify-content-center my-1"><p>', $prevlink, ' Page ', $page, ' of ', $pages ,' ', $nextlink,' </p></div>';
                ?>
            </div>
            
        </div>
    </div>
</div>