<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header('Location: ../index.html');
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="./login.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <div class="container">
      <div class="login-content">
        <div class="welcome-section">
          <h2 class="title">Welcome <?php echo $_SESSION['username']; ?></h2>
          <form method="get" action="welcome.php" class="logout-form">
            <input type="hidden" name="logout">
            <input type="submit" class="btn logout-btn" value="Logout">
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./login.js"></script>
  </body>
</html>
