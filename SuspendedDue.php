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

        $query= "Select * from GetSuspendedAccountsOverdueLoans()";

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
<th>Account Number</th>
<th>first name</th>
<th> Middle name</th>
<th> Last name</th>
<th>Loan Amount </th>
<th>Deadline Date </th>


</tr>";
while ($row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC)) {
// Output each row as a table row
echo "<tr>";
echo "<td>" . $row['acnumber'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['mname'] . "</td>";
echo "<td>" . $row['ltname'] . "</td>";
echo "<td>" . $row['loan_amount'] . "</td>";

if (!empty($row['deadline_date'])) {
    if ($row['deadline_date'] instanceof DateTime) {
        // If it's already a DateTime object, format it accordingly
        $formattedDate = $row['deadline_date']->format('Y-m-d');
    } else {
        // If it's a string in 'Y-m-d' format, you can directly use it
        $formattedDate = $row['deadline_date'];
    }
    echo "<td>" . $formattedDate . "</td>";
} else {
    echo "<td>No date available</td>";
}


// Add more columns as needed
echo "</tr>";
}



// End HTML table
echo "</table>";
}
}

