<?php include "assets/header.php"; ?>
<?php
include "config/connect.php";
$employees = "SELECT * FROM `employee` WHERE employee.status='1' ORDER BY `employee`.`employee_id` DESC";
$execute_employees = mysqli_query($connect, $employees);

?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Date of birth</th>
                                        <th>Gender</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Date of Entry</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($execute_employees)) { ?>
                                    <tr>

                                        <td><?php echo $row['employee_name']; ?></td>
                                        <td><?php echo $row['employee_dateOfBirth']; ?></td>
                                        <td><?php echo $row['employee_gender']; ?></td>
                                        <td><?php echo $row['employee_contact']; ?></td>
                                        <td><?php echo $row['employee_email']; ?></td>
                                        <td><?php echo $row['Address']; ?></td>
                                        <td><?php echo $row['employee_dateOfEntry']; ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-eye"></i></button>
                                        </td>


                                    </tr>
                                <?php } ?>



                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include "assets/footer.php"; ?>