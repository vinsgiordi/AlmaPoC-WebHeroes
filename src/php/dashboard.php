<?php
session_start();

if (isset($_SESSION['session_id']) && isset($_SESSION['session_user'])) {
    $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
    $session_id = htmlspecialchars($_SESSION['session_id'], ENT_QUOTES, 'UTF-8');
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Heroes - Dashboard</title>
  </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>Welcome, <?php echo $session_user; ?></h1>
                    <p>Your session ID is: <?php echo $session_id; ?></p>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    header('Location: index.html');
    exit;
}