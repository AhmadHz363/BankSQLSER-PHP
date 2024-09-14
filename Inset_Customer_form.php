<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Information Form</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      color: #555;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    select{
        width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: blue;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <form action="insertCustomer.php" method="post">
    <h2>Customer Registration</h2>

    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required>

    <label for="midname">Middle Name:</label>
    <input type="text" id="midname" name="midname">

    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required>

    <label for="customer_id">Customer ID:</label>
    <input type="text" id="customer_id" name="customer_id" required>

    <label for="city">City:</label>
    <select name="cst_city" >
                    <?php
                     $q = "SELECT DISTINCT bcity FROM branch";
                   $res = sqlsrv_query($con, $q);
  
                    while ($row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC)) {
                    echo "<option>" . $row['bcity'] . "</option>";
                     }
                    ?>  
    </select>

    <label for="mobile_number">Mobile Number:</label>
    <input type="tel" id="mobile_number" name="mobile_number" required>

    <label for="occupation">Occupation:</label>
    <input type="text" id="occupation" name="occupation" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <input type="submit" value="Submit">
  </form>

</body>
</html>

