<?php
set_time_limit(0);
$sqlname='localhost';
$username='root';
$password='anjana';
$conn = new mysqli($sqlname, $username, $password,'Details');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM Details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
    	$targetPath =  './uploads/'.$row["ID"];
        echo"	<tr>";
        echo"	<td>File Name:-" . $row["File_Name"]."</td>";
        echo"   <td> | ID:- <a href='$targetPath'>".$row['ID']."</a></td>";
        echo"	<td> | Project Name:-". $row["Project_Name"]."</td>";
        echo"	<td> | Project Lead Name:-" . $row["Project_Lead_Name"]."</td>";
        echo"	<td> | File Description:-" . $row["File_Description"]."</td>";
        echo"	<td> | Share Type:-" . $row["Share_Type"]."</td>";
        echo"	</tr>";
        echo nl2br("\n");
    }
} else {
    echo "0 results";
}
$conn->close();
?>
