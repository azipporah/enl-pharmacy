<?php 
include "assets/header.php"; 
// include "main/include.php";
?>

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

//   // Updating 
//   if (isset($_REQUEST['update'])){
// // echo "updating successful";
//   $product_id=$_REQUEST['update'];
//   $sql_fetch="SELECT * FROM product WHERE product_id='$product_id'";
//   $sql_query=mysqli_query($connect, $sql_fetch);
//   $rows=mysqli_fetch_assoc($sql_query);

// if(isset($_POST['update-record'])){
//   //echo working
//  $product_id =$_POST['product_id'];
//  $product_name=$_POST['p_name'];
//  $productCategory_name=$_POST['p_category'];
//  $productUnit_name=$_POST['p_unit'];
//  $product_costPrice=$_POST['cprice'];
//  $product_sellingPrice=$_POST['sprice'];
//  $product_description=$_POST['dd'];
//  $product_manufacturer=$_POST['manu'];
  

//   $sql_insert="UPDATE product SET product_name='$product_name', productCategory_name='$productCategory_name', productUnit_name='$productUnit_name', product_costPrice='$product_costPrice', product_sellingPrice='$product_sellingPrice', product_description='$product_description',product_manufacturer='$product_manufacturer' WHERE product_id='$product_id'";
//   $sql_query=mysqli_query($connect,$sql_insert);
//   if ($sql_query==TRUE) {
//     echo " updated successful";
//   }else{
//     echo mysqli_error($connect);
//   }
// }
?>
    <!-- <form action="#" method="post"> -->
                            <!-- <div class="col-xs-12 row"> -->
                                <!-- <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product name</label>
                                    <input type="text" class="form-control" id="add-p-name" name="p_name">
                                </div> -->
                                <!-- <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product category</label>
                                    <input type="text" class="form-control" id="add-p-category" name="p_category">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product unit</label>
                                    <input type="text" class="form-control" id="add-p-unit" name="p_unit">
                                </div> -->
                                <!-- <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-date">Expiry date</label>
                                    <input type="date" id="add-date" name="dob" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                                </div> -->
                                <!-- <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Cost Price</label>
                                    <input type="text" class="form-control" id="add-cprice" name="cprice">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Selling price</label>
                                    <input type="text" class="form-control" id="add-sprice" name="sprice">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Description</label>
                                    <input type="text-area" class="form-control" id="add-dd" name="dd">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Manufacturer</label>
                                    <input type="text" class="form-control" id="add-manu" name="manu">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary" name="update-record">Save Changes</button>
                                <button type="button" class="btn" name="cancel">Cancel</button>
                            </div> -->
                        <!-- </form> -->

                        <?php
// }

//   // deleting date 
//   if (isset($_REQUEST['delete'])){
//   $product_id=$_REQUEST['delete'];
//   $sql_delete="DELETE FROM product WHERE product_id='$product_id'";
//   $sql_query=mysqli_query($connect, $sql_delete);
//   if ($sql_query==TRUE){
//     echo "Deleted successful";
//   }else{
//     echo mysqli_error($conn);
//   }
// }
  // retrieving data
$sql_fetch="SELECT product.product_id, product.product_name, productCategory.productCategory_name, productunit.productUnit_name, stock.stock_expiryDate, product.product_costPrice, product.product_sellingPrice, product.product_description, product.product_manufacturer  
FROM product
INNER JOIN productcategory ON productcategory.productCategory_id = product.productCategory_id 
INNER JOIN productunit ON productunit.productUnit_id = product.productUnit_id 
INNER JOIN stock ON stock.stock_id = product.stock_id";
$sql_query=mysqli_query($connect, $sql_fetch);

  ?>
 <table class="table table-responsive-sm">
                                    
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Unit</th>
                                                <th>Expiry Date</th>
                                                <th>Cost Price</th>
                                                <th>Selling Price</th>
                                                <th>Dosage & Description</th>
                                                <th>Manufacturer</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                        
                    
  <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
   
    <tr>
    <td><?php echo $rows['product_id'];?></td>    
    <td><?php echo $rows['product_name'];?> </td>
    <td><?php echo $rows['productCategory_name'];?></td>
    <td><?php echo $rows['productUnit_name'];?></td>
    <td><?php echo $rows['stock_expiryDate'];?></td>
    <td><?php echo $rows['product_costPrice'];?></td>
    <td><?php echo $rows['product_sellingPrice'];?></td>
    <td><?php echo $rows['product_description'];?></td>
    <td><?php echo $rows['product_manufacturer'];?></td>
    <td><a href="?delete=<?php echo $rows['product_id'];?>" class="badge badge-danger">Delete</a></td>
    <td><a href="?update=<?php echo $rows['product_id'];?>" class="badge badge-primary">Update</a></td>
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
            <p>Copyright © Designed &amp; Developed by Computing Palace Technologies 2021</p>
            </div>
        </div>

</body>



</html>