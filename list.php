<?php

// Create connection
$conn = new mysqli("localhost", "root", "mysql", "resume");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<html>
<body>
<h3>test page list users</h3>
<form method="post", action="details.php">
<label for="list">Choose Name:</label>
<select name="email">
<?php
$result=mysqli_query($conn, "select name, email from details");
while($row = $result->fetch_assoc()){
    echo "<option value='$row[email]'>$row[name]</option>";
}
?>
</select>
<input type="submit" value="Show Details">
</form>
</body>
</html>