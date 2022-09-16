<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="form.php" method="GET" class="Form">
        Name: <input placeholder="Input.." type="text" class="Input" name="name">
        <button type="submit">Submit</button>
    </form>

    <?php echo $_GET["name"] ?>
</body>

</html>