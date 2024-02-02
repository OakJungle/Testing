<?php
// Create connection
$conn = new mysqli("localhost", "root", "mysql", "resume");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_POST["email"];
?>
<html>
<body>
<h3>Test Page Show Details</h3>
<table>
<?php
$result_raw=mysqli_query($conn, "select * from details where email='$email'");
$result=$result_raw->fetch_row();
echo"<tr>
        <td>Name</td>
        <td>$result[0]</td>
    </tr>
    <tr>
        <td>Job Profile</td>
        <td>$result[1]</td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td>$result[2]</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>$result[3]</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>$result[4]</td>
    </tr>";
?>
</table>
<u>Achivements</u>
<ul>
<?php
$result=mysqli_query($conn, "select achivement from achivements where email='$email'");
while($row=$result->fetch_assoc()){
    echo "<li>$row[achivement]</li>";
}
?>
</ul>

<u>Educations</u>
<table border="1">
<tr>
<td>Institue Name</td>
<td>Pass Year</td>
</tr>
<?php
$result=mysqli_query($conn, "select institue, pass_year from educations where email='$email'");
while($row=$result->fetch_assoc()){
    echo "<tr>
<td>$row[institue]</td>
<td>$row[pass_year]</td>
</tr>";
}
?>
</table>

<u>interests</u>
<ul>
<?php
$result=mysqli_query($conn, "select interest from interests where email='$email'");
while($row=$result->fetch_assoc()){
    echo "<li>$row[interest]</li>";
}
?>
</ul>

<u>languages</u>
<ul>
<?php
$result=mysqli_query($conn, "select language from languages where email='$email'");
while($row=$result->fetch_assoc()){
    echo "<li>$row[language]</li>";
}
?>
</ul>

<u>skills</u>
<ul>
<?php
$result=mysqli_query($conn, "select skill from skills where email='$email'");
while($row=$result->fetch_assoc()){
    echo "<li>$row[skill]</li>";
}
?>
</ul>
</body>
</html>