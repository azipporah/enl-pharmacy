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
					<h4>Add Treatment</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Treatment</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Treatment</a></li>
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
										$get_product = mysqli_query($connect, "SELECT * FROM `product` WHERE 1");
										while ($product_fetch = mysqli_fetch_assoc($get_product)) {
										?>
											<option value="<?php echo $product_fetch['product_id']; ?>">
												<?php echo ucwords(strtolower($product_fetch['product_name'])); ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-date">Start date</label>
									<input type="date" id="add-date" name="start-date" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-date">End date</label>
									<input type="date" id="add-date" name="end-date" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
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
								<button type="submit" class="btn btn-primary" name="save-treatment">Save</button>
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