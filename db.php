<?php
echo json_encode($_POST);
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "resume";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$job_profile=$_POST['job'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['add'];
$my_skill=$_POST['skills'];
$language=$_POST['languages'];
$achivements=$_POST['achievement'];
$interest=$_POST['interest'];
$education=$_POST['education'];
$add_query = "INSERT INTO details values('$name', '$job_profile', $phone, '$email' ,'$address' ,'$my_skill' ,'$language' ,'$achivements' ,'$interest' ,'$education')";

if ($conn->query($add_query) === TRUE) {
  echo "Insertion Successfull";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
if(isset($_POST['b1']))
	{
		$con1=new mysqli("localhost","root","mysql","resume");
		$sql1=mysqli_query($con1,"insert into item values('$name','$job_profile','$phone','$email','$address','$my_skill','$language','$achivements',$interest','$education')");
		
		if($sql1)
		{
			echo '<script>alert("Record inserted Successfully")</script>';
		}
		else
		{
			echo '<script>alert("Record insertion Failed!")</script>';
		}
	}
	if(isset($_POST['b2']))
	{
		$con2=new mysqli("localhost","root","mysql","resume");
		$sql2=mysqli_query($con2,"delete from item where name='$name' or id='$id'");
		
		if($sql2)
		{
			echo '<script>alert("Record Deleted")</script>';
		}
		else
		{
			echo '<script>alert("Record deletion Failed!")</script>';
		}
	}
	
?>
