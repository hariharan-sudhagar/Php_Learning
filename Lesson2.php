<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        form input,
        form textarea,
        form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        form input:focus,
        form textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        form button {
            background: #007bff;
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        form button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <form action="/Php_Learning/includes/formhandler.php" method="post">

        <label for="firstname">Firstname</label>
        <input id="firstname" type="text" name="firstname" placeholder="Firstname..." required>

        <label for="firstname">Lastname</label>
        <input id="lastname" type="text" name="lastname" placeholder="Lastname..." required>

        <label for="favpet">Fav pet ?</label>
        <select name="favpet" id="favpet" required>
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Parrot</option>


        </select>
        <button type="submit">Submit</button>

    </form>
</body>

</html>