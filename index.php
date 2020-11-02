<?php
session_start();
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
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <style>
    body {
        margin: 0;
        padding: 0;
    }

    b {
        display: none;
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
        /* animation: rotate-card 3s linear infinite alternate; */
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

    /* @keyframes rotate-card {
        0% {
            transform: rotate(15deg);
        }

        100% {
            transform: rotate(-15deg);
        }
    } */

    .right-fixed-btn {
        border: 1px solid orange;
        position: fixed;
        direction: revert;
        top: 50%;
        right: -120px;
        letter-spacing: 6px;
        transition: 0.4s all;
        font-weight: 900 !important;
        color: white !important;
        z-index: 999999;
        border-top-left-radius: 16px;
        border-bottom-left-radius: 16px;
        box-shadow: 3px 3px 6px #eee !important;
        outline: none !important;
    }

    .right-fixed-btn:hover {
        right: -5px !important;
    }

    .right-fixed-btn>img {
        animation: rotate-covid-image 3s linear infinite;
    }

    @keyframes rotate-covid-image {
        0% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    #coronaDataGlobal>span {
        min-width: 217px;
    }

    /*Loader*/
    #dots5 {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        height: 50px;
        width: 50px;
        margin: -25px 0 0 -25px;
    }

    #dots5 span {
        position: absolute;
        width: 10px;
        height: 10px;
        background: rgba(0, 0, 0, 0.25);
        border-radius: 50%;
        -webkit-animation: dots5 1s infinite ease-in-out;
        animation: dots5 1s infinite ease-in-out;
    }

    #dots5 span:nth-child(1) {
        left: 0px;
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }

    #dots5 span:nth-child(2) {
        left: 15px;
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;
    }

    #dots5 span:nth-child(3) {
        left: 30px;
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    #dots5 span:nth-child(4) {
        left: 45px;
        -webkit-animation-delay: 0.5s;
        animation-delay: 0.5s;
    }

    @keyframes dots5 {
        0% {
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            background: #d62d20;
        }

        25% {
            -webkit-transform: translateY(10px);
            transform: translateY(10px);
            -webkit-transform: translateY(10px);
            transform: translateY(10px);
            background: #ffa700;
        }

        50% {
            -webkit-transform: translateY(10px);
            transform: translateY(10px);
            -webkit-transform: translateY(10px);
            transform: translateY(10px);
            background: #008744;
        }

        100% {
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            background: #0057e7;
        }
    }

    @-webkit-keyframes dots5 {
        0% {
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            background: #d62d20;
        }

        25% {
            -webkit-transform: translateY(10px);
            transform: translateY(10px);
            background: #ffa700;
        }

        50% {
            -webkit-transform: translateY(10px);
            transform: translateY(10px);
            background: #008744;
        }

        100% {
            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            background: #0057e7;
        }
    }
    </style>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button"
        class="btn btn-outline-warning btn-sm right-fixed-btn d-flex align-items-center justify-content-between"
        data-toggle="modal" data-target="#coronaModal" onclick="getCoronaCases()">
        <img src="assets/images/covidIcon.png" class="img-fluid mr-2" style="height: 30px;">
        <span>Covid-19</span>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="coronaModal" tabindex="-1" role="dialog" aria-labelledby="coronaModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="coronaModalLongTitle">Covid-19</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="coronaDataGlobal" class="p-2">
                    </div>
                    <div class="d-none my-2" id="searchContainer">
                        <input class="form-control" id="searchQuery" placeholder="Search With Country Name..."
                            onkeyup="searchData()">
                    </div>
                    <table class="table table-sm d-none table-responsive table-hover" id="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country</th>
                                <th scope="col">New Confirmed</th>
                                <th scope="col">New Deaths</th>
                                <th scope="col">New Recovered</th>
                                <th scope="col">Total Confirmed</th>
                                <th scope="col">Total Deaths</th>
                                <th scope="col">Total Recovered</th>
                            </tr>
                        </thead>
                        <tbody id="allCororaDataTable">

                        </tbody>
                    </table>
                    <div class="justify-content-end d-none" id="pg">
                        <button id="pg-btn-prev" class="mx-2 btn btn-outline-primary btn-sm"
                            onclick="pagination ('-')">Prev</button>
                        <button id="pg-btn-next" class="mx-2 btn btn-outline-primary btn-sm"
                            onclick="pagination('+')">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
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
                        <?php
                       if($_SESSION['username']){
                           echo '<a class="nav-link" href="logout.php">Logout</a>';
                       }else{
                           echo '
                           <a class="nav-link" href="signup.php">Sign Up</a>
                           <a class="nav-link" href="login.php">Login</a>
                           ';
                       }
                        ?>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
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
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam
                                voluptatem
                                ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                                Delectus beatae incidunt architecto vitae consequatur.
                            </small>
                        </div>
                        <div
                            class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam
                                voluptatem
                                ipsa esse, similiqucvxchfhccvncve officia ad aperiam tempora blanditiis accusantium
                                consequuntur.
                                Delectus beatae architecto vitae consequatur.
                            </small>
                        </div>
                        <div
                            class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam
                                voluptatem
                                ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                                Delectus beatae incidunt architecto vitae consequatur.
                            </small>
                        </div>
                        <div
                            class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam
                                voluptatem
                                ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                                Delectus beatae incidunt architecto vitae consequatur.
                            </small>
                        </div>
                        <div
                            class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam
                                voluptatem
                                ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                                Delectus beatae incidunt architecto vitae consequatur.
                            </small>
                        </div>
                        <div
                            class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui unde non nam
                                voluptatem
                                ipsa esse, similique officia ad aperiam tempora blanditiis accusantium consequuntur.
                                Delectus beatae incidunt architecto vitae consequatur.
                            </small>
                        </div>
                        <div
                            class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
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
                    <div
                        class="p-3 mx-1 d-inline-flex comment-card align-items-start border bg-light text-dark shadow-lg">
                        <div class="rounded-circle border border-warning" style="width:122px;overflow:hidden">
                            <img src="assets/images/logo.png" class="float-left img-fluid">
                        </div>
                        <div class="px-3">
                            <h6>Student A.</h6>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat itaque quasi
                            totam
                            sed saepe laboriosam iste non aliquid dolorum!
                        </div>
                    </div>
                    <div
                        class="p-3 mx-1 d-inline-flex comment-card align-items-start border bg-light text-dark shadow-lg">
                        <div class="rounded-circle border border-warning" style="width:122px;overflow:hidden">
                            <img src="assets/images/logo.png" class="float-left img-fluid">
                        </div>
                        <div class="px-3">
                            <h6>Student A.</h6>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat itaque quasi
                            totam
                            sed saepe laboriosam iste non aliquid dolorum!
                        </div>
                    </div>
                    <div
                        class="p-3 mx-1 d-inline-flex comment-card align-items-start border bg-light text-dark shadow-lg">
                        <div class="rounded-circle border border-warning" style="width:122px;overflow:hidden">
                            <img src="assets/images/logo.png" class="float-left img-fluid">
                        </div>
                        <div class="px-3">
                            <h6>Student A.</h6>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat itaque quasi
                            totam
                            sed saepe laboriosam iste non aliquid dolorum!
                        </div>
                    </div>
                    <div
                        class="p-3 mx-1 d-inline-flex comment-card align-items-start border bg-light text-dark shadow-lg">
                        <div class="rounded-circle border border-warning" style="width:122px;overflow:hidden">
                            <img src="assets/images/logo.png" class="float-left img-fluid">
                        </div>
                        <div class="px-3">
                            <h6>Student A.</h6>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quaerat itaque quasi
                            totam
                            sed saepe laboriosam iste non aliquid dolorum! Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Necessitatibus quisquam dolorum aliquam omnis amet mollitia repellat porro
                            similique accusamus facere nam, distinctio iure corporis ratione, ipsam quod provident
                            doloribus
                            expedita!
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
let loadData = '';
let prev = 0,
    next = 5;
const getCoronaCases = () => {
    if (!loadData) {
        document.getElementById('coronaDataGlobal').innerHTML = `
            <div id="dots5">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>`;
        fetch('https://api.covid19api.com/summary').then(res => res.json()).then(data => {
            document.getElementById('coronaDataGlobal').innerHTML = "";
            loadData = {
                ...data
            };
            const {
                Global,
                Countries
            } = loadData;
            for (key in Global) {
                document.getElementById('coronaDataGlobal').innerHTML +=
                    `<span class='d-inline-block flex-grow-1 px-2 text-warning'>${key} : ${Global[key]} </span>`;
            }
            document.getElementById('table').classList.remove("d-none");
            document.getElementById('pg').classList.remove("d-none");
            document.getElementById('pg').classList.add("d-flex");
            document.getElementById('searchContainer').classList.remove("d-none");
            document.getElementById('searchContainer').classList.add("d-flex");
            pagination();
        });
    }
}
const pagination = (type, Countries = loadData.Countries) => {
    let prevBtn = document.getElementById('pg-btn-prev');
    let nextBtn = document.getElementById('pg-btn-next');
    if (type === "+") {
        prev += 5;
        next = prev + 5;
    } else if (type === "-") {
        prev -= 5;
        next = prev + 5;
    }
    prev <= 1 ? prevBtn.disabled = true : prevBtn.disabled = false;
    next >= loadData.Countries.length ? nextBtn.disabled = true : nextBtn.disabled = false;
    showAllData(Countries);
}
const showAllData = (Countries) => {
    let row = "";
    let index = prev;
    const col = value => {
        return `<td>${value}</td>`
    }
    Countries.slice(prev, next).map(p => {
        row += `<tr style="background:hsl(${Math.random() * 360}, 100%, 75%)">
                   ${col(index++)}
                   ${col(p.Country)}
                   ${col(p.NewConfirmed)}
                   ${col(p.NewDeaths)}
                   ${col(p.NewRecovered)}
                   ${col(p.TotalConfirmed)}
                   ${col(p.TotalDeaths)}
                   ${col(p.TotalRecovered)}
                </tr>`;
    });
    document.getElementById('allCororaDataTable').innerHTML = row;
};
const searchData = () => {
    prev = 0;
    next = 5;
    const value = document.getElementById('searchQuery').value;
    const Countries = loadData.Countries.filter(p => p.Country.toLowerCase().includes(value.toLowerCase()));
    pagination(null, Countries);
}
</script>

</html>