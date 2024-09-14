<?php
include ('connection.php');
?>

<?php


$query= "select * from dbo.account";
// $res= sqlsrv_query($con,$query);



if($_SERVER['REQUEST_MEHOD']= "GET" )
{
   
        
        $Get_City= $_GET['cst_city'];
        $Get_stat= $_GET['ac_status'];
        $dateTimeObject = new DateTime();

        // Convert the DateTime object to a string with the desired format
        $formattedDateTime = $dateTimeObject->format('Y-m-d H:i:s');
        $sql_query= "Select * from GetDetailedInfoByCityAndStatus('$Get_City', '$Get_stat')";
        $res = sqlsrv_query($con,$sql_query);
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
       <th>account number</th>
       <th>first name</th>
       <th> Middle name</th>
       <th>last name </th>
       <th> transaction number </th>
       <th>transaction date </th>
     
       <th>Loan amount </th>
       <th> branch name</th>

        </tr>";
        while ($row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC)) {
    // Output each row as a table row
    echo "<tr>";
    echo "<td>" . $row['account_number'] . "</td>";
    echo "<td>" . $row['customer_first_name'] . "</td>";
    echo "<td>" . $row['customer_middle_name'] . "</td>";
    echo "<td>" . $row['customer_last_name'] . "</td>";
    echo "<td>" . $row['transaction_number'] . "</td>";
    // Handle the date column
    if (!empty($row['transaction_date'])) {
        if ($row['transaction_date'] instanceof DateTime) {
            // If it's already a DateTime object, format it accordingly
            $formattedDate = $row['transaction_date']->format('Y-m-d');
        } else {
            // If it's a string in 'Y-m-d' format, you can directly use it
            $formattedDate = $row['transaction_date'];
        }
        echo "<td>" . $formattedDate . "</td>";
    } else {
        echo "<td>No date available</td>";
    }
    echo "<td>" . $row['loan_amount'] . "</td>";
    echo "<td>" . $row['branch_name'] . "</td>";
    

   

    // Add more columns as needed
    echo "</tr>";
}


  
// End HTML table
echo "</table>";
    }

?>