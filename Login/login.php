<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/login_style.css">
</head>

<body>
    <form action="checklogin.php" method="post">
        <form action="login.php" method="post"></form>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
    </form>
</body>

</html>

<php <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // TODO: Add your login logic here

    // Redirect to a different page after successful login
    header("Location: welcome.php");
    exit;
}
?> ?>