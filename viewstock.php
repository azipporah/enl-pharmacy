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
  $stock_id=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM stock WHERE stock_id='$stock_id'";
  $sql_query=mysqli_query($connect, $sql_fetch);
  $rows=mysqli_fetch_assoc($sql_query);

if(isset($_POST['update-record'])){
  //echo working
  $stock_id =$_POST['stock_id'];
  $ename=$_POST['ename'];
  $p_name=$_POST['p_name'];
  $p_category =$_POST['p_category'];
  $p_unit=$_POST['p_unit'];
  $stock_expiry=$_POST['stock_expiry'];
  $stock_qnty =$_POST['stock-qnty'];
  $stock_desc=$_POST['stock_desc'];
  

  $sql_insert="UPDATE stock SET  ename='$employee_name', p_name='$product_name',p_category='$productCategory_name',p_unit='$productUnit_name',stock_expiry='$stock_expiryDate', stock_qty='$stock_quantity', stock_desc='$stock_description' WHERE stock_id='$stock_id'";
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
                                    <label class="form-label" for="add-name">Employee name</label>
                                    <input type="text" class="form-control" id="add-ename" name="ename">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product name</label>
                                    <input type="text" class="form-control" id="add-p-name" name="p_name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product Category</label>
                                    <input type="text" class="form-control" id="add-pcategory" name="p_category">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product Unit</label>
                                    <input type="text" class="form-control" id="add-punit" name="p_unit">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-date">Stock expiry date</label>
                                    <input type="date" id="add-date" name="stock_expiry" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Stock quantity</label>
                                    <input type="text" class="form-control" id="add-stockqnty" name="stock_qnty">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Stock Description</label>
                                    <input type="text-area" class="form-control" id="add-stockdesc" name="stock_desc">
                                </div>


                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary" name="update-record">Save</button>
                                
                            </div>
                        </form>
                        <?php
}

  // deleting date 
  if (isset($_REQUEST['delete'])){
  $stock_id=$_REQUEST['delete'];
  $sql_delete="DELETE  FROM stock WHERE stock_id='$stock_id'";
  $sql_query=mysqli_query($connect, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($connect);
  }
}
  // retrieving data
$sql_fetch=" SELECT stock.stock_id,employee.employee_name,product.product_name,productCategory.productCategory_name,productunit.productUnit_name,stock.stock_expiryDate,stock.stock_quantity,stock.stock_description from employee join stock on employee.employee_id = stock.employee_id join product on product.product_id = stock.product_id join productCategory on productCategory.productCategory_id=stock.productCategory_id join productunit on productunit.productUnit_id=stock.productUnit_id";
$sql_query=mysqli_query($connect, $sql_fetch);

  ?>
 <table class="table table-responsive-sm">
                                        
                                            <tr>
                                                <th>Stock Id</th>
                                                <th>Employee Name</th>
                                                <th>Product Name</th>
                                                <th>Product Category</th>
                                                <th>Product Unit</th>
                                                <th>Stock Expiry Date</th>
                                                <th>Quantity</th>
                                                <th>Description</th>
                                                <th>Delete</th>
                                                <th>Update</th>

                                            </tr>
                    
  <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
   
    <tr>
     <td><?php echo $rows['stock_id'];?></td>
    <td><span class="badge badge-primary"></span><?php echo $rows['employee_name'];?> </td>
    <td><?php echo $rows['product_name'];?></td>
    <td><?php echo $rows['productCategory_name'];?></td>
    <td><span class="badge badge-primary"></span><?php echo $rows['productUnit_name'];?> </td>
    <td><?php echo $rows['stock_expiryDate'];?></td>
    <td></td>><?php echo $rows['stock_quantity'];?></td>
    <td><span class="badge badge-primary"></span><?php echo $rows['stock_description'];?> </td>
     <td><a href="?delete=<?php echo $rows['stock_id'];?>">Delete</a></td>
    <td><a href="?update=<?php echo $rows['stock_id'];?>">Update</a></td>
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