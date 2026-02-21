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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/main.css">

    <style>
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
            <button type="button" class="btn vr-btn-primary-bg me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <button type="button" class="btn vr-btn-secondary-bg" data-bs-toggle="modal" data-bs-target="#registerModal">
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
    <div class="swiper swiper-hero">
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
                        <button type="submit" class="w-100 d-block btn text-white shadow-none vr-btn-primary-bg">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>


<!-- Our Rooms -->
<div class="container our-rooms">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="vr-card card border-0 shadow">
                <img src="images/rooms/1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Room Name</h5>
                    <h6>₱ 1080 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="24px"
                                fill="#1f1f1f">
                                <path
                                    d="M80-200v-240q0-27 11-49t29-39v-112q0-50 35-85t85-35h160q23 0 43 8.5t37 23.5q17-15 37-23.5t43-8.5h160q50 0 85 35t35 85v112q18 17 29 39t11 49v240h-80v-80H160v80H80Zm440-360h240v-80q0-17-11.5-28.5T720-680H560q-17 0-28.5 11.5T520-640v80Zm-320 0h240v-80q0-17-11.5-28.5T400-680H240q-17 0-28.5 11.5T200-640v80Zm-40 200h640v-80q0-17-11.5-28.5T760-480H200q-17 0-28.5 11.5T160-440v80Zm640 0H160h640Z" />
                            </svg>
                            2 Rooms
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M397.5-250.29q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm-216-120q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29ZM288-480h384v-48q0-79.68-56.23-135.84-56.22-56.16-136-56.16Q400-720 344-663.84 288-607.68 288-528v48Zm74-72q8-42 41-69t77-27q44 0 77 27t41 69H362ZM168-96q-29.7 0-50.85-21.15Q96-138.3 96-168v-624q0-29.7 21.15-50.85Q138.3-864 168-864h624q29.7 0 50.85 21.15Q864-821.7 864-792v624q0 29.7-21.15 50.85Q821.7-96 792-96H168Zm0-72h624v-624H168v624Zm0 0v-624 624Z" />
                            </svg>
                            1 Bathroom
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M204.21-144q-15.21 0-25.71-10.35T168-180v-60q-50 0-85-35t-35-85v-168q0-50 35-85t85-35l24 2v-74q0-40 28-68t68-28h384q40 0 68 28t28 68v74l24-2q50 0 85 35t35 85v168q0 50-35 85t-85 35v60q0 15.3-10.29 25.65Q771.42-144 756.21-144t-25.71-10.35Q720-164.7 720-180v-60H240v60q0 15.3-10.29 25.65Q219.42-144 204.21-144ZM168-312h624q20.4 0 34.2-13.8Q840-339.6 840-360v-168q0-20.4-13.8-34.2Q812.4-576 792-576q-20.4 0-34.2 13.8Q744-548.4 744-528v144H216v-144q0-20.4-13.8-34.2Q188.4-576 168-576q-20.4 0-34.2 13.8Q120-548.4 120-528v168q0 20.4 13.8 34.2Q147.6-312 168-312Zm120-144h384v-72q0-17 5-35.5t19-35.5v-121q0-10.2-6.9-17.1-6.9-6.9-17.1-6.9H288q-10.2 0-17.1 6.9-6.9 6.9-6.9 17.1v121q14 17 19 35.5t5 35.5v72Zm192 0Zm0 144Zm0-72Z" />
                            </svg>
                            2 L Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M412-172q-28-28-28-68t28-68q28-28 68-28t68 28q28 28 28 68t-28 68q-28 28-68 28t-68-28ZM238-386l-68-68q62-57 140.5-89.5T480-576q91 0 169.5 32.5T790-454l-68 68q-48-44-110-69t-132-25q-70 0-132 25t-110 69ZM68-555 0-624q94-90 217-141t263-51q140 0 263 51t217 141l-68 69q-81-77-186.5-121T480-720q-120 0-225.5 44T68-555Z" />
                            </svg>
                            WIFI
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M336-144v-96H168q-29.7 0-50.85-21.16Q96-282.32 96-312.04v-432.24Q96-774 117.15-795T168-816h624q29.7 0 50.85 21.16Q864-773.68 864-743.96v432.24Q864-282 842.85-261T792-240H624v96H336ZM168-312h624v-432H168v432Zm0 0v-432 432Z" />
                            </svg>
                            TV
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M456-144q-50 0-85-35t-35-85h72q0 20 13.8 34t34.2 14q20.4 0 34.2-13.8Q504-243.6 504-264q0-20.4-13.8-34.2Q476.4-312 456-312H96v-72h360q50 0 85 35t35 85q0 50-35 85t-85 35ZM96-552v-72h540q25 0 42.5-17.5T696-684q0-25-17.5-42.5T636-744q-25 0-42.5 17.5T576-684h-72q0-55 38.5-93.5T636-816q55 0 93.5 38.5T768-684q0 55-38.5 93.5T636-552H96Zm636 312v-72q25 0 42.5-17.5T792-372q0-25-17.5-42.5T731.95-432H96v-72h636q55 0 93.5 38.5T864-372q0 55-38.5 93.5T732-240Z" />
                            </svg>
                            AC
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M713-153q-5 5-11.28 7.5-6.27 2.5-14 2.5-7.72 0-14.27-3.23-6.54-3.23-11.45-8.77-38-42-56-84.42t-18-89.46q0-34.12 10-70.62Q608-436 634-502q23-54 30.5-82.05Q672-612.09 672-636q0-32-14.5-61T613-754q-5.08-5-8.04-11.67Q602-772.33 602-779q0-7 2.5-13.5t7.5-12q6-5.5 13.02-8.5 7.01-3 14.5-3 7.48 0 13.08 2.73 5.6 2.72 10.4 7.27 40.97 37.96 60.98 79.63Q744-684.7 744-638.41 744-606 734-570t-34 96q-23 54-31.5 85t-8.5 58q0 35 13.5 66t41.5 61q5 6 7.5 12.3 2.5 6.3 2.5 13.5t-2.77 13.63q-2.77 6.43-9.23 11.57Zm-185.46-1q-5.54 5-12.04 7.5-6.5 2.5-13.25 2.5t-13.5-3q-6.75-3-11.75-9-38-42-56-84.45t-18-90.03q0-34.52 9.5-71.52 9.5-37 35.5-100 22-54 30-82.25t8-52.73q0-32.02-14.5-60.52T428-754q-6-5.43-9-12.21-3-6.79-3-14.29 0-7.5 2.5-13.32 2.5-5.81 7.5-11.18 5.21-5.08 12.16-8.04 6.95-2.96 13.89-2.96 6.95 0 13.45 2.5Q472-811 477-806q42 39 61.5 80.14Q558-684.71 558-639q0 32-10 68t-34 96q-23 54-31.5 85.3-8.5 31.31-8.5 58.7 0 35 13.5 66t41.5 61q5 5 7.5 12t2.5 14q0 7-2.5 13t-8.96 11Zm-186.46 0q-5.08 5-11.58 7.5t-13.45 2.5q-6.94 0-13.89-2.96T290-155q-38-42-56-84.3-18-42.29-18-89.7 0-34 10-70.5T262-502q23-54 30.5-82t7.5-52.27Q300-668 285.5-697 271-726 241-754q-5-5-8-11.53-3-6.53-3-13.5t2.5-13.47Q235-799 240-804q5.19-6 11.68-9 6.48-3 13.4-3t13.42 2.5q6.5 2.5 12.26 7.28Q333-767 352.5-726t19.5 87.26Q372-607 362-571t-34 96q-23 54-31.5 85.5T288-331q0 35 13.52 66.13Q315.03-233.74 343-204q5 5.49 7.5 11.89t2.5 12.8q0 7.31-3 13.81-3 6.5-8.92 11.5Z" />
                            </svg>
                            Heater
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge shadow-sm rounded-fill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex flex-md-row flex-column gap-2 mb-4">
                        <a href="#" class="btn vr-btn-primary-bg text-white flex-fill">Book Now</a>
                        <a href="#" class="btn vr-btn-secondary-bg bt-outline flex-fill">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="vr-card card border-0 shadow">
                <img src="images/rooms/1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Room Name</h5>
                    <h6>₱ 1080 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="24px"
                                fill="#1f1f1f">
                                <path
                                    d="M80-200v-240q0-27 11-49t29-39v-112q0-50 35-85t85-35h160q23 0 43 8.5t37 23.5q17-15 37-23.5t43-8.5h160q50 0 85 35t35 85v112q18 17 29 39t11 49v240h-80v-80H160v80H80Zm440-360h240v-80q0-17-11.5-28.5T720-680H560q-17 0-28.5 11.5T520-640v80Zm-320 0h240v-80q0-17-11.5-28.5T400-680H240q-17 0-28.5 11.5T200-640v80Zm-40 200h640v-80q0-17-11.5-28.5T760-480H200q-17 0-28.5 11.5T160-440v80Zm640 0H160h640Z" />
                            </svg>
                            2 Rooms
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M397.5-250.29q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm-216-120q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29ZM288-480h384v-48q0-79.68-56.23-135.84-56.22-56.16-136-56.16Q400-720 344-663.84 288-607.68 288-528v48Zm74-72q8-42 41-69t77-27q44 0 77 27t41 69H362ZM168-96q-29.7 0-50.85-21.15Q96-138.3 96-168v-624q0-29.7 21.15-50.85Q138.3-864 168-864h624q29.7 0 50.85 21.15Q864-821.7 864-792v624q0 29.7-21.15 50.85Q821.7-96 792-96H168Zm0-72h624v-624H168v624Zm0 0v-624 624Z" />
                            </svg>
                            1 Bathroom
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M204.21-144q-15.21 0-25.71-10.35T168-180v-60q-50 0-85-35t-35-85v-168q0-50 35-85t85-35l24 2v-74q0-40 28-68t68-28h384q40 0 68 28t28 68v74l24-2q50 0 85 35t35 85v168q0 50-35 85t-85 35v60q0 15.3-10.29 25.65Q771.42-144 756.21-144t-25.71-10.35Q720-164.7 720-180v-60H240v60q0 15.3-10.29 25.65Q219.42-144 204.21-144ZM168-312h624q20.4 0 34.2-13.8Q840-339.6 840-360v-168q0-20.4-13.8-34.2Q812.4-576 792-576q-20.4 0-34.2 13.8Q744-548.4 744-528v144H216v-144q0-20.4-13.8-34.2Q188.4-576 168-576q-20.4 0-34.2 13.8Q120-548.4 120-528v168q0 20.4 13.8 34.2Q147.6-312 168-312Zm120-144h384v-72q0-17 5-35.5t19-35.5v-121q0-10.2-6.9-17.1-6.9-6.9-17.1-6.9H288q-10.2 0-17.1 6.9-6.9 6.9-6.9 17.1v121q14 17 19 35.5t5 35.5v72Zm192 0Zm0 144Zm0-72Z" />
                            </svg>
                            2 L Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M412-172q-28-28-28-68t28-68q28-28 68-28t68 28q28 28 28 68t-28 68q-28 28-68 28t-68-28ZM238-386l-68-68q62-57 140.5-89.5T480-576q91 0 169.5 32.5T790-454l-68 68q-48-44-110-69t-132-25q-70 0-132 25t-110 69ZM68-555 0-624q94-90 217-141t263-51q140 0 263 51t217 141l-68 69q-81-77-186.5-121T480-720q-120 0-225.5 44T68-555Z" />
                            </svg>
                            WIFI
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M336-144v-96H168q-29.7 0-50.85-21.16Q96-282.32 96-312.04v-432.24Q96-774 117.15-795T168-816h624q29.7 0 50.85 21.16Q864-773.68 864-743.96v432.24Q864-282 842.85-261T792-240H624v96H336ZM168-312h624v-432H168v432Zm0 0v-432 432Z" />
                            </svg>
                            TV
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M456-144q-50 0-85-35t-35-85h72q0 20 13.8 34t34.2 14q20.4 0 34.2-13.8Q504-243.6 504-264q0-20.4-13.8-34.2Q476.4-312 456-312H96v-72h360q50 0 85 35t35 85q0 50-35 85t-85 35ZM96-552v-72h540q25 0 42.5-17.5T696-684q0-25-17.5-42.5T636-744q-25 0-42.5 17.5T576-684h-72q0-55 38.5-93.5T636-816q55 0 93.5 38.5T768-684q0 55-38.5 93.5T636-552H96Zm636 312v-72q25 0 42.5-17.5T792-372q0-25-17.5-42.5T731.95-432H96v-72h636q55 0 93.5 38.5T864-372q0 55-38.5 93.5T732-240Z" />
                            </svg>
                            AC
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M713-153q-5 5-11.28 7.5-6.27 2.5-14 2.5-7.72 0-14.27-3.23-6.54-3.23-11.45-8.77-38-42-56-84.42t-18-89.46q0-34.12 10-70.62Q608-436 634-502q23-54 30.5-82.05Q672-612.09 672-636q0-32-14.5-61T613-754q-5.08-5-8.04-11.67Q602-772.33 602-779q0-7 2.5-13.5t7.5-12q6-5.5 13.02-8.5 7.01-3 14.5-3 7.48 0 13.08 2.73 5.6 2.72 10.4 7.27 40.97 37.96 60.98 79.63Q744-684.7 744-638.41 744-606 734-570t-34 96q-23 54-31.5 85t-8.5 58q0 35 13.5 66t41.5 61q5 6 7.5 12.3 2.5 6.3 2.5 13.5t-2.77 13.63q-2.77 6.43-9.23 11.57Zm-185.46-1q-5.54 5-12.04 7.5-6.5 2.5-13.25 2.5t-13.5-3q-6.75-3-11.75-9-38-42-56-84.45t-18-90.03q0-34.52 9.5-71.52 9.5-37 35.5-100 22-54 30-82.25t8-52.73q0-32.02-14.5-60.52T428-754q-6-5.43-9-12.21-3-6.79-3-14.29 0-7.5 2.5-13.32 2.5-5.81 7.5-11.18 5.21-5.08 12.16-8.04 6.95-2.96 13.89-2.96 6.95 0 13.45 2.5Q472-811 477-806q42 39 61.5 80.14Q558-684.71 558-639q0 32-10 68t-34 96q-23 54-31.5 85.3-8.5 31.31-8.5 58.7 0 35 13.5 66t41.5 61q5 5 7.5 12t2.5 14q0 7-2.5 13t-8.96 11Zm-186.46 0q-5.08 5-11.58 7.5t-13.45 2.5q-6.94 0-13.89-2.96T290-155q-38-42-56-84.3-18-42.29-18-89.7 0-34 10-70.5T262-502q23-54 30.5-82t7.5-52.27Q300-668 285.5-697 271-726 241-754q-5-5-8-11.53-3-6.53-3-13.5t2.5-13.47Q235-799 240-804q5.19-6 11.68-9 6.48-3 13.4-3t13.42 2.5q6.5 2.5 12.26 7.28Q333-767 352.5-726t19.5 87.26Q372-607 362-571t-34 96q-23 54-31.5 85.5T288-331q0 35 13.52 66.13Q315.03-233.74 343-204q5 5.49 7.5 11.89t2.5 12.8q0 7.31-3 13.81-3 6.5-8.92 11.5Z" />
                            </svg>
                            Heater
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge shadow-sm rounded-fill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex gap-2 mb-4">
                        <a href="#" class="btn vr-btn-primary-bg text-white flex-fill">Book Now</a>
                        <a href="#" class="btn vr-btn-secondary-bg bt-outline flex-fill">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="vr-card card border-0 shadow">
                <img src="images/rooms/1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Room Name</h5>
                    <h6>₱ 1080 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="24px"
                                fill="#1f1f1f">
                                <path
                                    d="M80-200v-240q0-27 11-49t29-39v-112q0-50 35-85t85-35h160q23 0 43 8.5t37 23.5q17-15 37-23.5t43-8.5h160q50 0 85 35t35 85v112q18 17 29 39t11 49v240h-80v-80H160v80H80Zm440-360h240v-80q0-17-11.5-28.5T720-680H560q-17 0-28.5 11.5T520-640v80Zm-320 0h240v-80q0-17-11.5-28.5T400-680H240q-17 0-28.5 11.5T200-640v80Zm-40 200h640v-80q0-17-11.5-28.5T760-480H200q-17 0-28.5 11.5T160-440v80Zm640 0H160h640Z" />
                            </svg>
                            2 Rooms
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M397.5-250.29q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm-216-120q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29Zm108 0q10.5-10.29 10.5-25.5t-10.29-25.71q-10.29-10.5-25.5-10.5t-25.71 10.29q-10.5 10.29-10.5 25.5t10.29 25.71q10.29 10.5 25.5 10.5t25.71-10.29ZM288-480h384v-48q0-79.68-56.23-135.84-56.22-56.16-136-56.16Q400-720 344-663.84 288-607.68 288-528v48Zm74-72q8-42 41-69t77-27q44 0 77 27t41 69H362ZM168-96q-29.7 0-50.85-21.15Q96-138.3 96-168v-624q0-29.7 21.15-50.85Q138.3-864 168-864h624q29.7 0 50.85 21.15Q864-821.7 864-792v624q0 29.7-21.15 50.85Q821.7-96 792-96H168Zm0-72h624v-624H168v624Zm0 0v-624 624Z" />
                            </svg>
                            1 Bathroom
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M204.21-144q-15.21 0-25.71-10.35T168-180v-60q-50 0-85-35t-35-85v-168q0-50 35-85t85-35l24 2v-74q0-40 28-68t68-28h384q40 0 68 28t28 68v74l24-2q50 0 85 35t35 85v168q0 50-35 85t-85 35v60q0 15.3-10.29 25.65Q771.42-144 756.21-144t-25.71-10.35Q720-164.7 720-180v-60H240v60q0 15.3-10.29 25.65Q219.42-144 204.21-144ZM168-312h624q20.4 0 34.2-13.8Q840-339.6 840-360v-168q0-20.4-13.8-34.2Q812.4-576 792-576q-20.4 0-34.2 13.8Q744-548.4 744-528v144H216v-144q0-20.4-13.8-34.2Q188.4-576 168-576q-20.4 0-34.2 13.8Q120-548.4 120-528v168q0 20.4 13.8 34.2Q147.6-312 168-312Zm120-144h384v-72q0-17 5-35.5t19-35.5v-121q0-10.2-6.9-17.1-6.9-6.9-17.1-6.9H288q-10.2 0-17.1 6.9-6.9 6.9-6.9 17.1v121q14 17 19 35.5t5 35.5v72Zm192 0Zm0 144Zm0-72Z" />
                            </svg>
                            2 L Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M412-172q-28-28-28-68t28-68q28-28 68-28t68 28q28 28 28 68t-28 68q-28 28-68 28t-68-28ZM238-386l-68-68q62-57 140.5-89.5T480-576q91 0 169.5 32.5T790-454l-68 68q-48-44-110-69t-132-25q-70 0-132 25t-110 69ZM68-555 0-624q94-90 217-141t263-51q140 0 263 51t217 141l-68 69q-81-77-186.5-121T480-720q-120 0-225.5 44T68-555Z" />
                            </svg>
                            WIFI
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M336-144v-96H168q-29.7 0-50.85-21.16Q96-282.32 96-312.04v-432.24Q96-774 117.15-795T168-816h624q29.7 0 50.85 21.16Q864-773.68 864-743.96v432.24Q864-282 842.85-261T792-240H624v96H336ZM168-312h624v-432H168v432Zm0 0v-432 432Z" />
                            </svg>
                            TV
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M456-144q-50 0-85-35t-35-85h72q0 20 13.8 34t34.2 14q20.4 0 34.2-13.8Q504-243.6 504-264q0-20.4-13.8-34.2Q476.4-312 456-312H96v-72h360q50 0 85 35t35 85q0 50-35 85t-85 35ZM96-552v-72h540q25 0 42.5-17.5T696-684q0-25-17.5-42.5T636-744q-25 0-42.5 17.5T576-684h-72q0-55 38.5-93.5T636-816q55 0 93.5 38.5T768-684q0 55-38.5 93.5T636-552H96Zm636 312v-72q25 0 42.5-17.5T792-372q0-25-17.5-42.5T731.95-432H96v-72h636q55 0 93.5 38.5T864-372q0 55-38.5 93.5T732-240Z" />
                            </svg>
                            AC
                        </span>
                        <span
                            class="d-inline-flex align-items-center badge shadow-sm rounded-pill bg-light text-dark text-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="20px"
                                fill="#1f1f1f">
                                <path
                                    d="M713-153q-5 5-11.28 7.5-6.27 2.5-14 2.5-7.72 0-14.27-3.23-6.54-3.23-11.45-8.77-38-42-56-84.42t-18-89.46q0-34.12 10-70.62Q608-436 634-502q23-54 30.5-82.05Q672-612.09 672-636q0-32-14.5-61T613-754q-5.08-5-8.04-11.67Q602-772.33 602-779q0-7 2.5-13.5t7.5-12q6-5.5 13.02-8.5 7.01-3 14.5-3 7.48 0 13.08 2.73 5.6 2.72 10.4 7.27 40.97 37.96 60.98 79.63Q744-684.7 744-638.41 744-606 734-570t-34 96q-23 54-31.5 85t-8.5 58q0 35 13.5 66t41.5 61q5 6 7.5 12.3 2.5 6.3 2.5 13.5t-2.77 13.63q-2.77 6.43-9.23 11.57Zm-185.46-1q-5.54 5-12.04 7.5-6.5 2.5-13.25 2.5t-13.5-3q-6.75-3-11.75-9-38-42-56-84.45t-18-90.03q0-34.52 9.5-71.52 9.5-37 35.5-100 22-54 30-82.25t8-52.73q0-32.02-14.5-60.52T428-754q-6-5.43-9-12.21-3-6.79-3-14.29 0-7.5 2.5-13.32 2.5-5.81 7.5-11.18 5.21-5.08 12.16-8.04 6.95-2.96 13.89-2.96 6.95 0 13.45 2.5Q472-811 477-806q42 39 61.5 80.14Q558-684.71 558-639q0 32-10 68t-34 96q-23 54-31.5 85.3-8.5 31.31-8.5 58.7 0 35 13.5 66t41.5 61q5 5 7.5 12t2.5 14q0 7-2.5 13t-8.96 11Zm-186.46 0q-5.08 5-11.58 7.5t-13.45 2.5q-6.94 0-13.89-2.96T290-155q-38-42-56-84.3-18-42.29-18-89.7 0-34 10-70.5T262-502q23-54 30.5-82t7.5-52.27Q300-668 285.5-697 271-726 241-754q-5-5-8-11.53-3-6.53-3-13.5t2.5-13.47Q235-799 240-804q5.19-6 11.68-9 6.48-3 13.4-3t13.42 2.5q6.5 2.5 12.26 7.28Q333-767 352.5-726t19.5 87.26Q372-607 362-571t-34 96q-23 54-31.5 85.5T288-331q0 35 13.52 66.13Q315.03-233.74 343-204q5 5.49 7.5 11.89t2.5 12.8q0 7.31-3 13.81-3 6.5-8.92 11.5Z" />
                            </svg>
                            Heater
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge shadow-sm rounded-fill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex gap-2 mb-4">
                        <a href="#" class="btn vr-btn-primary-bg text-white flex-fill">Book Now</a>
                        <a href="#" class="btn vr-btn-secondary-bg bt-outline flex-fill">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn vr-btn-primary-bg text-white flex-fill">See More</a>
    </div>

</div>

<!-- Our Facilities  -->
 <div class="container our-facilities">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/1.svg" width="60px" height="60px" alt="Heater">
                <h5 class="mt-5">Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/2.svg" width="60px" height="60px" alt="Heater">
                <h5 class="mt-5">Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/4.svg" width="60px" height="60px" alt="Heater">
                <h5 class="mt-5">Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/5.svg" width="60px" height="60px" alt="Heater">
                <h5 class="mt-5">Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/6.svg" width="60px" height="60px" alt="Heater">
                <h5 class="mt-5">Heater</h5>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn vr-btn-primary-bg text-white flex-fill">See More</a>
        </div>
    </div>
</div>

<!-- Testimonials -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white p-4">
                <div class="testimony d-flex flex-column align-items-center">
                    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam deleniti error omnis, dolorem enim, a ipsa numquam cumque soluta vitae inventore voluptatem totam sed alias consequatur, quidem ea! Harum modi, odio cupiditate facere blanditiis quia velit officiis veniam. Necessitatibus aspernatur reiciendis ipsa ex neque veniam, dolorum totam minima ducimus. Enim.</p>
                    <div class="rating mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="person-name">
                        <h6>Vega R. 1</h6>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-white p-4 ">
                <div class="testimony d-flex flex-column align-items-center">
                    <p class="text-center ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam deleniti error omnis, dolorem enim, a ipsa numquam cumque soluta vitae inventore voluptatem totam sed alias consequatur, quidem ea! Harum modi, odio cupiditate facere blanditiis quia velit officiis veniam. Necessitatibus aspernatur reiciendis ipsa ex neque veniam, dolorum totam minima ducimus. Enim.</p>
                    <div class="rating mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="person-name">
                        <h6>Vega R. 2</h6>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-white p-4">
                <div class="testimony d-flex flex-column align-items-center">
                    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam deleniti error omnis, dolorem enim, a ipsa numquam cumque soluta vitae inventore voluptatem totam sed alias consequatur, quidem ea! Harum modi, odio cupiditate facere blanditiis quia velit officiis veniam. Necessitatibus aspernatur reiciendis ipsa ex neque veniam, dolorum totam minima ducimus. Enim.</p>
                    <div class="rating mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="person-name">
                        <h6>Vega R. 3</h6>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-white p-4">
                <div class="testimony d-flex flex-column align-items-center">
                    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam deleniti error omnis, dolorem enim, a ipsa numquam cumque soluta vitae inventore voluptatem totam sed alias consequatur, quidem ea! Harum modi, odio cupiditate facere blanditiis quia velit officiis veniam. Necessitatibus aspernatur reiciendis ipsa ex neque veniam, dolorum totam minima ducimus. Enim.</p>
                    <div class="rating mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="person-name">
                        <h6>Vega R. 4</h6>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-white p-4">
                <div class="testimony d-flex flex-column align-items-center">
                    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam deleniti error omnis, dolorem enim, a ipsa numquam cumque soluta vitae inventore voluptatem totam sed alias consequatur, quidem ea! Harum modi, odio cupiditate facere blanditiis quia velit officiis veniam. Necessitatibus aspernatur reiciendis ipsa ex neque veniam, dolorum totam minima ducimus. Enim.</p>
                    <div class="rating mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="person-name">
                        <h6>Vega R. 5</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>


<!-- CONTACT US -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">CONTACT US</h2>
 <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100" height="400px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30881.297416094683!2d121.08410871612062!3d14.646733744066022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b9a2777a00f9%3A0x6d36c8f429a12fc6!2sMarikina%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1771671279869!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 cold-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call Us</h5>
                <a href="tel:1234567891" class="d-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> (123) 456-789</a>
                <a href="tel:1234567891" class="d-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> (123) 456-789</a>
                <h5>Address</h5>
                <a href="#" class="d-block mb-2 text-decoration-none text-dark"><i class="bi bi-map-fill"></i> Marikina City, Metro Manila, Philippines</a>

            </div>
            <div class="bg-white p-4 rounded">
                <h5>Follow Us</h5>
                <ul class="list-unstyled d-flex gap-2 follow-us   ">
                    <li><a href="#" class="d-flex align-items-center justify-content-center bg-dark rounded-circle" style="width:40px; height:40px;"><i class="text-white bi bi-yelp"></i></a></li>
                    <li><a href="#" class="d-flex align-items-center justify-content-center bg-dark rounded-circle" style="width:40px; height:40px;"><i class="text-white bi bi-google"></i></a></li>
                    <li><a href="#" class="d-flex align-items-center justify-content-center bg-dark rounded-circle" style="width:40px; height:40px;"><i class="text-white bi bi-facebook"></i></a></li>
                    <li><a href="#" class="d-flex align-items-center justify-content-center bg-dark rounded-circle" style="width:40px; height:40px;"><i class="text-white bi bi-instagram"></i></a></li>
                </ul>
                <a href="#" class="btn vr-btn-primary-bg text-white flex-fill">Book Now</a>
            </div>
        </div>
    </div>
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-hero", {
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

    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
</script>
</body>
</html>