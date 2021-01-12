<html>
<header>
    <title>Hiring Web Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--- datatable cdn -->
    <link rel="stylesheet" href = 'https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css'>
     <script src = 'https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js'></script>
     <script src = 'https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js'></script>
     <!-- Image icon -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
     
</header>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary" data-toggle="collapse">
  <a class="navbar-brand" href="#"> Hiring Website </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul  class="navbar-nav mr-auto" >
  <li class="nav-item">
    <a class="nav-link"  href="/">Home</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/add">Equipment</a>
      <a class="dropdown-item" href="/add1">Machine or Vehicle</a>
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Human Resources</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Tourist Guide</a>
      <a class="dropdown-item" href="#">Driver(Vehicle or Machine)</a>
      <a class="dropdown-item" href="#">Tuition Tutor</a>
      <a class="dropdown-item" href="#">Technician</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Reservation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"> Services</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="/contact">Contact Us</a>
  </li>
  </ul>
  <ul class="navbar-nav ml-auto">
  <li class="nav-item">
  <a class="nav-link" href="/login" id="myBtn">Login</a>
  </li>
  <li class="nav-item ">
  <a class="nav-link" href="/register">Register</a>
  </li>
</ul>
  </div>
</nav>
    <div>
    @yield('content')
    </div>

    <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
    <div class="row my-5 justify-content-center">
        <div class="col text-center">
            <div class="card border-0">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="mb-4">Ready to See What your team can do?</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 col">
                            <p class="small color-text">We'll show you how your team can have more meaningful conservations with your customers without heavy IT effors. </p> <button type="button" class="btn btn-primary border-0 my-4"><b>Get in Touch</b></button><br> <img src="https://i.imgur.com/pC6AgYC.jpg" class="img-fluid" width="450">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
            <div class="col-12">
                <div class="row row-2">
                    <div class="col-sm-3 text-md-center">
                        <h5><span> <i class="fa fa-firefox text-light" aria-hidden="true"></i></span><b> Stride</b></h5>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0">Platform</li>
                            <li>Help Center</li>
                            <li>Security</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0">Customers</li>
                            <li>Use Cases</li>
                            <li>Customers Services</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0">Company</li>
                            <li>About</li>
                            <li>Careers- <span class="Careers">We're-hiring</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2">
            <div class="col-12">
                <div class="row my-4 row-1 no-gutters">
                    <div class="col-sm-3 col-auto text-center"><small>&#9400; Stride Softwere</small></div>
                    <div class="col-md-3 col-auto "></div>
                    <div class="col-md-3 col-auto"></div>
                    <div class="col my-auto text-md-left text-right "> <small> hello@getstride.com <span><img src="https://i.imgur.com/TtB6MDc.png" class="img-fluid " width="25"></span> <span><img src="https://i.imgur.com/N90KDYM.png" class="img-fluid " width="25"></span></small> </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</htmL>