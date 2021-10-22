<?php 
include "assets/header.php";
include "main/include.php";
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
  
  // Updating 
  if (isset($_REQUEST['update'])){
// echo "updating successful";
  $patient_id=$_REQUEST['update'];
  $sql_fetch="SELECT * FROM patient WHERE patient_id='$patient_id'";
  $sql_query=mysqli_query($connect, $sql_fetch);
  $rows=mysqli_fetch_assoc($sql_query);

if(isset($_POST['update-record'])){
  //echo working
//   $patient_id=$_POST['patient_id'];
  $patient_name=$_POST['patient_name'];
  $patient_dateOfBirth=$_POST['patient_dateOfBirth'];
  $patient_gender=$_POST['patient_gender'];
  $patient_contact=$_POST['patient_contact'];
  $patient_email=$_POST['patient_email'];
  $patient_address=$_POST['patient_address'];
  $patient_disease=$_POST['patient_disease'];
  $patient_description=$_POST['patient_description'];
  $patient_dateOfEntry=$_POST['patient_dateOfEntry'];
  
  

  $sql_insert="UPDATE patient SET patient_name='$patient_name',patient_gender='$patient_gender',patient_disease='$patient_disease',patient_address='$patient_address',patient_contact='$patient_contact',patient_email='$patient_email',patient_dateOfBirth='$patient_dateOfBirth',patient_dateOfEntry='$patient_dateOfEntry',patient_description='$patient_description' WHERE patient_id='$patient_id'";
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
                               
                            <div class="col-xs-12 row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Patient Name</label>
                                    <input type="text" class="form-control" id="add-name" name="patient_name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-date">Date of Birth</label>
                                    <input type="date" id="add-date" name="patient_dateOfBirth" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-gender">Gender</label>
                                    <select class="form-control" name="patient_gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-contact">Contact</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" id="add-contact" name="patient_contact">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-email">Email</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" id="add-email" name="patient_email">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-address">Address</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" id="add-address" name="patient_address">
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-disease">Disease</label>
                                    <select class="form-control" name="patient_disease">
                                        <option></option>
                                        <option>vdadfsdaf f</option>
                                        <option> adf dsfds</option>
                                        <option>sad ffdasff</option>
                                        <option>asfdf dfd </option>
                                        <option>asdf adssdf</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                            <label class="form-label" for="add-brief">Description</label>
                                            <textarea class="form-control" cols="5" id="add-escription" name="patient_description"></textarea>                                      </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-date">Date of Entry</label>
                                    <input type="date" id="add-date" name="patient_dateOfEntry" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                                </div>                          
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary" name="update-record">Save Changes</button>
                            
                            </div>
                        </form>

                        <?php
}

  // deleting date 
  if (isset($_REQUEST['delete'])){
  $patient_id=$_REQUEST['delete'];
  $sql_delete="DELETE FROM patient WHERE patient_id ='$patient_id'";
  $sql_query=mysqli_query($connect, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($connect);
  }
}
  // retrieving data
//   $sql_fetch=" SELECT sales.employee_id,product.product_name,productunit.productUnit_name,sales.quantity,sales.total_amount,sales.paid_amount,sales.remaining_amount,sales.dateOfSale from product join sales on product.product_id = sales.product_id join productunit on productunit.productUnit_id = sales.productUnit_id";
$sql_fetch="SELECT * FROM patient";
$sql_query=mysqli_query($connect, $sql_fetch);

  ?>
 <table class="table table-responsive-sm">
                                        
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Disease</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>DOB</th>
                                                <th>Entry Date</th>
                                                <th>Description</th>
                                                <th>Delete</td>
                                                <th>Update</td>
                                            </tr>
                                        
                                       
                                    
  <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
   
    <tr>
    <td><?php echo $rows['patient_id'];?></td>
    <td><?php echo $rows['patient_name'];?> </td>
    <td><?php echo $rows['patient_gender'];?></td>
    <td><?php echo $rows['patient_disease'];?></td>
    <td><?php echo $rows['patient_address'];?></td>
    <td><?php echo $rows['patient_contact'];?></td>
    <td><?php echo $rows['patient_email'];?></td>
    <td><?php echo $rows['patient_dateOfBirth'];?></td>
    <td><?php echo $rows['patient_dateOfEntry'];?></td>
    <td><?php echo $rows['patient_description'];?></td>
    <td><a href="?delete=<?php echo $rows['patient_id'];?>" class="badge badge-danger">Delete</a></td>
    <td><a href="?update=<?php echo $rows['patient_id'];?>" class="badge badge-primary">Update</a></td>
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
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
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
            <p>Copyright © Designed &amp; Developed by Computing Palace Technologies 2021</p>
            </div>
        </div>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-bootstrap-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 13:24:32 GMT -->
</html>