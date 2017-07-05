<?php 
set_time_limit(0);
$sqlname="localhost";
$username="root";
$dbtemp=uniqid();
$password="anjana";
$File_Name=trim($_POST['fname']);
$ID=$dbtemp;
$Project_Name=trim($_POST['pname']);
$Project_Lead_Name=trim($_POST['plname']);
$File_Description=trim($_POST['fd']);
$Share_Type=trim($_POST['sharetype']);
// Create database if does not exist
//Enter details in that database
$conn = new mysqli($sqlname, $username, $password);
$sql="CREATE DATABASE IF NOT EXISTS Details";
if(mysqli_query($conn,$sql)==TRUE){
$conn = new mysqli($sqlname, $username, $password, 'Details');
$sql1="CREATE TABLE Details(File_Name VARCHAR(100),
        ID VARCHAR(100) PRIMARY KEY,
        Project_Name VARCHAR(100) NOT NULL, 
        Project_Lead_Name VARCHAR(100) NOT NULL,
        File_Description VARCHAR(1000) NOT NULL,
        Share_Type VARCHAR(7) NOT NULL)";
mysqli_query($conn,$sql1);
$conn = new mysqli($sqlname, $username, $password, 'Details');
$sql2="INSERT INTO Details (File_Name,ID,Project_Name,Project_Lead_Name,File_Description,Share_Type)
VALUES ('$File_Name','$ID','$Project_Name','$Project_Lead_Name','$File_Description','$Share_Type')";
mysqli_query($conn,$sql2);
}

else {$conn = new mysqli($sqlname, $username, $password, 'Details');
$sql2="INSERT INTO Details (File_Name,ID,Project_Name,Project_Lead_Name,File_Description,Share_Type)
VALUES ('$File_Name','$ID','$Project_Name','$Project_Lead_Name','$File_Description','$SH')";
mysqli_query($conn,$sql2);
}

?>
