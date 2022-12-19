<?php include_once 'DB_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Food Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts     -->

<section class="header">

   <a href="#" class="logo"> <i class="fas fa-utensils"></i> food. </a>

   <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#food">food</a>
      <a href="#gallery">gallery</a>
      <a href="#menu">menu</a>
      <a href="#order">order</a>
      <a href="#blogs">blogs</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends    -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>delicious cooking</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>morning moment</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>authentic kitchen</h3>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="images/about-img.png" alt="">
   </div>

   <div class="content">
      <h3 class="title">welcome to our restaurant</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi optio at, saepe accusamus dolorum, quos eos nesciunt amet exercitationem illum quis nostrum, repellat quaerat eum debitis fugit alias magnam omnis!</p>
      <div class="icons-container">
         <div class="icons">
            <img src="images/about-icon-1.png" alt="">
            <h3>quality food</h3>
         </div>
         <div class="icons">
            <img src="images/about-icon-2.png" alt="">
            <h3>food & drinks</h3>
         </div>
         <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>expert chefs</h3>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- food section starts  -->

<section class="food" id="food">

   <div class="heading">  
      <span>popular dishes</span>
      <h3>our delicious food</h3>
   </div>

   <div class="swiper food-slider">

      <div class="swiper-wrapper">
         <?php
            $menu_query = "SELECT * FROM menu";
            $menu_result = mysqli_query($db,$menu_query);
            while($menu = mysqli_fetch_assoc($menu_result)){
         ?>
         <div class="swiper-slide slide" data-name="food-1">
            <img src="images/food-img-<?php echo $menu['id'] ?>.png" alt="">
            <h3>
               <?php echo $menu['name'] ?>
            </h3>
            <div class="price">
               <?php echo $menu['price'] ?>
            </div>
         </div>
         <?php }?>
      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- food section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <div class="heading">
      <span>our gallery</span>
      <h3>our untold stories</h3>
      <a
         onclick="document.getElementById('addImgModal').style.display='block'"
         class="w3-button"
      >Add Image</a>
      <div id="addImgModal" class="w3-modal">
         <div class="w3-modal-content">
            <div class="w3-container">
               <span onclick="document.getElementById('addImgModal').style.display='none'"
               class="w3-button w3-display-topright">&times;</span>
               <form method="POST" action="add_gallery.php">
                  <input type="file"  name="image" required>
                  <input type="submit" name="submit" value="submit">
               </form>
            </div>
         </div>
      </div>
   </div>

   <div class="gallery-container">

      <?php
         $gallery_query = "SELECT * FROM gallery";
         $gallery_result = mysqli_query($db,$gallery_query);
         while($gallery = mysqli_fetch_assoc($gallery_result)){
      ?>
         <?php echo '<a href="data:image/png;base64,' . base64_encode($gallery['image']) . '" class="box">' ?>
            <?php echo '<img src="data:image/png;base64,' . base64_encode($gallery['image']) . '" />' ?>
            <div class="icon"> <i class="fas fa-plus"></i> </div>
         </a>
      <?php } ?>

   </div>

</section>

<!-- gallery section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

   <div class="heading">
      <h3>our menu</h3>
   </div>

   <div class="swiper menu-slider">
         <div class="swiper-slide slide">
            <div class="box-container">
               <?php
                  $menu_query = "SELECT * FROM menu";
                  $menu_result = mysqli_query($db,$menu_query);
                  while($menu = mysqli_fetch_assoc($menu_result)){
               ?>
                  <div class="box">
                     <div class="info">
                        <h3><?php echo $menu['name'] ?></h3>
                        <p><?php echo $menu['description'] ?></p>
                     </div>
                     <div class="price">$<?php echo $menu['price'] ?></div>
                  </div>
               <?php } ?>
         </div>
   </div>

   <div class="heading">
      <span>add menu item</span>
   </div>

   <div class="order">
      <form method="POST" action="./add_menu.php">
         <div class="box-container">
            <div class="box">
               <div class="inputBox">
                  <span>Item name</span>
                  <input type="text" placeholder="Name" name="name" required />
               </div>
               <div class="inputBox">
                  <span>Description</span>
                  <input type="text" placeholder="description" name="description" required />
               </div>
               <div class="inputBox">
                  <span>Category</span>
                  <input type="text" placeholder="category" name="category" required />
               </div>
               <div class="inputBox">
                  <span>Price</span>
                  <input type="number" placeholder="price" name="price" required />
               </div>
               <input type="submit" name="submit" value="Add" class="btn"/>
            </div>
         </div>
      </form>
   </div>
</section>

<!-- menu section ends -->

<!-- order section starts  -->

<section class="order" id="order">

   <div class="heading">
      <a href="orders.php" class="btn" style="background-color: grey;">View Orders</a>
      <span>order now</span>
      <h3>fast home delivery</h3>
   </div>
   <form method="POST" action="./add_order.php">
      <div class="box-container">
         <div class="box">
            <div class="inputBox">
               <span>full name</span>
               <input type="text" placeholder="enter your name" name="full_name" required>
            </div>
            <div class="inputBox">
               <span>food name</span>
               <input type="text" placeholder="food you want" name="food_name" required>
            </div>
            <div class="inputBox">
               <span>your address</span>
               <textarea name="address" placeholder="enter your address" id="" cols="30" rows="5"></textarea>
            </div>
         </div>
         <div class="box">
            <div class="inputBox">
               <span>number</span>
               <input type="number" placeholder="enter your number" name="phone_number" required>
            </div>
            <div class="inputBox">
               <span>how much</span>
               <input type="number" placeholder="how many you want" name="quantity" required>
            </div>
            <div class="inputBox">
               <span>order details</span>
               <input type="text" placeholder="specifics with food" name="order_details" >
            </div>
            <input type="submit" name="submit" value="order now" class="btn">
         </div>
      </div>
   </form>
   
</section>

<!-- order section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

   <div class="heading">
      <span>our blogs</span>
      <h3>our latest posts</h3>
   </div>

   <a onclick="document.getElementById('newBlogModal').style.display='block'"
    class="btn w3-button" style="background-color: grey;">New Blog</a>

   <div id="newBlogModal" class="w3-modal">
      <div class="w3-modal-content">
         <div class="w3-container">
            <span onclick="document.getElementById('newBlogModal').style.display='none'"
            class="w3-button w3-display-topright">&times;</span>
            <form method="POST" action="./add_blog.php">
               <input type="text" placeholder="title" name="title" required>
               <textarea name="body" placeholder="body" id="" cols="30" rows="5" required></textarea>
               <input type="text" placeholder="author" name="author" required>
               <input type="file"  name="image" required>
               <input type="submit" name="submit" value="submit">
            </form>
         </div>
      </div>
   </div>

   <div class="swiper blogs-slider">

      <div class="swiper-wrapper">

         <?php
            $blog_query = "SELECT * FROM blog";
            $blog_result = mysqli_query($db,$blog_query);
            while($blog = mysqli_fetch_assoc($blog_result)){
         ?>
            <div class="swiper-slide slide">
               <div class="image">
                  <?php echo '<img src="data:image/png;base64,' . base64_encode($blog['image']) . '" />' ?>
               </div>
               <div class="content">
                  <div class="icon">
                     <a href="#"> <i class="fas fa-calendar"></i>
                        <?php echo $blog['created_at'] ?>
                     </a>
                     <a href="#"><i class="fas fa-user"></i>
                        by <?php echo $blog['author'] ?>
                     </a>
                  </div>
                  <a href="#" class="title">
                     <?php echo $blog['title'] ?>
                  </a>
                  <p><?php echo $blog['body'] ?></p>
               </div>
            </div>
         <?php } ?>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- blogs section ends -->

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