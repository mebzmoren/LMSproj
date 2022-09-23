<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Main Style -->
    <link href="./style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/images/logos.jpg">
    <!-- Open Sans for body font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  </head>
<body>  




  <!-- Start header section --> 
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="assets/images/lib.jpg" alt="img" style="width: 100%; height: 880px;">
      <div class="overlay">
        <div class="header-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">

                  <div class="logo-area">
                    
                    <!-- Header -->
                    <ul>
                      <li><a class="logo"><img alt="a" style="width: 450px; margin-left: -70px; margin-top: -20px;" ></a></li>
                      <li><a href="{{ route('login') }}" style="margin-top: 100px; float: left;  background-color: white;">Login</a></li>
                      <li><a href="{{ route('register') }}" style="margin-top: 100px; float: left;  background-color: white;">Register</a></li>
                    </ul>  
                  </div>
                  <!-- End Header -->            
           
              </div>
              <div class="col-md-12">
                <div class="header-bottom">
                <div class="row">
                  <div class="col-md-10 col-sm-10">
                    <div class="header-bottom-left" style="margin-top: -20px;">
                      <h1>Library Management System</h1>
                      <p class="parag">This Web Application are designed to manage the movement of books and maintain its records in a library.
                      The system requirement in library management focuses on the Logging, Viewing, Updating and Deleting of Books.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="header-bottom-right">
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </header>
  <!-- End header section --> 



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

  </body>
</html>