<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Register</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); 

        $check_email = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $check_email);

        if (mysqli_num_rows($result) > 0) {
            echo "<p style='color:red;'>Email already registered!</p>";
        } else {
            $sql = "INSERT INTO users (full_name, email, phone, address, password) 
                    VALUES ('$full_name', '$email', '$phone', '$address', '$password')";
            
            if (mysqli_query($conn, $sql)) {
                echo "<p style='color:green;'>Registration Successful!</p>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    ?>

    <form method="post" action="">
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Create Account</button>
    </form>
    
    <a href="login.php">Already have an account? Login here</a>
</div>

</body>
</html>