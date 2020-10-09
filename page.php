
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
table, td {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

th {

   background-color: #4CAF50;
   color: white;
   font-size: 24;
   padding: 16px;
}

td {
    font-style: italic;
    font-size: 18px;
}


tr:nth-child(even) {background-color: lightgrey;}
tr:hover {
    background-color: #4CAF50;
    color: white;
}

</style>

<?php
$servername = "localhost";
$username = "myuser";
$password = "kiss7673";
$dbname = "northwind";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, company,  first_name, last_name, address, city, country_region  FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Company Name</th><th>Name</th><th>Address</th><th>City</th><th>Country</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" .$row["company"]. "</td><td>" . $row["first_name"]. " " . $row["last_name"]."</td><td>" . $row["address"]. "</td><td>" .$row["city"]. "</td><td>" .$row["country_region"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

