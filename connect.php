<?php
$first_name=$_POST[first_name]
$last_name=$_POST[$last_name]
$email=$_POST[$email]
$password=$_POST[Password]
$Gender=$_POST[$Gender]

// database connection
$conn = new mysqil('localhost','root','','test');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{$stmt = $conn->prepare("insert into registeration(first_name,last_name,email,password,gender,)values(?,?,?,?,?)");
    $stmt->bind_param("sssss,"$first_name,$last_name,$email,$password,$Gender);
    $stmt->execute();
    echo"registration successfull...";
    $stmt->close();
    $conn->close();
}
?>