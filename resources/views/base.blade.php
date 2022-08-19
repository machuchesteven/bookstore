<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,900;1,300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>eBookStore: Buy, Pay and Get</title>
    <style>
        *{font-family: 'Lato', sans-serif;}
        .ratings i{
            color: gold;

        }
        .strike-text{
            color: red;
        }
     </style>
</head>
<body class="container-fluid">
    <div id="navigator">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">eBOOKSTORE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 m-auto mb-lg-0 justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home me-2"></i><span>Home</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-shopping-cart me-2"></i><span class="sm-hidden">Cart</span></a>
                  </li>
                </ul>
                <form class="d-flex justify-content-end my-auto">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit"><i class="fas fa-search mx-2 "></i></button>
                </form>
              </div>
            </div>
          </nav>
    </div>
  <hr />
@yield('main')

<div class="w-100 bg-light">

    <h3 class="text-center">
        More Resources From Us
    </h3>
    <div class="row my-md-5">

        <div class="col-lg-3 col-md-4 col-sm-6">
            <h4>eBOOKSTORE</h4>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <h5>Other Products</h5>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <h5>Our Partners</h5>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
            <h5>Find Us on Social Media</h5>
        </div>
    </div>
</div>


</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>