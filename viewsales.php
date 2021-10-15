<?php include "assets/header.php"; ?>

        <!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>

                        </ol>
                    </div>
                </div>
                <!-- row -->
                <?php 
            
            
  include 'config/connect.php';

  // Updating 
  if (isset($_REQUEST['update'])){
// echo "updating successful";
  $employee_id=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM sales WHERE employee_id='$employee_id'";
  $sql_query=mysqli_query($connect, $sql_fetch);
  $rows=mysqli_fetch_assoc($sql_query);

if(isset($_POST['update-record'])){
  //echo working
  $employee_id =$_POST['employee_id'];
  $pname=$_POST['pname'];
  $p_unit=$_POST['p_unit'];
  $quantity =$_POST['quantity'];
  $tamount=$_POST['tamount'];
  $pamount=$_POST['pamount'];
  $ramount =$_POST['ramount'];
  $dos=$_POST['dos'];
  

  $sql_insert="UPDATE sales SET  pname='$product_name', p_unit='$product_unit',quantity='$quantity',tamount='$total_amount',pamount='$paid_amount', ramount='$remaining_amount', dos='$dateOfSales'WHERE employee_id='$employee_id'";
  $sql_query=mysqli_query($connect,$sql_insert);
  if ($sql_query==TRUE) {
    echo " updated successful";
  }else{
    echo mysqli_error($connect);
  }
}
?>
                            <form action="#" method="post">
                            <div class="col-xs-12 row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Employee id</label>
                                    <input type="text" class="form-control" id="add-name" name="employee_id">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product Name</label>
                                    <input type="text" class="form-control" id="add-p-name" name="p_name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product unit</label>
                                    <input type="text" class="form-control" id="add-p-unit" name="p-unit">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-qnty">Quantity</label>
                                    <input type="text" class="form-control" id="add-qnty" name="quantity">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Total amount</label>
                                    <input type="text" class="form-control" id="add-amount" name="tamount">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-date">Paid amount</label>
                                    <input type="text" class="form-control" id="add-pamount" name="pamount">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-date">Remaining amount</label>
                                    <input type="text" class="form-control" id="add-ramount" name="ramount">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-date">Date of Sale</label>
                                    <input type="date" id="add-date" name="dos" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                                </div>
                                                        
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary" name="update-record">Save Changes</button>
                                <button type="button" class="btn" name="cancel">Cancel</button>
                            </div>
                        </form>

                        <?php
}

  // deleting date 
  if (isset($_REQUEST['delete'])){
  $employee_id=$_REQUEST['delete'];
  $sql_delete="DELETE FROM sales WHERE employee_id='$employee_id'";
  $sql_query=mysqli_query($connect, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($connect);
  }
}
  // retrieving data
$sql_fetch=" SELECT sales.employee_id,product.product_name,productunit.productUnit_name,sales.quantity,sales.total_amount,sales.paid_amount,sales.remaining_amount,sales.dateOfSale from product join sales on product.product_id = sales.product_id join productunit on productunit.productUnit_id = sales.productUnit_id";
$sql_query=mysqli_query($connect, $sql_fetch);

  ?>
 <table class="table table-responsive-sm">
                                        
                                            <tr>
                                                 
                                                <th>Employee Id</th>
                                                <th>Product Name</th>
                                                <th>Product Unit</th>
                                                <th>Quantity</th>
                                                <th>Total Amount</th>
                                                <th>Paid Amount</th>
                                                <th>Remaining Amount</th>
                                                <th>Date Of Sales</th>
                                                <th>Delete</th>
                                                <th>Update</th>

                                            </tr>
                                    
  <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
   
    <tr>
  
     <td><?php echo $rows['employee_id'];?></td>
    <td><span class="badge badge-primary"></span><?php echo $rows['product_name'];?> </td>
    <td><?php echo $rows['productUnit_name'];?></td>
    <td><?php echo $rows['quantity'];?></td>
    <td><span class="badge badge-primary"></span><?php echo $rows['total_amount'];?> </td>
    <td><?php echo $rows['paid_amount'];?></td>
    <td><?php echo $rows['remaining_amount'];?></td>
    <td><span class="badge badge-primary"></span><?php echo $rows['dateOfSale'];?> </td>
     <td><a href="?delete=<?php echo $rows['employee_id'];?>">Delete</a></td>
    <td><a href="?update=<?php echo $rows['employee_id'];?>">Update</a></td>
    </tr>
                                
   
  <?php
}
?>

               
                    </div>
                    
                        </div>
                    </div>
                    
                    
                        </div>
                        <!-- /# card -->
                    </div>
                  
                   
                        </div>
                    </div>                    
                    
                   
                    </div>
                    
                </div>
            </div>
        </div>
        
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/custom.min.js"></script>
    



    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
     </table>
     <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-bootstrap-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 13:24:32 GMT -->
</html>