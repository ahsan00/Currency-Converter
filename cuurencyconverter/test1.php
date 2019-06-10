

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "phonebook";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `phone`";
$result1 = mysqli_query($connect, $query);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <select>

           <?php while($row1 = mysqli_fetch_array($result1)):;?>

           <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

           <?php endwhile;?>

       </select>


   </body>
 </html>
