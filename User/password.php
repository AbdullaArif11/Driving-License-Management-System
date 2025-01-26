<?php
// Check if the form is submitted for requesting a password reset
if (isset($_POST['email'])) {
    // Process the request for password reset
    $email = $_POST['email'];
    
    // Validate email (you can add more validation if needed)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address";
    } else {
        // Check if email exists in the database (you need to replace this with your database query)
        // If email exists, generate a random token, store it in the database, and send the reset link via email
        // If email doesn't exist, show an error message
        // For demonstration purpose, we're just showing a success message here
        $success = "Password reset link sent successfully to $email";
    }
}

// Check if the form is submitted for resetting the password
if (isset($_POST['token'], $_POST['password'])) {
    // Process the password reset
    $token = $_POST['token']; // The token received from the reset link
    $password = $_POST['password']; // The new password
    
    // Validate token and check if it's valid and not expired
    // If token is valid and not expired, update the password in the database
    // If token is invalid or expired, show an error message
    // For demonstration purpose, we're just showing a success message here
    $success = "Password reset successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if (isset($success)): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php else: ?>
        <form action="" method="post">
            <label for="email">Enter your email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <button type="submit">Request Reset Link</button>
        </form>
    <?php endif; ?>

    <?php if (isset($_GET['token'])): ?>
        <h2>Reset Password</h2>
        <form action="" method="post">
            <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
            <label for="password">Enter your new password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Reset Password</button>
        </form>
    <?php endif; ?>
</body>
</html>
<?php
// Check if the form is submitted for requesting a password reset
if (isset($_POST['email'])) {
    // Process the request for password reset
    $email = $_POST['email'];
    
    // Validate email (you can add more validation if needed)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address";
    } else {
        // Check if email exists in the database (you need to replace this with your database query)
        // If email exists, generate a random token, store it in the database, and send the reset link via email
        // If email doesn't exist, show an error message
        // For demonstration purpose, we're just showing a success message here
        $success = "Password reset link sent successfully to $email";
    }
}

// Check if the form is submitted for resetting the password
if (isset($_POST['token'], $_POST['password'])) {
    // Process the password reset
    $token = $_POST['token']; // The token received from the reset link
    $password = $_POST['password']; // The new password
    
    // Validate token and check if it's valid and not expired
    // If token is valid and not expired, update the password in the database
    // If token is invalid or expired, show an error message
    // For demonstration purpose, we're just showing a success message here
    $success = "Password reset successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if (isset($success)): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php else: ?>
        <form action="" method="post">
            <label for="email">Enter your email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <button type="submit">Request Reset Link</button>
        </form>
    <?php endif; ?>

    <?php if (isset($_GET['token'])): ?>
        <h2>Reset Password</h2>
        <form action="" method="post">
            <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
            <label for="password">Enter your new password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Reset Password</button>
        </form>
    <?php endif; ?>
</body>
</html>
