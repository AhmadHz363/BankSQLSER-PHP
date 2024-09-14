<?php
include ('connection.php');
?>

<?php




if($_SERVER['REQUEST_MEHOD']= "GET" )
{
   
        
        $Get_Ac= $_GET['Ac_id'];
        $Get_date1= $_GET['date1'];
        $Get_date2= $_GET['date2'];
        $dateTimeObject = new DateTime();

    

        // Convert the DateTime object to a string with the desired format
        $formattedDateTime = $dateTimeObject->format('Y-m-d H:i:s');
        $sql_query= "EXEC GetTransactionByAccountAndDataRange '$Get_Ac', '$Get_date1', '$Get_date2';";
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
       <th>transaction number</th>
       <th>Account number</th>
       <th> Date</th>
       <th>Medium of transaction </th>
       <th> transaction type</th>

        </tr>";
        while ($row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC)) {
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
 
    

   

    // Add more columns as needed
    echo "</tr>";
}


  
// End HTML table
echo "</table>";
    }

?>