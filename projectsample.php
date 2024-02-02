<?php
$name=$_POST['name'];
$Job_Profile=$_POST['job'];
$Phone_Number=$_POST['phone'];
$email=$_POST['e-mail'];
$Address=$_POST['add'];
if(isset($_POST['b1'])){
$con1=new mysqli("localhost","root","mysql","mini");
$sql1=mysqli_query($con1,"insert into details values('$name','$Job_Profile','$Phone_Number','$Phone_Number','$Address')");
if($sql1)
{
echo '<script>alert("insertion Successfully")</script>';
}
else
{
echo '<script>alert("insertion Failed!")</script>';
}
}
if(isset($_POST['b3']))
{
$con3=new mysqli("localhost","root","mysql","mini");
$sql3=mysqli_query($con3,"update item set name='$name', Job_Profile='$Job_Profile',
qty='$qty' where id='$id'");
if($sql3)
{
echo '<script>alert("Updated Successfully")</script>';
}
else
{
echo '<script>alert("Updation Failed!")</script>';
}
}
?>
