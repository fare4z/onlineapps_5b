<?php 
include_once 'include/constant.php';
include_once 'include/header.php'; 
include_once 'include/function.php'; 

$name = $_POST['name'];
$nric = $_POST['nric'];
$state = $_POST['state'];
$email = $_POST['email'];
$password = $_POST['password'];
$vpassword = $_POST['vpassword'];


echo "name : $name <br>
nric : $nric <br>
gender : ".get_jantina($nric)." <br>
dob : ".get_dob($nric)." <br>
state : $state <br>
password : $password <br>
vpassword : $vpassword";


include_once 'include/footer.php'; 
// echo var_dump($_POST);
