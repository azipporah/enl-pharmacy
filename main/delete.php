<?php
// deleting employee
if (isset($_REQUEST['delete'])) {
    $manufactureid = $_REQUEST['delete'];
    $sql_delete = "DELETE FROM employee WHERE employee_id='$employee_id'";
    $sql_query = mysqli_query($conn, $sql_delete);
    if ($sql_query == TRUE) {
        echo "Deleted successful";
    } else {
        echo mysqli_error($conn);
    }
}
?>