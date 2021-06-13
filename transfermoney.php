<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/lightbox.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<?php
  include 'navbar.php';
  ?> 

<body style="background-color : #BDC3C7;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<div class="container">
        <br>
        <br>
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <style>
      body {
          height: 100%;
          width: 100%;
          background-image: url("https://images.pexels.com/photos/1254736/pexels-photo-1254736.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940.jpg");
          background-repeat: no-repeat;
          background-size: cover;
      }

 
  </style>
       
       
      <!--  footer -->
      <footer>
     
     <div class="footer">
        <div class="container">
           <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                       <div class="hedingh3 text_align_left">
                         
                          <h3>Resources 
                            
                          </h3>
                          <ul class="menu_footer">
                             <li><a href="index.php">Home</a><li>
                             <li><a href="#section5">About us</a><li>
                             <li> <a href="section2">How to use?</a><li>
                             <li> <a href="services">Services</a><li>
                             <li><a href="#section6">Contact us</a><li>
                           
                          </ul>
                         
       
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="hedingh3 text_align_left">
                         
                         <h3>About</h3>
                          <p>It is the leading financial establishment providing high-quality international banking services. Our success is attributed to our loyal customers. We provide reliable services for you.</p>
                       </div>
                    </div>
                 
            
                   
                    <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="hedingh3  text_align_left">
                         
                          <h3>Contact  Us</h3>
                            <ul class="top_infomation">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                       <a>Making this the first true  
                       
                       </a>
                    </li>
                    <li><i class="material-icons">person_add</i>
                       Call : +91 9872536741
                       <br>
                              +91 9000055544
                     
                      
                    </li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>
                       <a href="Javascript:void(0)">Email:canarabank@gmail.com</a>
                    </li>
                 </ul>
                        
                       
                 </div>
              </div>
                 <div class="col-lg-4 col-md-6 col-sm-6">
                       <div class="hedingh3 text_align_left">
                         
                          <h3>countrys</h3>
                          <div class="map">
                            <img src="assets/Img/map.png" alt="#"/>
                          </div>
                       </div>
                    </div>
                
           </div>
        </div>
        <div class="copyright">
           <div class="container">
              <div class="row">
                 <div class="col-md-8 offset-md-2">
                    <p>© 2019, Canara Bank. All rights reserved |</a></p>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </footer>
  <!-- end footer -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>

