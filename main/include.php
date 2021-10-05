<?php 

    error_reporting(0);
    
    //include database
    include "config/connect.php";

    //adding and employee
    if(isset($_POST['save-employee'])) {
        $employee_name = $_POST['name'];
        $employee_dob = $_POST['dob'];
        $employee_gender = $_POST['gender'];
        $employee_contact = $_POST['contact'];
        $employee_email = $_POST['email'];
        $employee_password = $_POST['password'];
        $employee_doe = $_POST['doe'];

        //inserting into db
        $insert_employee = "INSERT INTO `employee`(`employee_name`, `employee_gender`, `employee_dateOfBirth`, `employee_contact`, `employee_email`, `employee_password`, `employee_dateOfEntry`) 
                            VALUES ('$employee_name','$employee_dob','$employee_gender','$employee_contact','$employee_email','$employee_password','$employee_doe')";

        //executing the insert query
        $execute_employeeInsert = mysqli_query($connect, $insert_employee);

        if(mysqli_query($connect, $insert_employee)) {
            $New = "New employee added succesfully";          
        }      
        else{
            $Error = "Error". $insert_employee ."</br>" . mysqli_error($connect);
        }

        mysqli_close($connect);
    }




?>