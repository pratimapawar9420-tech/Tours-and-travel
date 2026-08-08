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
      <a href="login.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>
    <div class="image-container">
        <img src="https://img.freepik.com/premium-photo/beautiful-diya-floating-water-diwali-festival-generated-by-ai_674037-109.jpg" alt="Nature"> <!-- Replace with your image path -->
                <div class="text">Piligrimage</div>
    </div>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="muktinath.php">
            <img src="https://media.istockphoto.com/id/1624570184/photo/the-holy-temple-of-muktinath-in-the-himalayas-of-jomsom-upper-mustang-in-nepal.jpg?s=612x612&w=0&k=20&c=OIJdm-n5Ce7i-CZVgvJa4J7eoZ1r9rnZXouYn2Qac0k=" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Muktinath</h4>
            <p>Rs. 50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="kailas.php">
            <img src="https://imgcld.yatra.com/ytimages/image/upload/v1517483056/AdvNation/ANN_TRP681/kailash-mansarovar-package_1493358790_QJJblI.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>kailash mansarovar</h4>
            <p>Rs. 2,50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>14Days 13Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="varanasi.php">
            <img src="https://media.istockphoto.com/id/537988165/photo/varanasi.jpg?s=612x612&w=0&k=20&c=fFpEL17MiQJx5NkkNIVrTsesd2E8b04SCgzjfhUmQ7g=" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Varanasi</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="kedarnath.php">
            <img src="https://w0.peakpx.com/wallpaper/824/946/HD-wallpaper-kedarnath-view-in-ice-mountain-ice-mountain.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Kedarnath</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="golden.php">
            <img src="https://media.istockphoto.com/id/543179390/photo/golden-temple-the-main-sanctuary-of-sikhs-amritsar-india.jpg?s=612x612&w=0&k=20&c=s4bOWzg0e0ecBBPmuzIEShhrmMWFE16cnYlAZ7Nfdeg=" alt="Goa" />
          </a>
          <div class="content">
            <h4>Golden temple</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 10Days 9Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>  United Kingdom</div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--2nd line-->

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
