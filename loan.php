<?php
include('connection.php');
?>

<?php
if(isset($_POST['submit']))
{
    $cust = $_POST['id'];
    $bid = $_POST['branch'];
    $amount = $_POST['amount'];
    $deadline = $_POST['deadline'];
    $ins_q = "INSERT INTO loan(custid, bid, loan_amount, day_took_loan, deadline_date)
              VALUES ('$cust', '$bid', '$amount',GETDATE(),'$deadline');";
     
    $res = sqlsrv_query($con,$ins_q);
  

    if ($res) {
        echo "<script>alert('Data inserted successfully')</script>";
   
    } else {
        $errors = sqlsrv_errors();
        echo "Error happened: " . print_r($errors, true);
        echo "<script>alert('Error happened')</script>";
    }
}
error_reporting(E_ALL);
?>
