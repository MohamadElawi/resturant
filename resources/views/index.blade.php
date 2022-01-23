<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Resturant mangement system</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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
                <a href="index.html" class="navbar-brand">Res <span>turant</span></a>
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
                        <a href="{{route('login')}}" class="nav-item nav-link">Log in </a>
                        <a href="{{route('register')}}" class="nav-item nav-link">SignUp</a>
                        <a href="{{route('Maels.drinks')}}" class="nav-item nav-link">Request food</a>
                        <a href="{{route('Contact.resturant')}}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            
            <div class="container-fluid">
                
                <div class="owl-carousel">
                    
                    
                    
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Resturant <span> Menagement</span> </h1>
                            <p>
                                Our website to menagement resturant and provid Excelant service
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">View Menu</a>
                                @if (Session::has('booking'))  
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('booking')}}
                                </div>
                             @endif 
                                    
                               
                                @if(Auth::check())
                                
                                <form  action="booking"method="POST" >
                                    @csrf
                                    <a class="btn custom-btn"> 
                                       Booking
                                       <select name="book">
                                         <optgroup label="book:">
                
                                          <option name="yes" value="yes">yes</option>
                                           <option name="no" value="no">no</option>
                
                                              </optgroup>
                
                
                                     </select>
                
                                    <button type="booking" > Book</button>
                                </a>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>World’s <span>Best</span> Chef</h1>
                            <p>
                              world's Best is a primary reason to choose our resturantr
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">View Menu</a>
                                @if(Auth::check())
                                
                                <form  action="booking"method="POST" >
                                    @csrf
                                    <a class="btn custom-btn"> 
                                       Booking
                                       <select name="book">
                                         <optgroup label="book:">
                
                                          <option name="yes" value="yes">yes</option>
                                           <option name="no" value="no">no</option>
                
                                              </optgroup>
                
                
                                     </select>
                
                                    <button type="booking" > Book</button>
                                </a>
                                    </form>
                               
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Best <span>Quality</span></h1>
                            <p>
                                Best Quality is a primary reason to choose our resturant
                            </p>
                            <div class="carousel-btn">

                                <a class="btn custom-btn" href="">View Menu</a>
                                @if(Auth::check())
                              
                                
                <form  action="booking"method="POST" >
                    @csrf
                    <a class="btn custom-btn"> 
                       Booking
                       <select name="book">
                         <optgroup label="book:">

                          <option name="yes" value="yes">yes</option>
                           <option name="no" value="no">no</option>

                              </optgroup>


                     </select>

                    <button type="booking" > Book</button>
                </a>
                    </form>
                                
                                @endif
                               
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        
        
        
       
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                   
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                            
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-6">
                        <div class="about-content">
                            
                            
                            <div class="section-header">
                                <p>About Us</p>
                                <h2>Cooking Since 1990</h2>
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
                    
                    
                </div>
            </div>
        </div>
        <!-- About End -->
        
        

        
        
        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                       
                        
                        
                        <div class="section-header">
                            <p>Why Choose Us</p>
                            <h2>Our Key Features</h2>
                        </div>
                        
                        
                        
                        <div class="feature-text">
                            
                            
                            <div class="feature-img">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="img/feature-1.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-2.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-3.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-4.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <p>
                               World’s best Chef and Natural ingredients and Best quality products and Ground beef & Low fat and Fastest  services
                                
                            </p>
                            
                            <a class="btn custom-btn" href="">Book A Table</a>
                            
                            
                        </div>
                        
                    </div>
                    
                    
                    
                    <div class="col-lg-7">
                      
                        
                        
                        <div class="row">
                            
                            
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-cooking"></i>
                                    <h3>World’s best Chef</h3>
                                    <p>
                                       World’s best Chef in our resturant
                                    </p>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-vegetable"></i>
                                    <h3>Natural ingredients</h3>
                                    <p>
                                       Natural ingredients in our resturant
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-medal"></i>
                                    <h3>Best quality products</h3>
                                    <p>
                                      Best quality products in our resturant
                                    </p>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-meat"></i>
                                    <h3>Fresh vegetables & Meet</h3>
                                    <p>
                                        Fresh vegetables and Meet in our resturant
                                    </p>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        
                        <div class="row">
                            
                            
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>Fastest  services</h3>
                                    <p>
                                        Fastest  services in our resturant
                                    </p>
                                </div>
                            </div>
                            
                            
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-fruits-and-vegetables"></i>
                                    <h3>Ground beef & Low fat</h3>
                                    <p>
                                        Ground beef and Low fat in our resturant
                                    </p>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        
        <!-- sign up start -->
         <div class="Singup">
            <div class="container">
            
                          <div class="test">  
   
                              <link rel="stylesheet" href="style.css">
                      <img src="img/IMG-20210823-WA0000.jpg" alt="the photo is not found">
<h1>
    <em>
                       
 
    </em>
 </h1>

<form >
<label > 
    <b>username </b>
</label>
<input type="text" placeholder="enter your user name"  required name="username" >
<br>
</form>
</div>
<form class="test1">
    <label>
        <b>
            password
        </b>
    </label>
<input type="password" placeholder="enter yourpassword" required name="password">
</form>
<br>
<form class="test2">
    <label>
        <b>
            email
        </b>
    </label> 
<input type="email" placeholder="enter your email" required name="email">
</form>
<br>
<form class="test5">
    <label> 
        <b>number of the person</b> </label>
    <input type="number"  placeholder="enter your number" name="number" min="2"  max="20">
</form>

<br>
<form class="test4">
  
    <input type="submit" value="save">
</form>
<br>
                    </div>
                </div>
             
        
        
        <!-- sign up End -->
        
        
        
        
        <!-- Food Start -->
        <div class="food">
            <div class="container">
                <div class="row align-items-center">
                 
                    
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-food"></i>
                            <h2>Food</h2>
                            <p>
                                 our Resturant have alot of perfect Food in his menu 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-snack"></i>
                            <h2>Snack </h2>
                            <p>
                                 our Resturant have alot of perfect  Snacks in his menu. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-cocktail"></i>
                            <h2>Beverages</h2>
                            <p>
                                our Resturant have alot of perfect Beverages in his menu 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        <!-- Food End -->
        
        
        <!-- Menu Start -->
                <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#burgers">Foods</a>
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
                                            <img src="img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Mini cheese Burger</span> <strong>$9.00</strong></h3>
                                            <p>the perfect food in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span> fried chicken</span> <strong>$11.00</strong></h3>
                                            <p>the perfect food in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>pizza with extra Cheese</span> <strong>$13.00</strong></h3>
                                            <p>the perfect food in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>fish</span> <strong>$18.00</strong></h3>
                                            <p>the perfect food in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-burger.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Fried chicken </span> <strong>$22.00</strong></h3>
                                            <p>the perfect food in resturant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-burger-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-snack.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Corn Spicy fried </span> <strong>$15.00</strong></h3>
                                            <p>the perfect snack in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-snack.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Bread besan Toast</span> <strong>$35.00</strong></h3>
                                            <p>the perfect snack in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-snack.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Healthy soya nugget snacks</span> <strong>$20.00</strong></h3>
                                            <p>the perfect snack in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-snack.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span> burger </span> <strong>$30.00</strong></h3>
                                            <p>the perfect snack in resturant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-snack-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Orange juce</span> <strong>$7.00</strong></h3>
                                            <p>the perfect beverage in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Caffe Americano</span> <strong>$9.00</strong></h3>
                                            <p>the perfect beverage in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>milkchocolate</span> <strong>$15.00</strong></h3>
                                            <p>the perfect beverage in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Standard black coffee</span> <strong>$8.00</strong></h3>
                                            <p>the perfect beverage in resturant</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/menu-beverage.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Standard black coffee</span> <strong>$12.00</strong></h3>
                                            <p>the perfect beverage in resturant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-beverage-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        
        
        
        
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                
                
                
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2>Our Master Chef</h2>
                </div>
                
                
                
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                       
                        
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Ram Phillip</h2>
                                <p> Founder</p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Danyal Be</h2>
                                    <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Jhon Marc</h2>
                                <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Joseph Jan</h2>
                                <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <p>
                            work good in resturant and provid excellant services
                        </p>
                        <h2> Yasmeen Bro</h2>
                        <h3>Profession</h3>
                    </div>
                    
                    
                    
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <p>
                           work good in resturant and provid excellant services
                        </p>
                        <h2> Jac Mas</h2>
                        <h3>Profession</h3>
                    </div>
                    
                    
                    
                    
                    
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Image">
                        </div>
                        <p>
                            work good in resturant and provid excellant services
                        </p>
                        <h2> Melesa</h2>
                        <h3>Profession</h3>
                    </div>
                    
                    
                    
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="Image">
                        </div>
                        <p>
                           work good in resturant and provid excellant services
                        </p>
                        <h2> Goorge</h2>
                        <h3>Profession</h3>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
               
                <div class="section-header text-center">
                    <p>Contact Us</p>
                    <h2>Contact For Any Query</h2>
                </div>
                
                
                <div class="row align-items-center contact-information">
                   
                    
                    <div class="col-md-6 col-lg-3">
                        
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Address</h3>
                                <p>123 Street,Syria</p>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call Us</h3>
                                <p>+0963 *** ***</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email Us</h3>
                                <p>Res@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            
                            <div class="contact-icon">
                                <i class="fa fa-share"></i>
                            </div>
                          
                            
                            <div class="contact-text">
                                <h3>Follow Us</h3>
                                <div class="contact-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        <!-- Contact End -->


        


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
