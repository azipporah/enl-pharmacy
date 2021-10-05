<?php include "assets/header.php"; ?>

<!--**********************************
            Content body start
        ***********************************-->
<?php
echo $Error;
?>
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Add Patient</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Patient</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Patient</a></li>
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
									<label class="form-label" for="add-name">Name</label>
									<input type="text" class="form-control" id="add-name" name="pname">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-date">Date of Birth</label>
									<input type="date" id="add-date" name="pdob" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-gender">Gender</label>
									<select class="form-control" name="pgender">
										<option></option>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-contact">Contact</label>
									<div class="controls">
										<input type="text" class="form-control" id="add-contact" name="pcontact">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-email">Email</label>
									<div class="controls">
										<input type="text" class="form-control" id="add-email" name="pemail">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-address">Address</label>
									<div class="controls">
										<input type="text" class="form-control" id="add-address" name="paddress">
									</div>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-disease">Disease</label>
									<select class="form-control" name="pdisease">
										<option></option>
										<option>Male</option>
										<option>Female</option>
                                        <option></option>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
                                <div class="form-group col-sm-6">
											<label class="form-label" for="add-brief">Description</label>
											<textarea class="form-control" cols="5" id="add-escription" name="pdescription"></textarea>										</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-date">Date of Entry</label>
									<input type="date" id="add-date" name="pdoe" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
								</div>							
							</div>
							<div class="col-xs-12">
								<button type="submit" class="btn btn-primary" name="save-patient">Save</button>
								<button type="button" class="btn" name="cancel">Cancel</button>
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