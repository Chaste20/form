<?php
// Success page

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "  Thank you for filling form $name";
} else {
    // If someone tries to access this page directly without submitting the form
    header("Location: index.php");
    exit();
}
?>

<!--<!DOCTYPE html>
<html>
<head>
    <title>Success Page</title>
</head>
<body>
    <h1>Success</h1>
    <p>Thank you for </p>--!
