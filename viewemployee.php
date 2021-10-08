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


        include 'connect.php';

        // Updating 
        if (isset($_REQUEST['update'])) {
            // echo "updating successful";
            $patient_id = $_REQUEST['update'];
            $sql_fetch = "SELECT * FROM employee WHERE employee_id='$employee_id'";
            $sql_query = mysqli_query($conn, $sql_fetch);
            $rows = mysqli_fetch_assoc($sql_query);

            if (isset($_POST['update-record'])) {
                //echo working
                $name = $_POST['name'];
                $name = mysqli_real_escape_string($conn, $name);
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $address = mysqli_real_escape_string($conn, $address);
                $patient_dateOfEntry = $_POST['patient_patient_dateOfEntry'];






                $sql_insert = "UPDATE employee SET name='$patient_name', dob='$patient_dateOfBirth', gender='$patient_gender', contact='$patient_contact', email='$patient_email', address='$patient_address', doe='$patient_dateOfEntry',WHERE patient_id='$patient_id'";
                $sql_query = mysqli_query($conn, $sql_insert);
                if ($sql_query == TRUE) {
                    echo " updated successful";
                } else {
                    echo mysqli_error($conn);
                }
            }
        ?>
            ?>

            <form action="#" method="post">
                <div class="col-xs-12 row">
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-name">Name</label>
                        <input type="text" class="form-control" id="add-name" name="name">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-date">Date of Birth</label>
                        <input type="date" id="add-date" name="dob" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-gender">Gender</label>
                        <select class="form-control" name="gender">
                            <option></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-contact">Contact</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="add-contact" name="contact">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-email">Email</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="add-email" name="email">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-address">Address</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="add-address" name="address">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-date">Date of Entry</label>
                        <input type="date" id="add-date" name="doe" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-password">Password</label>
                        <div class="controls">
                            <input type="password" class="form-control" id="add-password" name="password">
                        </div>
                    </div>


                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary" name="save-employee">Save</button>
                    <button type="button" class="btn" name="cancel">Cancel</button>
                </div>
            </form>


        <?php
        }

        // retrieving data
        $sql_fetch = "SELECT * FROM employee";
        $sql_query = mysqli_query($conn, $sql_fetch);

        ?>
        <table class="table table-responsive-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Date Of Birth</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Date Of Entry</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>

        </table>
        <?php
        while ($rows = mysqli_fetch_assoc($sql_query)) {

        ?>
            <tbody>
                <tr>
                    <th><?php echo $rows['employee_id']; ?></th>

                    <td><span class="badge badge-primary"></span><?php echo $rows['employee_name']; ?> </td>
                    <td><?php echo $rows['employee_dateOfBirth']; ?></td>
                    <td><?php echo $rows['employee_gender']; ?></td>
                    <td><span class="badge badge-primary"><?php echo $rows['employee_contact']; ?></span> </td>
                    <td><?php echo $rows['employee_email']; ?></td>
                    <td><?php echo $rows['employee_address']; ?></td>
                    <td><?php echo $rows['employee_dateOfEntry']; ?></td>
                    <td><a href="?delete=<?php echo $rows['employee_id']; ?>">Delete</a></td>
                    <td><a href="?update=<?php echo $rows['employee_id']; ?>">Update</a></td>
                </tr>
            </tbody>

        <?php
        }
        ?>


    </div>

</div>
</div>


    <?php include "assets/footer.php"; ?>