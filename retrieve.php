<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
   <center><table width="80%" border="1">
  
  <tr>
    <td>user ID &nbsp</td>
    <td>password &nbsp</td>
    <td>user name &nbsp</td>
    <td>Email id</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["user_id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["pass"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<br><br>
<a href="mainindex.html">goto user pannel</a>
</center>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>