<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Who we are?</h3>
         <p>We are home furnishing specialists from Sweden & provide solutions to make your home more functional. Our stores are spread across a large area with over 7500 products that offer solutions to create a better and brighter everyday life at home.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/r-1.png" alt="">
         <p>I'm in love with the Iriana Cabinets and Sideboard with a walnut finish. The design is sleek, and the walnut finish is stunning. The storage capacity is fantastic, and it's made a huge difference in keeping my living space organized. It's a top-notch piece of furniture.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sandhya B K</h3>
         <h3><i>BANGALORE</i></h3>
      </div>

      <div class="box">
         <img src="images/r-2.png" alt="">
         <p>The Willie Cane Sideboard is a stylish and functional piece of furniture. The cane work is beautifully done, and the wood quality is impressive. It provides ample storage space for all my dining essentials. A great addition to our home.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Govindaraju</h3>
         <h3><i>Pune</i></h3>
      </div>

      <div class="box">
         <img src="images/r-3.png" alt="">
         <p>I adore the Emalyn bed with storage! The walnut finish is elegant, and the storage space is a lifesaver. It's both stylish and practical,Love the storage. Perfect for our bedroom.The honey finish gives it an elegant look,satisfied with my purchase.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amit Kumar</h3>
         <h3><i>Kolkata</i></h3>
      </div>

      <div class="box">
         <img src="images/r-4.png" alt="">
         <p>Impressive design and quality. Fits my living room perfectly. Love it! Happy with the purchase.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mahalakshmi K</h3>
         <h3><i>Hyderabad</i></h3>
      </div>

      <div class="box">
         <img src="images/r-5.png" alt="">
         <p>I'm pleased with the Emerie Coffee Table. The honey finish adds warmth, and it's quite spacious.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>VINAY NARRA</h3>
         <h3><i>BANGALORE</i></h3>
      </div>

      <div class="box">
         <img src="images/r-6.png" alt="">
         <p>Love the blend of jade and ivory in this sofa. It's become the focal point of my living space.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Prabhav Musaddi</h3>
            <h3><i>Mumbai</i></h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Customer Service</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/logo-1.jpg" alt="">
         <h3>Return or Exchange</h3>
      </div>

      <div class="box">
         <img src="images/logo-2.jpg" alt="">
         <h3>Click & Collect</h3>
      </div>

      <div class="box">
         <img src="images/logo-3.jpg" alt="">
         <h3>Missing a part</h3>
      </div>

      <div class="box">
         <img src="images/logo-4.jpg" alt="">
         <h3>Stock availability</h3>
      </div>

      <div class="box">
         <img src="images/logo-5.jpg" alt="">
         <h3>Warranty</h3>
      </div>

      <div class="box">
         <img src="images/logo-6.jpg" alt="">
         <h3>Terms and conditions</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>