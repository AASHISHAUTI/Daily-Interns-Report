


		
	

<!DOCTYPE html>
<html>
    <head>
        <title>DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
  





<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `studup` WHERE CONCAT(`name`, `dt`, `ctime`,`Message`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `studup`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "root", "Daily_Report_Interns");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>






  </head>











    <body><center>
        
        <form action="showuserdata.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                   
                    <th>Name</th>
                     <th>Date</th>
                     <th>CTime</th>
                     <th>Message</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['dt'];?></td>
                    <td><?php echo $row['CTime'];?></td>
                    <td><?php echo $row['message'];?></td>
              
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        </center>
    </body>
    <?php
echo '<a href="adminmain.php"><h2 align = "center">Back</h2></a>';
    ?>
</html>
