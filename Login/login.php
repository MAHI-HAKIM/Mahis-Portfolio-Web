<?php
session_start();

$correct_username = 'b201210605@sakarya.edu.tr';
$correct_password = 'b201210605';
$login_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == $correct_username && $password == $correct_password) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('Location: ./welcome.php');
    exit();
  } else {
    $login_error = 'Wrong username or password!';
  }
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
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./login.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <!-- BODY SECTION STARTS -->
  <body>
    <div class="container">
      <div class="login-content">
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
          <div class="welcome-section">
             <h2 class="title">Welcome Mahi Abdulhakim</h2>
              <form method="get" action="login.php" class="logout-form">
                <input type="hidden" name="logout">
                <input type="submit" class="btn logout-btn" value="Logout">
              </form>
           </div>
        <?php else: ?>
          <form method="post" action="./login.php"  autocomplete ="off" id = "form" >
            <a href="../index.html" class="logo">
              <i class="ri-polaroid-2-fill"></i><span>Cinemagramic</span>
            </a>
            <img src="../images/avatar.svg" />
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
              <div class="i">
                <i class="fas fa-user"></i>
              </div>
              <div class="div">
                <h5>Username</h5>
                <input type="email" class="input"  id="username" required name="username" />
              </div>
            </div>
            <div class="input-div pass">
              <div class="i">
                <i class="fas fa-lock"></i>
              </div>
              <div class="div">
                <h5>Password</h5>
                <input type="password" class="input" required id="password" name="password" />
              </div>
            </div>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <div>
                <span class="login-error"><?php echo $login_error; ?></span>
            </div>
            <input type="submit" class="btn" value="Login" />
          </form>
        <?php endif; ?>
      </div>
    </div>
    <script type="text/javascript" src="./login.js"></script>
  </body>
</html>

