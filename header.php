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
                if (isset($_SESSION['userId'])) {
                    echo '<a class="nav-link" href="logout.php">Logout</a>';
                } else {
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