<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="styles.css" />
    <title>Adjustable Image with Text</title>
    <style>
         .packages-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        padding: 20px;
        flex-wrap: nowrap;
        overflow-x: auto; /* Allows horizontal scrolling if needed */
      }

      .package-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        width: 250px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .package-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
        border-radius: 10px 10px 0 0; /* Rounds the top corners */
      }

      .package-card .content {
        padding: 15px;
      }

      .package-card .content h4 {
        margin: 10px 0;
        font-size: 1.2em;
        color: #333;
      }

      .package-card .content p {
        margin: 5px 0;
        font-size: 1em;
        color: #555;
      }

      .package-card .details {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        font-size: 0.9rem;
        color: #777;
      }
    </style>
<body>
<nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">Nisarg <span>Pravasi</span></a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-3-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="packages.php">Tours</a></li>
        <li><a href="holiday.php">All Tours</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>

      </ul>
     
      <div class="icons">
      <a href="login6.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
      
    </nav>
    <div class="image-container">
        <img src="https://images.pexels.com/photos/147411/italy-mountains-dawn-daybreak-147411.jpeg?cs=srgb&dl=pexels-pixabay-147411.jpg&fm=jpg" alt="Nature"> <!-- Replace with your image path -->
                <div class="text">Nature</div>
    </div>
<section>
<div class="packages-container">
    <!-- First Card -->
    <div class="package-card">
        <a href="kashmir.php">
            <img src="https://media.istockphoto.com/id/1323846766/photo/a-beautiful-view-of-dal-lake-in-winter-srinagar-kashmir-india.jpg?s=612x612&w=0&k=20&c=Dp3peie2t-jdLEmqe4W-DD09GACu2Cr-JjHHeB6rpBc=" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Kashmir</h4>
            <p>Rs. 40,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i>5Days 4Nights</div>
                <div><i class="fas fa-map-marker-alt"></i> India</div>
                <input type="hidden" name="product_name" value="handpainted bag">

            </div>
        </div>
    </div>

   
    <!-- Second Card -->
    <div class="package-card">
        <a href="russia.php">

            <img src="https://ihplb.b-cdn.net/wp-content/uploads/2021/11/St.-Basils-Cathedral-799x430.jpg" alt="Russia" />
        </a>
        <div class="content">
            <h4>Russia</h4>
            <p>Rs. 2,75,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i>5Days 4Nights</div>
                <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
        </div>
    </div>
    <div class="package-card">
        <a href="Uttarakhand.php">
            <img src="https://www.trekupindia.com/wp-content/uploads/2024/05/uttrakhand-valley-of-flowers-trek.webp" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Uttarakhand</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i>10Days 9Nights</div>
                <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
        </div>
    </div>
    <div class="package-card">
        <a href="swizerland.php">
            <img src="https://www.alphatrad.com/sites/alphatrad.com/files/styles/news_image/public/images/articles/what-are-the-languages-spoken-in-switzerland.jpg?itok=7TptHWyA" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Swizerland</h4>
            <p>Rs. 79,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i>10Days 9Nights</div>
                <div><i class="fas fa-map-marker-alt"></i> Swizerland</div>
            </div>
        </div>
    </div>
    <div class="package-card">
        <a href="canada.php">
            <img src="https://thepienews.b-cdn.net/wp-content/uploads/2024/09/iStock-vancouver-canada-caps.jpg" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Canada</h4>
            <p>Rs. 80,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i> 8Days 7Nights</div>
                <div><i class="fas fa-map-marker-alt"></i>Canada</div>
            </div>
        </div>
    </div>
    </section>

    <section>
<div class="packages-container">
    <!-- First Card -->
    <div class="package-card">
        <a href="norway.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQSB87kmettF9qoLLDPzophKLWTHGCuFcH3g&s" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Norway</h4>
            <p>Rs. 2,00,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i>7Days 6Night</div>
                <div><i class="fas fa-map-marker-alt"></i>Norway</div>
            </div>
        </div>
    </div>

    <!-- Second Card -->
    <div class="package-card">
        <a href="south_Africa.php">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxQbUhpAOxFmCZNnh5ymliGxanthym-qU4KQ&s" alt="Russia" />
        </a>
        <div class="content">
            <h4>South Africa</h4>
            <p>Rs. 2,75,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i>7Days 6Nights</div>
                <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
        </div>
    </div>
    <div class="package-card">
        <a href="thailand.php">
            <img src="https://assets.futuregenerali.in/blogs-image/travel/essential-travel-tips-for-first-time-visitors-to-thailand.webp" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Thailand</h4>
            <p>Rs. 2,40,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i> 11Days 10Nights</div>
                <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
        </div>
    </div>
    <div class="package-card">
        <a href="iceland.php">
            <img src="https://www.discover-the-world.com/app/uploads/2024/10/iceland-exploring-myrdalsjokull-ice-caves-rth.jpg" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Iceland</h4>
            <p>Rs. 40,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i>6Days 5Nights</div>
                <div><i class="fas fa-map-marker-alt"></i>Iceland</div>
            </div>
        </div>
    </div>
    <div class="package-card">
        <a href="nepal.php">
            <img src="https://www.wendywutours.co.uk/resource/upload/248/banner-nepal.jpg.webp" alt="Kashmir" />
        </a>
        <div class="content">
            <h4>Nepal</h4>
            <p>Rs. 1,40,000/- Per Person</p>
            <div class="details">
                <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
                <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
        </div>
    </div>
    </section>
    
   <style>
    
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .image-container {
            position: relative;
            width: 1700px; /* Adjust the width as needed */
            height: 500px; /* Adjust the height as needed */
            margin: 20px; /* Add margin if needed */
        }
        .image-container img {
            width: 100%; /* Fill container width */
            height: 100%; /* Fill container height */
            object-fit: cover; /* Ensure image does not stretch and maintains aspect ratio */
            border-radius: 10px; /* Optional: rounded corners */
        }
        .image-container .text {
            position: absolute;
            font-size: 72px; /* Increased text size */

            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Adjust text to exactly center */
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Shadow for better readability */
        }
    </style>

    </body>
    </html>