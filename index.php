<?php
ini_set('display_errors', 1);
require "model.php";

$model = new Model();

if(isset($_POST['submit'])) {
    $model->inssertrow($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        if(isset($_GET['msg']) && $_GET['msg'] == 'inss') {
            echo '<p class="warning">data insert succesed!!</p>';
        }
    ?>
    <main>
    <h1>Create By <div>Muhammad Rivaldi</div></h1>
        <form action="" method="post">
            <label for="user">User</label>
            <input type="text" name="user" id="user" placeholder="Enter your name ">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">

            <button type="submit" name="submit">Send</button>
        </form>
    </main>
</body>
</html>