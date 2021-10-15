<?php include "assets/header.php"; ?>


<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Product Category</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Product Category</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Product Category</a></li>
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
                                        <th>Category Id</th>
                                        <th>Category Name</th>
                                        <th>Entry date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($show_productCategory = mysqli_fetch_assoc($execute_productCategory)) { ?>
                                    <tr>
                                        <td><?php echo $show_productCategory['productCategory_id']; ?></td>
                                        <td><?php echo $show_productCategory['productCategory_name']; ?></td>
                                        <td><?php echo $show_productCategory['created_at']; ?></td>
                                        <td>
                                            <a href="?delete=<?php echo $rows['productCategory_id']; ?>"><button type="submit" class="btn btn-danger"><i class="" ></i></button></a>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit" href="?update=<?php echo $rows['productCategory_id']; ?>"></i></button>
                                            
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