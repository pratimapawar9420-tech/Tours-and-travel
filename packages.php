
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="styles.css" />
    <title>Webb Design Mastery | Travel Toor</title>
  </head>
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
        <li><a href="holiday.php">All tours</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>

      </ul>
    
      <div class="icons">
      <a href="login6.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>

  
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            margin: 20px 0;
            font-size: 28px;
            color: #333;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #666;
        }
        .image-row {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        .image-container {
            position: relative;
            width: 280px;
            height: 280px;
        }
        .image-container img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .image-container img:hover {
            transform: scale(1.05);
        }
        .image-container span {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 25px; /* Slightly larger font size */
            font-weight: bold; /* Optional: Make the font bold */
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Custom Vacations to Your Favourite Destination</h1>
    <h2>Choose the Type of Vacation You Want!!!</h2>

    <div class="image-row">
        <div class="image-container">
            <a href="nature.php">
                <img src="https://static.vecteezy.com/system/resources/previews/032/276/934/large_2x/the-boat-on-the-lake-the-sunset-mountains-nature-landscape-hd-wallpaper-ai-generated-photo.jpg" target="_blank" alt="Honeymoon">
                <span>Nature</span>
            </a>
        </div>
        <div class="image-container">
            <a href="piligrimage.php" target="_blank">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWvdQbBt-bEd8oCXCTilyZMZ61aYHB4KNzJQ&s" alt="Trek">
                <span>Piligrimage</span><!--tirthyatra-->
            </a>
        </div>
        <div class="image-container">
            <a href="leisure.php" target="_blank">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH1_c1CN6Dh8qUSRsIgIx6TaGhjU-TE1I6MQ&s" alt="Lake">
                <span>Leisure</span><!--ishranti-->
            </a>
        </div>
        <div class="image-container">
            <a href="heritage.php" target="_blank">
                <img src="https://t4.ftcdn.net/jpg/01/05/74/17/360_F_105741732_TStsOZH9VSbjfOTYYPHAw5repCZWhOa0.jpg" alt="Beach">
                <span>Heritage</span><!--history that place like taj mahal-->
            </a>
        </div>
    </div>

    <div class="image-row">
        <div class="image-container">
            <a href="oneday.php" target="_blank">
                <img src="https://thefoxandshe.com/wp-content/uploads/2024/05/garden-party-22.jpg" alt="Sea">
                <span>Oneday</span>
            </a>
        </div>
        <div class="image-container">
            <a href="adventure.php" target="_blank">
                <img src="https://thumbs.dreamstime.com/b/adventure-travel-downhill-biking-road-death-bike-photo-bike-tourists-ride-track-bolivia-background-sky-circles-63166498.jpg" alt="Mountains">
                <span>Adventure</span>
            </a>
        </div>
        <div class="image-container">
            <a href="Island.php" target="_blank">
                <img src="https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072_640.jpg" alt="Forest">
                <span>Island</span>
            </a>
        </div>
        <div class="image-container">
            <a href="honeymoon.php" target="_blank">
                <img src="https://www.affordableluxurytravel.co.uk/blog/wp-content/uploads/2023/11/costs-of-a-trip-to-the-maldives.jpg" alt="Desert">
                <span>Honeymoon</span>
            </a>
        </div>
    </div>
</body>
</html>
