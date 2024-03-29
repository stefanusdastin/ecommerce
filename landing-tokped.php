<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Countdown script -->
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("17 October, 2022 18:23:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = hours + ":" + minutes + ":" + seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "TIME OUT";
            }
        }, 1000);
    </script>

    <title>Tokopedia</title>
</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Tokopedia/landing-tokped.php">
                <img src="img/logo.svg" alt="Tokopedia" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/Tokopedia/landing-tokped.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For You</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category </a>
                        <ul class="dropdown-menu" style="border-radius: 20px">
                            <li><a class="dropdown-item" href="#">Handphone & Tablet</a></li>
                            <li><a class="dropdown-item" href="#">Top-up & Tagihan</a></li>
                            <li><a class="dropdown-item" href="#">Transportasi Umum</a></li>
                            <li><a class="dropdown-item" href="#">Hiburan & Event</a></li>
                            <li><a class="dropdown-item" href="#">Komputer & Laptop</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-2 mt-2">
                        <a class="nav-link disabled" href="#">
                            <h4 class="bi bi-bag-heart"></h4>
                        </a>
                    </li>
                    <li class="nav-item me-2 mt-1">
                        <a class="nav-link" href="login-page-tokped.php">
                            <button type="button" class="btn btn-outline-success">Login</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div id="jumbotron" class="container mt-md-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-md-4 me-md-5 text-center">
                <h5>Welcome, we have your goods here!</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti a nemo ut minus magni assumenda? Voluptate
                    beatae perspiciatis corporis doloribus, nobis id maiores? Deserunt incidunt provident aliquam nihil inventore
                    fuga
                    magnam, voluptatum in libero culpa vitae aut doloremque dolore labore?
                </p>
            </div>
            <div class="col-sm-4 m-4">
                <img src="img/jumbotron.png" class="justify-content-center img-fluid" style="width: 500px" alt="" />
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Selected Category -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm m-3">
                <div class="card" style="border-radius: 20px">
                    <h2 class="p-2 ms-2 mt-2 fs-4">Selected Category</h2>
                    <div class="row">
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category1.png" style="height: 20px; width: 20px" alt="" /> Handphone &
                                Tablet</a>
                        </div>
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category2.png" style="height: 20px; width: 20px" alt="" /> Top-up & Tagihan</a>
                        </div>
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category3.png" style="height: 20px; width: 20px" alt="" /> Transportasi
                                Umum</a>
                        </div>
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category4.png" style="height: 20px; width: 20px" alt="" /> Hiburan & Event</a>
                        </div>
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category6.png" style="height: 20px; width: 20px" alt="" /> Komputer &
                                Laptop</a>
                        </div>
                    </div>
                </div>
                <br />
                <hr class="border-2" style="width: auto; height: 5px; border-radius: 20px" />
            </div>
        </div>
    </div>
    <!-- Akhir Selected Category -->

    <!-- Tabel Produk -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mt-3 ms-3 mb-3 text-start">
                <h2 class="fs-3">Limited Time Offers!</h2>
            </div>
            <div class="col-sm-2 mt-3 ms-3 mb-3 fs-5 text-center text-light">
                <div class="card bg-danger" style="border-radius: 20px">
                    <a id="demo"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mb-3">
                <a href="http://localhost/Tokopedia/landing-tokped.php">
                    <div class="card" style="border-radius: 20px">
                        <img src="img/produk1.webp" class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="GHANYA Bantal UNICORN Cushion - UNICORN RANDOM" />
                        <div class="card-body">
                            <div class="card-text" style="color: black; text-decoration: none">
                                <p>GHANYA Bantal UNICORN Cushion - UNICORN...</p>
                                <b>
                                    <p>Rp90.000</p>
                                </b>
                                <b>
                                    <p class="text-danger">22% <s class="text-dark">Rp115.000</s></p>
                                </b>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><b> Jakarta Utara</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-3">
                <a href="http://localhost/Tokopedia/landing-tokped.php">
                    <div class="card" style="border-radius: 20px">
                        <img src="img/produk2.webp" class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="MINISO Krim Tangan Bunga 30mL Fruity Hand Cream Mawar Raspberry Rose - Raspberry" />
                        <div class="card-body">
                            <div class="card-text" style="color: black; text-decoration: none">
                                <p>MINISO Krim Tangan Bunga 30mL Fruity Hand Cream...</p>
                                <b>
                                    <p>Rp18.900</p>
                                </b>
                                <b>
                                    <p class="text-danger">37% <s class="text-dark">Rp29.900</s></p>
                                </b>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><b> Jakarta Utara</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-3">
                <a href="http://localhost/Tokopedia/landing-tokped.php">
                    <div class="card" style="border-radius: 20px">
                        <img src="img/produk3.webp" class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="Oral-B Sikat Gigi Toothbrush Complete Easy Clean Charcoal 3s" />
                        <div class="card-body">
                            <div class="card-text">
                                <p>Oral-B Sikat Gigi Toothbrush Complete Easy Clean...</p>
                                <b>
                                    <p>Rp16.324</p>
                                </b>
                                <b>
                                    <p class="text-danger">23% <s class="text-dark">Rp21.200</s></p>
                                </b>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><b> Solo</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-3">
                <a href="http://localhost/Tokopedia/landing-tokped.php">
                    <div class="card" style="border-radius: 20px">
                        <img src="img/produk4.webp" class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="Loyang Kue Silikon CaTalina TAHAN PANAS Pink - BAK-39C" />
                        <div class="card-body">
                            <div class="card-text">
                                <p>Loyang Kue Silikon CaTalina TAHAN PANAS Pink...</p>
                                <b>
                                    <p>Rp29.561</p>
                                </b>
                                <b>
                                    <p class="text-danger">84% <s class="text-dark">Rp187.560</s></p>
                                </b>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><b> Surabaya</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-3">
                <a href="http://localhost/Tokopedia/landing-tokped.php">
                    <div class="card" style="border-radius: 20px">
                        <img src="img/produk5.webp" class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="Mouse Wireless Logitech M221 - Silent Click" />
                        <div class="card-body">
                            <div class="card-text">
                                <p>Mouse Wireless Logitech M221 - Silent Click...</p>
                                <b>
                                    <p>Rp171.600</p>
                                </b>
                                <b>
                                    <p class="text-danger">12% <s class="text-dark">Rp195.000</s></p>
                                </b>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><b> Tangerang</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-3">
                <a href="http://localhost/Tokopedia/landing-tokped.php">
                    <div class="card" style="border-radius: 20px">
                        <img src="img/produk6.webp" class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="Vaseline Super Food Cranberry 200ml Body Lotion Skin Serum 200 ml" />
                        <div class="card-body">
                            <div class="card-text">
                                <p>Vaseline Super Food Cranberry 200ml Body...</p>
                                <b>
                                    <p>Rp28.300</p>
                                </b>
                                <b>
                                    <p class="text-danger">5% <s class="text-dark">Rp29.800</s></p>
                                </b>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><b> Bandung</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-3">
                <a href="http://localhost/Tokopedia/landing-tokped.php">
                    <div class="card" style="border-radius: 20px">
                        <img src="img/produk7.webp" class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="Kacamata Hitam Sunglasses Round Modern Style Anti UV-400 97074 - Black Leopard, Lensa Normal" />
                        <div class="card-body">
                            <div class="card-text">
                                <p>Kacamata Hitam Sunglasses Round Modern...</p>
                                <b>
                                    <p>Rp35.000</p>
                                </b>
                                <b>
                                    <p class="text-danger">73% <s class="text-dark">Rp129.900</s></p>
                                </b>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><b> Tegal</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mb-3">
                <a href="http://localhost/Tokopedia/landing-tokped.php">
                    <div class="card" style="border-radius: 20px">
                        <img src="img/produk8.webp" class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="Anlene Gold 5X Susu Bubuk Vanila 640g-Tulang, Sendi & Otot" />
                        <div class="card-body">
                            <div class="card-text">
                                <p>Anlene Gold 5X Susu Bubuk Vanila 640g...</p>
                                <b>
                                    <p>Rp82.000</p>
                                </b>
                                <b>
                                    <p class="text-danger">20% <s class="text-dark">Rp103.104</s></p>
                                </b>
                                <p class="card-text"><i class="bi bi-geo-alt"></i><b> Surabaya</b></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Akhir Tabel Produk -->

    <!-- Footer -->
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a class="navbar-brand" href="http://localhost/Tokopedia/landing-tokped.php">
                    <img src="img/logo.svg" alt="" />
                </a>
                <p class="text-muted">© 2022</p>
            </div>

            <div class="col mb-3"></div>

            <div class="col mb-3"></div>

            <div class="col mb-3">
                <h5>Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="http://localhost/Tokopedia/landing-tokped.php" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">For You</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Explore</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Category</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Others</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Helps</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contacts</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Akhir Footer -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>