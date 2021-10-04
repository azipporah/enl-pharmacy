<?php include "assets/header.php"; ?>
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Doctor</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Doctor</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Doctor</a></li>
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
									<div class="col-xs-12">
										<div class="form-group">
											<label class="form-label" for="add-name">Name</label>
											<input type="text" class="form-control" id="add-name">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-date">Date of Birth</label>
											<input type="text" id="add-date" class="form-control datepicker" data-format="mm/dd/yyyy" value="">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-gender">Gender</label>
											<select class="form-control">
												<option></option>
												<option>Male</option>
												<option>Female</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label" for="add-profile">Profile Image</label>
											<input type="file" class="form-control" id="add-profile">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-speciality">Speciality</label>
											<div class="controls">
												<input type="text" class="form-control" id="add-speciality">
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="add-brief">Brief</label>
											<textarea class="form-control" cols="5" id="add-brief"></textarea>
											<small class="text-muted">Enter any size of text description here</small>
										</div>
										<div class="form-group">
											<label class="form-label" for="add-website">Website URL</label>
											<input type="text" class="form-control" id="add-website">
										</div>
									</div>
									<div class="col-xs-12">
										<button type="button" class="btn btn-primary">Save</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Doctor Account Info</h5>
							</div>
							<div class="card-body">
                                <form action="#" method="post">
									<div class="col-xs-12">
										<div class="form-group">
											<label class="form-label" for="add-email">Email</label>
											<input type="text" class="form-control" id="add-email">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-phone">Phone</label>
											<input type="text" class="form-control" id="add-phone" data-mask="phone" placeholder="(+91) 123 456 7890">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-password">Password</label>
											<input type="password" value="" class="form-control" id="add-password">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-con-password">Confirm Password</label>
											<input type="password" value="" class="form-control" id="add-con-password">
										</div>
									</div>
									<div class="col-xs-12">
										<button type="button" class="btn btn-primary">Save</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Doctor Social Media Info</h5>
							</div>
							<div class="card-body">
                                <form action="#" method="post">
									<div class="col-xs-12">
										<div class="form-group">
											<label class="form-label" for="add-facebook">Facebook URL</label>
											<input type="text" class="form-control" value="http://www.facebook.com" id="add-facebook">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-twitter">Twitter URL</label>
											<input type="text" class="form-control" value="http://www.twitter.com" id="add-twitter">
										</div>
										<div class="form-group">
											<label class="form-label" for="add-google">Google Plus URL</label>
											<input type="text" class="form-control" value="http://www.plus.google.com" id="add-google">
										</div>
									</div>
									<div class="col-xs-12">
										<button type="button" class="btn btn-primary">Save</button>
										<button type="button" class="btn">Cancel</button>
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

<?php include "assets/footer.php";?>