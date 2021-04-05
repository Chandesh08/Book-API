<?php
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'bookapi');
            // Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
include_once "delete.php";
if (isset($_GET['recordId'])){
    $recordId = $_GET['recordId'];
    $getdelete = new getdeleteevent();
    $delete = $getdelete->deleteRecordById($conn,$recordId);
    if ($delete){
        header('Location: deletebook.php');
    }
}