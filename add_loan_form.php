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

  <form action="loan.php" method="post">
    <h2>Loan Registration</h2>

    <label for="firstname">Customer id:</label>
    <input type="text" id="firstname" name="id" required>

    <label for="midname">Branch id</label>
    <input type="text" id="midname" name="branch">

    <label for="lastname">loan amount</label>
    <input type="text" id="lastname" name="amount" required>

    <label for="customer_id">Deadline Date </label>
    <input type="date" id="customer_id" name="deadline" required>

    <input type="submit" value="Submit" name="submit">
  </form>

</body>
</html>
