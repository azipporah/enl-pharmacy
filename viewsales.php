<?php include "assets/header.php";

include 'main/include.php';     ?>

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
            $sales_id = $_REQUEST['update'];
            $sql_fetch = "SELECT * FROM sales WHERE sales_id='$sales_id'";
            $sql_query = mysqli_query($connect, $sql_fetch);
            $rows = mysqli_fetch_assoc($sql_query);

            if (isset($_POST['update-record'])) {
                //echo working
                $employee_id = $_POST['employee_id'];
                $quantity = $_POST['quantity'];
                $total_amount = $_POST['tamount'];
                $paid_amount = $_POST['paid_amount'];
                $remaining_amount = $_POST['ramount'];
                $dateOfSale = $_POST['dateOfSale'];


                $sql_insert = "UPDATE sales SET  quantity='$quantity',total_amount='$total_amount',paid_amount='$paid_amount', remaining_amount='$remaining_amount', dateOfSale='$dateOfSale'WHERE sales_id='$sales_id'";
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
                                    <label class="form-label" for="add-name">Product Name</label>
                                    <input type="text" class="form-control" id="add-p-name" name="p_name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label" for="add-name">Product unit</label>
                                    <input type="text" class="form-control" id="add-p-unit" name="p_unit">
                                </div> -->

                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-qnty">Quantity</label>
                        <input type="text" class="form-control" id="add-qnty" name="quantity">
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-date">Paid amount</label>
                        <input type="text" class="form-control" id="add-pamount" name="paid_amount">
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="form-label" for="add-date">Date of Sale</label>
                        <input type="date" id="add-date" name="dateOfSale" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
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
            $sales_id = $_REQUEST['delete'];
            $sql_delete = "DELETE FROM sales WHERE sales_id='$sales_id'";
            $sql_query = mysqli_query($connect, $sql_delete);
            if ($sql_query == TRUE) {
                echo "Deleted successful";
            } else {
                echo mysqli_error($connect);
            }
        }
        // retrieving data
        // $sql_fetch = "SELECT sales.sales_id,employee.employee_name,patient.patient_name,product.product_name,productunit.productUnit_name,sales.quantity,sales.total_amount,sales.paid_amount,sales.remaining_amount,sales.dateOfSale from product join sales on product.product_id = sales.product_id join productunit on productunit.productUnit_id = sales.productUnit_id join employee on employee.employee_id = sales.employee_id join patient on patient.patient_id = sales.patient_id";
            $sql_fetch = "SELECT sales.sales_id,employee.employee_name,patient.patient_name,product.product_name,productunit.productUnit_name,sales.quantity,stock.unit_price,sales.total_amount,sales.paid_amount,sales.remaining_amount,sales.dateOfSale 
            from sales 
            inner join product on product.product_id = sales.product_id 
            inner join productunit on productunit.productUnit_id = sales.productUnit_id 
            inner join employee on employee.employee_id = sales.employee_id 
            inner join patient on patient.patient_id = sales.patient_id 
            inner join stock on stock.stock_id = sales.stock_id";
            
        $sql_query = mysqli_query($connect, $sql_fetch);

        ?>
        <table class="table table-responsive-sm">

            <tr>
                <th>Sales Id</th>
                <th>Employee Name</th>
                <th>Patient Name</th>
                <th>Product Name</th>
                <th>Product Unit</th>
                <th>Unit price</th>
                <th>Quantity</th>
                <th>Total Amount</th>
                <th>Paid Amount</th>
                <th>Remaining Amount</th>
                <th>Date Of Sales</th>
                <th>Delete</th>
                <th>Update</th>

            </tr>

            <?php
            while ($rows = mysqli_fetch_assoc($sql_query)) {

            ?>

                <tr>
                    <td><?php echo $rows['sales_id']; ?></td>
                    <td><?php echo $rows['employee_name']; ?></td>
                    <td><?php echo $rows['patient_name']; ?></td>
                    <td><?php echo $rows['product_name']; ?> </td>
                    <td><?php echo $rows['productUnit_name']; ?></td>
                    <td><?php echo $rows['unit_price']; ?></td>
                    <td><?php echo $rows['quantity']; ?></td>
                    <td>
                        <!-- <?php
                        // $get_totalAmount = "SELECT sales.quantity * stock_id.unit_price AS total_amount FROM sales ORDER BY sales_id";
                        // // $result1 = mysqli_query($connect, $get_totalAmount);
                        // $resultCheck1 = mysqli_num_rows(mysqli_query($connect, $get_totalAmount));
                        // if ($resultCheck1 > 0) {
                        //     while ($row = mysqli_fetch_assoc($result1)) {
                        //         echo $row['total_amount'];
                        //     }
                        // }

                        ?> -->
                    </td>
                    <td><?php echo $rows['paid_amount']; ?></td>
                    <td>
                        <?php 
                     $sql = "SELECT  (total_amount - paid_amount) as remaining_amount FROM sales ORDER BY sales_id DESC LIMIT 1";
                        $result = mysqli_query($connect, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['remaining_amount'];
                            }
                        } 
                    ?>
                    </td>
                    <td><?php echo $rows['dateOfSale']; ?> </td>
                    <td><a href="?delete=<?php echo $rows['sales_id']; ?>" class="badge badge-danger">Delete</a></td>
                    <td><a href="?update=<?php echo $rows['sales_id']; ?>" class="badge badge-primary">Update</a></td>
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
        <!-- Scripts
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