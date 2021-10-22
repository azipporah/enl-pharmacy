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
            $treatment_id = $_REQUEST['update'];
            $sql_fetch = "SELECT * FROM treatment WHERE treatment_id='$treatment_id'";
            $sql_query = mysqli_query($connect, $sql_fetch);
            $rows = mysqli_fetch_assoc($sql_query);

            if (isset($_POST['update-record'])) {
                //echo working
                $pname = $_POST['pname'];
                  $p_name =$_POST['p_name'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                $t_status = $_POST['treatment_status'];


                $sql_insert = "UPDATE treatment SET start_date='$start_date', end_date='$end_date', status='$t_status' WHERE treatment_id='$treatment_id'";
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

                    <!-- <div class="form-group col-sm-6">
                        <label class="form-label" for="add-name">Patient name</label>
                        <input type="text" class="form-control" id="add-p-name" name="pname">

                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-name">Product name</label>
                        <input type="text" class="form-control" id="add-p-name" name="p_name">
                    </div> -->
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-date">Start date</label>
                        <input type="date" id="add-date" name="start_date" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-date">End date</label>
                        <input type="date" id="add-date" name="end_date" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                    </div>
                    <!-- <div class="form-group col-sm-6">
                        <label class="form-label" for="add-tstatus">Treatment status</label>
                        <select class="form-control" name="treatment_status">
                            <option></option>
                            <option>On-going</option>
                            <option>Completed</option>
                        </select>
                    </div> -->
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary" name="update-record">Save</button>
                    <!-- <button type="button" class="btn" name="cancel">Cancel</button> -->
                </div>
            </form>
        <?php
        }

        // deleting date 
        if (isset($_REQUEST['delete'])) {
            $treatment_id = $_REQUEST['delete'];
            $sql_delete = "DELETE FROM treatment WHERE treatment_id='$treatment_id'";
            $sql_query = mysqli_query($connect, $sql_delete);
            if ($sql_query == TRUE) {
                echo "Deleted successful";
            } else {
                echo mysqli_error($connect);
            }
        }
        // retrieving data
        $sql_fetch = "SELECT treatment.treatment_id, patient.patient_name, product.product_name, treatment.start_date, treatment.end_date, treatment.treatment_status 
        FROM patient 
        join treatment on patient.patient_id = treatment.patient_id 
        join product on product.product_id = treatment.product_id";
        $query = mysqli_query($connect, $sql_fetch);

        ?>
        <table class="table table-responsive-sm">

            <tr>
                <th>Treatment Id</th>
                <th>Patient Name</th>
                <th>Product Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <!-- <th>Treatment status</th> -->
                <th>Delete</th>
                <th>Update</th>

            </tr>

            <?php
            while ($rows = mysqli_fetch_assoc($query)) {

            ?>

                <tr>
                    <td><?php echo $rows['treatment_id']; ?></td>
                    <td><?php echo $rows['patient_name']; ?></td>
                    <td><?php echo $rows['product_name']; ?> </td>
                    <td><?php echo $rows['start_date']; ?></td>
                    <td><?php echo $rows['end_date']; ?></td>               
                    <td><a href="?delete=<?php echo $rows['treatment_id']; ?>" class="badge badge-danger">Delete</a></td>
                    <td><a href="?update=<?php echo $rows['treatment_id']; ?>" class="badge badge-primary">Update</a></td>
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


<!-- Mirrored from medico.dexignzone.com/admin/table-bootstrap-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 13:24:32 GMT -->

</html>