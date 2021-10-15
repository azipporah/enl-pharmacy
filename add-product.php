<?php 
include "assets/header.php";
include "main/include.php";
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
					<h4>Add Product</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Product</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Product</a></li>
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
									<label class="form-label" for="add-name">Product name</label>
									<input type="text" class="form-control" id="add-p-name" name="p-name">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Product category</label>
									<select class="form-control" name="p-category">                                        
									<option value="" >Select</option>
                                        <?php
                                            include 'config/connect.php';
                                            $get_pcat = mysqli_query($connect, "SELECT * FROM `productcategory` WHERE 1");
                                            while($pcat_fetch = mysqli_fetch_assoc($get_pcat)) {
                                            ?>
                                            <option value="<?php echo $pcat_fetch['productCategory_id']; ?>"  >
                                            <?php echo ucwords(strtolower($pcat_fetch['productCategory_name'])); ?>
                                            </option>
                                            <?php } ?> 
                                    </select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Product unit</label> 
									<select class="form-control" name="p-unit">                                        
									<option value="" >Select</option>
                                        <?php
                                            include 'config/connect.php';
                                            $get_punit = mysqli_query($connect, "SELECT * FROM `productunit` WHERE 1");
                                            while($punit_fetch = mysqli_fetch_assoc($get_punit)) {
                                            ?>
                                            <option value="<?php echo $punit_fetch['productUnit_id']; ?>"  >
                                            <?php echo ucwords(strtolower($punit_fetch['productUnit_name'])); ?>
                                            </option>
                                            <?php } ?> 
                                    </select>
								</div>
								
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-qnty">Unit price</label>
									<input type="text" class="form-control" id="add-qnty" name="unit-price">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Cost price</label>
									<input type="text" class="form-control" id="add-cprice" name="cprice">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Selling price</label>
									<input type="text" class="form-control" id="add-sprice" name="sprice">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Dosage</label>
									<select class="form-control" name="dose">                                        
									<option value="" >Select</option>
                                        <?php
                                            include 'config/connect.php';
                                            $get_dose = mysqli_query($connect, "SELECT * FROM `dosage` WHERE 1");
                                            while($dose_fetch = mysqli_fetch_assoc($get_dose)) {
                                            ?>
                                            <option value="<?php echo $dose_fetch['dosage_id']; ?>"  >
                                            <?php echo ucwords(strtolower($dose_fetch['dosage_name'])); ?>
                                            </option>
                                            <?php } ?> 
                                    </select>
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-date">Expiry date</label>
									<input type="date" id="add-date" name="xdate" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Description</label>
									<input type="text-area" class="form-control" id="add-desc" name="desc">
								</div>
								<div class="form-group col-sm-6">
									<label class="form-label" for="add-name">Manufacturer</label>
									<input type="text" class="form-control" id="add-manu" name="manu">
								</div>
							</div>
							<div class="col-xs-12">
								<button type="submit" class="btn btn-primary" name="save-product">Save</button>
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