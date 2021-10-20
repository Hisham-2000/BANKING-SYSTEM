<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GRIPS Bank</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="./index.html" class="scrollto"><span>GRIPS Bank</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  <div class="imp">
  <br><br><br><br><br><br>
<?php 
include 'connection.php';
$sid=$_GET['id'];
$sql="SELECT * FROM `customer` 
WHERE Id=$sid";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
?>  
              
              <table class="table table-sm table-striped  table-bordered  text-center w-75 p-3" align='center'>
              <thead class="table-dark">
              <th>Sl.No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Balance</th>
              </thead>
              <tbody>
<?php          
        while($row = $result->fetch_assoc()) {
?>      
           <tr>
           <td><?php echo $row['Id']?></td>
           <td><?php echo $row['Name']?></td>
           <td><?php echo $row['Email']?></td>
           <td><?php echo $row['Balance']?></td>
           </tr>
           </tbody>
      </table>
      <br><br>
      <form method="post" action="confirmation.php" class="w-50 p-3 mx-auto ms-auto">
            <label class="form-label" for="from">From:</label>
            <select name="from" class="form-select form-select-lg mb-3" id="from" required>
                <option value="" disabled selected>Select</option>  
                <option value="<?php echo $row['Id'];?>">
                <?php echo $row['Id'];?>-<?php echo $row['Name'];?>-Balance:<?php echo $row['Balance'];?>
                </option>    
            </select>
<?php }}?>
            <br><br>
            <label class="form-label" for="to">To:</label>
            <select name="to" id="to" class="form-select form-select-lg mb-3" required>
              <option value="" disabled selected>Select</option>  
              <?php
                $sql="SELECT * FROM `customer` 
                      WHERE Id!=$sid";
                $result=$conn->query($sql);
                if ($result->num_rows > 0) {   
                    while($row = $result->fetch_assoc()){   
              ?>
                <option value="<?php echo $row['Id'];?>">
                 <?php echo $row['Id']?>-<?php echo $row['Name']?> 
               </option>
            <?php
               }} $conn->close();
            ?> 
            </select>
            <br><br>
            <label for="amount" class="form-label">Amount:</label>
            <input type="number" name="amount" class="form-control" required>
            <br><br>
            <button type="submit" class="btn btn-success data-bs-toggle="button" autocomplete="off ms-auto mx-auto"  name="submit">Confirm</button>
        </form>
    <div>     
  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">

    <div class="container">
      <div class="copyright">
       @ Copyright <strong>GRIP</strong>. All Rights Reserved
      </div>
      <div class="footer-top">
        <div class="footer-links">

          <div class="social-links">
            <a href="https://github.com/Hisham-2000" class="github"><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/in/mohammed-hisham-1454b7203/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>        
</body>
</html>
