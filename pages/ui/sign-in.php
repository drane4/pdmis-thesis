
<?php
session_start();
include('config.php');
if(ISSET($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

$user = mysqli_real_escape_string($conn,$username);
$pass1 = mysqli_real_escape_string($conn,$password);

$pass= md5($pass1);
$salt = "kjhasd1d";
$pass = $salt.$pass;

$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `userprofile` WHERE BINARY `username` = '$user && BINARY `password` = '$pass'" ) or die(mysqli_error());
$fetch = $query->fetch_array();
$valid = $query->num_rows;
$position = $fetch['position'];

if($valid > 0){
    if($position == 'Nurse'){
        $_SESSION['user_id'] = $fetch['user_id'];
        echo '<meta http-equip="refresh" content="3; url="transaction.php">';
        echo '<i>Retrieving Account. Please Wait.....</i>';
    }
    if($position == 'HeadNurse'){
        $_SESSION['user_id'] = $fetch['user_id'];
        echo '<meta http-equip="refresh" content="3; url="transaction.php">';
        echo '<i>Retrieving Account. Please Wait.....</i>';
    }
}
else{
    echo "<script>alert('invalid account. Please check your username andd password.')";
    echo "<script>window.location = '../../index.php'</script>";    
    
}
$conn->close();
}
?>
