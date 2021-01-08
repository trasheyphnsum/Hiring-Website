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
</header>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hiring Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="/">Home</a>
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
    <a class="nav-link" href="#"> Services</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="/contact">Contact Us</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="#">Login</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="/register">Register</a>
  </li>
</ul>
  </div>
</nav>
    <div>
    @yield('content')
    </div>
</body>
</htmL>