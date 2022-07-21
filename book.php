<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- header section starts  -->
      <header>
         <nav>
            <ul class="book-navbar" >
                    <li><a href="index.php"><--Back to Home</a></li>
            </ul>
         </nav>
      </header>
<!-- header section ends -->


<section id="contact" class="contact-bg">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="book_form.php" method="post" class="book-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name:">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your e-mail:">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone:">
                </div>
                <div class="form-group">
                    <label for="message">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="submit" class="btn" name="send">
            </form>
        </div>
    </section>

<!-- booking section ends -->
</body>
</html>