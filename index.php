<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>THE MIDLAND</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<link rel="stylesheet" href="css/style.css" />
<link rel="icon" href="./THE MIDLAND-logos/THE MIDLAND-logos.jpeg">
</head>

<body>
    <?php
    include("connect.php");
    ?>


    <header class="header">
        <div class="container">
            <nav class="navi">
                <a href="index.php" class="logo">
                    <img src="./THE MIDLAND-logos/THE MIDLAND-logos_transparent.png" alt="">
                    <!-- <h1 class="logo"><span>The</span> MIDLAND</h1> -->
                </a>
                <div class="ham-menu">

                    <i class="fa-solid fa-bars"></i>
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <ul class="nav-lists">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#5" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#4" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="book.php" class="nav-link">Book</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="hero">
            <div class="container">
                <div class="main-heading">
                    <h2>Welcome to the</h2>
                    <h1>Midland</h1>

                    <a href="advent.php" class="btn btn-gradient">Explore now</a>
                </div>
            </div>
        </div>


        <section class="checking" id="6">
            <div class="container">
                <form action="" class="form">
                    <div class="input-s">

                        <label for="destination" class="input-label">
                            Destination

                        </label>
                        <input type="text" class="input" id="destination">
                    </div>
                    <div class="input-s">

                        <label for="check-in" class="input-label">
                            check-in

                        </label>
                        <input type="date" class="input" id="check-in">
                    </div>
                    <div class="input-s">

                        <label for="check-out" class="input-label">
                            check-out

                        </label>
                        <input type="date" class="input" id="check-out">
                    </div>
                    <div class="input-s">
                        <label for="adults" class="input-label">Adults
                            <select name="" id="adults" class="options">
                                <option value="0">0</option>
                                <option value="0">1</option>
                                <option value="0">2</option>
                                <option value="0">3</option>
                                <option value="0">4</option>
                                <option value="0">5</option>
                            </select>
                        </label>
                    </div>
                    <div class="input-s">
                        <label for="child" class="input-label">Children
                            <select name="" id="child" class="options">
                                <option value="0">0</option>
                                <option value="0">1</option>
                                <option value="0">2</option>
                                <option value="0">3</option>
                                <option value="0">4</option>
                                <option value="0">5</option>
                            </select>
                        </label>
                    </div>
                    <button onclick="book.php" type="submit" class="btn form-btn btn-purple">
                        Search
                    </button>
                </form>
            </div>
        </section>
        <section class="hotels">
            <div class="container">
                <h5>
                    <span class="hd">Explore</span>
                    <span class="shd">Our theme hotels</span>
                </h5>
                <div class="grid">
                    <div class="grid-item themes">
                        <img src="./images/hotel_astro_resort.jpg" alt="" class="hotels-img">
                        <h5 class="hotel-name">Astro Resort</h5>
                        <span class="hotel-price">From $300/Night</span>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                        </div>
                        <a href="book.php" class="btn btn-gradient">Book now
                        </a>

                    </div>
                    <div class="grid-item themes">
                        <img src="./images/hotel_the_paradise.jpg" alt="" class="hotels-img">
                        <h5 class="hotel-name">The Paradise</h5>
                        <span class="hotel-price">From $350/Night</span>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                        </div>
                        <a href="book.php" class="btn btn-gradient">Book now
                        </a>

                    </div>
                    <div class="grid-item themes">
                        <img src="./images/hotel_the_enchanted_garden.jpg" alt="" class="hotels-img">
                        <h5 class="hotel-name">The Enchanted Garden</h5>
                        <span class="hotel-price">From $400/Night</span>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <a href="book.php" class="btn btn-gradient">Book now
                        </a>

                    </div>
                </div>
        </section>

        <section class="rooms">
            <div class="container">
                <h5>
                    <span class="hd">Luxourious</span>
                    <span class="shd">The rooms you have dreamed of</span>
                </h5>
                <div class="grid rooms-grid">
                    <div class="grid-item featured-rooms">
                        <div class="img-wrap">
                            <img class="room-img" src="./images/room_1.jpg" alt="">
                            <h5 class="room-name">Astro Resort</h5>
                        </div>
                        <div class="room-info">
                            <span>$300/Night</span>
                            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis soluta animi
                                officia deleniti aliquam earum, .</p>
                            <a href="" class="btn room-btn">Book now </a>
                        </div>
                    </div>


                    <div class="grid-item featured-rooms">
                        <div class="img-wrap">
                            <img class="room-img" src="./images/room_2.jpg" alt="">
                            <h5 class="room-name">Astro Resort</h5>
                        </div>
                        <div class="room-info">
                            <span>$300/Night</span>
                            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis soluta animi
                                officia deleniti aliquam earum, .</p>
                            <a href="book.php" class="btn room-btn">Book now </a>
                        </div>
                    </div>


                    <div class="grid-item featured-rooms">
                        <div class="img-wrap">
                            <img class="room-img" src="./images/room_3.jpg" alt="">
                            <h5 class="room-name">Astro Resort</h5>
                        </div>
                        <div class="room-info">
                            <span>$300/Night</span>
                            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis soluta animi
                                officia deleniti aliquam earum, .</p>
                            <a href="book.php" class="btn room-btn">Book now </a>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="hotels">
            <div class="container">
                <h5>
                    <span class="hd">Adventures</span>
                    <span class="shd">On the island</span>
                </h5>
                <div class="grid">
                    <div class="grid-item themes">
                        <img src="./images/pexels-jens-mahnke-776117.jpg" alt="" class="hotels-img">

                        <div class="rating">

                        </div>
                        <a href="book.php" class="btn btn-gradient">Book now
                        </a>

                    </div>
                    <div class="grid-item themes">
                        <img src="./images/pexels-rachel-claire-4825701.jpg" alt="" class="hotels-img">

                        <div class="rating">

                        </div>
                        <a href="book.php" class="btn btn-gradient">Book now
                        </a>

                    </div>
                    <div class="grid-item themes">
                        <img src="./images/pexels-aviv-perets-3257772.jpg" alt="" class="hotels-img">


                        <div class="rating">

                        </div>
                        <a href="book.php" class="btn btn-gradient">Book now
                        </a>

                    </div>
                    <div class="grid-item themes">
                        <img src="./images/pexels-jess-loiterton-5007735.jpg" alt="" class="hotels-img">


                        <div class="rating">

                        </div>
                        <a href="book.php
                        " class="btn btn-gradient">Book now
                        </a>

                    </div>
                </div>
        </section>
        <section class="contact" id="4">
            <div class="container">
                <h5>
                    <span class="hd">Contact</span>
                    <span class="shd">Get in touch with us</span>
                </h5>
                <div class="content">
                    <div class="wrap">
                        <img src="./images/traveler.png" alt="">

                    </div>
                    <form action="contact.php" class="form contact-form" method="POST">
                        <div class="input-wrap">
                            <div class="inputs">
                                <input type="text" class="inp" placeholder="Name" name="fullName" required>
                                <span></span>
                            </div>
                            <div class="inputs">
                                <input type="email" class="inp" placeholder="E-mail" name="email" required>
                                <span></span>
                            </div>

                            <div class="inputs">
                                <input type="text" class="inp" placeholder="Subject" name="subject" required>
                                <span></span>
                            </div>
                            <div class="inputs">
                                <textarea class="inp" cols="30" rows="8" placeholder="Message" name="message"
                                    required></textarea>
                                <span></span>
                            </div>
                            <button type="submit" name="send" class="btn form-btn btn-purple">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>

    </main>

    <footer class="footer" id="5">
        <div class="custom-shape-divider-top-1655699524">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="container">
            <div class="foot-con">
                <div class="cont">
                    <a href="index.html" class="logo">
                        <h1 class="logo"><span>The</span> MIDLAND</h1>
                    </a>
                    <div class="paragraph">
                        <p>There’s no better place to witness The Midland legendary sunsets than from one of three
                            infinity pools at Astro, a series of whitewashed cubes overlooking the Aegean. Of course,
                            the hotel’s open-air Mikrasia restaurant is a fitting second choice. Take in the view over
                            local specialties like grilled calamari with fava beans and slow-cooked lamb and a glass of
                            Santorini’s own assyrtiko wine, then follow the meandering bridges and pathways back to your
                            room. Resembling upscale versions of the classic cliff-side dwellings fishermen used to
                            inhabit, the 27 suites incorporate the island’s iconic color palette with white furnishings
                            and linens, blonde wood floors, and windows that spotlight the sparkling lapis sea and sky.
                        </p>
                    </div>
                </div>
                <div class="sm-wrap">
                    <h4>Follow us</h4>
                    <div class="sm">
                        <a href="" class="sm-link"><i class="fa-brands fa-twitter-square"></i></a>
                        <a href="" class="sm-link"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="" class="sm-link"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="" class="sm-link"><i class="fa-brands fa-pinterest-square"></i></a>
                        <a href="" class="sm-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>

</html>