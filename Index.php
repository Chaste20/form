<!DOCTYPE html>
<html>
<head>
    <title>Form Page 1</title>
    
</head>
<body>
    <h2> Registration form</h2>
    
    <form class="form" method="POST" action="page2.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
