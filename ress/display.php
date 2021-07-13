<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   <u><center><h1>Now Check the Availability Of Catering Service in Your City</h1></center></u> 
<table>
<tr>
<th>city</th>
<th>Date</th>
<!-- <th>Yourweight</th>
<th>Yourmobilenumber</th>
<th>YourEmail</th>
<th>Gender</th>
<th>YourbloodGroup</th>
<th>Yourcity</th>
<th>Yourarea</th>
<th>Yourpincode</th> -->
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "service");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT city, Date FROM service";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["city"]. "</td><td>" . $row["Date"]. "</td><td>";
// . $row["Yourweight"]. "</td><td>" . $row["Yourmobilenumber"]. "</td><td>" . $row["YourEmail"] . "</td><td>" . $row["Gender"]. "</td><td>" . $row["YourbloodGroup"]. "</td><td>" . $row["Yourcity"].  "</td><td>" . $row["Yourarea"]. "</td><td>" . $row["Yourpincode"].  "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>