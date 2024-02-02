<?php
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

if(isset($_POST['b1']))
	{
		$result = $conn->query("SELECT email FROM details WHERE email='$email'");
		$row = $result->fetch_assoc();
		$is_item=(bool)$row;
		if($is_item){
			echo "Email Alredy Registered";
		}
		else{
		$details_query=mysqli_query($conn,"INSERT INTO details values('$name', '$job_profile', $phone, '$email' ,'$address')");
		foreach($my_skill as $x){
			$skills_query=mysqli_query($conn,"insert into skills values('$email', '$x')");
		}
		foreach($language as $x){
			$languages_query=mysqli_query($conn,"insert into languages values('$email', '$x')");
		}
		foreach($achivements as $x){
			$achivements_query=mysqli_query($conn,"insert into achivements values('$email', '$x')");
		}
		foreach($interest as $x){
			$interests_query=mysqli_query($conn,"insert into interests values('$email', '$x')");
		}
		foreach($education as $x){
			$edu=explode("-", $x);
			if(count($edu)<2){
				die("Institue name or Passing Year Missing");
			}
			$educations_query=mysqli_query($conn,"insert into educations values('$email', '$edu[0]', '$edu[1]')");
		}
		if($details_query && $skills_query && $languages_query && $achivements_query && $interests_query && $education)
		{
			echo 'Record inserted Successfully';
		}
		else
		{
			mysqli_query($conn, "delete from details where email='$email'");
			echo 'Record insertion Failed';
		}

	}}
	if(isset($_POST['b2']))
	{
		$con2=new mysqli("localhost","root","mysql","resume");
		$sql2=mysqli_query($con2,"delete from item where email='$email'");
		
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
