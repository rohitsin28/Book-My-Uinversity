<?php include("partwise/head.php")?>
<body>
<?php include("partwise/nav.php")?>

<!-- header section end -->

<div class="heading" style="background:url(images/header-bg-1.png)">
<h1>Book</h1>
</div>

<!-- Booking section start -->
<section class="booking">

   <h1 class="heading-title">book your University</h1>

   <form onsubmit="myFunction()" action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required>
          </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required>
         </div>
         <div class="inputBox">
            <span>university name :</span>
            <input type="text" placeholder="enter your university name" name="university_name" required>
         </div>
         <div class="inputBox">
            <span>course :</span>
            <input type="text" placeholder="choose your course" name="course" required>
         </div>
      </div>
      <input type="submit" value="submit" class="btn" name="submit" on>
   </form>
</section>

<script>
function myFunction() {
  alert("Thank you for ");
}
</script>
<!-- Booking section end -->
<?php include("partwise/footer.php")?>

    <!-- Swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Custom js file link -->
    <script src="script.js"></script>
</body>
</html>
