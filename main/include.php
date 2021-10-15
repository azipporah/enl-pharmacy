<?php
session_start();
error_reporting(0);

//adding user into website
include "config/connect.php";
error_reporting(0);
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $get_user = "SELECT * FROM `user` WHERE `user_email` = '$email' ";
        $execute_getUser = mysqli_query($connect, $get_user);
        if (!$execute_getUser -> num_rows > 0) {
            $insert_user = "INSERT INTO `user`(`user_email`, `user_name`, `user_password`) 
             VALUES ('$email','$username','$password')";

            $execute_userInsert = mysqli_query($connect, $insert_user);
            if ($execute_userInsert) {
                echo "Wow!, user registration successful!";
                $email = "";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "Ooops!, something went wrong!";
            }
        }else {
            echo "Ooops!, user email already exists!";
        }
    } else {
        echo "Password is Not matched!";
    }
}

//login for a user

 // submitting to the login form
 if(isset($_POST['Login'])){
	//echo working
	$user=$_POST['employee_email'];
	$user=mysqli_real_escape_string($connect,$user);
	$pwd=($_POST['employee_password']);
	$pwd=mysqli_real_escape_string($connect,$pwd);
	$admin=$_POST['user_email'];
	$admin=mysqli_real_escape_string($connect,$admin);
	$pword=($_POST['employee_password']);
	$pword=mysqli_real_escape_string($connect,$pword);
  
	$sql_fetch="SELECT * FROM employee WHERE employee_email='$user' AND employee_password='$pwd'";
	$sql_query=mysqli_query($connect, $sql_fetch) ; 
	$count=mysqli_num_rows($sql_query);
	 if ($count >0) { 
		 
	$rows=mysqli_fetch_assoc($sql_query); 
	$_SESSION['employee_id']=$rows['employee_id'];	 
	 
	$_SESSION['employee_email']=$user;
	header("location:enl.php");
	}
// 	else{
  
// 	$sql_fetch="SELECT * FROM user WHERE user_email='$admin' AND user_password='$pword'";
// 	$sql_query=mysqli_query($connect, $sql_fetch);
// 	$count=mysqli_num_rows($sql_query);
// 	 if ($count >0) {
// 		 // echo ($_SESSION['workerId']);
// 		 // $rows=mysqli_fetch_assoc($sql_query);
// 		 // $_SESSION['workerId']=$rows['workerId'];
// 	  // echo "FOUND";
// 	  $_SESSION['Username']=$user;
// 	  header("location: dataentrant.php");
		
//   }
//   }
}
// submitting data to the  employee database
if (isset($_POST['save-employee'])) {
	$employee_name = $_POST['name'];
	$employee_name = mysqli_real_escape_string($connect, $employee_name);
	$employee_gender = $_POST['pgender'];
	$employee_gender = mysqli_real_escape_string($connect, $employee_gender);
	$employee_dateOfBirth = $_POST['dob'];
	$employee_dateOfBirth = mysqli_real_escape_string($connect, $employee_dateOfBirth);
	$address = $_POST['address'];
	$address = mysqli_real_escape_string($connect, $address);
	$employee_contact = $_POST['contact'];
	$employee_contact = mysqli_real_escape_string($connect, $employee_contact);
	$employee_email = $_POST['email'];
	$employee_email = mysqli_real_escape_string($connect, $employee_email);
	$employee_password = $_POST['password'];
	$employee_dateOfEntry = $_POST['doe'];
	$employee_dateOfEntry = mysqli_real_escape_string($connect, $employee_dateOfEntry);

	//inserting into db
	$insert_employee = "INSERT INTO `employee`(`employee_name`, `employee_gender`, `employee_dateOfBirth`, `employee_contact`, `employee_email`, `Address`, `employee_password`, `employee_dateOfEntry`) 
						VALUES ('$employee_name','$employee_gender','$employee_dateOfBirth','$employee_contact','$employee_email','$address','$employee_password','$employee_dateOfEntry')";

	//executing the insert query
	$execute_employeeInsert = mysqli_query($connect, $insert_employee);

	if ($execute_employeeInsert) {
		$New = "New employee added succesfully";
	} else {
		$Error = "Error" . $insert_employee . "</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}


// submitting data to the  patient database
if (isset($_POST['save-patient'])) {
	$patient_name = $_POST['patient_name'];
	$patient_name = mysqli_real_escape_string($connect, $patient_name);
	$patient_dateOfBirth = $_POST['patient_dateOfBirth'];
	$patient_dateOfBirth = mysqli_real_escape_string($connect, $patient_dateOfBirth);
	$patient_gender = $_POST['patient_gender'];
	$patient_gender = mysqli_real_escape_string($connect, $patient_gender);
	$patient_contact = $_POST['patient_contact'];
	$patient_contact = mysqli_real_escape_string($connect, $patient_contact);
	$patient_email = $_POST['patient_email'];
	$patient_email = mysqli_real_escape_string($connect, $patient_email);
	$patient_address = $_POST['patient_address'];
	$patient_disease = $_POST['patient_disease'];
	$patient_disease = mysqli_real_escape_string($connect, $patient_disease);
	$patient_description = $_POST['patient_description'];
	$patient_description = mysqli_real_escape_string($connect, $patient_description);
	$patient_dateOfEntry = $_POST['patient_dateOfEntry'];
	$patient_dateOfEntry = mysqli_real_escape_string($connect, $patient_dateOfEntry);

	$insert_patient = "INSERT INTO `patient`(`patient_name`, `patient_gender`, `patient_disease`, `patient_address`, `patient_contact`, `patient_email`, `patient_dateOfBirth`, `patient_dateOfEntry`, `patient_description`) 
						VALUES ('$patient_name','$patient_gender','$patient_disease','$patient_address','$patient_contact','$patient_email','$patient_dateOfBirth','$patient_dateOfEntry','$patient_description')";
	//executing the insert query
	$execute_patientInsert = mysqli_query($connect, $insert_patient);

	if ($execute_patientInsert) {
		$New = "New employee added succesfully";          
	} else {
		// $Error = "Error". $insert_patient ."</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}

// submitting data to the  productUnit database
if (isset($_POST['save-punit'])) {
	$productUnit_name = $_POST['unit'];
	$productUnit_name = mysqli_real_escape_string($connect, $productUnit_name);

	$insert_productUnit = "INSERT INTO `productunit`(`productUnit_name`) VALUES ('$productUnit_name')";

	//executing the insert query
	$execute_unitInsert = mysqli_query($connect, $insert_productUnit);

	if ($execute_unitInsert) {
		$New = "New product unit added succesfully";
	} else {
		// $Error = "Error". $insert_productUnit ."</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}

// submitting data to the  productcategory database
if (isset($_POST['save-pcat'])) {
	$product_name = $_POST['p-name'];
	$productCategory_name = $_POST['category'];
	$productCategory_name = mysqli_real_escape_string($connect, $productCategory_name);

	$insert_productCategory = "INSERT INTO `productcategory`(`productCategory_name`) 
							VALUES ('$productCategory_name')";
	//executing the insert query
	$execute_pCategoryInsert = mysqli_query($connect, $insert_productCategory);

	if ($execute_pCategoryInsert) {
		$New = "New product category added succesfully";
	} else {
		// $Error = "Error". $insert_productCategory ."</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}

// submitting data to the  product dosage database
if (isset($_POST['save-dose'])) {
	$dose_name = $_POST['dose'];
	$dose_name = mysqli_real_escape_string($connect, $dose_name);

	$insert_dosage = "INSERT INTO `dosage`(`dosage_name`) VALUES ('$dose_name')";

	//executing the insert query
	$execute_dosageInsert = mysqli_query($connect, $insert_dosage);

	if ($execute_dosageInsert) {
		$New = "New product dosage added succesfully";
	} else {
		// $Error = "Error". $insert_dosage ."</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}

// submitting data to the  stock database
if (isset($_POST['save-stock'])) {
	$employee_name = $_POST['ename'];
	$employee_name = mysqli_real_escape_string($connect, $employee_name);
	$product_name = $_POST['p-name'];
	$product_name = mysqli_real_escape_string($connect, $product_name);
	$product_category = $_POST['p-category'];
	$product_category = mysqli_real_escape_string($connect, $product_category);
	$product_unit = $_POST['p-unit'];
	$product_unit = mysqli_real_escape_string($connect, $product_unit);
	$stock_expiryDate = $_POST['stock_expiry'];
	$stock_expiryDate = mysqli_real_escape_string($connect, $stock_expiryDate);
	$stock_quantity = $_POST['stock-qnty'];
	$stock_quantity = mysqli_real_escape_string($connect, $stock_quantity);
	$stock_description = $_POST['stock_desc'];
	$stock_description = mysqli_real_escape_string($connect, $stock_description);

	$insert_stock = "INSERT INTO `stock`(`product_id`, `employee_id`, `stock_expiryDate`, `stock_quantity`, `stock_description`, `productCategory_id`, `productUnit_id`) 
					VALUES ('$product_name','$employee_name','$stock_expiryDate','$stock_quantity','$stock_description','$product_category','$product_unit')";

	//executing the insert query
	$execute_stockInsert = mysqli_query($connect, $insert_stock);

	if ($execute_stockInsert) {
		$New = "New stock added succesfully";
	} else {
		$Error = "Error" . $insert_stock . "</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}

// submitting data to the  product database
if (isset($_POST['save-product'])) {
	$product_expiryDate = $_POST['xdate'];
	$product_expiryDate = mysqli_real_escape_string($connect, $product_expiryDate);
	$productUnitname = $_POST['p-unit'];
	$productUnitname = mysqli_real_escape_string($connect, $productUnitname);
	$productCategoryname = $_POST['p-category'];
	$productCategoryname = mysqli_real_escape_string($connect, $productCategoryname);
	$product_dosage = $_POST['dose'];
	$product_dosage = mysqli_real_escape_string($connect, $product_dosage);
	$product_name = $_POST['p-name'];
	$product_name = mysqli_real_escape_string($connect, $product_name);
	$product_unitPrice = $_POST['unit-price'];
	$product_unitPrice = mysqli_real_escape_string($connect, $product_unitPrice);
	$product_costPrice = $_POST['cprice'];
	$product_costPrice = mysqli_real_escape_string($connect, $product_costPrice);
	$product_sellingPrice = $_POST['sprice'];
	$product_sellingPrice = mysqli_real_escape_string($connect, $product_sellingPrice);
	$product_description = $_POST['desc'];
	$product_description = mysqli_real_escape_string($connect, $product_description);
	$product_manufacturer = $_POST['manu'];
	$product_manufacturer = mysqli_real_escape_string($connect, $product_manufacturer);

	$insert_product = "INSERT INTO `product`(`stock_id`, `productUnit_id`, `productCategory_id`, `dosage_id`, `product_name`, `product_unitPrice`, `product_costPrice`, `product_sellingPrice`, `product_description`, `product_manufacturer`) 
					VALUES ('$product_expiryDate','$productUnitname','$productCategoryname','$product_dosage','$product_name', '$product_unitPrice','$product_costPrice','$product_sellingPrice','$product_description','$product_manufacturer')";
	//executing the insert query
	$execute_productInsert = mysqli_query($connect, $insert_product);

	if ($execute_productInsert) {
		$New = "New product added succesfully";
	} else {
		// $Error = "Error". $insert_product ."</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}



// submitting data to the treatment database
if (isset($_POST['save-treatment'])) {
	$patient_name = $_POST['pname'];
	// $patient_id = mysqli_real_escape_string($connect, $patient_name);
	$product_name = $_POST['p-name'];
	// $product_name = mysqli_real_escape_string($connect, $product_name);
	$start_date = $_POST['start-date'];
	// $start_date = mysqli_real_escape_string($connect, $start_date);
	$end_date = $_POST['end-date'];
	// $end_date = mysqli_real_escape_string($connect, $end_date);
	$treatment_status = $_POST['t-status'];
	// $treatment_status = mysqli_real_escape_string($connect, $treatment_status);

	$insert_treatment = "INSERT INTO `treatment`(`patient_id`, `product_id`, `start_date`, `end_date`, `treatment_status`) 
					VALUES ('$patient_name','$product_name','$start_date','$end_date','$treatment_status')";
	//executing the insert query
	$execute_treatmentInsert = mysqli_query($connect, $insert_treatment);

	if ($execute_treatmentInsert) {
		$New = "New treatment added succesfully";
	} else {
		// $Error = "Error" . $insert_treatment . "</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}

// submitting data to the  sales database
if (isset($_POST['save-sales'])) {
	$employee_name = $_POST['name'];
	$patient_name = $_POST['pname'];
	$product_name = $_POST['p-name'];
	$product_category = $_POST['p-category'];
	$product_unit = $_POST['p-unit'];
	$unit_price = $_POST['unit-price'];
	$quantity = $_POST['quantity'];
	$total_amount = $_POST['tamount'];
	$paid_amount = $_POST['pamount'];
	$remaining = $_POST['ramount'];
	$dateOfSale = $_POST['dos'];

	$insert_sales = "INSERT INTO `sales`(`employee_id`, `patient_id`, `product_id`, `productCategory_id`, `productUnit_id`, `unit_price`, `quantity`, `total_amount`, `paid_amount`, `remaining_amount`, `dateOfSale`) 
				VALUES ('$employee_name','$patient_name','$product_name', '$product_category', '$product_unit','$unit_price','$quantity','$total_amount','$paid_amount','$remaining','$dateOfSale')";
	
	//executing the insert query
	$execute_salesInsert = mysqli_query($connect, $insert_sales);

	if ($execute_salesInsert) {
		$New = "New sales added succesfully";  
	} else {
		// $Error = "Error" . $insert_sales . "</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
	
}

// submitting data to the appointment database
if(isset($_POST['save-appointment'])){
	$patient_name=$_POST['pname'];
	// $patient_id=mysqli_real_escape_string($conn, $patient_id);
	$dateOfAppointment=$_POST['doa'];
	// $dateOfAppointment=mysqli_real_escape_string($conn, $dateOfAppointment);
	
	$insert_appointment = "INSERT INTO `appointment`(`patient_id`, `dateOfAppointment`) 
							VALUES ('$patient_name','$dateOfAppointment')";
	//executing the insert query
	$execute_appointmentInsert = mysqli_query($connect, $insert_appointment);

	if ($execute_appointmentInsert) {
		$New = "New appointment added succesfully";
	} else {
		$Error = "Error" . $insert_appointment . "</br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
}

// // submitting data to the  payment database
// if(isset($_POST['Submit4'])){
// 	$payment_id=$_POST['payment_id'];
// 	$patient_id=$_POST['patient_id'];
// 	$product_id=$_POST['product_id'];
// 	$sales_id=$_POST['sales_id'];
// 	$payed_amount=$_POST['payed_amount'];
// 	$remaining_amount =$_POST['remaining_amount'];
// 	$created_at=$_POST['created_at'];
// 	$created_at=mysqli_real_escape_string($conn, $created_at);
//     $status=$_POST['status'];
// 	$status=mysqli_real_escape_string($conn, $status);
	

// 	$sql_insert="INSERT INTO sales(payment_id,patient_id,product_id,sales_id,payed_amount,remaining_amount,created_at,status) VALUES ('$payment_id','&patient_id,'$product_id','$sales_id','$payed_amount','$remaining_amount','$created_at','$status')";
// 	$sql_query=mysqli_query($conn,$sql_insert);
// 	if ($sql_query==TRUE) {
// 		echo "successful";
// 	}else{
// 		echo mysqli_error($conn);
// 	}
// }