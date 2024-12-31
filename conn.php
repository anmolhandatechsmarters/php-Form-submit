<?php
$Insert=false;
$_SERVER="localhost";
$_Username="anmol";
$_passwod="root";
$_Database ="testpratice";
$conn = mysqli_connect($_SERVER , $_Username ,$_passwod,$_Database);
if($conn){
    // echo "connection succefully";
}else{
    die("Connection Failed");
}
// print_r($_POST);die();





if(sizeof($_POST) > 0){
$full_name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone_number=$_POST['phonenumber'];
$address=$_POST['address'];


$sql="INSERT INTO praticeform (full_name,email,password,phone_number,full_address) value ('$full_name','$email','$password','$phone_number','$address')";



if($conn->query($sql) === true){
    $Insert=true;
header('Location:./index.php');
}else{
    echo "not Inserted";
}
$conn->close();

}



?>



