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
        <img src="https://images.unsplash.com/photo-1561501900-3701fa6a0864?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bHV4dXJ5JTIwaG90ZWx8ZW58MHx8MHx8fDA%3D" alt="Nature"> <!-- Replace with your image path -->
                <div class="text">Leisure</div>
    </div>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="Egypt.php">
            <img src="https://dooktravels.s3.ap-south-1.amazonaws.com/com/country/66ac8362d9a57.webp" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Egypt</h4>
            <p>Rs. 80,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Egypt</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="bankong.php">
            <img src="https://media.istockphoto.com/id/483816132/photo/bangkok-cityscape.jpg?s=612x612&w=0&k=20&c=58yp-hppLeL4rmCav2Kvs7IgAfhlqn_JSWh9Jw2QiXs=" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Bankok & pattaya</h4>
            <p>Rs. 50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="ladakh.php">
            <img src="https://static.toiimg.com/thumb/msid-48262604,width-748,height-499,resizemode=4,imgsize-179958/.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Ladakh</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 8Days 7Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>
        <div class="package-card">
          <a href="honkong.php">
            <img src="https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1600/900/75/vision-dam/digital/hkdl-platform/hkdl-standard-assets/finder_hk/en-intl/system/images/g-l/hkdl-theme-park-1280x720-new.jpg?2022-05-22T00:00:22+00:00" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Honkong</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 9Days 8Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="munnar.php">
            <img src="https://t3.ftcdn.net/jpg/03/22/45/92/360_F_322459285_oT4RIQpH1otaXAzSsiSMCmvYo4GTAl0o.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Munnar</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 12Days 11Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>  United Kingdom</div>
            </div>
          </div>
        </div>
     
    </section>



    <!--2nd line-->

    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="goa.php">
            <img src="https://t3.ftcdn.net/jpg/02/43/24/76/360_F_243247620_Clg6rXsX4K0lhPWip3oo9Oee28J30L23.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Goa</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>


        <div class="package-card">
          <a href="shimla.php">
            <img src="https://media.istockphoto.com/id/1223612773/photo/the-kalka-to-shimla-railway-is-a-2-ft-6-in-narrow-gauge-railway-in-north-india-which.jpg?s=612x612&w=0&k=20&c=vYxFBTbvcLcivcYjtFB-S_P7ETUwgIj0mAk84l9uC1g=" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Shimla</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="ooty.php">
            <img src="https://t3.ftcdn.net/jpg/08/66/93/80/360_F_866938041_aIHkgH6iQ6I0WLD2oqwSoINl5x5D3uM1.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Ooty</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2 Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>
       
        <div class="package-card">
          <a href="singapur.php">
            <img src="https://www.holidify.com/images/bgImages/SINGAPORE.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Singapur</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 9Days 8Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Singapur</div>
            </div>
          </div>
        </div>
      

     
        <div class="package-card">
          <a href="thailand.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXkNTGQcBGXz-AHkCx6oFB43aJ--MGg6RDjYBNABOE6MtvvyYUgux9AOF1QHKeIUaVqYM&usqp=CAU" alt="Goa" />
          </a>
          <div class="content">
            <h4>Thailand</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 11Days 10Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Singapur</div>
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
