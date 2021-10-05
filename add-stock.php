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
					<h4>Add Stock</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Stock</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Stock</a></li>
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
									<label class="form-label" for="add-name">Employee name</label>
									<input type="text" class="form-control" id="add-ename" name="ename">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Product name</label>
									<input type="text" class="form-control" id="add-p-name" name="p-name">
								</div>
                                <div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Product Category</label>
									<input type="text" class="form-control" id="add-pcategory" name="p-category">
								</div>
                                <div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Product Unit</label>
									<input type="text" class="form-control" id="add-punit" name="p-unit">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-date">Stock expiry date</label>
									<input type="date" id="add-date" name="stock-expiry" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
								</div>
                                <div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Stock quantity</label>
									<input type="text" class="form-control" id="add-stockqnty" name="stock-qnty">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Stock Description</label>
									<input type="text-area" class="form-control" id="add-stockdesc" name="stock-desc">
								</div>


							</div>
							<div class="col-xs-12">
								<button type="submit" class="btn btn-primary" name="save-stock">Save</button>
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