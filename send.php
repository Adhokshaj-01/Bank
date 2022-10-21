<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Transfer-Sparks Bank</title>
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style4.css" />
    <link rel="icon" type="image/x-icon" href="favicon.jpg">
    <style><?php include 'style4.css';?></style>
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
    <div class="container">
        <div class="form">
          <form action="send.php" method="post">
            <div class="flex-row">
              <label for="card-number">Sender's Account Number</label>
              <input name="accno1" required="required" class="card-number" type="text"value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>">
            </div>
            <div class="flex-row">
              <label for="card-name">Reciever's Account Number</label>
              <input  name="accno2" required="required" class="card-name" type="text" value="">
            </div>
            <div class="flex-row">
              <label for="card-name">Amount</label>
              <input name="amount"  required="required" class="card-name" type="number" value="">
            </div>
            <div class="flex-row">
              <button class="card-submit" type="Submit" value="Transfer"> Send </button>

            </div>
            <div class="flex-row ok" >Want to Check balance ? 
              <a href="balance.php" class="here"> Click here</a></div>
          <img class="card-image" src="https://pngimg.com/uploads/credit_card/credit_card_PNG10.png" alt="Card image">
          <div class="card-image-shadow"></div>
        </div>
      </div>
         
    </form>
	
</div>


</section>
<!--  -->
    <!--  -->
    
<?php 

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){


$sender = $_POST['accno1'];
$amount = $_POST['amount'];
$reciever = $_POST['accno2'];


$checkblcquery = "SELECT blc FROM users where accno='$sender'";
$checkblc = mysqli_query($conn, $checkblcquery);
$ava_blc = mysqli_fetch_assoc($checkblc)['blc'];

if($ava_blc >= $amount){
  
$sql1 = "UPDATE users SET blc= blc-$amount WHERE accno='$sender'";
$sql2 = "UPDATE users SET blc= blc+$amount WHERE accno='$reciever'";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
if($result1 && $result2){
echo  '<script>alert("Amount sent !")</script>';
$sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
$sqltransact = mysqli_query($conn, $sqltran);
}else{
// echo  '<script>alert("Something went wrong")</script>';
echo '<script>alert("!Something went wrong !!")</script>';

$sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
$sqltransact = mysqli_query($conn, $sqltran);
}
}else{
  echo '<script>alert("Insufficient funds !!!@@")</script>;';

$sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
$sqltransact = mysqli_query($conn, $sqltran);
}
}
}
?>
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
  // loader.style.display = "block";
  // loader.style.opacity = "1";
}
window.addEventListener("load", () => {
  setTimeout(hide, 1500);
  setTimeout(show, 1500);
});
  </script>
  </body>
</html>
