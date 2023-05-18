<?php
// Page 2 form handling and validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    
    // Validate form data
    $errors = array();

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (count($errors) > 0) {
        // Display validation errors and redirect back to Page 1
        session_start();
        $_SESSION["errors"] = $errors;
        header("Location: index.php");
        exit();
    }
} else {
    // If someone tries to access this page directly without submitting Page 1 form
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Page 2</title>
</head>
<body>
    
    <form class="form" method="POST" action="success.php">
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" required>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
        <br><br>
        <label for="university">University:</label>
        <input type="text" name="university" id="university" required>
        <br><br>
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
