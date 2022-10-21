<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Balance-Sparks Bank</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style5.css" />
    <link rel="icon" type="image/x-icon" href="favicon.jpg">
    <style><?php include 'style5.css';?></style>
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
    <div class="parent">
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
    <section class="super">
    <!-- <h2 class="sub-brand">Check Balance -</h2> -->
    <div class="main">
        <div class="container" >
            <div
                style="width:90%; background-color:#d14573; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray; text-align:center;">
                <h1 style=" color:white;">Check Account Balance</h1>
            </div>

            <div class="container1">
                <form action="balance.php" method="post">
                    <input type="text" class="formin form-control" name="accno" id="" placeholder="Account Number"
                       ><br><br>
                    <br><input class="btn mybtn btn-outline-dark" type="submit" value="Submit"><br><br> 
                    <p class="ins" style="color:black;">Don't remember your account number? check <a href="customer.php">here</a>
                    </p>
                </form> 
            </div>
        <?php
 // Turn off all error reporting
 error_reporting(0);
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $accno = $_POST['accno'];
    
    $sql = "SELECT blc FROM users where accno='$accno'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert" 
        style="width:25%;" role="alert">
 <h2> ₹'.mysqli_fetch_assoc($result)['blc'].'</h2>
</div>';
    }
    else{
        echo '<div class="alert2" 
        role="alert">
 <p> Something Went Wrong !!<p>
</div>
        </div>';
// echo '<script>alert(Something Went Worng, Check Acount number)</script>';
    }
}
}


?>
    </div>
    </section>
</div>
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
var main = document.querySelector(".super");
function hide() {
  loader.style.display = "none";
}
function show() {
  main.classList.toggle("done");
}
window.addEventListener("load", () => {
  setTimeout(hide, 1500);
  setTimeout(show, 1500);
});
    </script>
  </body>
</html>
