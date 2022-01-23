@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Resturant booking</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">Res <span>turant</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="{{route('about.resturant')}}" class="nav-item nav-link">About</a>
                        <a href="{{route('feature.resturant')}}" class="nav-item nav-link">Feature</a>
                        <a href="{{route('Team.resturant')}}" class="nav-item nav-link">Chef</a>
                        <a href="{{route('Menue.resturant')}}" class="nav-item nav-link">Menu</a>
                        <a href="{{route('Booking.resturant')}}" class="nav-item nav-link">Booking</a>
                        <a href="{{route('register')}}" class="nav-item nav-link">SignUp</a>
                        <a href="{{route('login')}}" class="nav-item nav-link">Log in </a>
                        <a href="{{route('Contact.resturant')}}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        
        
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Book A Table</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Booking</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        

        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                   
                    
                    <div class="col-lg-7">
                        <div class="booking-content">
                            
                            <div class="section-header">
                                <p>Book A Table</p>
                                <h2>Book Your Table For Private Dinners & Happy Hours</h2>
                            </div>
                            
                            
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                            
                            
                        </div>
                    </div>
                   
                    
                    
                    
                    
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <form>
                               
                                
                                
                                
                                
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                                
                                
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                              
                                
                                
                                
                                
                                
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Mobile" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                                
                                
                                <div class="control-group">
                                    <div class="input-group date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/>
                                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="control-group">
                                   
                                    <div class="input-group time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker"/>
                                        <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                
                                
                                <div class="control-group">
                                    <div class="input-group">
                                        <select class="custom-select form-control">
                                            <option selected>Guest</option>
                                            <option value="1">1 Guest</option>
                                            <option value="2">2 Guest</option>
                                            <option value="3">3 Guest</option>
                                            <option value="4">4 Guest</option>
                                            <option value="5">5 Guest</option>
                                            <option value="6">6 Guest</option>
                                            <option value="7">7 Guest</option>
                                            <option value="8">8 Guest</option>
                                            <option value="9">9 Guest</option>
                                            <option value="10">10 Guest</option>
                                        </select>
                                        
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                        </div>
                                        
                                    </div>
                                </div>
                               
                                <div>
                                    <button class="btn custom-btn" type="submit">Book Now</button>
                                </div>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
        
        
       <!--Menu Start --> 
         <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#burgers">Burgers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Snacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Beverages</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="burgers" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span> cheese Burger</span> <strong>$9.00</strong></h3>
                                            <p>The perfect food in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>fried chicken</span> <strong>$11.00</strong></h3>
                                            <p>The perfect food in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>pizza wth extra chesse</span> <strong>$13.00</strong></h3>
                                            <p>The perfect food in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>fried fish</span> <strong>$18.00</strong></h3>
                                            <p>The perfect food in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>rice and kabab</span> <strong>$22.00</strong></h3>
                                            <p>The perfect food in our resturant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="/img/menu-burger-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-snack.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Corn with chesse</span> <strong>$15.00</strong></h3>
                                            <p>The perfect snacks in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-snack.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Bread besan Toast</span> <strong>$35.00</strong></h3>
                                            <p>The perfect snacks in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-snack.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Healthy soya  snacks</span> <strong>$20.00</strong></h3>
                                            <p>The perfect snacks in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-snack.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>salad</span> <strong>$30.00</strong></h3>
                                            <p>The perfect snacks in our resturant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="/img/menu-snack-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>orange juce</span> <strong>$7.00</strong></h3>
                                            <p>The perfect beverage in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Caffe Americano</span> <strong>$9.00</strong></h3>
                                            <p>The perfect beverage in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Caramel Macchiato</span> <strong>$15.00</strong></h3>
                                            <p>The perfect beverage in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span> black coffee with milk</span> <strong>$8.00</strong></h3>
                                            <p>The perfect beverage in our resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="/img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>tea</span> <strong>$12.00</strong></h3>
                                            <p>The perfect beverage in our resturantl</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="/img/menu-beverage-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                
                                
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>123 Street,Syria</p>
                                    <p><i class="fa fa-phone-alt"></i>+0963 *** ***</p>
                                    <p><i class="fa fa-envelope"></i>Res@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
            
            
            
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
            
            
            
        </div>
        <!-- Footer End -->
        
        

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
