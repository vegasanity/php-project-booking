<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V HOTEL</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>

    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        .h-font {
            font-family: "Playfair Display", serif;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .v-btn-primary-bg {
            background: #016B61;
        }

        .v-btn-primary-bg:hover {
            background: #70B2B2;
        }

        .availability-form {
            position: relative;
            margin-top: -50px;
            z-index: 2;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 0;
                padding: 0 5%;
            }
        }

    </style>
</head>
<body class="bg-light">
 <!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white px-lg-3 px-lg-2 shadow-sm sticky-top">    
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">V HOTEL</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
      </ul>
        <div class="d-flex" role="search">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
            </button>
        </div>
    </div>
  </div>
</nav>
    
<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        User Login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-dark shadow-none mb-2">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                        User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match to your ID that will be required during check-in.</span>
                    <h3>User Info</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                             <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Address Street</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Zip</label>
                               <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Country</label>
                               <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Birthdate</label>
                               <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                               <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Password</label>
                               <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                               <input type="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="text-left my-1">
                         <button type="submit" class="btn btn-dark shadow-none">
                            REGISTER
                        </button>
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>
</div>

<!-- Carousel -->
<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block"  />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block" />
      </div>
       <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block" />
      </div>
       <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block" />
      </div>
    </div>
    
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- Check availability form -->
 <div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form action="">
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Adult</label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-lg-3 mt-2">
                        <button type="submit" class="w-100 d-block btn text-white shadow-none v-btn-primary-bg">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
    });
</script>
</body>
</html>