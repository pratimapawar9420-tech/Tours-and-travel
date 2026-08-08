<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Complete responsive bags website desing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    </head>
    
<body>
    
<header>
        
        
        <a href="#" class="logo">BooksBounty<span>.</span></a>
        <nav class="navbar">
           <!-- <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="product1.php">Products</a>
           <a href="customize.php">Customize</a>
            <a href="review1.php">Review</a>
            <a href="contanct1.php">Contact</a>
            <a href="loginuser.php">Admin</a>
-->
            
        </nav>
        <div class="icons">
            <a href="addtocart.php" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fas fa-user"></a>
            <?php
            $count=0;
            if(isset($_SESSION['cart']))
            {
                $count=count($_SESSION['cart']);
            }
            ?>
            <a href="addtocart.php" class="btn btn-outline-success" style="text-transform: none;">My cart(<?php echo $count;?>)</a>
   



        </div>
    </header>
    <!--CATEGORY STARTS-->
   <!--1st bag-->
<secion class="products" id="products">
   <h1 class="heading"><span></span></h1>
   <secion class="products" id="products">
   <h1 class="heading"><span></span></h1>
   <secion class="products" id="products">
   <marquee style="color: white; font-size: 24px; background-color: red;" scrollamount="5" behavior="scroll" direction="left">
    Welcome to the BooksBounty Collection! Enjoy browsing through our top picks!
</marquee>
   <h1 class="heading" style="margin-top: 0;">INDIAS LARGEST BOOK STORE<span><img src="https://st2.depositphotos.com/1364916/6359/v/450/depositphotos_63590137-stock-illustration-blue-book-logo-vector.jpg" width="70px" height="80px" style="vertical-align:middle; margin-right: 10px;"></span>
   </h1>
   <!--  <h1 class="heading" style="margin-top: 0; background-image: url('https://static.vecteezy.com/system/resources/thumbnails/021/937/196/small/occult-spiritual-books-doodle-set-collection-of-hand-drawn-various-books-with-sigs-and-symbols-of-occultism-and-spirituality-on-covers-in-rows-isolated-on-transparent-background-free-vector.jpg'); background-size: cover; background-position: center; padding: 20px;">
    INDIAS LARGEST BOOK STORE
   
</h1>-->
<style>
.img
{
    margin: 5rem;
}
    </style>

</section>

   <style>
    .btn {
        text-transform: capitalize; /* Capitalizes the first letter of each word */
        /* You can also add additional styles here, like padding, color, etc. */
    }
</style>
<div id="slideshow-container" style="position: relative; width: 1500px; height: 400px; margin: auto; overflow: hidden;">
    <!-- Slide 1 -->
    <div class="slide" style="position: absolute; width: 100%; height: 100%; display: flex; gap: 10px; justify-content: center; align-items: center; opacity: 0; animation: slideShow 16s infinite; animation-delay: 0s;">
        <img src="https://5.imimg.com/data5/SELLER/Default/2021/2/SA/IQ/HS/49559104/img-20210211-121925.jpg" style="height: 100%; width: auto;" alt="Image 1">
        <img src="https://m.media-amazon.com/images/I/71mdWBA76DL._AC_UF1000,1000_QL80_.jpg" style="height: 100%; width: auto;" alt="Image 2">
        <img src="https://shop.edsmartedu.com/cdn/shop/files/CSB06-Coverpage_750x.png?v=1703750343" style="height: 100%; width: auto;" alt="Image 3">
        <img src="https://pikabook.in/uploads/product_image/1676979122-IMG20230220141007%20-%20Edited.png" style="height: 100%; width: auto;" alt="Image 4">
    </div>

    <!-- Slide 2 -->
    <div class="slide" style="position: absolute; width: 100%; height: 100%; display: flex; gap: 10px; justify-content: center; align-items: center; opacity: 0; animation: slideShow 16s infinite; animation-delay: 8s;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOV1vobxYWf3eCll2Jzg3k04zdMzPpIx9QSJSBcXtOYWM1tddnvdLReOLUiKNlac2AIXo&usqp=CAU" style="height: 100%; width: auto;" alt="Image 9">
        <img src="https://5.imimg.com/data5/SELLER/Default/2023/3/PI/JH/HG/2421221/714fbktxs-l-500x500.jpg" style="height: 100%; width: auto;" alt="Image 10">
        <img src="https://d36tnp772eyphs.cloudfront.net/blogs/1/2015/01/The-Secret-by-Rhonda-Byrne.jpg" style="height: 100%; width: auto;" alt="Image 11">
        <img src="https://www.vedicsolutions.in/images/thumbs/0003205_spiritual-india-hand-book-english_510.gif" style="height: 100%; width: auto;" alt="Image 12">
    </div>

    <!-- Slide 3 -->
    <div class="slide" style="position: absolute; width: 100%; height: 100%; display: flex; gap: 10px; justify-content: center; align-items: center; opacity: 0; animation: slideShow 16s infinite; animation-delay: 4s;">
        <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1698025201i/200248538.jpg" style="height: 100%; width: auto;" alt="Image 5">
        <img src="https://m.media-amazon.com/images/I/81RCPx3KLgL._UF1000,1000_QL80_.jpg" style="height: 100%; width: auto;" alt="Image 6">
        <img src="https://m.media-amazon.com/images/I/715qjNTdYML._UF1000,1000_QL80_.jpg" style="height: 100%; width: auto;" alt="Image 7">
        <img src="https://cdn.kobo.com/book-images/fc31d05b-acf6-4609-8d5a-dcf8b84c6a71/1200/1200/False/horror-stories-a-short-story-collection.jpg" style="height: 100%; width: auto;" alt="Image 8">
    </div>

    <!-- Slide 4 -->
    <div class="slide" style="position: absolute; width: 100%; height: 100%; display: flex; gap: 10px; justify-content: center; align-items: center; opacity: 0; animation: slideShow 16s infinite; animation-delay: 4s;">
        <img src="https://images.booksense.com/images/778/344/9780063344778.jpg" style="height: 100%; width: auto;" alt="Image 5">
        <img src="https://offshootbooks.com/cdn/shop/products/9128YbO9MyL.jpg?v=1652864659" style="height: 100%; width: auto;" alt="Image 6">
        <img src="https://www.beyondthebookends.com/wp-content/uploads/2022/07/The-Inquisitors-Tale.jpeg" style="height: 100%; width: auto;" alt="Image 7">
        <img src="https://m.media-amazon.com/images/I/51U5LphhqXL.jpg" style="height: 100%; width: auto;" alt="Image 8">
    </div>
</div>

<style>
@keyframes slideShow {
    0% { opacity: 0; }
    25% { opacity: 1; }
    50% { opacity: 1; }
    75% { opacity: 0; }
    100% { opacity: 0; }
}

#slideshow-container {
    transition: background-color 1s ease;
}

.slide:nth-child(1) {
    background-color: #f0e68c; /* Light yellow for the first slide */
}

.slide:nth-child(2) {
    background-color: #add8e6; /* Light blue for the second slide */
}

.slide:nth-child(3) {
    background-color: #98fb98; /* Light green for the third slide */
}

.slide:nth-child(4) {
    background-color: #ffb6c1; /* Light pink for the fourth slide */
}
</style>

<script>
    const slides = document.querySelectorAll('.slide');
    const container = document.getElementById('slideshow-container');
    
    let currentSlideIndex = 0;

    function changeBackgroundColor() {
        container.style.backgroundColor = slides[currentSlideIndex].style.backgroundColor;
        currentSlideIndex = (currentSlideIndex + 1) % slides.length;
    }

    setInterval(changeBackgroundColor, 4000); // Change color every 4 seconds
</script>
    
  
<style>
strong 
{
     font-size: 2rem; /* Adjust the size as needed */
}
.products 
{
    text-align: center; /* Center the heading */
}

.btn-container {
    display: flex;
    justify-content: center; /* Aligns the buttons horizontally at the center */
    flex-wrap: wrap; /* Ensures the buttons wrap onto new lines if there's not enough space */
    gap: 10px; /* Adds spacing between the buttons */
    margin-top: -20px; /* Add some space between heading and buttons */
}

.btn {
    margin: top 5rem;
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff69b4; /* Set button color to pink */
    color: white; /* Set button text color to white */
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    font-family: "Arial", sans-serif; /* Optional: change font if desired */
    font-weight: bold; /* Optional: make the text bold */
}

.btn:hover {
    background-color: black; /* Change hover color to a slightly darker pink */
}

</style> 
<div class="btn-container" style="margin-top: 0;"><strong>             
<a href="barrel.php" class="btn">Kids story books</a>
<a href="Traditional.php" class="btn">Horro story books</a>
<a href="Clutch.php" class="btn">Yoga books</a>
<a href="Asthetic.php" class="btn">Reading books</a>
<a href="Officebags.php" class="btn">Spiritual books</a>
<a href="Tote.php" class="btn">Real heroes books</a>
<a href="Sling.php" class="btn">Politics books</a>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary"> 
    </div>
  </div>
  <h1 class="heading" style="margin-top: 0;">Now Trending<span></span>
  </h1>
</nav>
            
    <!--CATEGORY ENDS-->


<section class="home" id="home">

                <div class="content">
            <h3>Beyoud the basics</h3>
            <span>Reimagine your Ecencials</span>
            <p>Style yourself</p>
            <a href="product1.php" class="btn">SHOP NOW</a>
        </div>
    </section>


<!--about-->
<!--
<style>
         {
            margin: 0;
            height: 100vh; /* Full height */
            background-image: url("F:\xampp\htdocs\tybca\Beige Simple Minimalist New Arrival Handbag Facebook Post.jpg");
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating */
        }
        </style>
-->
    <section class="about" id="about">
    <h1 class="heading"><span>about</span>us</span></h1>

       
    <div class="row">
        <div>
       
            <!--**littel imag**<img src="https://mayasbrandstudio.com/wp-content/uploads/2023/09/13J00065-1080x1080.jpg" width="350px" height="390px" style="vertical-align:middle; margin-right: 10px;"></video>-->
  
    </div>
    <div class="content">
        <h3>why choose us?</h3>
        <p>Welcome to PurseParadies, where fashion meets functionality! We are passionate about creating beautifully crafted handbags that empower you to express your unique style. Each of our bags is designed with a perfect blend of elegance, versatility, and attention to detail, ensuring that you carry not just a product, but a statement of sophistication.
At ,PurseParadies we believe that handbags are more than just accessories – they are an extension of your personality. That’s why we offer a wide range of styles, from classic to contemporary, with customizable options that allow you to design a bag that reflects your personal taste.
    <p>
    Our commitment to quality is reflected in every stitch and material we use. We carefully select high-quality fabrics and leather to create durable, fashionable bags that can accompany you on all of life’s adventures. Whether you’re looking for a sleek clutch, a spacious tote, or a chic crossbody, we’ve got the perfect bag for every occasion.
    We are committed to environmentally friendly practices, sourcing materials responsibly and focusing on sustainable production methods, allowing you to feel good about your purchases.

    </p>
    <img src="https://www.rijac.com/cdn/shop/articles/Eight-Stylish-Handbags.jpg?crop=center&height=500&v=1709806980&width=1000">

        </div>
        </div>
    </section>
   <!-- <marquee behavior="scroll" direction="left">
    Your scrolling text goes here. It will move from right to left.
</marquee>-->

    <!--<section class="contact">
        <div class="contact-box">
            <h4>MY ACCOUNT</h4>
            <li><a href="#">My ACCOUNt</a></li>
            <li><a href="#">checkout </a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">shopping cart</a></li>
            <li><a href="#">wishinglist</a></li>
</div>

<div class="contact-box">
            <h4>Quick links</h4>
            <li><a href="#">Store location</a></li>
            <li><a href="#">orders tracking</a></li>
            <li><a href="#">size guide</a></li>
            <li><a href="#">my ccount</a></li>
            <li><a href="#">FAQs</a></li>
</div>

<div class="contact-box">
            <h4>INFORMATIONS</h4>
            <li><a href="#">privacy page</a></li>
            <li><a href="#">about us</a></li>
            <li><a href="#">careers</a></li>
            <li><a href="#">delivery informations</a></li>
            <li><a href="#">terms and condiions</a></li>
</div>


<div class="contact-box">
            <h4>customer services</h4>
            <li><a href="#">shipping policy</a></li>
            <li><a href="#">help and contact</a></li>
            <li><a href="#">returns and refunds</a></li>
            <li><a href="#">online stores</a></li>
            <li><a href="#">terms and condiions</a></li>
</div>

<div class="contact-box">
            <h4>fima</h4>
            <h5>connect with us</h4>

            <div class="social">
                <a href="#" class='bx bxl-facebook'></i></a>
                <a href="#" class='bx bxl-instagram-alt'></i></a> 
                <a href="#" class='bx bxl-twitter'></i></a>               
</div>     
</div>
</section>-->
    <section class="icons-container">

        <div class="icons">
           <img src="https://static.vecteezy.com/system/resources/previews/015/517/933/non_2x/illustration-of-a-person-receiving-a-parcel-vector.jpg " height="200px" width="200px">
            <div class="info">
                <h1>free delivery</h1>
                <span>on all orders</span>
            </div>
        </div>
        <div class="icons">
            <img src="https://static.vecteezy.com/system/resources/previews/024/350/774/non_2x/doodle-money-bag-dollar-icon-outline-sketch-concept-for-business-and-finance-icon-illustration-free-vector.jpg" height="200px" width="200px">
            <div class="info">
                <h1>10 days returns</h1>
                <span>moneyback garantee</span>
            </div>
        </div>
        <div class="icons">
            <img src="https://st3.depositphotos.com/23395854/36556/i/450/depositphotos_365569278-stock-illustration-vintage-gift-box-hand-drawn.jpg"height="300px" width="200px">
            <div class="info">
                <h1>offer & gifts</h1>
                <span>on all orders</span>
            </div>
        </div>
        <div class="icons">
            <img src="https://www.shutterstock.com/image-vector/atm-card-vector-design-modern-600nw-2290829683.jpg" height="200px" width="200px">
            <div class="info">
                <h1>secure payment</h1>
                <span>protected by paypal</span>
            </div>
        </div>
    
</section>
</body>
</html>