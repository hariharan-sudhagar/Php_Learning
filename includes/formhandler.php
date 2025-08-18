<?php
// var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pets = htmlspecialchars($_POST["favpet"]);

    if (empty($firstname)) {
        echo " <script>
                    alert('Please fill the all fields !');
                    window.location.href = '../Lesson2.php';
                </script>";
        exit;
    }

    
    echo "These are the datas that the user submitted: ";
    echo "<br>";
    echo "<br>";

    echo "Firstname : ", $firstname;
    echo "<br>";
    echo "Lastname : ", $lastname;
    echo "<br>";
    echo "Pets : ", $pets;

     // If everything is filled, show success popup
    echo "<script>
            alert('All data are successfully submitted!');
            window.location.href = '../Lesson2.php';
          </script>";
    exit;

}    
//  else {
//     header("Location: ../Lesson2.php");
// }
