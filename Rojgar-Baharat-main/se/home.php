<?php

//print_r($_SESSION);
if(isset($_SESSION['empid']))
{
    unset($_SESSION['empid']);
    header("Location:localhost/seProject/se/index.php");
    //
}else{
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>successfull login</h1>
</body>
</html>