<?php
require("includes/common.php");
include 'includes/loginmodal.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product Page</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
                    .footer {
                       
                padding: 10px 0;
                position: fixed;
                background-color: #101010;
                color:#9d9d9d;
                bottom:0px;
                width: 100%;
                text-align: center;
                left: 0;
                    }
          
.rowstyle{
    padding-top:60px;
  
}


.caption{
    text-align: center;
}

.navbar{
    position:fixed;
}
    </style>
        
    </head>
    <body>
              <!-- header part-->
              <!-- -->
        
      <?php
      include 'includes/header.php';
      include 'includes/check-if-added.php';
      ?>
           <!-- thumbnail star here-->  
           
  <div class="container">
            <div class="row rowstyle">
                   <div class="jumbotron">
                       <h1>Welcome to our S-CART!</h1>
                       <p>We have the best Mobile for you. No need to hunt around, we have all in one place</p>
                       
                   </div>
                            <!-- mobail 1 -->
                   <div class="col-xs-4">
                       <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Mobile 1</h3>
                         </div>
                   <div class="thumbnail">
                       <a href="#"><img src="mo1.jpeg" alt="responsive image" ></a>
                   <div class="caption">
                       
                       <h3><b>GOOGLE pixel</b></h3>
                   <p>Price:Rs.36000.00</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                        
                          if (check_if_added_to_cart(1)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                  
                    </div>
                   </div>
                   </div>
                   </div>
                                     <!--mobail 2 -->
                   
                    <div class="col-xs-4">
                        <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Mobile 2</h3>
                         </div>
                   <div class="thumbnail">
                       <a href="#"><img src="mo2.jpeg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>MOTO S1</b></h3>
                   <p>Price:Rs.14000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                         
                          if (check_if_added_to_cart(2)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                    </div>
                   
                                          <!-- mobail 3-->    
                                     
                   <div class="col-xs-4">
                       <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Mobile 3</h3>
                         </div>
                   <div class="thumbnail">
                       <a href="#"><img src="mo3.jpeg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Honor X</b></h3>
                   <p>Price:Rs.15500.00</p>
               <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                     
                          if (check_if_added_to_cart(3)) {
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                   </div>
                
                            <!--mobail 4 -->
                            
                    <div class="col-xs-4">
                        <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Mobile 4</h3>
                         </div>
                   <div class="thumbnail">
                       <a href="#"><img src="mo4.jpeg" alt="responsive image" ></a>
                   <div class="caption">
                   <h3><b>Samsung S2</b></h3>
                   <p>Price:Rs.18000.00</p>
           <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                     
                          if (check_if_added_to_cart(4)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                    </div>
                
                            <!-- mobail 5 -->
                            
                     <div class="col-xs-4">
                         <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Mobile 5</h3>
                         </div>
                   <div class="thumbnail">
                       <a href="#"><img src="mo5.jpeg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Intext </b></h3>
                   <p>Price:Rs.13000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                     
                          if (check_if_added_to_cart(5)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                     </div>
                         <!-- mobail 6 -->
                   
                     <div class="col-xs-4">
                         <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Mobile 6</h3>
                         </div>
                   <div class="thumbnail">
                       <a href="#"><img src="mo6.jpeg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Google 3s</b></h3>
                   <p>Price:Rs.30000.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                          
                          if (check_if_added_to_cart(6)) {
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                     </div>
                   
                             <!-- mobails end-->
                   
                  
           </div>
 </div>
  </div>
           <br><br>
              <!-- thumbnail end here-->  
                 <!-- footer start-->
       
         <?php
         include 'includes/footer.php';
         ?>
   
       <!-- footer end-->
    </body>
</html>
