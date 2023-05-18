<style>
    <?php include_once 'confirm.css'; ?>
</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" type="text/css" href="../Styles/footer.css" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <section class="confirmation">
        <div class = "confirm">
            <div class="myheader lead" style="color:green; font-size:larger; font-weight:bold"><br>
                <h3>&nbsp &nbsp Your message has been sent!</h3><hr>
            </div>
            <div style="font-size:medium;">
                <div class="first">
                    &nbsp &nbsp Your name: <span id = "name"> &nbsp<?php echo $_POST['name-input']; ?></span>
                </div>
                <div class="second"><br>
                    &nbsp &nbsp Your email: <span id="email"> &nbsp<?php echo $_POST['email-input']; ?></span>
                </div>
                <div class="third"><br>
                    &nbsp &nbsp Your message: <span id="message"></span>
                </div><br>
                <textarea name="line" id="line" cols="40" rows="6" readonly><?php echo $_POST['message-input']; ?></textarea>
                <a class = "btn btn-success btn-lg" href = "../index.html" style="margin-left:50%; margin-top: 2%;">Return To Home</a>
            </div>
        </div>
    </section>

     <!-- FOOTER SECTION STARTS HERE-->
 <footer>
  <div class="footer-content">
    <h4>Mahi Abdulhakim</h4>
    <p>Web and UI/UX Developer | Photographer | Cinematic Video Creator</p>
    <ul class="socials">
      <li>
        <a href="mailto:mahiabdul20@gmail.com"
          ><i class="fas fa-envelope"></i
        ></a>
      </li>
      <li>
        <a href="https://github.com/MAHI-HAKIM"><i class="fab fa-github"></i></a>
      </li>
      <li>
        <a href="https://www.instagram.com/cinemagramic/"
          ><i class="fab fa-instagram"></i
        ></a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/mahi-hakim/"
          ><i class="fab fa-linkedin-in"></i
        ></a>
      </li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>© 2023 Mahi Abdulhakim. All rights reserved.</p>
  </div>
</footer>
<!-- FOOTER SECTION ENDS -->
    
</body>
</html>