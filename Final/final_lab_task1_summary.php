<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: final_lab_task1_index.php");
    exit();
}

if (isset($_COOKIE["remember_student_id"])) {
    $remembered_id = $_COOKIE["remember_student_id"];
} else {
    $remembered_id = "No cookie found";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>University Portal - Summary</title>
    <link rel="stylesheet" href="final_lab_task1_style.css">
</head>

<body>

<div class="container">

    <h2>Registration Summary</h2>

    <div class="info">

        <p>
            Student ID:
            <strong><?php echo $_SESSION["student_id"]; ?></strong>
        </p>

        <p>
            Name:
            <strong><?php echo $_SESSION["name"]; ?></strong>
        </p>

        <p>
            Email:
            <strong><?php echo $_SESSION["email"]; ?></strong>
        </p>

        <p>
            Department:
            <strong><?php echo $_SESSION["department"]; ?></strong>
        </p>

        <p>
            Semester:
            <strong><?php echo $_SESSION["semester"]; ?></strong>
        </p>

        <p>
            Course:
            <strong><?php echo $_SESSION["course"]; ?></strong>
        </p>

        <p>
            Credit:
            <strong><?php echo $_SESSION["credit"]; ?></strong>
        </p>

    </div>

    <div class="info">

        <p>
            Remembered Student ID (Cookie):
        </p>

        <strong><?php echo $remembered_id; ?></strong>

    </div>

    <a href="final_lab_task1_complete.php">Complete Registration</a>

</div>

</body>
</html>