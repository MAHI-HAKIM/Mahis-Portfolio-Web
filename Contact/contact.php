<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- STYLE SHEETS  -->
    <script src="./contact.js" defer></script>
    <script src="./js/script.js" defer></script>
    <link rel="stylesheet" href="./contact.css" />
    <link rel="stylesheet" type="text/css" href="../Styles/footer.css" />
    <title>Contact-Me</title>
  </head>
  <body>
    
     <!-- NAVIGATOR-BAR START -->
    <header  >
      <a href="../index.html" class="logo">
        <i class="ri-polaroid-2-fill"></i><span>Cinemagramic</span></a
      >
      <ul class="navibar">
        <li><a href="../index.html">Home</a></li>
        <li><a href="../Resume/cv.html">Resume</a></li>
        <li><a href="../Ethiopia/country.html">Ethiopia</a></li>
        <li><a href="../Heritage/heritage.html">Heritage</a></li>
        <li><a href="../Contact/contact.html">Contact us</a></li>
      </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
    <!-- NAVIGATOR-BAR ENDS -->

    <!-- INFORMATION SECTION STARTS HERE -->
    <div class="contact-main">
      <div class="contact-main-text">
        <h1>What Makes Ethiopia Great</h1>
        <p>
          Ethiopia became prominent in modern world affairs first in 1896, when
          it defeated colonial Italy in the Battle of Adwa, and again in
          1935–36, when it was invaded and occupied by fascist Italy. Liberation
          during World War II by the Allied powers set the stage for Ethiopia to
          play a more prominent role in world affairs. Contact Me For More
        </p>
        <a href="#contact" class="btn btn-primary btn-lg">HAVE QUESTION?</a>
      </div>
    </div>
    <!-- INFORMATION SECTION ENDS HERE -->

    <!-- CONTACT FORM STARTS HERE -->
    <section class="contact" id="contact">
      <div class="max-width">
        <h2 class="title">Contact me</h2>
        <div class="contact-content">
          <div class="column left">
            <div class="text">Get in Touch</div>
            <p>
              As an ambitious web developer, I am passionately driven 
              to expand my knowledge and skill set, with a keen focus 
              on becoming a proficient full-stack developer. I thoroughly 
              enjoy collaborating with others, as I believe teamwork
               amplifies creativity and fosters innovative solutions.
            </p>

            <div class="icons">
              <div class="row">
                <i class="fas fa-user"></i>
                <div class="info">
                  <div class="head">Name</div>
                  <div class="sub-title">Mahi Abdulhakim</div>
                </div>
              </div>
              <div class="row">
                <i class="fas fa-map-marker-alt"></i>
                <div class="info">
                  <div class="head">Address</div>
                  <div class="sub-title">Turkey, Sakarya</div>
                </div>
              </div>
              <div class="row">
                <a href="https://www.instagram.com/cinemagramic/" class="fourth"
                  ><i class="fab fa-instagram"></i
                ></a>
                <div class="info">
                  <div class="head">Instagram</div>
                  <div class="sub-title">cinemagramic</div>
                </div>
              </div>
              <div class="row">
                <a href="mailto:mahiabdul20@gmail.com"
                  ><i class="fas fa-envelope"></i
                ></a>
                <div class="info">
                  <div class="head">Email</div>
                  <div class="sub-title">mahiabdul20@gmail.com</div>
                </div>
              </div>
            </div>
          </div>

          <div class="column right">
            <div class="text">Message me</div>

            <form action="confirm.php" method="POST" class="myform" id="form" id="contact-form" autocomplete="off">
              <div class="fields">
                <div class="field name">
                  <input type="text" placeholder="Name"  name = "name-input" id="name-input" />
                </div>
                <div class="field email">
                  <input type="email" placeholder="Email"  name = "email-input" id="email-input" />
                </div>
              </div>
              <div class="field textarea">
                <textarea
                  cols="30"
                  rows="10"
                  name = "message-input"
                  placeholder="Message"
                   id="message-input"
                ></textarea>
              </div>
              <div class="button-area">
                <button type="submit" class = "submit-button">Submit</button>
                <button type="reset" class="reset-button">Reset</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT FORM ENDS HERE -->

<!-- FOOTER SECTION STARTS -->
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

    <script src="../script.js" defer></script>
    <script src="./contact1.js" defer></script>

  </body>
</html>
