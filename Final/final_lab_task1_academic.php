<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: final_lab_task1_index.php");
    exit();
}

if (isset($_POST["next"])) {

    $_SESSION["semester"] = $_POST["semester"];
    $_SESSION["course"] = $_POST["course"];
    $_SESSION["credit"] = $_POST["credit"];

    header("Location: final_lab_task1_summary.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>University Portal - Academic Info</title>
    <link rel="stylesheet" href="final_lab_task1_style.css">
</head>

<body>

<div class="container">

    <h2>Academic Information</h2>

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

    </div>

    <form method="POST">

        <label>Semester</label>
        <select name="semester" required>
            <option value="">-- Select Semester --</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
        </select>

        <label>Course Selection</label>
        <input
            type="text"
            name="course"
            required
        >

        <label>Credit Information</label>
        <input
            type="text"
            name="credit"
            required
        >

        <button type="submit" name="next">
            Next
        </button>

    </form>

</div>

</body>
</html>