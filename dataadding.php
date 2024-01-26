<?php
if(isset($_POST['sub'])){
$conn=mysqli_connect("localhost","root","43Malu@21","internship");
$name=$_POST['name'];
$email=$_POST['email'];
$job=$_POST['job'];
$descr=$_POST['d'];
// $filename= $_FILES['uploadfile']['name'];
// $tempname= $_FILES['uploadfile']['tmp_name'];
// $folder="internship/images/".$filename;
// move_uploaded_file($tempname,$folder);
$q="insert into register values('$name','$email','$job','$descr')";
mysqli_query($conn,$q);
}   
$query="select * from register";

if($query){
?>
<h1>Data added</h1>
<a href="dataconn.php">Go to home page</a>

<?php
}

?>
