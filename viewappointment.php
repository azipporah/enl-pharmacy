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
      $appointment_id = $_REQUEST['update'];
      $sql_fetch = "SELECT * FROM appointment WHERE aId ='$appointment_id'";
      $sql_query = mysqli_query($connect, $sql_fetch);
      // $rows=mysqli_fetch_assoc($sql_query);

      if (isset($_POST['update-record'])) {
        //echo working
        $aId = $_POST['appointment_id'];
        $dateOfAppointment = $_POST['dateOfAppointment'];
        $patient_name = $_POST['patient_name'];
        


        $sql_insert = "UPDATE appointment SET dateOfAppointment='$dateOfAppointment',patient_name='$patient_name' WHERE aId='$appointment_id'";
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
            <label class="form-label" for="add-date">Date of Appointment</label>
            <input type="date" id="add-date" name="dateOfAppointment" class="form-control datepicker" data-format="mm/dd/yyyy" value="">

          </div>
          <div class="form-group col-sm-6">
            <label class="form-label" for="add-date">Patient name</label>
            <select class="form-control" name="patient_name">
              <option value="">Select</option>
              <?php
              include 'config/connect.php';
              $get_pname = mysqli_query($connect, "SELECT * FROM `patient` WHERE 1");
              while ($pname_fetch = mysqli_fetch_assoc($get_pname)) {
              ?>
                <option value="<?php echo $pname_fetch['patient_id']; ?>">
                  <?php echo ucwords(strtolower($pname_fetch['patient_name'])); ?>
                </option>
              <?php } ?>
            </select>
          </div>


        </div>
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary" name="update-record">Save</button>
          <button type="button" class="btn" name="cancel">Cancel</button>
        </div>
      </form>
    <?php
    }

    // deleting date 
    if (isset($_REQUEST['delete'])) {
      $appointment_id = $_REQUEST['delete'];
      $sql_delete = "DELETE FROM appointment WHERE appointment_id='$appointment_id'";
      $sql_query = mysqli_query($connect, $sql_delete);
      if ($sql_query == TRUE) {
        echo "Deleted successful";
      } else {
        echo mysqli_error($connect);
      }
    }
    // retrieving data
    $sql_fetch = "SELECT appointment.appointment_id,appointment.dateOfAppointment,patient.patient_name,appointment.status from patient join appointment on patient.patient_id = appointment.patient_id";
    $sql_query = mysqli_query($connect, $sql_fetch);

    ?>
    <table class="table table-responsive-sm">

      <tr>
        <th>ID</th>
        <th>Appointment Date</th>
        <th>Patient Name</th>
        <th>Delete</th>
        <th>Update</th>

      </tr>

      <?php
      while ($rows = mysqli_fetch_assoc($sql_query)) {

      ?>

        <tr>
          <td><?php echo $rows['appointment_id']; ?></td>
          <td><?php echo $rows['dateOfAppointment']; ?></td>
          <td><span class="badge badge-primary"></span><?php echo $rows['patient_name']; ?> </td>
          <td><a href="?delete=<?php echo $rows['appointment_id']; ?>" class="badge badge-danger">Delete</a></td>
          <td><a href="?update=<?php echo $rows['appointment_id']; ?>" class="badge badge-primary">Update</a></td>
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