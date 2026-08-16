<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: labpractice_index.php");
    exit();
}

$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="labpractice_style.css">
</head>

<body>

<div class="container">

    <h2>Dashboard</h2>

    <div class="info">

        <p>
            Welcome,
            <strong><?php echo $username; ?></strong>
        </p>

        <p>
            This username is stored in the
            <strong>PHP Session</strong>.
        </p>

    </div>

    <a href="labpractice_cookie.php">View Cookie</a>

    <a href="labpractice_logout.php">Logout</a>

</div>

</body>
</html>