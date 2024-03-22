<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="favi.jpg">
    <title>AstroHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body ng-app="courseSearchApp" ng-controller="CourseSearchController">
    <nav class="navbar navbar-expand-lg navbar-light main-navbar
      bg m-navbar-light" id="main-navbar">
      <div class="container">
          <a class="navbar-brand text-light"href="#">AstroHub</a>
          <button class="navbar-toggler"type="button"data-toggle="collapse"
          data-target="#my-nav" aria-controls="p-nav"aria-expanded="false"
          aria-label="toggle-navigation">
        <span>Menu</span>
        </button>
        <div class="collapse navbar-collapse"id="my-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active text-light">
                    <a href="#aboutus"class="nav-link text-white  ">About</a>
                </li>
                <li class="nav-item active">
                    <a href="#"class="nav-link text-white  ">Popular Places</a>
                </li>
                <li class="nav-item active ">
                    <a href="#"class="nav-link text-white  ">Services</a>
                </li>
                <li class="nav-item active ">
                    <a href="#"class="nav-link text-white  ">Blog</a>
                </li>
                <li class="nav-item active ">
                    <a href="#"class="nav-link text-white ">Contact</a>
                </li>
                <li class="nav-item active ">
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="text-white bg-dark rounded-pill">Sign Up</button>

                    <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <form class="modal-content" action="/action_page.php">
                        <div class="container">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                        
                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                        </label>

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="signupbtn">Sign Up</button>
                        </div>
                        </div>
                    </form>
                    </div>

                    <script>
              
                    var modal = document.getElementById('id01');

                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                    }
                    </script>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    
    <section class="hero-wrap">
        <video autoplay muted loop id="background-video">
            <source src="html/header.mp4" type="video/mp4"/> 
        </video>
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters main-text align-items-center">
            <div class="col-lg-7 col-md-6 d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4 text-capitalize">Exploring the Cosmos: Unlocking Infinite Knowledge<br>
                        
                      </h1>
                      <p style="font-size:18px;">Embark on an Interstellar Journey of Learning with our EdTech Platform, where Curiosity Meets Innovation.</p>
                    <a href="#" class="btn btn-hero py-2 px-3">View all</a>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    angular.module('courseSearchApp', [])
    .controller('CourseSearchController', function($scope, $http) {
        // Initialize searchQuery object
        $scope.searchQuery = {
            name: '',
            category: '',
            duration: ''
        };

        $http.get('courses.json')
        .then(function(response) {
            $scope.courses = response.data;
        })
        .catch(function(error) {
            console.log(error);
        });

        // Function to show all courses
        $scope.showAllCourses = function() {
            $scope.showAll = true;
        };

        // Function to search courses
        $scope.searchCourses = function() {
            // Filter courses based on search query
            $scope.searchResults = $scope.courses.filter(function(course) {
                return (
                    course.name.toLowerCase().includes($scope.searchQuery.name.toLowerCase()) &&
                    course.category.toLowerCase().includes($scope.searchQuery.category.toLowerCase()) &&
                    course.duration.toLowerCase().includes($scope.searchQuery.duration.toLowerCase())
                );
            });

            // Open modal to display search results
            $('#searchResultsModal').modal('show');
        };
    });
</script>


<section class="about-section mt-5" id="#aboutus">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center heading-section mb-5">
                <h2 class="mb-4 text-capitalize" style="font-size: 48px; font-weight: bolder;">Welcome To AstroHub</h2>
                <p style="text-align: justify; color: black;" class="courses_para">Astrohub ignites the spark of cosmic curiosity. Dive into a universe of knowledge, where the mysteries of planets, stars, and the vast expanse of space unfold. Whether you're a budding astronomer or a lifelong stargazer, embark on an educational journey that's out of this world!</p>
            </div>
        </div>
        <div class="row img-wrap mb-5 mb-lg-0">
            <div class="col-12">
                <div class="row">
                    <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                        <a href="#" class="effect">
                            <img src="html/mission.jpg"alt=""
                            class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                        <h2 class="mb-4 text-capitalize"style="font-size: 36px; font-weight: bolder;">Our Mission</h2>
                        <p class="mb-4 courses_para" style="text-align: justify;  color: black;">
                            Take Your learning to newer dimensions At AstroHub, we are passionate about unlocking the wonders of the cosmos and sharing the marvels of space with the world. Our mission is to ignite curiosity, inspire exploration, and foster a deeper understanding of the universe through accessible and engaging online education. We believe that everyone, regardless of background or experience, should have the opportunity to explore the mysteries of space and discover their place in the cosmos.
                        </p>
                        <a href="#"class="btn btn-about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!------->
        <div class="row img-wrap mb-5 mb-lg-0">
            <div class="col-12">
                <div class="row">
                    <div class="mb-4 margin-lg-0 col-lg-6">
                        <a href="#" class="effect">
                            <img src="html/vision.jpg"alt=""
                            class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-5 ml-auto align-self-center order-lg-1">
                        <h2 class="mb-4 text-capitalize" style="font-size: 36px; font-weight: bolder;">Our Vision</h2>
                        <p class="mb-4 courses_para" style="text-align: justify;  color: black;">
                            A revolution in exploration Our vision at AstroHub is to create a global community of space enthusiasts, learners, and explorers united by their curiosity and passion for the universe. Through our comprehensive online platform, we strive to empower individuals to embark on a journey of discovery, offering a diverse range of courses, resources, and experiences designed to spark imagination and fuel intellectual growth. Whether you're a student, educator, or simply an enthusiast, AstroHub is your gateway to the cosmos, where the wonders of space come alive.
                        </p>
                        <a href="#"class="btn btn-about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row img-wrap mb-5 mb-lg-0">
            <div class="col-12">
                <div class="row">
                    <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                        <a href="#" class="effect">
                            <img src="html/curiotisty.jpg"alt=""
                            class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                        <h2 class="mb-4 text-capitalize" style="font-size: 36px; font-weight: bolder;">The need for curiosity</h2>
                        <p class="mb-4 courses_para" style="text-align: justify;  color: black;">
                            <span style="font-weight: 500;">" Unleash the explorer in you! " </span>  In today's fast-paced world, cultivating curiosity about space is more important than ever. Space exploration not only expands our scientific knowledge but also sparks innovation, inspires creativity, and fosters a sense of wonder and awe. Understanding the cosmos allows us to gain perspective on our place in the universe and appreciate the interconnectedness of all life on Earth.

				            Moreover, space curiosity drives technological advancements that benefit society as a whole, from satellite communications and GPS navigation to medical imaging and environmental monitoring. By nurturing a sense of wonder and curiosity about space, we encourage future generations to pursue careers in STEM fields, driving innovation and shaping the future of humanity. In an increasingly interconnected world, space exploration serves as a unifying force, transcending borders and bringing people together in the pursuit of knowledge and understanding.
                        </p>
                        <a href="#"class="btn btn-about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!------->
    </div>
</section>

<section>
      <div class="popular section-bg img-effect mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
        <div class="section-title text-center">                      
          <h1 class="text-white" style="font-size: 48px; font-weight: bolder;">Popular Courses </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="all-image">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5">
                    <div class="single-img">
                        <div class="img-thumb">
                            <img src="html/deep-space1.jpg" alt="">
                        </div>
                        <div class="img-hover">
                            <div class="title">
                                    <h3>Deep Space Network</h3>
                                    <p class="courses_para">Deep Space Network Explainer Video: How Do We Communicate With Faraway Spacecraft?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="single-img">
                        <div class="img-thumb">
                            <img src="html/deep-space2.jpg" alt="">
                        </div>
                        
                        <div class="img-hover">
                            <div class="title">
                                    <h3>Deep Space Network</h3>
                                    <p class="courses_para">Deep Space Network Explainer Video: How Do We Know Where Faraway Spacecraft Are?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single-img radial">
                        <div class="img-thumb">
                            <img src="html/basic space.jpg" alt="">
                        </div>
                       <div class="img-hover">
                            <div class="title">
                                <h3>Basic Space and Aerospace</h3>
                                <p class="courses_para">Uncover the secrets of the universe in our beginner-friendly Space and Astronomy course</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single-img radial">
                        <div class="img-thumb">
                            <img src="html/astronomy.jpg" alt="">
                        </div>
                         <div class="img-hover">
                            <div class="title">
                                    <h3>Astronomy Fundamentals</h3>
                                    <p class="courses_para">Dive into the basics of the universe and gain a deeper understanding of celestial objects in our Astronomy Fundamentals course.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-lg-4">
                    <div class="single-img radial">
                        <div class="img-thumb">
                            <img src="html/space missions.jpg" alt="">
                        </div>
                     <div class="img-hover">
                            <div class="title">
                                    <h3>Space Missions</h3>
                                    <p class="courses_para">Explore the science and engineering behind groundbreaking space missions and their discoveries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              </div>
    </div>
  
</section>


<section id="services" class="services section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title">
                    <h2 class="mb-4 text-capitalize" style="font-size: 36px; font-weight: bolder;">AstroHub Your Launchpad to Space Exploration</span></h2>
                    <p class="courses_para" style="color: black;">
                        Astrohub is your one-stop destination for igniting your passion for space exploration and astronomy. We offer a comprehensive suite of educational experiences designed to engage learners of all ages and backgrounds. Whether you're a curious beginner or a seasoned space enthusiast, Astrohub has something for you.
                    </p>
                </div>
            </div>
            <!----->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="icon-circle purple">
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <h4 class="text-white">Interactive Courses</h4>
                            <p>Explore in-depth topics with our curriculum designed by astronomy experts.</p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-circle pink">
                            <div class="icon">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <h4 class="text-white">Engaging Activities</h4>
                            <p>Fuel your curiosity with simualtions, virtual labs, and hands-on projects</p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-circle yellow">
                            <div class="icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h4 class="text-white">Creative Challenges</h4>
                            <p>Express your passiom for space through art, writing, and design activities</p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-circle blue">
                            <div class="icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h4 class="text-white">Gamified Learning</h4>
                            <p>Earn badges, compete on leaderboards, make learning about space an excitng adventure</p>
                        </div>
                    </div>
                    <!---->
    
    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team section-bg mt-5">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center" style="font-size: 48px; font-weight: bolder;">Team</h2>
            <p class="courses_para" style="color: black;">
                Meet the core team behind Travelopedia, each passionate about crafting exceptional travel experiences for our clients. With diverse backgrounds and expertise in various destinations, our team members bring a wealth of knowledge and enthusiasm to every journey. From experienced travel advisors providing expert guidance to meticulous planners ensuring every detail is perfect, we're committed to ensuring your trip is memorable and hassle-free. Trust our team to turn your travel aspirations into unforgettable adventures.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="html/mission.jpg"class="img-fluid"alt="">
                        <div class="social">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>

                    </div>
                    <div class="member-info">
                        <h4>Sarah Mcarthy</h4>
                        <span>CEO</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="html/mission.jpg"class="img-fluid"alt="">
   <div class="social">
        <a href=""><i class="fab fa-facebook"></i></a>
             <a href=""><i class="fab fa-twitter"></i></a>
           <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-linkedin"></i></a>
        </div>

     </div>
                    <div class="member-info">
                        <h4>Federick Williams</h4>
                        <span>Travel Administrator</span>
                    </div>
                </div>
            </div>
            <!---->
    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
  <img src="html/mission.jpg"class="img-fluid"alt="">
       <div class="social">
        <a href=""><i class="fab fa-facebook"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
           <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-linkedin"></i></a>
          </div>
  </div>
     <div class="member-info">
                        <h4>Kevin Peter</h4>
                        <span>Systems Head</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="html/mission.jpg"class="img-fluid"alt="">
                        <div class="social">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>

                    </div>
                    <div class="member-info">
                        <h4>Anthony Blinken</h4>
                        <span>Chief Finance Officer</span>
                    </div>
                </div>
            </div>
            <!---->



        </div>
    </div>
</section>

<section class="package section-padding mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section-title text-center">
                    <h2 class="py-3" style="font-size: 48px; font-weight: bolder;" >Packages We Offer</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="package-1">
                    <img src="https://i.postimg.cc/bNr1Lmtj/fa-3.jpg"class="img-fluid"alt="">
                    <div class="package-text">
                        <p class="courses_para">Explore the world with ease through our international packages at Travelopedia. Handcrafted for seamless adventures, our curated itineraries promise unforgettable experiences across diverse destinations. From iconic landmarks to hidden gems, trust us to unlock the globe's wonders with convenience and expertise.</p>
                        <a href="#"class="btn-package p-2">View Details</a>
                    </div>
                </div>
            </div>
            <!----->
            <div class="col-md-6 col-xl-6">
                <div class="package-1">
                    <img src="https://i.postimg.cc/cCwGNRK1/fa-2.jpg" class="img-fluid"alt="">
                    <div class="package-text">
                        <p class="courses_para">Embark on a cultural odyssey through the heart of India with our bespoke cultural tourism packages at Travelopedia. Delve into the rich tapestry of India's heritage, from majestic forts and palaces to vibrant festivals and traditions. Our meticulously crafted itineraries offer immersive experiences that showcase the diverse cultural fabric of India, ensuring a journey filled with enchantment and discovery. Let us be your guide as you unravel the timeless charm of India's cultural treasures.</p>
                        <a href="#"class="btn-package p-2">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-2">
    <div class="historical-places">
        <div class="container">
            <div class="row-justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="section-title  mb-70">
                        <h3 class="text-uppercase py-3" style="font-size: 48px; font-weight: bolder;">Shopify</h3>
                        <p class="courses_para" style="color: black; text-align: justify;">Discover a galaxy of out-of-this-world gifts!  Our space-themed shop has unique finds for every stargazer and budding astronaut. Find the perfect present to celebrate their love of the cosmos.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-dest">
                        <div class="thumb">
                            <img src="https://www.shopnasa.com/cdn/shop/files/2024eclipsetshirt_900x.jpg?v=1710092098" alt="">
                            <a href="#"class="price">Rs. 1,500 <span style="text-decoration: line-through;">Rs. 2,200</span></a>
                        </div>
                        <div class="dest-info">
                            <a href="#">
                                <h3>NASA 2024 ECLIPSE T-SHIRT</h3>
                            </a>
                            <br>
                            <div class="rating d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <a href="#">(100 Review)</a>
                          </span>
                          <div class="days">
                              <i class="fas fa-clock-o">
                                  <a hrf="#">#tshirts</a>
                              </i>
                          </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-lg-4 col-md-6">
                    <div class="single-dest">
                        <div class="thumb">
                            <img src="https://www.shopnasa.com/cdn/shop/files/SpaceHelmetGlasses_900x.png?v=1709735406"alt="">
                            <a href="#"class="price">Rs. 400</a>
                        </div>
                        <div class="dest-info">
                            <a href="#">
                                <h3>SPACE HELMET ECLIPSE GLASSES</h3>
                            </a>
                            <br>
                            <div class="rating d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <a href="#">(190 Review)</a>
                          </span>
                          <div class="days">
                              <i class="fas fa-clock-o">
                                  <a hrf="#">#accessories</a>
                              </i>
                          </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-lg-4 col-md-6">
                    <div class="single-dest">
                        <div class="thumb">
                            <img src="https://www.shopnasa.com/cdn/shop/products/unisex-basic-softstyle-t-shirt-black-front-621cfcd6c13ff_200x.jpg?v=1646066911"class="img-fluid"alt="">
                            <a href="#"class="price">Rs. 1,900 <span style="text-decoration: line-through;color: red;">Rs. 2,600</span></a>
                        </div>
                        <div class="dest-info">
                            <a href="#">
                                <h3>ARTEMIS UNISEX T-SHIRT</h3>
                            </a>
                            <br>
                            <div class="rating d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <a href="#">(101 Review)</a>
                          </span>
                          <div class="days">
                              <i class="fas fa-clock-o">
                                  <a hrf="#">#1 t-shirts</a>
                              </i>
                          </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-lg-4 col-md-6">
                    <div class="single-dest">
                        <div class="thumb">
                            <img src="https://www.shopnasa.com/cdn/shop/products/flight_suit_white_1000psi_300x.jpg?v=1582660811"class="img-fluid"alt="">
                            <a href="#"class="price">Rs. 1,500 <span style="text-decoration: line-through;">Rs. 2,200</span></a>
                        </div>
                        <div class="dest-info">
                            <a href="#">
                                <h3>WHITE ASTRONAUT FLIGHT SUIT</h3>
                            </a>
                            <br>
                            <div class="rating d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <a href="#">(501 Review)</a>
                          </span>
                          <div class="days">
                              <i class="fas fa-clock-o">
                                  <a hrf="#">#toys</a>
                              </i>
                          </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-lg-4 col-md-6">
                    <div class="single-dest">
                        <div class="thumb">
                            <img src="https://www.shopnasa.com/cdn/shop/files/distressed-denim-bucket-hat-black-denim-front-64ea8126628d7_400x.jpg?v=1693090097"class="img-fluid"alt="">
                            <a href="#"class="price">Rs. 1,500 <span style="text-decoration: line-through;">Rs. 2,200</span></a>
                        </div>
                        <div class="dest-info">
                            <a href="#">
                                <h3>ARTEMIS DISTRESSED DENIM BUCKET HAT</h3>
                            </a>
                            <br>
                            <div class="rating d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              
                              
                              <a href="#">(100 Review)</a>
                          </span>
                          <div class="days">
                              <i class="fas fa-clock-o">
                                  <a hrf="#">#hats</a>
                              </i>
                          </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------>
                <div class="col-lg-4 col-md-6">
                    <div class="single-dest">
                        <div class="thumb">
                            <img src="https://www.shopnasa.com/cdn/shop/files/spiral-notebook-white-front-649a05ce2231b_400x.jpg?v=1687815635"class="img-fluid"alt="">
                            <a href="#"class="price">Rs. 1,500 <span style="text-decoration: line-through;">Rs. 2,200</span></a>
                        </div>
                        <div class="dest-info">
                            <a href="#">
                                <h3>ARTEMIS SPIRAL NOTEBOOK</h3>
                            </a>
                            <br>
                            <div class="rating d-flex justify-content-between">
                          <span class="d-flex justify-content-center align-items-center">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <a href="#">(190 Review)</a>
                          </span>
                          <div class="days">
                              <i class="fas fa-clock-o">
                                  <a hrf="#">#accessories</a>
                              </i>
                          </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-hist text-center ">
                      <div><a href="#" class="btn btn-hist">Shop More Items</a></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="testimonial-section mt-5">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2 style="font-size: 36px; font-weight: bolder;">Happy Customers</h2>
                <p class="courses_para" style="color: black;">A lot of parents are first overwhelmed by the idea of enrolling their kids to Space Science and Astronomy courses. But, they are amazed at how easily we break down that complex science into something their child enjoys. Listen what the young minds have to say</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="test-date">
                        09/08/2020
                    </div>
                    <h4> Emphasizing Interactive Learning

                    </h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                    </div>
                    <p class="courses_para" style="color: black;">Astrohub has made learning about space so much fun! Their courses aren't just lectures; they have interactive simulations, quizzes, and really cool projects that help me understand things better. I love building my own model of the solar system!</p>
                    <div class="customer">
                        <div class="customer-photo">
                            <img src="html/cosmso2.jpg"alt="">
                        </div>
                        <div class="test-text">
                            <h6>Sebastian Jose <span>Belgium</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!----->
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="test-date">
                        09/08/2020
                    </div>
                    <h4> Focusing on Community and Passion

                    </h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="courses_para" style="color: black;">Before I found Astrohub, I thought I was the only one obsessed with space.  Their community forums are amazing! I've connected with other space geeks, learned so much from other people, and even collaborated on a few projects. Astrohub has ignited my passion even more!</p>
                    <div class="customer">
                        <div class="customer-photo">
                            <img src="html/cosmso1.jpg"alt="">
                        </div>
                        <div class="test-text">
                            <h6>Sarah Johnson <span>Newzealand</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!----->
        </div>
    </div>
</section>
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="text-center pb-2" style="font-size:48px; font-weight: bolder;">
                        Featured News
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <img src="https://www.nasa.gov/wp-content/uploads/2024/03/orbitalreef3.jpg" class="img-fluid" alt="">
                    <div class="blog-detail">
                        <div class="blog-date">
                            March 23, 2024
                        </div>
                        <a href="#"class="tag">3 min read</a>
                    </div>
                    <h4 class="courses_para"><a href="#">NASA Sees Progress on Blue Origin’s Orbital Reef Life Support System</a></h4>
                </div>
            </div>
            <!----->
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <img src="https://www.nasa.gov/wp-content/uploads/2024/03/lola-sp-still-4k.jpg?resize=2000,1125" class="img-fluid" alt="">
                    <div class="blog-detail">
                        <div class="blog-date">
                            March 23, 2024
                        </div>
                        <a href="#"class="tag">5 min read</a>
                    </div>
                    <h4 class="courses_para"><a href="#">NASA, Industry Improve Lidars for Exploration, Science</a></h4>
                </div>
            </div>
            <!----->
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <img src="https://www.nasa.gov/wp-content/uploads/2024/03/1-grace-c-engineer-well-depth.jpg?resize=2000,1065" class="img-fluid" alt="">
                    <div class="blog-detail">
                        <div class="blog-date">
                            March 23, 2024
                        </div>
                        <a href="#"class="tag">6 min read</a>
                    </div>
                    <h4 class="courses_para"><a href="#">US, Germany Partnering on Mission to Track Earth’s Water Movement</a></h4>
                </div>
            </div>
            <!----->
        </div>
    </div>
</section>

<section class="contact mt-3">
<div class="container">
    <div class="section-title">
        <h2 class="text-center" style="font-size: 36px; font-weight: bolder;">
            Contact Us
        </h2>
        <p class="text-center">
            Let's Explore the Cosmos Together
        </p>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="icon-box">
                        <i class="fas fa-share"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="https://www.bing.com/ck/a?!&&p=89ac25a0da709a3aJmltdHM9MTcwOTY4MzIwMCZpZ3VpZD0xNTE3ZDUwOS1kODdkLTZiM2MtMmVmYi1jNmEwZDlkMDZhYTQmaW5zaWQ9NTIxNg&ptn=3&ver=2&hsh=3&fclid=1517d509-d87d-6b3c-2efb-c6a0d9d06aa4&psq=twitter&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS8_bGFuZz1lbi1pbg&ntb=1"class="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.bing.com/ck/a?!&&p=a3948ff844486f78JmltdHM9MTcwOTY4MzIwMCZpZ3VpZD0xNTE3ZDUwOS1kODdkLTZiM2MtMmVmYi1jNmEwZDlkMDZhYTQmaW5zaWQ9NTIxOQ&ptn=3&ver=2&hsh=3&fclid=1517d509-d87d-6b3c-2efb-c6a0d9d06aa4&psq=Facebook&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw&ntb=1"class="facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://www.bing.com/ck/a?!&&p=9a932a9b59ee3a5fJmltdHM9MTcwOTY4MzIwMCZpZ3VpZD0xNTE3ZDUwOS1kODdkLTZiM2MtMmVmYi1jNmEwZDlkMDZhYTQmaW5zaWQ9NTIyMA&ptn=3&ver=2&hsh=3&fclid=1517d509-d87d-6b3c-2efb-c6a0d9d06aa4&psq=instagram&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS8_aGw9ZW4&ntb=1"class="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.bing.com/ck/a?!&&p=e5fa93a697275b0bJmltdHM9MTcwOTY4MzIwMCZpZ3VpZD0xNTE3ZDUwOS1kODdkLTZiM2MtMmVmYi1jNmEwZDlkMDZhYTQmaW5zaWQ9NTIxOA&ptn=3&ver=2&hsh=3&fclid=1517d509-d87d-6b3c-2efb-c6a0d9d06aa4&psq=Linkedin&u=a1aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL2xvZ2lu&ntb=1"class="linkedin">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="icon-box mt-4">
                        <i class="fas fa-envelope"></i>
                        <h3>Email Us</h3>
                        <p>astrohub.@corporate.in</p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="icon-box mt-4">
                        <i class="fas fa-phone"></i>
                        <h3>24/7 support</h3>
                        <p>+91 994 781 1236</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <form id="contactForm">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input type="text"name="name"class="form-control"
                        id="name"placeholder="your name">
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email"name="email"class="form-control"
                        id="email"placeholder="your email">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"name="subject"
                    id="subject"placeholder="subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control"name="message"row="6"
                    placeholder="Message"></textarea>
                </div>
                <div><button type="submit" id="submit" class="btn btn-about" >Send Message</button></div>

            </form>
        </div>
    </div>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var modalContent = document.getElementById('modalContent');
            modalContent.innerHTML = '';
            formData.forEach(function(value, key) {
                modalContent.innerHTML += '<strong>' + key + ':</strong> ' + value + '<br>';
            });
            $('#myModal').modal('show');
        });
    </script>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Message Successfully Sent! Thank you for you feedback</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p id="modalContent"></p>
            </div>
        </div>
    </div>
</div>






</section> 
<section class="instagram mt-5">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section">
                <h2 style="font-size: 36px; font-weight: bolder;"><span>Instagram</span></h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-sm-12 col-md">
                <img src="https://i.postimg.cc/wBCWYSDJ/fa-6.jpg"class="img-fluid">
                <div class="icon d-flex justify-content-center">
                    <span class="icon-instagram align-self-center"></span>
                </div>
            </div>
            <!----->
            <div class="col-sm-12 col-md">
                <img src="https://i.postimg.cc/W3ZHD2sX/fa-4.jpg"class="img-fluid">
                <div class="icon d-flex justify-content-center">
                    <span class="icon-instagram align-self-center"></span>
                </div>
            </div>
            <!----->
            <div class="col-sm-12 col-md">
                <img src="https://i.postimg.cc/bNr1Lmtj/fa-3.jpg"class="img-fluid">
                <div class="icon d-flex justify-content-center">
                    <span class="icon-instagram align-self-center"></span>
                </div>
            </div>
            <!----->
            <div class="col-sm-12 col-md">
                <img src="https://i.postimg.cc/nz1qS52n/fa-5.jpg"class="img-fluid">
                <div class="icon d-flex justify-content-center">
                    <span class="icon-instagram align-self-center"></span>
                </div>
            </div>
            <!----->
            <div class="col-sm-12 col-md">
                <img src="https://i.postimg.cc/wBCWYSDJ/fa-6.jpg"class="img-fluid">
                <div class="icon d-flex justify-content-center">
                    <span class="icon-instagram align-self-center"></span>
                </div>
            </div>
            <!----->
        </div>

    </div>
</section>
<!---->
<footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our News Letter</h4>
                    <p>Stay Inspired: Subscribe to Our Newsletter Today!</p>
                    <form>
                        <input type="email"name="email">
                        <input type="submit"value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
  <div class="container py-4">
      <div class="copyright">
          &copy;Copyright<strong><span> Travelopedia</span></strong>
             All Rights Reserved
      </div>
      <div class="credits">
          Designed by<a href="#"> Sebastian Jose</a>
      </div>
  </div>
</footer>



















    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>