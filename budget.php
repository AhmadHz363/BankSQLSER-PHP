
<?php


include('connection.php');

    

$query="select * from account where acnumber= 'A00001'";
$resbd = sqlsrv_query($con,$query);
    
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

<th>Account number</th>
<th> Customer id</th>
<th>Branch id</th>
<th> Acount type</th>
<th> Account status</th>
<th> Current balance</th>

</tr>";
while ($row = sqlsrv_fetch_array($resbd, SQLSRV_FETCH_ASSOC)) {
// Output each row as a table row
echo "<tr>";
echo "<td>" . $row['acnumber'] . "</td>";
echo "<td>" . $row['custid'] . "</td>";
echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['atype'] . "</td>";
echo "<td>" . $row['astatus'] . "</td>";
echo "<td>" . $row['current_balance'] . "</td>";




// Add more columns as needed
echo "</tr>";
}



// End HTML table
echo "</table>";


?>

