<?php include "assets/header.php"; ?>

<!--**********************************
            Content body start
        ***********************************-->

<div class="content-body">
	<!-- row -->
	<?php
	// echo $Error;
	// echo $New;
	?>
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Add Product Category</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Product Category</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Product Category</a></li>
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
									<label class="form-label" for="add-date">Product Category</label>
									<input type="text" class="form-control" id="add-category" name="category">
								</div>

							</div>
							<div class="col-xs-12">
								<button type="submit" class="btn btn-primary" name="save-pcat">Save</button>
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