<?php
$servername= "DESKTOP-EQDSUD3\SQLEXPRESS";
$database= "bank";



$connection=  [
"Database" =>$database,
];

$con= sqlsrv_connect($servername,$connection);


if($con)
{
    
    if($_SERVER['REQUEST_MEHOD']= "GET" )
    {
        $Account= $_GET['Ac_num'];

        $query= "Select * from GetTransactionMetrics('$Account')";

        $res= sqlsrv_query($con,$query);

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
<th>Total Deposits</th>
<th>Total With Drawals</th>
<th> Average Deposit</th>
<th> Average With drawal</th>
<th>Net Change </th>

</tr>";
while ($row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC)) {
// Output each row as a table row
echo "<tr>";
echo "<td>" . $row['TotalDeposits'] . "</td>";
echo "<td>" . $row['TotalWithdrawals'] . "</td>";
echo "<td>" . $row['AverageDeposit'] . "</td>";
echo "<td>" . $row['AverageWithdrawal'] . "</td>";
echo "<td>" . $row['NetChange'] . "</td>";


// Add more columns as needed
echo "</tr>";
}



// End HTML table
echo "</table>";
}
}

