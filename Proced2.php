<?php
include ('connection.php');
?>

<?php
    $Ac_F= $_GET['Ac_from'];
    $Ac_T= $_GET['Ac_To'];
    $Get_amount= $_GET['Amount'];
    $Get_type= $_GET['trans_type'];
    $sql_query= "EXEC TransferMoney '$Ac_F', '$Ac_T', $Get_amount;";
    $_SESSION['acid']= $Ac_F;

    $res = sqlsrv_query($con,$sql_query);



    if($res)
    {
        echo "<script> alert('are you sure you want to undergo this transaction successfuly') </script>";
        $dateTimeObject = new DateTime();

        

        // Convert the DateTime object to a string with the desired format
        $formattedDateTime = $dateTimeObject->format('Y-m-d H:i:s');
    
        $query2= "SELECT * FROM trandetails WHERE acnumber = '$Ac_T' order by dot desc ";
        $res2 = sqlsrv_query($con,$query2);
    
        echo "<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
    
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    
        th {
            background-color: #4CAF50;
            color: white;
        }
    
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
     </style>";
    echo "<table border='1'>
    <tr>
    <th>transaction number</th>
    <th>Account number</th>
    <th> Date</th>
        <th>Medium of transaction </th>
    <th> transaction type</th>
    <th> transaction amount</th>
    
    </tr>";
    while ($row = sqlsrv_fetch_array($res2, SQLSRV_FETCH_ASSOC)) {
    // Output each row as a table row
    echo "<tr>";
    echo "<td>" . $row['tnumber'] . "</td>";
    echo "<td>" . $row['acnumber'] . "</td>";
    
    
    // Handle the date column
    if (!empty($row['dot'])) {
    if ($row['dot'] instanceof DateTime) {
    // If it's already a DateTime object, format it accordingly
    $formattedDate = $row['dot']->format('Y-m-d');
    } else {
    // If it's a string in 'Y-m-d' format, you can directly use it
    $formattedDate = $row['dot'];
    }
    echo "<td>" . $formattedDate . "</td>";
    } else {
    echo "<td>No date available</td>";
    }
    echo "<td>" . $row['medium_of_transaction'] . "</td>";
    echo "<td>" . $row['transaction_type'] . "</td>";
    echo "<td>" . $row['transaction_amount'] . "</td>";
    
    
    
    
    // Add more columns as needed
    echo "</tr>";
    }
    
    
    
    // End HTML table
    echo "</table>";
    }
echo " <a href='budget.php'><button>See budget</button></a>";


?>
