
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSSFILE.css">
</head>
<body>
    <div class="wrapper" id="form">

        <form action="login.php" >
            <h1>Login</h1>

            <div class="input-box" method="POST">
                <input type="text" id="user" placeholder="Username" 
                required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box" method="POST">
                <input type="password" id="password" placeholder="Password" 
                required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="submit">
                Login
            </button>

            <div class="register-link">
                <p>
                    Don't have an account?
                    <a href="#" class="Registerbtn">Register</a>
                </p>
            </div>
        </form>

    </div>
</body>
</html>