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
        if (isset($_REQUEST['update'])) {
            // echo "updating successful";
            $employee_id = $_REQUEST['update'];
            $sql_fetch = "SELECT * FROM employee WHERE employee_id='$employee_id'";
            $sql_query = mysqli_query($connect, $sql_fetch);
            $rows = mysqli_fetch_assoc($sql_query);

            if (isset($_POST['update-record'])) {
                //echo working
                @$employee_name =$_POST['employee_name'];
                $employee_dateOfBirth = $_POST['employee_dateOfBirth'];
                $employee_gender = $_POST['employee_gender'];
                $employee_contact = $_POST['employee_contact'];
                $employee_email = $_POST['employee_email'];
                $Address = $_POST['Address'];
                $employee_dateOfEntry = $_POST['employee_dateOfEntry'];
        


 

                $sql_insert = "UPDATE employee SET employee_name='$employee_name',employee_gender='employee_gender',employee_dateOfBirth='$employee_dateOfBirth',employee_contact='$employee_contact',employee_email='$employee_email',Address='$Address',employee_password='$Address',employee_dateOfEntry='$employee_dateOfEntry' WHERE employee_id='$employee_id' ";
                $sql_query = mysqli_query($connect, $sql_insert);
                if ($sql_query == TRUE) {
                    echo " updated successful";
                } else {
                    echo mysqli_error($connect);
                }
            }
        ?>
<form action="#" method="post">
                <div class="col-xs-12 row">
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-name">Name</label>
                        <input type="text" class="form-control" id="add-name" name="name">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-date">Date of Birth</label>
                        <input type="date" id="add-date" name="employee_dateOfBirth" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-gender">Gender</label>
                        <select class="form-control" name="employee_gender">
                            <option></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-contact">Contact</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="add-contact" name="employee_contact">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-email">Email</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="add-email" name="employee_email">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-address">Address</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="add-address" name="Address">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-date">Date of Entry</label>
                        <input type="date" id="add-date" name="employee_dateOfEntry" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-password">Password</label>
                        <div class="controls">
                            <input type="password" class="form-control" id="add-password" name="employee_password">
                        </div>
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
  $sql_delete="DELETE FROM employee WHERE employee_id ='$employee_id'";
  $sql_query=mysqli_query($connect, $sql_delete);
  if ($sql_query==TRUE){
    echo "Deleted successful";
  }else{
    echo mysqli_error($connect);
  }
}
  // retrieving data
$sql_fetch="SELECT * FROM employee";
$sql_query=mysqli_query($connect, $sql_fetch);

  ?>
 <table class="table table-responsive-sm">
                                        
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Birth Date</th>
                                                <th>Gender</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                 <th>Address</th>
                                                <th>Entry Date</th>
                                                <th>Password</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                                        
                                       
                                    
  <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
   
    <tr>
     <td><?php echo $rows['employee_id'];?></td>
    <td><span class="badge badge-primary"></span><?php echo $rows['employee_name'];?> </td>
    <td><?php echo $rows['employee_dateOfBirth'];?></td>
     <td><?php echo $rows['employee_gender'];?></td>
    <td><span class="badge badge-primary"><?php echo $rows['employee_contact'];?></span> </td>
    <td><?php echo $rows['employee_email'];?></td>
    <td><?php echo $rows['Address'];?></td>
     <td><?php echo $rows['employee_dateOfEntry'];?></td>
      <td><?php echo $rows['employee_password'];?></td>
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
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
</body>


<!-- Mirrored from medico.dexignzone.com/admin/table-bootstrap-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 13:24:32 GMT -->
</html>