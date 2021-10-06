<?php
session_start();
include 'earth_db.php';

// submitting data to the  patient database
if(isset($_POST['save-patient'])){
	$patient_name=$_POST['pname'];
	$patient_name=mysqli_real_escape_string($connect, $patient_name);	
	$patient_dateOfBirth=$_POST['pdob'];
	$patient_dateOfBirth=mysqli_real_escape_string($connect, $patient_dateOfBirth);
	$patient_gender=$_POST['pgender'];
	$patient_gender=mysqli_real_escape_string($connect, $patient_gender);
	$patient_contact=$_POST['pcontact'];
	$patient_contact=mysqli_real_escape_string($connect, $patient_contact);
	$patient_email=$_POST['pemail'];
	$patient_email=mysqli_real_escape_string($connect, $patient_email);
	$patient_address=$_POST['paddress'];
	$patient_disease=$_POST['pdisease'];
	$patient_disease=mysqli_real_escape_string($connect, $patient_disease);
	$patient_description=$_POST['pdescription'];
	$patient_description=mysqli_real_escape_string($connect, $patient_description);
	$patient_dateOfEntry=$_POST['pdoe'];
	$patient_dateOfEntry=mysqli_real_escape_string($connect, $patient_dateOfEntry);		
	
	$insert_patient ="INSERT INTO patient(patient_name,patient_gender,patient_address,patient_contact,patient_email,patient_dateOfBirth,patient_dateOfEntry,patient_description) 
					VALUES ('$patient_id','$patient_name','$patient_gender','$patient_address','$patient_contact','$patient_email','$dateOfBirth','$patient_dateOfEntry','$patient_description')";
	
	//executing the insert query
	$execute_patientInsert = mysqli_query($connect, $insert_patient);

	if(mysqli_query($connect, $insert_patient)) {
		$New = "New employee added succesfully";          
	}      
	else{
		$Error = "Error". $insert_patient ."</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}


// submitting data to the treatment database
if(isset($_POST['Submit2'])){
	$treatment_id=$_POST['treatment_id'];
	$treatment_id=mysqli_real_escape_string($conn, $treatment_id);
	$patient_id=$_POST['patient_id'];
	$patient_id=mysqli_real_escape_string($conn, $patient_id);
	$product_id=$_POST['product_id'];
	$product_id=mysqli_real_escape_string($conn, $product_id);
	$start_date=$_POST['start_date'];
	$start_date=mysqli_real_escape_string($conn, $start_date);
	$end_date=$_POST['end_date'];
	$end_date=mysqli_real_escape_string($conn, $end_date);
	$treatment_status=$_POST['treatment_status'];
	$treatment_status=mysqli_real_escape_string($conn, $treatment_status);
	$created_at =$_POST['created_at'];
	$created_at =mysqli_real_escape_string($conn, $created_at);
	$status =$_POST['status'];
	$status =mysqli_real_escape_string($conn, $status);
	


	

	$sql_insert="INSERT INTO treatment(treatment_id,patient_id,product_id,start_date,end_date,treatment_status,created_at,status) VALUES ('$treatment_id','$patient_id','$product_id','$start_date','$end_date','$treatment_status','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}



// submitting data to the appointment database
if(isset($_POST['Submit3'])){

	$appointment_id=$_POST['appointment_id'];
	$appointment_id=mysqli_real_escape_string($conn, $appointment_id);
	$patient_id=$_POST['patient_id'];
	$patient_id=mysqli_real_escape_string($conn, $patient_id);
	$dateOfAppointment=$_POST['dateOfAppointment'];
	$dateOfAppointment=mysqli_real_escape_string($conn, $dateOfAppointment);
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
	$status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	
	$sql_insert="INSERT INTO appointment(appointment_id,patient_id,dateOfAppointment,created_at,status) VALUES ($appointment_id','$patientId','$dateOfAppointment','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the  product database
if(isset($_POST['Submit4'])){
	$product_id=$_POST['product_id'];
	$product_id=mysqli_real_escape_string($conn, $product_id);
	$stock_id=$_POST['stock_id'];
	$stock_id=mysqli_real_escape_string($conn, $stock_id);
	$productUnit_id=$_POST['productUnit_id'];
	$productUnit_id=mysqli_real_escape_string($conn, $productUnit_id);
	$productCategory_id=$_POST['productCategory_id'];
	$productCategory_id=mysqli_real_escape_string($conn, $productCategory_id);
	$product_name=$_POST['product_name'];
	$product_name=mysqli_real_escape_string($conn, $product_name);
	$product_costPrice=$_POST['product_costPrice'];
	$product_costPrice=mysqli_real_escape_string($conn, $product_costPrice);
	$product_dosage=$_POST['product_dosage'];
	$product_dosage=mysqli_real_escape_string($conn, $product_dosage);
    $product_description=$_POST['product_description'];
	$product_description=mysqli_real_escape_string($conn, $product_description);
	$product_manufacturer=$_POST['product_manufacturer'];
	$product_manufacturer=mysqli_real_escape_string($conn, $product_manufacturer);
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
	$status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	
	

	$sql_insert="INSERT INTO product(product_id,stock_id,productUnit_id,productCategory_id,product_name,product_costPrice,product_dosage,product_description,product_manufacturer,created_at,status) VALUES ('$product_id','$stock_id','$productUnit_id','$productCategory_id','$product_name','$product_costPrice','$product_dosage','$product_description','$product_manufacturer','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}



// submitting data to the productunit database.
if(isset($_POST['Submit5'])){
	//echo working
	$productUnit_id=$_POST['productUnit_id'];
	$productUnit_id=mysqli_real_escape_string($conn, $productUnit_id);
	$product_id=$_POST['product_id'];
	$product_id=mysqli_real_escape_string($conn, $product_id);
	$productUnit_name=$_POST['productUnit_name'];
	$productUnit_name=mysqli_real_escape_string($conn, $productUnit_name);
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
	$status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	
	

	$sql_insert="INSERT INTO productunit (productUnit_id,product_id,productUnit_name,created_at,status) VALUES ('$productUnit_id','$product_id','$productUnit_name','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the  employee database
if(isset($_POST['Submit4'])){
	$employee_id=$_POST['employee_id'];
	$employee_name=$_POST['employee_name'];
	$employee_name =mysqli_real_escape_string($conn, $employee_name);
	$employee_gender=$_POST['employee_gender'];
	$employee_gender=mysqli_real_escape_string($conn, $employee_gender);
	$employee_dateOfBirth=$_POST['employee_dateOfBirth'];
	$employee_dateOfBirth=mysqli_real_escape_string($conn, $employee_dateOfBirth);
	$address =$_POST['address'];
	$address =mysqli_real_escape_string($conn, $address);
	$employee_contact=$_POST['employee_contact'];
	$employee_contact=mysqli_real_escape_string($conn, $employee_contact);
	$employee_email=$_POST['employee_email'];
	$employee_email=mysqli_real_escape_string($conn, $employee_email);
	$employee_password=$_POST['employee_password'];
	$employee_dateOfEntry=$_POST['employee_dateOfEntry'];
	$employee_dateOfEntry=mysqli_real_escape_string($conn, $employee_dateOfEntry);
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
    $status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	
	
	
	$sql_insert="INSERT INTO employee(employee_id,employee_name,employee_gender,employee_dateOfBirth,address,employee_contact,employee_email,employee_password,employee_dateOfEntry,created_at,status) VALUES ('$employee_id','$employee_name','$employee_gender','$employee_dateOfBirth','$address','$employee_contact','$employee_email','$employee_password','$employee_dateOfEntry','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the  stock database
if(isset($_POST['Submit4'])){
	$stock_id=$_POST['stock_id'];
	$product_id=$_POST['product_id'];
	$employee_id=$_POST['employee_id'];
	$stock_expiryDate=$_POST['stock_expiryDate'];
	$stock_expiryDate=mysqli_real_escape_string($conn, $stock_expiryDate);
	$stock_quantity=$_POST['stock_quantity'];
	$stock_quantity=mysqli_real_escape_string($conn, $stock_quantity);
	$stock_description =$_POST['stock_description'];
	$stock_description =mysqli_real_escape_string($conn, $stock_description);
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
    $status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	
	
	
	$sql_insert="INSERT INTO stock(stock_id,product_id,employee_id,stock_expiryDate,stock_quantity,stock_description,created_at,status) VALUES ('stock_id','$product_id','$employee_id','$stock_expiryDate','$stock_quantity','$stock_description','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}


// submitting data to the  stock database
if(isset($_POST['Submit4'])){
	$stock_id=$_POST['stock_id'];
	$product_id=$_POST['product_id'];
	$employee_id=$_POST['employee_id'];
	$stock_expiryDate=$_POST['stock_expiryDate'];
	$stock_expiryDate=mysqli_real_escape_string($conn, $stock_expiryDate);
	$stock_quantity=$_POST['stock_quantity'];
	$stock_quantity=mysqli_real_escape_string($conn, $stock_quantity);
	$stock_description =$_POST['stock_description'];
	$stock_description =mysqli_real_escape_string($conn, $stock_description);
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
    $status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	
	
	
	$sql_insert="INSERT INTO stock(stock_id,product_id,employee_id,stock_expiryDate,stock_quantity,stock_description,created_at,status) VALUES ('stock_id','$product_id','$employee_id','$stock_expiryDate','$stock_quantity','$stock_description','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the  sales database
if(isset($_POST['Submit4'])){
	$sales_id=$_POST['sales_id'];
	$employee_id=$_POST['employee_id'];
	$patient_id=$_POST['patient_id'];
	$product_id=$_POST['product_id'];
	$payment_id=$_POST['payment_id'];
    $quantity =$_POST['quantity'];
    $quantity=mysqli_real_escape_string($conn, $quantity);
	$total_amount=$_POST['total_amount'];
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
    $status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	

	$sql_insert="INSERT INTO sales(sales_id,employee_id,employee_id,patient_id,product_id,payment_id,quantity,total_amount,created_at,status) VALUES ('$sales_id','employee_id,'$patient_id','$product_id','$payment_id','$quantity','$total_amount','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the  payment database
if(isset($_POST['Submit4'])){
	$payment_id=$_POST['payment_id'];
	$patient_id=$_POST['patient_id'];
	$product_id=$_POST['product_id'];
	$sales_id=$_POST['sales_id'];
	$payed_amount=$_POST['payed_amount'];
	$remaining_amount =$_POST['remaining_amount'];
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
    $status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	

	$sql_insert="INSERT INTO sales(payment_id,patient_id,product_id,sales_id,payed_amount,remaining_amount,created_at,status) VALUES ('$payment_id','&patient_id,'$product_id','$sales_id','$payed_amount','$remaining_amount','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the  productcategory database
if(isset($_POST['Submit4'])){
	$productCategory_id=$_POST['productCategory_id'];
	$product_id=$_POST['product_id'];
	$sales_id=$_POST['sales_id'];
	$productCategory_name=$_POST['productCategory_name'];
	$productCategory_name=mysqli_real_escape_string($conn, $productCategory_name);
	$created_at=$_POST['created_at'];
	$created_at=mysqli_real_escape_string($conn, $created_at);
    $status=$_POST['status'];
	$status=mysqli_real_escape_string($conn, $status);
	

	$sql_insert="INSERT INTO sales(productCategory_id,product_id,productCategory_name,created_at,status) VALUES ('$productCategory_id','$product_id','$productCategory_name','$created_at','$status')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}









?>