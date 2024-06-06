<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Heroes - Register</title>
    <link rel="stylesheet" href="./dist/main.css">
</head>
<body>
    <div class="container py-4 px-3 mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                        <form id="formRegister" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mt-3">Register</button>
                            </div>
                        </form>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./dist/main.js"></script>
</body>
</html>
