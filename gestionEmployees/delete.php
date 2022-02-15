<?php 
include("connect.php");

$matr  = $_GET['matricule'];
if(isset($_GET['matricule'])){
    $query = "DELETE FROM employee WHERE matricule='$matr'";
    $result = mysqli_query($con,$query);
    if($result){
        header('location:index.php');
    }else{
        echo"error";
    }
}
?>
