<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


    <title>Relax Cabs</title>
</head>

<body>
    <div class="container-fluid bg-container13">
        <div class="row">
            <div class="col-12">
                <div class="d-md-none">
                    <div class="header-container1 d-flex flex-row justify-content-between text-white mt-2">
                        <div>
                            <p><i class="fa-solid fa-phone"></i> 9876543210</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-envelope"></i> relaxcab@gmail.com</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-user"></i> Login</p>
                        </div>
                    </div>
                    <div>
                        <div class="text-center">
                            <img src="./img/logo.png" alt="logo" />
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block header-container pr-5">
                    <div class="d-flex justify-content-between align-items-center mt-2 text-white">
                        <!-- Left section (Phone & Email) -->
                        <div class="d-flex flex-row ">
                            <div class="mr-4 ml-5">
                                <p><i class="fa-solid fa-phone"></i> 98766543210</p>
                            </div>
                            <div>
                                <p><i class="fa-solid fa-envelope"></i> relaxcab@gmail.com</p>
                            </div>
                        </div>
                
                        <!-- Center section (Logo) -->
                        <div class="d-flex flex-grow-1 justify-content-center mr-5">
                            <img src="./img/logo.png" alt="logo" class="img-fluid" style="max-width: 150px;" />
                        </div>
                
                        <!-- Right section (Login) -->
                        <div class="mr-5">
                            <p><i class="fa-solid fa-user"></i> Login</p>
                        </div>
                    </div>
                </div><br/> 
                <nav class="navbar navbar-expand-lg navbar-custom m-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars navbar-toggler-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./traiff.php">Tariff</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./package.php">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <a href="./book.php" class="btn btn-custom">
                        <img src="./img/nav-logo.png" alt="Car"> Book a Ride
                    </a>
                </nav>
            </div>
            <div class="col-12 text-center mt-5 pb-5 head-todo">
                <div>
                    <p class="text-white"><span>Home</span> . Book a Ride</p>
                </div>
                <div>
                    <h1 class="text-white">Book a Ride</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5 pt-5 pb-5">
        <div class="row">
            <div class="col-12 mb-4 book-header">
                <h4>Looking for a Cab?</h4>
                <h1>Make your Booking</h1>
                <p>To book a cab, please provide the following information: your pickup location, destination, desired
                    pickup time, number of passengers, luggage size, any specific preferences like car type or child
                    seats, and your contact details. We will confirm your booking and provide you with a booking
                    reference number and driver details.</p>
            </div>
            <div class="col-12 cab-book-container  bg-container14">
                <form class="booking-form-container">
                    <h3>Select Information</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="No of Passengers">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Phone no">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-phone-volume"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pick Up Address">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-map-location-dot"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Drop Address">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Select Date">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Select Time">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Car Type</h5>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input radio-container" type="radio" name="carType" id="car1" value="any">
                                    <label class="form-check-label" for="car1">Any Type</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input radio-container" type="radio" name="carType" id="car2" value="hatchback">
                                    <label class="form-check-label" for="car2">Hatchback</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input radio-container" type="radio" name="carType" id="car3" value="sedan">
                                    <label class="form-check-label" for="car3">Sedan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input radio-container" type="radio" name="carType" id="car4" value="suv">
                                    <label class="form-check-label" for="car4">SUV</label>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Select Car Model">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa-solid fa-car"></i></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Service Type">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa-solid fa-gear"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input radio-container" id="termsCheck">
                        <label class="form-check-label" for="termsCheck">By Clicking this you agree to our Terms & Conditions</label>
                    </div><br/>
                    
                    <button type="submit" class="btn cab-book-btn">Book Cab Now</button>
                </form>
            </div>
        </div>
    </div>

    


    <!-- Footer -->

    <?php include('./include/footer.php')?>

    <!-- End Footer -->






    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>