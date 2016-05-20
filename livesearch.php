<!DOCTYPE html>
<html>
<head>
<style>
table {
  position: absolute;
    width: 90%;
    border-collapse: collapse;
    margin-top: 100px;
}

table, td, th {
  margin-top: 50px;
  margin-left: 80px;
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','Yerassyl','87053163124','SF');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM SF WHERE Username ='".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Username</th>
<th>Surname</th>
<th>Birthdate</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Username'] . "</td>";
    echo "<td>" . $row['Surname'] . "</td>";
    echo "<td>" . $row['Birthdate'].".".$row['Monthdate'].".".$row['Yeardate'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
