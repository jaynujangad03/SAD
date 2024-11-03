<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="container my-5">
        <h2 class="section-title">Login</h2>
        <form action="login-action.php" method="POST" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <a href="admindashboard.php" class="btn btn-primary w-100" role="button">Login</a>

            <div class="text-center mt-3">
                <p>Don't have an account? <a href="register.php">Click here to register</a></p>
            </div>
        </form>
    </section>
</body>
</html>
