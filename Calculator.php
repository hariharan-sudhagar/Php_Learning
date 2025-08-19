<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action=" <?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <input id="num01" type="number" name="num01" placeholder="Number" required>
        <select name="operator" id="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>

        <input id="num02" type="number" name="num02" placeholder="Number" required>
        <button type="submit">Calulate</button>
    </form>
    <?php
    $num01 = $num02 = $operator = "";
    $errors = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);
    }
    $erros = false;

    if (empty($num01) || empty($num02) || empty($operator)) {
        $erros = true;
        echo " <script>
                        alert('Please fill the all fields !');
                        </script>";
    }

    if (!is_numeric($num01) || !is_numeric($num02)) {
        echo " <script>
                        alert('Please fill number only !');
                        </script>";
        $errors = true;
    }
        $value = 0;

    if (!$errors) {

        switch ($operator) {

            case "add":
                $value += $num01 + $num02;
                break;
            case "sub":
                $value += $num01 - $num02;
                break;
            case "mul":
                $value += $num01 * $num02;
                break;
            case "div":
                $value += $num01 / $num02;
                break;
            default:
                echo " Entered Operation cannot be performed. ";
        }

        echo "The answers are : " . $value;
    }




    ?>

</body>

</html>