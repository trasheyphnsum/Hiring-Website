<html>
<header>
    <title>Hiring Web Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Image icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

    <!-- Footer -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- custom javascript>-->
    <script src="{{asset('js/custom.js')}}"></script>

</header>
<body>

    <!-- Navbar-->
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Transparent Nav</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-uppercase font-weight-bold dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="/add">Equipment</a>
                        <a class="dropdown-item" href="/add1">Machine or Vehicle</a>
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Human Resources</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="/guide">Tourist Guide</a>
                        <a class="dropdown-item" href="/driver">Driver(Vehicle or Machine)</a>
                        <a class="dropdown-item" href="/tutor">Tuition Tutor</a>
                        <a class="dropdown-item" href="/tech">Technician</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="/contact" class="nav-link text-uppercase font-weight-bold">Contact us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold"> service</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-uppercase font-weight-bold dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reservation</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('list_equipment')}}">Equipment</a>
                        <a class="dropdown-item" href="{{route('list_machine')}}">Machine or Vehicle</a>
                        <a class="dropdown-item" href="#">Human Resource</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="/login" class="nav-link text-uppercase font-weight-bold">login</a></li>
                    <li class="nav-item"><a href="/register" class="nav-link text-uppercase font-weight-bold">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="pt-3 text-black">
      <header class="py-3 mt-2">
      </header>  
    </div> 

    <div id="content">
      @yield('content')
    </div> 
</div>
    <footer class="kilimanjaro_area">
        <!-- Top Footer Area Start -->
        <div class="foo_top_header_one section_padding_100_70">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>About Us</h5>
                            <p>It includes rich features & contents. It's designed & developed based on One Page/ Multi-page Layout,blog themes,world press themes and blogspot. You can use any layout from any demo anywhere.</p>
                            <p>webblogoverflow is completely creative, clean & 100% responsive website. Put your business into next level with Webublogoverflow.</p>
                        </div>
                        <div class="kilimanjaro_part m-top-15">
                            <h5>Social Links</h5>
                            <ul class="kilimanjaro_social_links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Tags Widget</h5>
                            <ul class=" kilimanjaro_widget">
                                <li><a href="#">Classy</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">One Page</a></li>
                                <li><a href="#">Multipurpose</a></li>
                                <li><a href="#">Minimal</a></li>
                                <li><a href="#">Classic</a></li>
                                <li><a href="#">Medical</a></li>
                            </ul>
                        </div>

                        <div class="kilimanjaro_part m-top-15">
                            <h5>Important Links</h5>
                            <ul class="kilimanjaro_links">
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms & Conditions</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About Licences</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Help & Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Careers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Community & Forum</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Latest News</h5>
                            <div class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
								<img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">

                                </div>
                                <a href="#">Your Blog Title Goes Here</a>
                                <p class="kilimanjaro_date">21 Jan 2018</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
								<img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                                </div>
                                <a href="#">Your Blog Title Goes Here</a>
                                <p class="kilimanjaro_date">21 Jan 2018</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
								<img class="img-fluid" src="https://3.bp.blogspot.com/--C1wpaf_S4M/W7V__10nRoI/AAAAAAAAK24/1NSfapuYSIY0f0wzXY9NgoH0FjQLT07YACKgBGAs/s1600/maxresdefault.jpg" alt="">
                                </div>
                                <a href="#">Your Blog Title Goes Here</a>
                                <p class="kilimanjaro_date">21 Jan 2018</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Quick Contact</h5>
                            <div class="kilimanjaro_single_contact_info">
                                <h5>Phone:</h5>
                                <p>+255 789 54 50 40 <br> +2255 766 90 94 00</p>
                            </div>
                            <div class="kilimanjaro_single_contact_info">
                                <h5>Email:</h5>
                                <p>support@webblogoverflow.com <br> luckmoshy@gmail.com</p>
                            </div>
                        </div>
                        <div class="kilimanjaro_part">
                            <h5>Latest Works</h5>
                            <div class="kilimanjaro_works">
                                <a class="kilimanjaro_works_img" href="img/gallery/1.jpg"><img src="img/gallery/1.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/4.jpg"><img src="img/gallery/4.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/5.jpg"><img src="img/gallery/5.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/7.jpg"><img src="img/gallery/7.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/10.jpg"><img src="img/gallery/10.jpg" alt=""></a>
                                <a class="kilimanjaro_works_img" href="img/gallery/11.jpg"><img src="img/gallery/11.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area Start -->
        <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>© All Rights Reserved by <a href="#">Webublogoverflow.blogspot -(with all love)<i class="fa fa-love"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</htmL>