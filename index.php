<?php require('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car-Rental-Website</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="style1.css">
    <!--Box Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <a href="index.html" class="logo"><img src="images/jeep.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Ride</a></li>
            <li><a href="Car_Shortlist.html">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Review</a></li>
        </ul>
        <div class="sign-in-up">
        <button type='button' onclick="popup('login-popup')">LOGIN</button>
      <button type='button' onclick="popup('register-popup')">REGISTER</button>
        </div>
    </header>
  <div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>
  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>
    <!-- Home -->
    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking </span>to <br> rent a car</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Explicabo ad minima accusamus deserunt dolores.</p>
                <div class="app-stores">
                    <img src="images/ios.png" alt="reload">
                    <img src="images/512x512.png" alt="">
            
                </div>
        </div>
        <div class="form-container">
            <form action="detail.php">
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="location" id="" placeholder="search places"> 
                </div>
                    <div class="input-box">
                        <span>Pick-Up Date</span>
                        <input type="date" name="pdate" id="">
                    </div>
                    <div class="input-box">
                        <span>Return Date</span>
                        <input type="date" name="rdate" id="">
                    </div>
                    <input type="submit" name="submit" id="" class="btn">
                </div>
            </form>
        </div>
    </section>
    <!--ride section-->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How Its Work</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose A Location</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto numquam in voluptas dolorem, ut, dolore doloremque accusamus odio sunt inventore eveniet a aliquid omnis perspiciatis nobis tempore. Sint, facilis. Vero.</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick-Up Date</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto numquam in voluptas dolorem, ut, dolore doloremque accusamus odio sunt inventore eveniet a aliquid omnis perspiciatis nobis tempore. Sint, facilis. Vero.</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book A Car</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto numquam in voluptas dolorem, ut, dolore doloremque accusamus odio sunt inventore eveniet a aliquid omnis perspiciatis nobis tempore. Sint, facilis. Vero.</p>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services" id="services"></section>
    <div class="heading">
        <span>Best Services</span>
        <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
    </div>
    <div class="services-container">
        <div class="box">
        <div class="box-img">
        <img src="images/car1.jpg" alt="car1">
    </div>
    <p>2021</p>
    <h3>2018 Honda Civic</h3>
    <h2>₹58500 | ₹358 <span>/month</span></h2>
    <a href="#" class="btn">Rent Now</a>
</div>

<div class="box">
    <div class="box-img">
    <img src="images/car2.jpg" alt="car1">
    </div>
<p>2021</p>
<h3>2018 Honda Civic</h3>
<h2>₹58500 | ₹358 <span>/month</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>

<div class="box">
    <div class="box-img">
    <img src="images/car3.jpg" alt="car1">
</div>
<p>2021</p>
<h3>2018 Honda Civic</h3>
<h2>₹58500 | ₹358 <span>/month</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>
<div class="box">
    <div class="box-img">
    <img src="images/car4.jpg" alt="car1">
</div>
<p>2021</p>
<h3>2018 Honda Civic</h3>
<h2>₹58500 | ₹358 <span>/month</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>

<div class="box">
    <div class="box-img">
    <img src="images/car5.jpg" alt="car1">
</div>
<p>2021</p>
<h3>2018 Honda Civic</h3>
<h2>₹58500 | ₹358 <span>/month</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>

<div class="box">
    <div class="box-img">
    <img src="images/car6.jpg" alt="car1">
</div>
<p>2021</p>
<h3>2018 Honda Civic</h3>
<h2>₹58500 | ₹358 <span>/month</span></h2>
<a href="#" class="btn">Rent Now</a>
</div>
</div>
    <!--about section-->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="images/about.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate magni omnis illo exercitationem fuga assumenda nemo doloribus asperiores culpa, au</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorem ipsam non, est suscipit pariatur itaque, voluptate sapiente officiis rem alias harum consequatur quos vitae? Obcaecati omnis exercitationem similique quae.</p>
                <a href="#" class="btn">learn More</a>
            </div>
        </div>
    </section>
    <!--reviews-->
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Whats Our Customer Says.......</h1>
        </div>
        <div class="review-container">
            <div class="box">
                <div class="rev-img">
                    <img src="images/rev1.jpg" alt="">
            </div>
            <h2>James Bond</h2>
            <div class="stars">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat cupiditate blanditiis, expedita optio eaque architecto quasi delectus soluta, dolor aspernatur, veritatis quaerat. Nobis asperiores harum reiciendis ullam quas unde provident?</p>
        </div>
        <div class="box">
            <div class="rev-img">
                <img src="images/rev2.jpg" alt="">
        </div>
        <h2>Alice Copper</h2>
        <div class="stars">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, consequatur repudiandae cupiditate necessitatibus dolores ipsum nulla. Tempore libero velit modi perspiciatis. Debitis natus unde modi quos ex dolorem voluptatibus qui?</p>
    </div>
    <div class="box">
        <div class="rev-img">
            <img src="images/rev3.jpg" alt="">
    </div>
    <h2>Nyra Diea </h2>
    <div class="stars">
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star-half"></i>
    </div>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea sapiente quidem iusto tempore, totam cumque fugit ab minima id commodi, quibusdam sit voluptates iste quae ut in fugiat, eligendi illo.

    </p>
</div>
        </div>
    </section>
    <!--Newsletter-->
    <section class="newsletter">
        <h2>Subscribe To Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter your email....">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>
    <!--copyright-->
    <div class="copyright">
        <p>&#169 ; carpoolvenom All Right Reserved</p>
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
    </div>
    <!--Scroll Reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JS-->
    <script src="JS.js">
    </script>
</body>
</html>