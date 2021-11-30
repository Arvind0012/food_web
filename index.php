<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- additional css file -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive-style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Hello, world!</title>
</head>

<body>
    <!-- header design -->
    <header>
        <nav class="navbar navbar-expand-lg navigation-wrap">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#explore-food">Explore Foods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#testimonial">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#faq">FAQ</a>
                        </li>

                        <li><button class="main-btn">1200.00.789</button></li>
                    </ul>
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <button class="main-btn" type="" href="login.php">Login</button>
                </div>
            </div>
        </nav>
    </header>

    <!-- section 1 top banner -->
    <section id="home">
        <div class="container-fluid px-0 top-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <h1>Good Food Choices are Good Investment</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, quia!</p>
                        <div class="mt-4">
                            <button class="main-btn">Order now <i class="fas fa-basket-shopping ps-3"></i></button>
                            <button class="white-btn ms-lg-4 mt-lg-0 mt-4">Order now <i
                                    class="fas fa-angle-right ps-3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  section 2 counter  -->

    <section id="counter">
        <section class="counter-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h2>
                            <span id="count1"></span>+
                        </h2>
                        <p>SAVINGS</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h2>
                            <span id="count2"></span>+
                        </h2>
                        <p>PHOTOS</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h2>
                            <span id="count3"></span>+
                        </h2>
                        <p>ROCKETS</p>
                    </div>
                    <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
                        <h2>
                            <span id="count4"></span>+
                        </h2>
                        <p>GLOBES</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- section 3 about  -->
    <section id="about">
        <div class="about-section wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
                        <div class="card border-0">
                            <img src="images/img/img-1.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 text-sec">
                        <h2>We pride ourselves in making real food from the best ingradients.</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In consequatur harum
                            exercitationem,delectus eius quam sint suscipit eveniet voluptates error.</p>
                        <button class="main-btn mt-4">Learn More</button>
                    </div>
                </div>
            </div>
            <!-- food type -->
            <div class="container food-type">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
                        <h2>We Make everything by hand with the best possible ingradients</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, vero voluptatibus! Inventore
                            quibusdam et fugit, alias perspiciatis dignissimos incidunt tempora voluptatum eum qui
                            suscipit quae.</p>
                        <ul class="list-unstyled py-3">
                            <li>Etian</li>
                            <li>Etian</li>
                            <li>Etian</li>
                            <li>Etian</li>
                            <!-- <i class="fa-solid fa-check">
                                
                            </i> -->
                        </ul>
                        <button class="main-btn mt-4">Learn More</button>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="img-fluid card border-0 rounded">
                            <img src="images/img/img-2.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 3 story -->
    <section id="story">
        <div class="story-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-content">
                            <h2>When a man's stomach is full it makes no difference whether he is rich or poor.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptatem temporibus
                                soluta quod quis voluptatibus, optio sapiente dolores. Expedita rem cupiditate officia
                                iure molestiae enim ratione qui accusamus totam ea!</p>
                            <button class="main-btn mt-3">read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 4 explore food -->
    <section id="explore-food">
        <div class="explore-food wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-content text-center">
                            <h2>explore Food</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem totam sunt vero
                                repudiandae similique, veniam dicta facere libero corporis in ipsum ipsa dolor nobis
                                inventore ex vitae unde dolorem ut, optio ab dignissimos, nesciunt beatae quia voluptas.
                                Praesentium, unde harum.</p>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                        <div class="card">
                            <img src="images/img/img-3.jpg" class="img-fluid cus-img">
                            <div class="pt-3">
                                <h4>Rainbow Vegetable </h4>
                                <p>Time : 15 - 20 Minutes | serves: 1</p>
                                <span>$10.50 <del>$11.70</del> </span>
                                <button class="mt-4 main-btn">Order Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                        <div class="card">
                            <img src="images/img/img-4.jpg" class="img-fluid cus-img">
                            <div class="pt-3">
                                <h4>Rainbow Vegetable </h4>
                                <p>Time : 15 - 20 Minutes | serves: 1</p>
                                <span>$10.50 <del>$11.70</del> </span>
                                <button class="mt-4 main-btn">Order Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                        <div class="card">
                            <img src="images/img/img-5.jpg" class="img-fluid cus-img">
                            <div class="pt-3">
                                <h4>Rainbow Vegetable</h4>
                                <p>Time : 15 - 20 Minutes | serves: 1</p>
                                <span>$10.50 <del>$11.70</del> </span>
                                <button class="mt-4 main-btn">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 5 Review or Testimonial -->
    <!-- Incomplete -->
    <section id="testimonial">
        <div class="wrapper testimonial-section">
            <div class="container text-center">
                <div class="text-center pb-4">
                    <h2>testimonial</h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-10 offset-lg-1">
                        <!-- carousel -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <img src="images/review/review-1.jpg" alt="...">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident facere in
                                            vitae nobis dolorem amet harum asperiores. Maxime, nisi assumenda.</p>
                                        <h5>Kumar</h5>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <img src="images/review/review-2.jpg" alt="...">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, ipsum
                                            libero.
                                            Nesciunt officia, suscipit explicabo obcaecati iste reiciendis excepturi
                                            inventore.</p>
                                        <h5>Rana</h5>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <img src="images/review/review-1.jpg" alt="...">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quas laborum
                                            iure
                                            nihil ad commodi quam laudantium. Aliquid, distinctio eaque!</p>
                                        <h5>Arvind</h5>
                                    </div>

                                </div>
                            </div>
                            <!-- <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 6 FAQ -->
    <section id="faq">
        <div class="faq wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center pb-4">
                            <h2>Frequently Asked Question</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Is foodies Bread really baked fresh each day?</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod architecto delectus
                            reprehenderit suscipit hic ratione!</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Is foodies Bread really baked fresh each day?</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod architecto delectus
                            reprehenderit suscipit hic ratione!</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Is foodies Bread really baked fresh each day?</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod architecto delectus
                            reprehenderit suscipit hic ratione!</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>Is foodies Bread really baked fresh each day?</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod architecto delectus
                            reprehenderit suscipit hic ratione!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sectio 7 book-food -->
    <section id="book-food">
        <div class="book-food">
            <div class="container book-food-text">
                <div class="row text-center">
                    <div class="col-lg-9 col-md-12">
                        <h2>Baked Fresh daily bakers with passion.</h2>
                    </div>
                    <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
                        <button class="main-btn">Learn More</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- section 8 newsletter -->
    <section id="newsletter">
        <div class="newsletter wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-content text-center pb-4">
                            <h2>Hurry Up! Subscribe Our newsletter
                                and gets 25% Off
                            </h2>
                            <p>Limited time Offer for this month. No credit card required.</p>
                        </div>
                        <form class="newsletter">
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <input class="form-control" placeholder="Email Address here" name="email"
                                        type="email">
                                </div>
                                <div class="col-md-4 col-12">
                                    <button class="main-btn" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 9 footer -->
    <footer id="footer">
        <div class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="#" class="footer-link">Register</a>
                        <a href="#" class="footer-link">Forum</a>
                        <a href="#" class="footer-link">Affiliate</a>
                        <a href="#" class="footer-link">FAQ</a>
                        <div class="footer-social pt-4 text-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-dribble"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="footer-copy">
                            <div class="copy-right text-center pt-5">
                                <p class="text-light">© 2021. Foodies. All right reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <!-- own js -->
    <script src="js/main.js"></script>
</body>

</html>