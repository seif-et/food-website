<?php include_once 'DB_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Orders | Food Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="heading">
      <h3>Orders List</h3>
   </div>

   <div class="swiper menu-slider">
         <div class="swiper-slide slide">
            <div class="box-container">
               <?php
                  $orders_query = "SELECT * FROM orders";
                  $orders_result = mysqli_query($db,$orders_query);
                  while($orders = mysqli_fetch_assoc($orders_result)){
               ?>
                  <div class="box">
                     <div class="info">
                        <h3>Order #<?php echo $orders['id'] ?></h3>
                        <h4><?php echo $orders['full_name'] ?></h4>
                        <p><?php echo $orders['address'] ?></p>
                        <p><?php echo $orders['phone_number'] ?></p>
                     </div>
                     <div>
                        <?php echo $orders['food_name'] ?>
                        <?php echo $orders['order_details'] ?>
                     </div>
                     <div class="price"><?php echo $orders['quantity'] ?></div>
                     <span>
                        <a href='delete_order.php?id=<?php echo $orders['id'] ?>'>Delete order</a>
                     </span>
                  </div>
               <?php } ?>
         </div>
   </div>


<!-- footer section starts  -->

<section class="footer">

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 10:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+201122334455</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>example@email.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address</h3>
         <p>assiut, egypt</p>
      </div>

   </div>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <!-- <div class="inputBox">
         <span>our address</span>
         <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60307.59083109428!2d72.840725!3d19.141651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1642222128240!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div> -->
   </div>

   

   <div class="credit"> created by <span>Fill here</span> | all rights reserved! </div>

</section>

<!-- footer section ends  -->










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
   lightGallery(document.querySelector('.gallery .gallery-container'));
</script>

</body>
</html>