<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>The Sparks Bank</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="favicon.jpg">
    <style><?php include 'style.css';?></style>
  </head>
  <body>
    <?php include 'db.php';?>
    <div class="loader">
      <div class= "main2">
        <div class="ring">
          <span></span>
        </div>
        </div>
    </div>
    <div class="mobile" style="overflow:hidden;">
      <h3>For Better Exprience Use Desktop/Landscape Mode !!</h3>
      <img src="mobile.jpg" style="display: flex;" width="80%"/>
    </div>
    <section class="super">
    <nav class="navbar navbar-expand-lg navbar-light "data-aos="fade-down">
      <span class="nav-logo">
        <span class="material-symbols-outlined icon">
          assured_workload
          </span>
      </span>&nbsp;&nbsp;&nbsp;&nbsp;
      <a class="navbar-brand"  href="#"><span style="font-family:'Mea Culpa', cursive; font-size: 40px;">B</span>ank Of <span style="font-family:'Mea Culpa', cursive; font-size: 40px;">S</span>aprks</a>

      <div class="collapse navbar-collapse my-nav" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php#timeline">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
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
    <div class="main">
     <div class="banner" data-aos="fade-right">
      <h3>Welcome To Sparks bank!</h3>
      <h5><i>' Best Financial Services around the globe!'</i></h5>
     </div>
      <img data-aos="slide-right" data-aos-duration="2200"class="img" src="bank2.webp"/>
    </div>
    </div>
    <div class="third">
   <span class="info" data-aos="slide-right">Services</span>
      <div class="onec">
      <div class="card" data-aos="fade-in" style="width: 18rem;" data-aos-duration="2200">
        <img src="customer.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">View Customers</h5>
          <p class="card-text">Here, you can watch every customer of the bank.</p>
          <a href="customer.php" class="btn btn-primary">Go <span href="#" class="material-symbols-outlined">
            north_east
            </span></a>
        </div></div>
    </div>
    <div class="twoc">
      <div class="card" data-aos="fade-in" style="width: 18rem;" data-aos-duration="2200">
        <img src="money.jpg" class="card-img-top" style="height:200px" alt="...">
        <div class="card-body">
          <h5 class="card-title">Transfer Money</h5>
          <p class="card-text">Here, you can send money from your account.</p>
          <a href="send.php" class="btn btn-primary">Go <span class="material-symbols-outlined">
            north_east
            </span></a>
        </div></div>
    </div>
    <div class="threec">
      <div class="card" data-aos="fade-in" style="width: 18rem;" data-aos-duration="2200">
        <img src="trans.webp" class="card-img-top" style="height:200px" alt="...">
        <div class="card-body">
          <h5 class="card-title">Transactions</h5>
          <p class="card-text">Here, you can check the remaining balance in your account.</p>
          <a href="transcation.php" class="btn btn-primary">Go <span class="material-symbols-outlined">
            north_east
            </span></a>
        </div></div>
    </div>
    
    </div> 
    <div class="second" data-aos="slide-right" data-aos-duration="1500">
      <div class="card1 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="wow.webp" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body" style="margin-left:25px;">
              <h3 class="card-title" style="font-family:'Mea Culpa', cursive; font-size:60px;">Saprks Bank</h3>
              <p class="card-text"
               style="font-size:20px;">
               Our clients are banks, clearing houses, digital & traditional asset firms, governments, financial services companies from local fintechs to global institutions, payment networks and non-financial brands seeking to launch fully compliant financial products and services in-country and cross-border.</p>
               <button class="btn-1" >Read More <span class="material-symbols-outlined">
                north_east
                </span></button>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="fotter">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#c894d7" 
          fill-opacity="1"
           d="M0,160L40,154.7C80,149,160,139,240,154.7C320,171,400,213,480,245.3C560,277,640,299,720,277.3C800,256,880,192,960,176C1040,160,1120,192,1200,218.7C1280,245,1360,267,1400,277.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
      </div>
    </section>

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
      AOS.init({
  duration: 1200,
});
    </script>
  </body>
</html>
