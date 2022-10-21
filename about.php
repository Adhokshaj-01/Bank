<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>About-Sparks Bank</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style6.css" />
    <link rel="icon" type="image/x-icon" href="favicon.jpg">
    <style><?php include 'style6.css';?></style>
  </head>
  <body>
  <?php include 'db.php';?>
    
    <div class="mobile" style="overflow:hidden;">
    <h3>For Better Exprience Use Desktop/Landscape Mode !!</h3>
      <img src="mobile.jpg" style="display: flex;" width="80%"/>

    </div>
    <div class="parent">
    <section class="super">
    <nav class="navbar navbar-expand-lg navbar-light">
      <span class="nav-logo">
        <span class="material-symbols-outlined icon">
          assured_workload
          </span>
      </span>&nbsp;&nbsp;&nbsp;&nbsp;
      <a class="navbar-brand"  href="index.php"><span style="font-family:'Mea Culpa', cursive; font-size: 30px;">B</span>ank Of <span style="font-family:'Mea Culpa', cursive; font-size: 30px;">S</span>aprks</a>
      <div class="collapse navbar-collapse my-nav" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
          <a class="nav-link" href="about.php#timeline">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="send.php">Send Money</a>
              <a class="dropdown-item" href="customer.php">View All Customers</a>
              <a class="dropdown-item" href="transcation.php">Transactions</a>
              <a class="dropdown-item" href="balance.php">Check Balance</a>
            </div>
          </li> 
        </ul>
    </nav>
    <h2 class="sub-brand">About Us</h2>
    <h6 class="sub-brand" style=" margin-top:0px; color: #aaaaaa;">Created By-</h6>
    <div class="parent1">
    <div class="info">
        <div class="img1" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine"
     data-aos-duration="900">
        <span class="material-symbols-outlined" >
person_filled
</span>
   
    <h3 >Adhokshaj Hartalkar</h3>
    <h5 style="color:grey;">Web Developer</h5>
    <span class="icon2">
        <a class="i1" href="https://in.linkedin.com/in/adhokshaj-hartalkar"><i class="bi bi-linkedin"></i></a>
        <a class="i2" href="https://github.com/Adhokshaj-01"><i class="bi bi-github"></i></a>
    </span>
        </div>
    </div>
    <div class="contact">
   
  <div class="contact-form-wrapper d-flex justify-content-center">
  <div class="loader">
    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <form action="#" class="contact-form" id="timeline" name="timeline">
      <h5 class="title">Contact us</h5>
      <p class="description">Feel free to contact us if you need any assistance, any help or another question.
      </p>
      <div>
        <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
      </div>
      <div>
        <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
      </div>
      <div>
        <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required></textarea>
      </div>
      <div class="submit-button-wrapper">
        <input type="submit" value="Send">
        <!-- onclick='alert("Currently Not Recieving Messages , Try again Later !")' -->
      </div>
    </form>
  </div>
</div>
</div>
    </section>
  </div>
  
  <!-- <script>
  function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}</script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script>
     var loader = document.querySelector(".loader");
var main = document.querySelector(".contact-form");
function hide() {
  loader.style.display = "none";
}
function show() {
    main.classList.toggle("done");
}
window.addEventListener("load", () => {
  setTimeout(hide, 800);
  setTimeout(show, 800);
});
AOS.init();
    </script>
  </body>
</html>
