<?php 
include "assets/header.php";
// include "main/include.php";

?>

<!--**********************************
            Content body start
        ***********************************-->

<div class="content-body">
	<!-- row -->
	<?php
	echo $Error;
	echo $New;
	?>
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Add Sales</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Sales</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Sales</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12 col-xxl-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Basic Info</h5>
					</div>
					<div class="card-body">
						<form action="#" method="post">
							<div class="col-xs-12 row">
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Employee Name</label>
									<select class="form-control" name="name">
										<option value="">Select</option>
										<?php
										include 'config/connect.php';
										$get_emp = mysqli_query($connect, "SELECT * FROM `employee` WHERE 1");
										while ($emp_fetch = mysqli_fetch_assoc($get_emp)) {
										?>
											<option value="<?php echo $emp_fetch['employee_id']; ?>">
												<?php echo ucwords(strtolower($emp_fetch['employee_name'])); ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Patient name</label>
									<select class="form-control" name="pname">
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
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Product name</label>
									<select class="form-control" name="p-name">
										<option value="">Select</option>
										<?php
										include 'config/connect.php';
										$get_pName = mysqli_query($connect, "SELECT * FROM `product` WHERE 1");
										while ($pName_fetch = mysqli_fetch_assoc($get_pName)) {
										?>
											<option value="<?php echo $pName_fetch['product_id']; ?>">
												<?php echo ucwords(strtolower($pName_fetch['product_name'])); ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Product category</label>
									<select class="form-control" name="p-category">
										<option value="">Select</option>
										<?php
										include 'config/connect.php';
										$get_pcat = mysqli_query($connect, "SELECT * FROM `productcategory` WHERE 1");
										while ($pcat_fetch = mysqli_fetch_assoc($get_pcat)) {
										?>
											<option value="<?php echo $pcat_fetch['productCategory_id']; ?>">
												<?php echo ucwords(strtolower($pcat_fetch['productCategory_name'])); ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Product unit</label>
									<select class="form-control" name="p-unit">
										<option value="">Select</option>
										<?php
										include 'config/connect.php';
										$get_punit = mysqli_query($connect, "SELECT * FROM `productunit` WHERE 1");
										while ($punit_fetch = mysqli_fetch_assoc($get_punit)) {
										?>
											<option value="<?php echo $punit_fetch['productUnit_id']; ?>">
												<?php echo ucwords(strtolower($punit_fetch['productUnit_name'])); ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-qnty">Unit price</label>
									<select class="form-control" name="unit_price">
										<option value="">Select</option>
										<?php
										include 'config/connect.php';
										$get_unitPrice = mysqli_query($connect, "SELECT * FROM `stock` WHERE 1");
										while ($unitPrice_fetch = mysqli_fetch_assoc($get_unitPrice)) {
										?>
											<option value="<?php echo $unitPrice_fetch['stock_id']; ?>">
												<?php echo ucwords(strtolower($unitPrice_fetch['unit_price'])); ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-qnty">Quantity</label>
									<input type="text" class="form-control" id="add-qnty" name="quantity">
								</div>
								
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-date">Paid amount</label>
									<input type="text" class="form-control" id="add-pamount" name="pamount">
								</div>
								
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-date">Date of Sale</label>
									<input type="date" id="add-date" name="dos" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
								</div>

							</div>
							<div class="col-xs-12">
								<button type="submit" class="btn btn-primary" name="save-sales">Save</button>
								<!-- <button type="button" class="btn" name="cancel">Cancel</button> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

<?php include "assets/footer.php"; ?>