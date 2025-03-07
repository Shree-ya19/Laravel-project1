<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <title>Document</title>
</head>

<body>
                      <!----------------------------------------NavBar-------------------------->
<!--navbar1 start--------------------------------------------------->
<!---header----------------------->
<nav class="navbar navbar-expand-lg bg-light ">
    <div class="container-fluid">
        <i class=' phone bx bxs-phone mt-1'></i>
        <a class="nav-link disabled text-dark need" aria-disabled="true"> Need help? Call us:</a>

        <a class="num fx-6" href="#">+1 (234) 567-890</a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class=" nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        EN
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Nepali</a></li>
                        <li><a class="dropdown-item" href="#">Hindi</a></li>


                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="drop nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        NRs
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">$ USD</a></li>
                        <li><a class="dropdown-item" href="#">INR</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar1 end---------------------------------------------->

<!--navbar2 start--------------------------------------------------->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand estore  " href="#">eStore</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    </ul>
    <div class="d-flex" role="search">
    <input class="search rounded-pill form-control me-2" type="search" placeholder="Search for products" aria-label="Search">
    <button class="button btn btn-primary rounded-pill " type="submit"><i class='bx bx-search mx-1'></i></button>
    </div>
    <div class="box ">
    <i class='bx bx-user'></i>
    <i class='bx bx-heart' ></i>
    <i class='bx bx-cart'></i>
</div>
</div>
</div>
</nav>
<!-- navbar2 end---------------------------------------------->

<!---navbar3 start-------------------------------------------->

<nav class="navbar1 navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="home nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav nav-link active" aria-current="page" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav nav-link active" aria-current="page" href="#">Product Details</a>
        </li>
        <li class="nav-item">
          <a class="nav nav-link active" aria-current="page" href="#">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav nav-link active" aria-current="page" href="#">Checkout</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Dropdown1</a></li>
            <li><a class="dropdown-item" href="#">Dropdown2</a></li>
            <li><a class="dropdown-item" href="#">Dropdown3</a></li>
            <li><a class="dropdown-item" href="#">Dropdown4</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Megamenu1
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Megamenu2
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
        <a class="nav nav-link active" aria-current="page" href="#">Contact</a>
      </ul>
      
    </div>
  </div>
</nav>
<!---navbar3 end-------------------------------------------->

<!--body start-------------------------------------------------------------------------------->
<div class="body">
<div class="container ">
<div class="row">
  <div class="col-md-6">
    <p class="new rounded-pill text-center">New Collection 2025</p>
    <h1 class="discover">Discover Stylish <br><span class="fashion">Fashion</span> For Every<br> Season</h1>
    <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nemo reprehenderit ipsam magni laborum blanditiis totam atque excepturi laudantium rem explicabo tempore sit tenetur quo, quam doloribus officia commodi! Quae.
      <div class="row mt-4">
        <div class="col md 3">
        <a class="btn btn-primary shop" href="#" role="button">Shop Now <i class='bx bx-right-arrow-alt arrow'></i></a>
        <a class="btn  view" href="#" role="button">View Collection</a>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col md 3">
          <p class="free"> <i class="bi bi-truck bi1"></i> Free Shipping</p>
        </div>
        <div class="col md 3">
          <p class="free"><i class="bi bi-shield-check bi2"></i>Secure payment</p>
        </div>
        <div class="col md 2">
          <p class="free"><i class="bi bi-arrow-repeat bi3"></i>Easy returns</p>
        </div>
      </div>
  </div>
  <div class="col-md-6">
    <img src="assets/img/girl.webp"class="girl">
  </div>
</div>
</div>

<!---part2------------------------------------------------------------------------------------------->
<div class="container-fluid part2">
  <div class="row row1">
    <div class="col-md-3">
    <h2><i class="bi bi-truck set"></i></h2>
    <h6 class="para1">Free Shipping</h6>
    <p class="para">Nulla sit morbi vestibulum eros duis amet, consectetur vitae lacus. Ut quis tempor felis sed nunc viverra.<p>
    </div>
    <div class="col-md-3">
    <h2><i class="bi bi-piggy-bank set"></i></h2>
    <h6 class="money">Money Back Guarantee</h6>
    <p class="para">Nulla sit morbi vestibulum eros duis amet, consectetur vitae lacus. Ut quis tempor felis sed nunc viverra.<p>
    </div>
    <div class="col-md-3">
    <h2><i class="bi bi-percent set"></i></i></h2>
    <h6 class="para1">Discount Offers</h6>
    <p class="para">Nulla sit morbi vestibulum eros duis amet, consectetur vitae lacus. Ut quis tempor felis sed nunc viverra.<p>
    </div>
    <div class="col-md-3">
    <h2><i class="bi bi-headset set"></i></i></h2>
    <h6 class="para1">24/7 Support</h6>
    <p class="para">Nulla sit morbi vestibulum eros duis amet, consectetur vitae lacus. Ut quis tempor felis sed nunc viverra.<p>
    </div>
  </div>
</div>
<!--Slide 1 start-------------------------------------------------------------------------------------------->
<div class="slide container">
<div class="row">
<div class="col-md-2">
<div class="card">
  <img src="assets\img\hood.webp" class="card-img-top" alt="...">
  <div class="card-body">
  <a class="card1" href="#">Hood</a>
  <p class="pro">12 products</p>
  </div>
</div>
</div>
<div class="col-md-2">
<div class="card">
  <img src="assets\img\product1.webp" class="card-img-top" alt="...">
  <div class="card-body">
  <a class="card1" href="#">Jack</a>
  <p class="pro">11 products</p>
  </div>
  </div>
  </div>
<div class="col-md-2">
<div class="card">
  <img src="assets\img\product2.webp" class="card-img-top" alt="...">
  <div class="card-body">
  <a class="card1" href="#">Bags</a>
  <p class="pro">5 products</p>
  </div>
</div>
</div>
<div class="col-md-2">
<div class="card">
  <img src="assets\img\hoody.webp" class="card-img-top" alt="...">
  <div class="card-body">
  <a class="card1" href="#">Converser</a>
  <p class="pro">8 products</p>
  </div>
</div>
</div>
<div class="col-md-2">
<div class="card">
  <img src="assets\img\shoes2.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <a class="card1" href="#">Sport</a>
    <p class="pro">3 products</p>
  </div>
</div>
</div>
<div class="col-md-2">
<div class="card">
  <img src="assets\img\goog.webp" class="card-img-top" alt="...">
  <div class="card-body">
  <a class="card1 " href="#">Googs</a>
  <p class="pro">19 products</p>
  </div>
</div>
</div>
</div>
</div>


<!--------------------------extra------------------------------------->


<!--------------------------extraends------------------------------------->




<!----JOIN OUR LETTER CONTAINER------------------------------------------------------------------------------->
<div class="container-fluid letter">
  <h2 class="join text-center">Join Our Newsletter</h2>
  <p class="subs text-center">Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals.</p>
  <div class="d-flex" role="search">
    <input class="search rounded-pill form-control em" type="search" placeholder="your email address" aria-label="Search">
    <button class="embtn btn btn-primary rounded-pill " type="submit">Subscribe</i></button>
    </div>
</div>
  
  <!--last-divStart--------------------------------------------------------------------------------->
<div class="container-fluid last">
  <div class="row">
    <div class="col-md-3">
      <h3 class="es">eStore</h3>
      <p class="lo"><span class="ap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nibh vehicula, facilisis magna ut, consectetur lorem.</span></p>
    <p><i class="bi bi-geo-alt lo"></i><span class="fas">123 Fashion Street, New York, NY 10001</span></p>
    <p><i class="bi bi-telephone lo"></i><span class="fas">+1 (555) 123-4567</span></p>
    <p><i class="bi bi-envelope lo"></i><span class="fas">hello@example.com</span></p>
    </div>
    <div class="col-md-2">
      <h5 class="dh">Shop</h5>
      <a class="arrival " href="#">New Arrivals</a><br>
      <a class="arrival " href="#">Bestsellers</a><br>
      <a class="arrival " href="#">Women's Clothing</a><br>
      <a class="arrival " href="#">Men's Clothing</a><br>
      <a class="arrival " href="#">Accessories</a><br>
      <a class="arrival " href="#">Sale</a>
    </div>
    <div class="col-md-2">
      <h5 class="dh">Support</h5>
      <a class="arrival" href="#">Help Center</a><br>
      <a class="arrival " href="#">Order Status</a><br>
      <a class="arrival " href="#">Shipping Info</a><br>
      <a class="arrival " href="#">Returns & Exchnages </a><br>
      <a class="arrival " href="#">Guide</a><br>
      <a class="arrival " href="#">Contact Us</a>
    </div>
    <div class="col-md-2">
      <h5 class="dh">Company</h5>
      <a class="arrival " href="#">About Us</a><br>
      <a class="arrival " href="#">Careers</a><br>
      <a class="arrival " href="#">Press</a><br>
      <a class="arrival " href="#">Affiliates</a><br>
      <a class="arrival " href="#">Responsibility</a><br>
      <a class="arrival " href="#">Investors</a>
    </div>
    <div class="col-md-3">
    <h5 class="dh">Download Our App</h5>
    <p class="ap">Shop on the go with our mobile app</p>
    <div class="row">
    <div class="col-md-6">
    <a href="#" class="btn  gbtn" tabindex="-1" role="button" aria-disabled="true"><i class="bi bi-apple gbi"></i><span class="ap">Apple Store</span></a>
    </div>
    <div class="col-md-6">
    <a href="#" class="btn  gbtn" tabindex="-1" role="button" aria-disabled="true"><i class="bi bi-google-play gbi"></i><span class="ap">Google Pay</span></a>
    </div>
    </div>
    <p class="lo">Follow Us</p>
    <div class="row">
      <div class="col-md-2">
      <a class="btn btn-primary rounded-circle fbtn" href="#" role="button"><i class="bi bi-facebook fbi"></i></a>
      </div>
      <div class="col-md-2">
      <a class="btn btn-primary rounded-circle fbtn" href="#" role="button"><i class="bi bi-instagram fbi"></i></a> 
      </div>
      <div class="col-md-2">
      <a class="btn btn-primary rounded-circle fbtn" href="#" role="button"><i class="bi bi-twitter-x fbi"></i></a>
      </div>
      <div class="col-md-2">
      <a class="btn btn-primary rounded-circle fbtn " href="#" role="button"><i class="bi bi-tiktok fbi"></i></a>
      </div>
      <div class="col-md-2">
      <a class="btn btn-primary rounded-circle fbtn" href="#" role="button"><i class="bi bi-pinterest fbi"></i></a>
      </div>
       <div class="row">
      <div class="col-md-2">
      <a class="btn btn-primary rounded-circle fbtn mt-2" href="#" role="button"><i class="bi bi-youtube fbi"></i></a>
      </div>
      </div>
    </div>
    </div>
  </div>
</div>



</div>
<!------BodyEnds------------------------------------------------------------------------------------>
<!------Footer-------------------------------------------------------------------------------------->
  <div class="footer">
    <div class="container-fluid footer1">
<h5 class="accept">We Accepts:<i class="bi bi-credit-card option">&nbsp;<i class="bi bi-paypal option"></i>&nbsp;<i class="bi bi-apple option"></i>&nbsp;<i class="bi bi-google option"></i>&nbsp;<i class="bi bi-shop option"></i>&nbsp;<i class="bi bi-cash option"></i></i></h5>
<p class="term">Terms of Service &nbsp;&nbsp;
Privacy Policy&nbsp;&nbsp;
Cookies Settings&nbsp;&nbsp;</p>
<div class="copy">
  <p class="accept1">© Copyright <b>eStore</b>. All Rights Reserved.</p>
  <p class="accept1">Design by <a class="link " href="https://bootstrapmade.com/estore-bootstrap-ecommerce-template/">BootstrapMade</a></p>
</div>
    </div>
    
  </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>