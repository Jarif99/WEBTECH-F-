<?php

session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <title>University Portal - Registration Complete</title>
    <link rel="stylesheet" href="final_lab_task1_style.css">
</head>

<body>

<div class="container">

    <h2>Registration Successful</h2>

    <p class="success">
        Your registration has been completed and the session has been destroyed.
    </p>

    <a href="final_lab_task1_index.php">Register Another Student</a>

</div>

</body>
</html>