<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=//, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo  $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";

    echo $_SERVER["PHP_SELF"];
    echo "<br>";

    echo $_SERVER["SERVER_NAME"];
    echo "<br>";

    echo $_SERVER['REQUEST_METHOD']; // USED OFTEN
    echo "<br>";

    echo $_GET["name"];
    echo "<br>";

    // echo $_POST["name"];
    echo "<br>";

    echo $_SERVER["REQUEST_TIME"];
    echo "<br>";

    echo date("d-m-Y H:i:s", $_SERVER["REQUEST_TIME"]);
    echo"<br>";

    echo $_REQUEST["name"]; // handles all the requests GET, POST, PUT, HEAD
    echo"<br>";
    
    //FILES
    // echo $_FILES["name"];

    //cookies
    // echo $_COOKIE[""];

    //session
    $_SESSION["username"] = "Hariharan";
    echo $_SESSION["username"];

    $_ENV[""]; //SORTING ENV DATAS

    ?>
</body>
<html>