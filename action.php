<?php
//echo 'hello';
//echo '<pre>';
//print_r($_POST);
//
//echo $_POST['first_name']
//echo $_POST['last_name']
//echo $_POST['full_name']
//echo $_POST['button']
require_once 'vendor/autoload.php';
use App\classes\FullName;

$fullName =new FullName($_POST);
$result = $fullName->index();