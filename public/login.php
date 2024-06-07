<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Heroes - Login</title>
    <link rel="stylesheet" href="dist/main.css">
</head>
<body>
    <div class="container py-4 px-3 mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <form id="formLogin" method="POST">
                            <div class="mb-3">
                                <label for="login-username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="login-username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="login-password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="login-password" name="password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mt-3">Login</button>
                            </div>
                            <div class="mt-3 text-center">
                                <small>Don't have an account? <a href="register.php" class="text-decoration-none">Register now</a></small>
                            </div>
                        </form>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="dist/main.js"></script>
</body>
</html>
