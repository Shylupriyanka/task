
<?php
$mysqli=mysqli_connect("localhost","root","","Box");
if($mysqli===false){
    die("error is no occured:"
    .mysqli_connect_error());
}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$from=date('y-m-d',strtotime($_POST['from']));
$to=date('y-m-d',strtotime($_POST['to']));
$sql="INSERT INTO hello VALUES('$firstname','$lastname','$gender','$country','$from','$to')";
if(mysqli_query($mysqli,$sql)){
    echo "data stored successfully";
}else{

}
$mysqli->close();
?>