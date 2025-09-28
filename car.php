echo $_POST["location1"];
<?php
echo "hello";
?>

<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rent Service</title>
    <link rel="stylesheet" href="/css/styel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
   
</head>

<body>
    <!-- first part start -->
    <div class="main">
        <div class="container border-bottom">
            <div class="row pt-5 ">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4 class="text-white animate__animated animate__bounce">LUXDRIVE</h4>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class=" row text-white ">
                        <div class="col-lg-4  " style="width: 0px;">
                            <span><i class="bi bi-telephone-fill"></i></span>

                        </div>
                        <div class="col-lg-8  ">

                            <p class="gun animate__bounceIn"> + 1234 5678 901 <br>
                                + 2345 6789 012</p>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-6 col-sm-12 border-start ">
                    <div class=" row text-white ">
                        <div class="col-lg-4  " style="width: 0px;">
                            <span><i class="bi bi-geo-alt-fill"></i></span>

                        </div>
                        <div class="col-lg-8 ">

                            <p class="gun1">+57 Rue Armand Carrel <br>
                                47 Rue Cavier </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Navbar start -->
        <nav class="navbar navbar-expand-sm ms-5 ">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navberr">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-start " id="navberr">
                    <ul class=" navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="">HOME</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="">PAGES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">VEHICLE FLEET</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">SHOP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- navbar end                 -->
        </nav>
        <!-- body part -->
         <div class="container-fluid">
             
                     <h1 class="text-white car  " >Need to Rent a Luxury Cars?</h1>
                     <h1 class="text-white car  ">Send A Request</h1>
                     <p class="car text-white ">Complete the form below and we'll contact you as soon as possible</p>

         </div>
        <!-- end -->
        <form action="wlc.php" method="POST">
            <select  id="" class="form bg-dark">
                <option value="" name="location1" class="">Pickup Location</option>
                <option value="">london</option>
                <option value="">USA</option>
                <option value="">CANADA</option>
            </select>
            <input type="date" name="date1" class="form ms-5">
            <input type="time" name="time1" class="form ms-5">
              <select name="location1" id="" class="form bg-dark">
                <option value="" class="">Drop Location</option>
                <option value="">london</option>
                <option value="">USA</option>
                <option value="">CANADA</option>
            </select>
            <button class=" form border border-white p-4 ms-5 ps-5 pe-5" value="submit" type="submit">Send</button>
        </form>
    </div>
    <!-- first part end -->


    <!-- car part start -->

    <div class="main1 container-fluid ">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="text-white lux ">What We Provide Is The Luxury Transport And Most Comfortable Experience</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="text-white lux1">Vivamus arcu felis bibendum ut tristique et egestas. Ultricies leo intege in
                    <br> malesuada nunc vel risus commodo. Sapien nec sagittis aliquam male <br> bibendum arcu vitae. In
                    ornare quam viverra orci sagittis eu volutpat odio <br>facilisis. Fringilla est ullamcorper eget
                    nulla facilisi nul.
                </p>

                <p  class="lux2" data-aos="zoom-in"><img src="/images/h1-icon-img-1.2.png" style="height: 50px; " class="pe-2 " alt=""> CALL
                    CENTER: +1234 5678 901</p>
            </div>
        </div>

        <div class="container-fluid p-5  ">
            <div class="row" style="padding-top: 15vw;">
                <div class="col-lg-4 col-md-6 col-sm-12 ps-2 ">
                    <img src="/images/Main-home-vehicle-list-img-01.jpg" alt="" width="100%" height="100%">

                    <div class="text-center pt-5 icon">
                        <h5 class="text-white ">Mercedes G Class</h5>
                        <span class="text-white "><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ms-0  ">
                    <img src="/images/Main-home-vehicle-list-img-02.jpg" alt="" width="100%" height="100%">

                    <div class="text-center pt-5 icon">
                        <h5 class="text-white ">Aston Martin DB11 AMR</h5>
                        <span class="text-white "><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <img src="/images/Main-home-vehicle-list-img-04.jpg" alt="" width="100%" height="100%">

                    <div class="text-center pt-5 icon">
                        <h5 class="text-white ">Roll Royce Ghost</h5>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                    </div>
                </div>
            </div>
            <div class="row cars">
                <div class="col-lg-4 col-md-6 col-sm-12 ps-2  icon">
                    <img src="/images/Main-home-vehicle-list-img-03.jpg" alt="" width="100%" height="100%">
                    <div class="text-center pt-5">
                        <h5 class="text-white ">BMW M4</h5>
                        <span class="text-white "><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <img src="/images/Main-home-vehicle-list-img-05.jpg" alt="" width="100%" height="100%">

                    <div class="text-center pt-5 icon">
                        <h5 class="text-white ">Mercedes G Class G63</h5>
                        <span class="text-white "><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="/images/Main-home-vehicle-list-img-06.jpg" alt="" width="100%" height="100%">

                    <div class="text-center pt-5 icon">
                        <h5 class="text-white ">Nissan GTR R35</h5>
                        <span class="text-white "><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                        <span class="text-white"><i class="bi bi-star-fill"></i></span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- car part end -->

                <!-- ride to Destinations start -->

    <div class="main2 container-fluid text-white">
        <div class="container border-bottom " style="height: 18vw;">
            <h1 class="ride text-white">Ride To Destinations <br>
                With Maximum Comfort</h1>
            <p class="ride2">FINEST TRANSPORT</p>
        </div>

        <div class="row mt-5" style="height: 25vw;">
            <div class="col-lg-4 col-md-6 col-sm-12 ">

            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 ">
                <h4 class="heading">No Delays</h4>
                <p class="para">Tortor condimentum lacinia quis vel eros donec <br> odio. Feugiat fermentum in posuere
                    urna. Faucibus <br> turpis in eun mi bibendum.</p>
                <h4 class="pt-5 heading">Premium Support</h4>
                <p class="para">Tortor condimentum lacinia quis vel eros donec <br> odio. Feugiat fermentum in posuere
                    urna. Faucibus <br> turpis in eun mi bibendum.</p>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 ">
                <h4 class="heading">High Quality</h4>
                <p class="para">Tortor condimentum lacinia quis vel eros donec <br> odio. Feugiat fermentum in posuere
                    urna. Faucibus <br> turpis in eun mi bibendum.</p>
                <h4 class="pt-5 heading">A Diverse Selection</h4>
                <p class="para">Tortor condimentum lacinia quis vel eros donec <br> odio. Feugiat fermentum in posuere
                    urna. Faucibus <br> turpis in eun mi bibendum.</p>
            </div>

        </div>
        <div class="container img ">
           <a href="" class="video">VIDEO</a>
        </div>
    </div>
     <!-- ride to Destinations end -->

     <div class="container-fluid main3">
        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <h1 class="text-white">We Care Of Your Safety <br>
                    And Convenience</h1>
                    <p class="driver">PREMIUM DRIVERS</p>
                    <p class="para1">Facilisi cras fermentum odio eu feugiat. In fermentum et sollicitudin <br> ac ori accumsan sit amet nulla facilisi morbi tempus iaculis urna id. <br>Aenean euismod elementum nisi quis eleifend quam adipiscing vitae <br> dipiscing.</p>
                    <button>+ BOOK NOW</button>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row w-100 mt-5   ">

                    <div class="col-lg-6  ">
                        <img src="/images/h1-img-3.jpg" width="100%"  alt="">
                    </div>
                    <div class="col-lg-6 ">
                        <img src="/images/h1-img-4.jpg" width="100%"  alt="">
                    </div>
                </div>

            </div>

        </div>

     </div>

</body>

</html>