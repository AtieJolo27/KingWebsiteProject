<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$port = "3306";
$database = "menuitems";

$conn = new mysqli($serverName,$userName,$password,$database, $port);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);
}
echo "Connection Success!";

$SelectQuery = "Select ItemName, `Item Description`, ItemImage, ItemPrice  from combomeals";
$result = $conn->query($SelectQuery);

if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ItemName: " . $row["ItemName"]. "Item Description: " . $row["Item Description"]. '<img src="data:image/jpeg;base64,'. base64_encode($row["ItemImage"]). '" width = "100px"/>'. "Price: " . $row["ItemPrice"];
    }
}
else{
    echo "Zero Results bai";
}

$InsertQuery = "Insert into combomeals (`ItemName`, `Item Description`, `ItemPrice`) values ('KStyle Chicken + Bibimbap Combo', 'Enjoy KStyle Chicken and Bibimbap Combo', 350.00)";

if($conn->query($InsertQuery)){
    echo "Okay";
}
$conn -> close();




?>