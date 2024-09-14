<?php
include ('connection.php');
?>

<?php



$username= $_GET['username'];
$pass= $_GET['password'];


$query= "Select * from users where username= '$username' and password= '$pass'";

$res= sqlsrv_query($con,$query);


if($res)
{
    $row= sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC);
    if($row)
    {
        header("Location: home.php");
    
    }
    else
    {
        echo "<script> alert('Invalid login Credentials') </script>";
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
}
else
{
    die(print_r(sqlsrv_errors(), true));

}

?>
