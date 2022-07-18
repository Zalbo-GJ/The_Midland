<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>THE MIDLAND</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<link rel="stylesheet" href="css/book.css" />
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php
    include "register.php";
    ?>
    <header class="header">
        <div class="container">
            <nav class="navi">
                <a href="index.html" class="logo">
                    <h1 class="logo"><span>The</span> MIDLAND</h1>
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
                        <a href="index.php #5" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#4" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="book.php" class="nav-link">Rooms</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="booker">
        <div class="container">
            <div class="content">
                <form action="register.php" method="POST">
                    <div class="elem-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20}
                            required>
                    </div>
                    <div class="elem-group">
                        <label for="email">Your E-mail</label>
                        <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
                    </div>
                    <div class="elem-group">
                        <label for="phone">Your Phone</label>
                        <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" ) required>
                    </div>
                    <hr>
                    <div class="elem-group inlined">
                        <label for="adult">Adults</label>
                        <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
                    </div>
                    <div class="elem-group inlined">
                        <label for="child">Children</label>
                        <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
                    </div>
                    <div class="elem-group inlined">
                        <label for="checkin-date">Check-in Date</label>
                        <input type="date" id="checkin-date" name="checkin" required>
                    </div>
                    <div class="elem-group inlined">
                        <label for="checkout-date">Check-out Date</label>
                        <input type="date" id="checkout-date" name="checkout" required>
                    </div>
                    <div class="elem-group">
                        <label for="room-selection">Select Room Preference</label>
                        <select id="room-selection" name="room_preference" required>
                            <option value="">Choose a Room from the List</option>
                            <option value="connecting">Connecting</option>
                            <option value="adjoining">Adjoining</option>
                            <option value="adjacent">Adjacent</option>
                        </select>
                    </div>
                    <hr>
                    <div class="elem-group">
                        <label for="message">Anything Else?</label>
                        <textarea id="message" name="visitor_message"
                            placeholder="Tell us anything else that might be important." required></textarea>
                    </div>
                    <button class="btn btn-gradient" name="submit" type="submit">Book The Rooms</button>
                </form>


            </div>
        </div>
    </section>
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat temporibus laudantium quasi
                        mollitia ad, corrupti eius magni quo dicta quae enim tenetur cum inventore asperiores, incidunt
                        voluptates voluptas alias laborum!
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