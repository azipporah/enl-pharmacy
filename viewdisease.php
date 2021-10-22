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
          <p class="mb-0">to this page.</p>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Diseases' Table</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>

        </ol>
      </div>
    </div>
    <!-- row -->
    <?php


    include 'config/connect.php';
    include "main/include.php";

    // Updating 
    if (isset($_REQUEST['update'])) {
      // echo "updating successful";
      $disease_id = $_REQUEST['update'];
      $sql_fetch = "SELECT * FROM disease WHERE disease_id='$disease_id'";
      $sql_query = mysqli_query($connect, $sql_fetch);
      $rows = mysqli_fetch_assoc($sql_query);

      if (isset($_POST['update-record'])) {
        //echo working
        // $productUnit_id = $_POST['productUnit_id'];
        $disease_name = $_POST['disease_name'];
        $affected_gender = $_POST['affected_gender'];

        $sql_insert = "UPDATE disease SET disease_name='$disease_name', affected_gender = '$affected_gender' WHERE disease_id='$disease_id'";
        $sql_query = mysqli_query($connect, $sql_insert);
        if ($sql_query == TRUE) {
          // echo " updated successful";
        } else {
          echo mysqli_error($connect);
        }
      }
    ?>
      <form action="#" method="post">
        <div class="col-xs-12 row">
          <div class="form-group col-sm-6">
            <label class="form-label" for="add-date">Disease name</label>
            <input type="text" class="form-control" id="add-p-name" name="disease_name">
          </div>
          <div class="form-group col-sm-6">
            <label class="form-label" for="add-date">Affected gender</label>
            <input type="text" class="form-control" id="add-p-name" name="affected_gender">
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
    if (isset($_REQUEST['delete'])) {
      $disease_id = $_REQUEST['delete'];
      $sql_delete = "DELETE FROM disease WHERE disease_id='$disease_id'";
      $sql_query = mysqli_query($connect, $sql_delete);
      if ($sql_query == TRUE) {
        echo "Deleted successful";
      } else {
        echo mysqli_error($connect);
      }
    }
    // retrieving data
    $sql_fetch = "SELECT * FROM disease";
    $sql_query = mysqli_query($connect, $sql_fetch);

    ?>
    <table class="table table-responsive-sm">

      <tr>
        <th>Disease Id</th>
        <th>Disease Name</th>
        <th>Affected Gender</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>



      <?php
      while ($rows = mysqli_fetch_assoc($sql_query)) {

      ?>

        <tr>
          <td><?php echo $rows['disease_id']; ?></td>
          <td><?php echo $rows['disease_name']; ?></td>
          <td><?php echo $rows['affected_gender']; ?></td>
          <td><a href="?delete=<?php echo $rows['disease_id']; ?>" class="badge badge-danger">Delete</a></td>
          <td><a href="?update=<?php echo $rows['disease_id']; ?>" class="badge badge-primary">Update</a></td>
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