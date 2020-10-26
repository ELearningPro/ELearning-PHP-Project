<?php
    include("dbConfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="css/all.min.css">
    <title>E-Learning</title>
    <style>
    body {
        margin: 0;
        padding: 0;
    }

    .carousel-item>img {
        height: -webkit-fill-available;
    }

    .logo {
        width: 60px;
        height: 60px;
    }

    .card {
        min-width: 240px;
        width: 240px;
    }

    .rotate-card {
        background: linear-gradient(234deg, red, white);
        animation: rotate-card 3s linear infinite alternate;
    }

    .feedback-saction {
        overflow-x: auto;
    }

    .feedback-saction::-webkit-scrollbar {
        height: 7px;
    }

    .feedback-saction::-webkit-scrollbar-track {
        border-radius: 20px;
        box-shadow: inset 0 0 3px white;
    }

    .feedback-saction::-webkit-scrollbar-thumb {
        background: white;
        cursor: pointer;
        border-radius: 20px;
    }

    .feedback-saction::-webkit-scrollbar-thumb:hover {
        background: gray;
    }

    .comment-card {
        min-width: 350px;
    }

    @keyframes rotate-card {
        0% {
            transform: rotate(15deg);
        }

        100% {
            transform: rotate(-15deg);
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <header class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand d-inline-flex align-items-center justify-content-center" href="#">
                    <img src="assets/images/logo.png" class="img-fluid logo">
                    <span class="px-2 d-inline-flex flex-column align-items-center">
                        <span style="color:blue" class="border-bottom border-primary">
                            e<span class="text-secondary">Learning</span>
                        </span>
                    </span>
                    <span class="text-muted d-none d-sm-block" style="font-size:15px;letter-spacing:2px">- Learn &
                        Emplement</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                    </div>
                </div>
            </nav>
        </header>
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" style="height:350px">
                        <div class="carousel-item active">
                            <img src="assets/images/andy-falconer-qADcG-2qMd4-unsplash.jpg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/jeshoots-com--2vD8lIhdnw-unsplash.jpg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/john-schnobrich-2FPjlAyMQTA-unsplash.jpg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/scott-graham-5fNmWej4tAA-unsplash.jpg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/thomas-park-6MePtA9EVDA-unsplash.jpg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mx-0 py-2 bg-warning align-items-center">
            <div class="col-12 col-sm-6 col-md-3 my-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-book-open text-light"></i>
                    <span class="pl-2">100+ online courses</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 my-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-user-graduate text-light"></i>
                    <span class="pl-2">Expert Instructors</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 my-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-key text-light"></i>
                    <span class="pl-2">Lifetime Access</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 my-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-rupee-sign text-light"></i>
                    <span class="pl-2">Money back guaranty*</span>
                </div>
            </div>
        </div>
        <section class="py-3">
            <h3 class="text-center py-2">Popular Courses</h3>
            <div class="d-flex flex-wrap card-deck">
                <div class="card my-1 flex-grow-1 mx-3">
                    <div class="card-header text-center">
                        <h5 class="card-title">React Js</h5>
                    </div>
                    <img src="assets/images/react.png" class="card-img-top img-fluid" alt="card-img" />
                    <div class="card-body">
                        <small class="card-text text-muted mb-3 d-block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam voluptatem
                            ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                            Delectus beatae incidunt architecto vitae consequatur.
                        </small>
                    </div>
                    <div class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
                        <span>Price : <i class="fa fa-rupee-sign"></i> 400</span>
                        <button class="btn btn-outline-primary btn-sm">Buy</button>
                    </div>
                </div>
                <div class="card my-1 flex-grow-1 mx-3">
                    <div class="card-header text-center">
                        <h5 class="card-title">PHP</h5>
                    </div>
                    <img src="assets/images/php.jpeg" class="card-img-top img-fluid" alt="card-img" />
                    <div class="card-body">
                        <small class="card-text text-muted mb-3 d-block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam voluptatem
                            ipsa esse, similiqucvxchfhccvncve officia ad aperiam tempora blanditiis accusantium consequuntur.
                            Delectus beatae architecto vitae consequatur.
                        </small>
                    </div>
                    <div class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
                        <span>Price : <i class="fa fa-rupee-sign"></i> 400</span>
                        <button class="btn btn-outline-primary btn-sm">Buy</button>
                    </div>
                </div>
                <div class="card my-1 flex-grow-1 mx-3">
                    <div class="card-header text-center">
                        <h5 class="card-title">Python</h5>
                    </div>
                    <img src="assets/images/python.jpeg" class="card-img-top img-fluid" alt="card-img" />
                    <div class="card-body">
                        <small class="card-text text-muted mb-3 d-block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam voluptatem
                            ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                            Delectus beatae incidunt architecto vitae consequatur.
                        </small>
                    </div>
                    <div class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
                        <span>Price : <i class="fa fa-rupee-sign"></i> 400</span>
                        <button class="btn btn-outline-primary btn-sm">Buy</button>
                    </div>
                </div>
                <div class="card my-1 flex-grow-1 mx-3">
                    <div class="card-header text-center">
                        <h5 class="card-title">Angular</h5>
                    </div>
                    <img src="assets/images/angular.png" class="card-img-top img-fluid" alt="card-img" />
                    <div class="card-body">
                        <small class="card-text text-muted mb-3 d-block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam voluptatem
                            ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                            Delectus beatae incidunt architecto vitae consequatur.
                        </small>
                    </div>
                    <div class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
                        <span>Price : <i class="fa fa-rupee-sign"></i> 400</span>
                        <button class="btn btn-outline-primary btn-sm">Buy</button>
                    </div>
                </div>
                <div class="card my-1 flex-grow-1 mx-3">
                    <div class="card-header text-center">
                        <h5 class="card-title">Fasion Design</h5>
                    </div>
                    <img src="assets/images/sketch.jpeg" class="card-img-top img-fluid" alt="card-img" />
                    <div class="card-body">
                        <small class="card-text text-muted mb-3 d-block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam voluptatem
                            ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                            Delectus beatae incidunt architecto vitae consequatur.
                        </small>
                    </div>
                    <div class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
                        <span>Price : <i class="fa fa-rupee-sign"></i> 400</span>
                        <button class="btn btn-outline-primary btn-sm">Buy</button>
                    </div>
                </div>
                <div class="card my-1 flex-grow-1 mx-3">
                    <div class="card-header text-center">
                        <h5 class="card-title">VeuJs</h5>
                    </div>
                    <img src="assets/images/veujs.png" class="card-img-top img-fluid" alt="card-img" />
                    <div class="card-body">
                        <small class="card-text text-muted mb-3 d-block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam voluptatem
                            ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                            Delectus beatae incidunt architecto vitae consequatur.
                        </small>
                    </div>
                    <div class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
                        <span>Price : <i class="fa fa-rupee-sign"></i> 400</span>
                        <button class="btn btn-outline-primary btn-sm">Buy</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-3">
            <h4 class="my-4 text-center">Contact Us</h4>
            <div class="row">
                <div class="col-12 col-sm-7 d-flex flex-column align-items-end">
                    <input type="text" placeholder="Name" class="form-control my-3">
                    <input type="text" placeholder="Subject" class="form-control my-3">
                    <input type="text" placeholder="Email" class="form-control my-3">
                    <textarea placeholder="How can we help you..?" style="height:150px"
                        class="form-control my-3"></textarea>
                    <button class="btn btn-outline-primary btn-sm">Send</button>
                </div>
                <div class="col-12 col-sm-5 my-auto">
                    <div class="p-5 d-flex flex-column align-items-center shadow-lg rotate-card">
                        <h4><span class="text-primary">e</span>Learning</h4>
                        <div class="text-center">
                            eLearning is learning utilizing electronic technologies to access educational curriculm
                            outside traditional classroom.
                            <h6 class="m-0">Phone : +919574879008</h6>
                            <h6 class="m-0">www.eLearning.edu</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-3 bg-warning py-3 text-white">
            <h4 class="my-3 text-center">Student's Feedback</h4>
            <div class="d-flex flex-grow-1 feedback-saction mx-4 py-3">
                <div class="p-3 mx-1 d-inline-flex comment-card align-items-start border bg-light text-dark shadow-lg">
                    <div class="rounded-circle border border-warning" style="width:122px;overflow:hidden">
                        <img src="assets/images/logo.png" class="float-left img-fluid">
                    </div>
                    <div class="px-3">
                        <h6>Student A.</h6>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat itaque quasi totam
                        sed saepe laboriosam iste non aliquid dolorum!
                    </div>
                </div>
                <div class="p-3 mx-1 d-inline-flex comment-card align-items-start border bg-light text-dark shadow-lg">
                    <div class="rounded-circle border border-warning" style="width:122px;overflow:hidden">
                        <img src="assets/images/logo.png" class="float-left img-fluid">
                    </div>
                    <div class="px-3">
                        <h6>Student A.</h6>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat itaque quasi totam
                        sed saepe laboriosam iste non aliquid dolorum!
                    </div>
                </div>
                <div class="p-3 mx-1 d-inline-flex comment-card align-items-start border bg-light text-dark shadow-lg">
                    <div class="rounded-circle border border-warning" style="width:122px;overflow:hidden">
                        <img src="assets/images/logo.png" class="float-left img-fluid">
                    </div>
                    <div class="px-3">
                        <h6>Student A.</h6>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat itaque quasi totam
                        sed saepe laboriosam iste non aliquid dolorum!
                    </div>
                </div>
                <div class="p-3 mx-1 d-inline-flex comment-card align-items-start border bg-light text-dark shadow-lg">
                    <div class="rounded-circle border border-warning" style="width:122px;overflow:hidden">
                        <img src="assets/images/logo.png" class="float-left img-fluid">
                    </div>
                    <div class="px-3">
                        <h6>Student A.</h6>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat itaque quasi totam
                        sed saepe laboriosam iste non aliquid dolorum!
                    </div>
                </div>
            </div>
        </section>

        <footer style="background:lightgray" class="row mx-0 p-3">
            <div class="col-sm-6 col-md-6 my-3">
                <h4>About</h4>
                eLearning provides universal access to the world's best education,partnering with top universities and
                organizations to offer courses online.
            </div>
            <div class="col-sm-6 col-md-3 my-3">
                <h4>Category</h4>
                <a class="d-block" href="#">Web Development</a>
                <a class="d-block" href="#">Web Design</a>
                <a class="d-block" href="#">Android App Dev</a>
                <a class="d-block" href="#">iOS Development</a>
                <a class="d-block" href="#">Data Analysis</a>
            </div>
            <div class="col-sm-6 col-md-3 my-3">
                <h4>Contact Us</h4>
                <h6 class="m-0">Phone : +919574879008</h6>
                <h6 class="m-0">www.eLearning.edu</h6>
            </div>
        </footer>
        <div class="bg-dark text-light text-center">
            Copyright &copy; || Designed By eLearning ||
        </div>
    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script>
setTimeout(() => {
    document.getElementById("server_alert").classList.add("d-none")
}, 4000)
</script>

</html>