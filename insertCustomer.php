<?php
include('connection.php');

$fname = $_POST['firstname'];
$midname = $_POST['midname'];
$lname = $_POST['lastname'];
$csid = $_POST['customer_id'];
$city = $_POST['cst_city'];
$num = $_POST['mobile_number'];
$occ = $_POST['occupation'];
$dob = $_POST['dob'];

$ins_q = "INSERT INTO customer (custid, fname, mname, ltname, city, mobileno, occupation, dob)
        VALUES ('$csid', '$fname', '$midname', '$lname', '$city', '$num', '$occ', '$dob');";
$res = sqlsrv_query($con, $ins_q);

if ($res) {
    echo "<script>alert('Data inserted successfully')</script>";
} else {
    $errors = sqlsrv_errors();
    echo "Error happened: " . print_r($errors, true);
}
?>
