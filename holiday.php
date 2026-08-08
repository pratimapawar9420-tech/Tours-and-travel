<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css" />
    <title>Travel Packages | Nisarg Pravasi</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }

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
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="review.php">Review</a></li>
        <li><a href="conus.php">Contact</a></li>

      </ul>
    
      <div class="icons">
      <a href="login.php" class="fas fa-user fa-2x"></a> <!-- 3x larger -->
      </div>
    </nav>
    <section>
      <h2 style="text-align: center; margin: 20px 0;">Our Destinations</h2>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="kashmir2.php">
            <img src="https://media.istockphoto.com/id/1323846766/photo/a-beautiful-view-of-dal-lake-in-winter-srinagar-kashmir-india.jpg?s=612x612&w=0&k=20&c=Dp3peie2t-jdLEmqe4W-DD09GACu2Cr-JjHHeB6rpBc=" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Kashmir</h4>
            <p>Rs. 40,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="edinburgh2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfSYwXT-O5rUzHzNAehT0G_AfXKZsYOXGOww&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Edinburgh</h4>
            <p>Rs. 88,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  10Days 9Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Edinburgh</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="paris2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmYaU-bmC48eHwIxoiybPXSRcJP-OOdqS19g&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Paris</h4>
            <p>Rs. 1,00,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> France</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="rajasthan2.php">
            <img src="https://aanganresortmandawa.com/wp-content/uploads/2021/09/30-Intriguing-Facts-about-Rajasthan.png" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Rajasthan</h4>
            <p>Rs. 65,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="irland2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkb4Uhq63H0k8o_n11Mv4LVBCQ9KhYpZJfEw&s" alt="Goa" />
          </a>
          <div class="content">
            <h4>Irland</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  10Days 9Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>  United Kingdom</div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!--2nd line-->
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="goa2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY3O9cj737sV-eV2QaU61pEisfYZd3JcUK5g&s" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Goa</h4>
            <p>Rs. 40,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="china2.php">
            <img src="https://media2.thrillophilia.com/images/photos/000/372/346/original/1619597051_00038300.JPG?w=753&h=450&dpr=1.5" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>China</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>China</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="kanyakumari2.php">
            <img src="assets/popular-5.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Kanyakumari</h4>
            <p>Rs. 45,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="spain2.php">
            <img src="https://hblimg.mmtcdn.com/content/hubble/img/Bulk_International/mmt/activities/m_Madrid_1-min_l_664_1000.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Spain</h4>
            <p>Rs. 60,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Spain</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="Italy2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrIH-M0zFQzHJI_pu72Wdc8_AiaEk4ncNhoQ&s" alt="Goa" />
          </a>
          <div class="content">
            <h4>Italy</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Italy </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!--3rd line-->
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="france2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNO4Rh3D-jiyPXzvedY9FxJxrESsjl47Fvgg&s" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>France</h4>
            <p>Rs. 78,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>France</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="japan2.php">
            <img src="https://assets.vogue.in/photos/6687b953289b94502f6c9f15/1:1/w_3903,h_3903,c_limit/1029818226 alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Japan</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Japan</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="russia2.php">
            <img src="https://ihplb.b-cdn.net/wp-content/uploads/2021/11/St.-Basils-Cathedral-799x430.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Russia</h4>
            <p>Rs. 50,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Russia</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="america2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnzEpkg3UDVf48zorPpuU5-EF3-fULYyODNg&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>America</h4>
            <p>Rs. 98,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>America</div>
            </div>
          </div>
        </div>
          <div class="package-card">
          <a href="london2.php">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/df/66/c8/caption.jpg?w=1200&h=-1&s=1" alt="Goa" />
          </a>
          <div class="content">
            <h4>London</h4>
            <p>Rs. 1,20,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> London</div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--4th line-->
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="ooty2.php">
            <img src="assets/popular-4.jpg" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Ooty</h4>
            <p>Rs. 30,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="banglore2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPzBQU2jL38EndwSP_zLxhY_bm4Nw9zjbN7g&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Banglore</h4>
            <p>Rs. 37,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="algeria2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThY43jb6nVs4LsU8vVoFPt0824o1T0aKKDcA&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Algeria</h4>
            <p>Rs. 84,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Algeria</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="gabon2.php">
            <img src="https://discover-afrika.com/wp-content/uploads/2019/07/Stade-dAngondje_.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Gabon</h4>
            <p>Rs. 66,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Gabon</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="morocco2.php">
            <img src="https://www.planetware.com/photos-large/MAR/morocco-casablanca-hassan-ii-mosque-facade.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Morocco</h4>
            <p>Rs. 1,30,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Morocco</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="saintLucia2.php">
            <img src="https://rainforestadventure.com/wp-content/uploads/2020/06/160425-Marigot-Bay_grande.jpg" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Saint Lucia</h4>
            <p>Rs. 88,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>  4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Saint Lucia</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="haiti2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqgoZCLyAiYcndbBO_L8PtybgrD7bbmMDlOQ&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Haiti</h4>
            <p>Rs. 66,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Haiti</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="nicaragua2.php">
            <img src="https://media-cdn.tripadvisor.com/media/photo-c/1280x250/11/9e/2e/c3/antigua-catedral-de-managua.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Nicaragua</h4>
            <p>Rs. 78,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 6Days 5Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Nicaragua</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="chile2.php">
            <img src="https://i0.wp.com/traveluto.com/wp-content/uploads/2017/06/Hand_of_the_Desert.jpg?fit=810%2C541&ssl=1" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Chile</h4>
            <p>Rs. 65,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Chile</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="paraguay2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIPmIgy3j3sSf9hpRWs3oS2noaiOgoCEb4XA&s" alt="Goa" />
          </a>
          <div class="content">
            <h4>Paraguay</h4>
            <p>Rs. 20,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Paraguay</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="egypt2.php">
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

        <div class="package-card">
          <a href="indonesia2.php">
            <img src="https://i0.wp.com/www.tusktravel.com/blog/wp-content/uploads/2020/08/indonesia-tour.jpg?fit=1920%2C1200&ssl=1" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Indonesia</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Indonesia</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="jordan2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU8LD1UrjO3fEiEV8appUJEiOYO6Zf5lDtPA&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Jordan</h4>
            <p>Rs. 75,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Jordan</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="dubai2.php">
            <img src="https://d2jdgazzki9vjm.cloudfront.net/tourist-places/images/tourist-places-in-dubai2.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Dubai</h4>
            <p>Rs. 89,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Dubai</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="singapur2.php">
            <img src="https://www.holidify.com/images/bgImages/SINGAPORE.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Singapur</h4>
            <p>Rs. 56,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Singapur</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="nepal2.php">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/ef/5c/54/durbar-square-bhaktapur.jpg?w=500&h=400&s=1" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Nepal</h4>
            <p>Rs. 45,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Nepal</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="saudi_Arebia2.php">
            <img src="https://media2.thrillophilia.com/images/photos/000/180/795/original/1638267556_Riyadh_tower.jpg?w=753&h=450&dpr=1.5" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Saudi Arebia</h4>
            <p>Rs. 78,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Saudi Arebia</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="thailand3.php">
            <img src="https://www.holidify.com/images/bgImages/PHI-PHI-ISLANDS.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Thailand</h4>
            <p>Rs. 89,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 6Days 5Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Thailand</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="iceland2.php">
            <img src="https://d1bv4heaa2n05k.cloudfront.net/user-images/1531751294035/shutterstock-527458129_destinationMain_1531751305009.jpeg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Iceland</h4>
            <p>Rs. 44,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Iceland</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="netherlands2.php">
            <img src="https://www.planetware.com/wpimages/2020/02/netherlands-top-attractions-best-time-to-visit.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Netherlands</h4>
            <p>Rs. 73,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Netherlands</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="serbia2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYdzapKlPAISr_GR9bjPeYRh021_Pamti_3g&s" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Serbia</h4>
            <p>Rs. 66,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Serbia</div>
            </div>
          </div>
        </div>


        <div class="package-card">
          <a href="India2.php">
            <img src="https://hblimg.mmtcdn.com/content/hubble/img/delhi/mmt/activities/m_activities_delhi_red_fort_l_341_817.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>India</h4>
            <p>Rs. 67,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> India</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="canada2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkP666L_Rqiyqj9h6gjdjR56YetO3Ek9Ggxw&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Canada</h4>
            <p>Rs. 78,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i>5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i> Canada</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="panjab2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcKcypoAZU_GvMBXsooNM3GwgPgw4WT9c6gQ&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Panjab</h4>
            <p>Rs. 47,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Panjab</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="peru2.php">
            <img src="https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/w_1120,h_758/v1626725868/Peru-Tourist-Attractions-Machu-Picchu/Peru-Tourist-Attractions-Machu-Picchu.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Peru</h4>
            <p>Rs. 70,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 4Days 3Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Peru</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="packages-container">
        <!-- First Card -->
        <div class="package-card">
          <a href="ecuador2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6hpXGoY-4S5slLTt5oAyKo-8rVm2Vpv1PUg&s" alt="Kashmir" />
          </a>
          <div class="content">
            <h4>Ecuador</h4>
            <p>Rs. 40,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 5Days 4Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Ecuador</div>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="package-card">
          <a href="uruguay2.php">
            <img src="https://www.planetware.com/wpimages/2019/10/uruguay-top-attractions-explore-montevideo.jpg" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Uruguay</h4>
            <p>Rs. 67,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Uruguay</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="venezuela2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR_MBBTLznnLg8Zl0rjqaFdre8KR8t36aPPA&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Venezuela</h4>
            <p>Rs. 59,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 3Days 2Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Venezuela</div>
            </div>
          </div>
        </div>

        <div class="package-card">
          <a href="Shrilanka2.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVYM-gaZW-pbIbI6CljW-ALYaL3ywZSJx4DQ&s" alt="Kanyakumari" />
          </a>
          <div class="content">
            <h4>Shri lanka</h4>
            <p>Rs. 90,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Bolivia</div>
            </div>
          </div>
        </div>
        
        <!-- Additional Cards -->
        <div class="package-card">
          <a href="colombia2.php">
            <img src="https://destinationlesstravel.com/wp-content/uploads/2018/06/DSC_0868-2.jpg" alt="Goa" />
          </a>
          <div class="content">
            <h4>Colombia </h4>
            <p>Rs. 1,34,000/- Per Person</p>
            <div class="details">
              <div><i class="fas fa-clock"></i> 7Days 6Nights</div>
              <div><i class="fas fa-map-marker-alt"></i>Colombia</div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>


