<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = $_POST['Email'];
    $password = $_POST['password'];
    $user_type = $_POST['typeuser'];
    // Read the existing JSON data from the file, or return an error message if the file doesn't exist
    $file = 'users.json';
    if (file_exists($file)) {
        $existing_data = file_get_contents($file);
        $existing_data_array = json_decode($existing_data, true);
    } else {
        echo 'Error: Us not found';
        exit();
    }

    // Check if user exists with the given email and password
    $user_found = false;
    foreach ($existing_data_array as $user) {
        if ($user['Email'] == $email && password_verify($password, $user['password'])) {
            $user_found = true;
            break;
        }
    }

    // If user exists, redirect to home page
    if ($user_type === 'client') {
        header('Location: clienthome.php');
        exit;
    } elseif ($user_type === 'vendor') {
        header('Location: vendorhome.php');
        exit;
    } else {
        echo "Error: Invalid user type.";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
    <link rel="stylesheet" href="Sign In.Css" />
    <title>Logout page</title>
</head>

<body>
    <div class="container">
        <div class="Forms">
            <div class="form Login">
                <span class="title">Login</span>
                <form method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter Your Email" name="Email" required />
                        <i class="uil uil-envelope iczon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Enter Your Password" name="password" required />
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logcheck" />
                            <label for="logcheck" class="text">Remember Me</label>
                        </div>
                        <a href="#" class="text1">Forget Password</a>
                    </div>

                    <div class="usertype">
                        <label for="typeuser">The user type:</label>
                        <select name="typeuser" id="typeuser">
                            <label for="typeuser"> the type user:</label>
                            <option value="client">client</option>
                            <option value="vendor">vendor</option>
                        </select>
                    </div>

                    <div class="input-field button">
                        <button type="submit">Login Now</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>