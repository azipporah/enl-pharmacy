<?php include "assets/header.php"; ?>
<?php
include "config/connect.php";
$customer = "SELECT * FROM `customer` WHERE 1";
$execute_customer = mysqli_query($connect, $customer);
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Drugs</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Customers</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
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
                                        <th>Customer Name</th>
                                        <th>Customer Address</th>
                                        <th>Customer Contact</th>
                                        <th>Customer Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($show_customer = mysqli_fetch_assoc($execute_customer)) { ?>
                                    <tr>
                                        <td><?php echo $show_customer['customer_name']; ?></td>
                                        <td><?php echo $show_customer['customer_address']; ?></td>
                                        <td><?php echo $show_customer['customer_contact']; ?></td>
                                        <td><?php echo $show_customer['customer_type']; ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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