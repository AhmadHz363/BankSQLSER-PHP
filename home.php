<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bank Name</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            width: 1400px;
            gap: 80px; /* Add spacing between cards */
            
        }

        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            border: 1px solid #ddd; /* Add border */
            transition: box-shadow 0.3s ease; /* Add transition effect */
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add hover effect */
        }

        .card-header {
            background-color: #007BFF;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
          width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;

        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">LIB</a>
        <nav>
            <ul>
                <li><a href="Login.php">Home</a></li>
                <li><a href="#">Menu</a>
                    <ul>
                        <li><a href="Inset_Customer_form.php">Register new Customer</a></li>
                        <li><a href="add_loan_form.php">Add new loan</a></li>
                  
                    </ul>
                </li>
                <li><a href="TransactionPage.php">Transaction</a></li>
            </ul>
        </nav>
    </header>

    <div class="card-container">
        <div class="card">
            <div class="card-header">
                <h2>Get All the accounts from a city having the status</h2>
            </div>
            <div class="card-body">
                <form action="FN1.php" method="get">
                    <label for="cst_city">City Name</label>
                    <select name="cst_city" >
                    <?php
                     $q = "SELECT DISTINCT bcity FROM branch";
                   $res = sqlsrv_query($con, $q);
  
                    while ($row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC)) {
                    echo "<option>" . $row['bcity'] . "</option>";
                     }
                    ?>  
                    </select>
                
                    <!-- <input type="text"  placeholder="Enter city name" required> -->
                    <label for="ac_status">Account Status</label>
                    <!-- <input type="text" name="ac_status" placeholder="Enter account status" required> -->
                    <select name="ac_status" >
                    <?php
                     $q2 = "SELECT DISTINCT astatus from account";
                     $res2 = sqlsrv_query($con, $q2);
  
                    while ($row = sqlsrv_fetch_array($res2, SQLSRV_FETCH_ASSOC)) {
                    echo "<option>" . $row['astatus'] . "</option>";
                     }
                    ?>  
                    </select>
                    <button type="submit" name="subm1">Submit</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Get All the transactions done by the account</h2>
            </div>
            <div class="card-body">
                <form action="transactionMat.php" method="get">
                    <label for="Ac_num">Account Number</label>
                    <input type="text" name="Ac_num" placeholder="Enter account number" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Click the button to see the Accounts who have been terminated because of passing the deadline for loan</h2>
            </div>
            <div class="card-body">
                <form action="SuspendedDue.php" method="get">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Get All the transactions done by the account between the two dates</h2>
            </div>
            <div class="card-body">
                <form action="Proced1.php" method="get">
                    <label for="Ac_id">Account ID</label>
                    <input type="text" name="Ac_id" placeholder="Enter the account ID" required>
                    <label for="date1">First Date</label>
                    <input type="date" name="date1" required>
                    <label for="date2">Second Date</label>
                    <input type="date" name="date2" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
