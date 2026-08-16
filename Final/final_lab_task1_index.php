<?php

session_start();

if (isset($_POST["next"])) {

    $student_id = $_POST["student_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $department = $_POST["department"];

    // Store student info in session
    $_SESSION["student_id"] = $student_id;
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["department"] = $department;

    // Create cookie if Remember Student ID is checked
    if (isset($_POST["remember"])) {
        setcookie(
            "remember_student_id",
            $student_id,
            time() + (86400 * 30),
            "/"
        );
    }

    header("Location: final_lab_task1_academic.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>University Portal - Student Registration</title>
    <link rel="stylesheet" href="final_lab_task1_style.css">
</head>

<body>

<div class="container">

    <h2>Student Registration</h2>

    <form method="POST">

        <label>Student ID</label>
        <input
            type="text"
            name="student_id"
            required
        >

        <label>Full Name</label>
        <input
            type="text"
            name="name"
            required
        >

        <label>Email</label>
        <input
            type="email"
            name="email"
            required
        >

        <label>Department</label>
        <select name="department" required>
            <option value="">-- Select Department --</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="BBA">BBA</option>
            <option value="English">English</option>
        </select>

        <label>
            <input
                type="checkbox"
                name="remember"
            >
            Remember Student ID
        </label>

        <button type="submit" name="next">
            Next
        </button>

    </form>

</div>

</body>
</html>