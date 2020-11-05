<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>eLearning-Admin Site</title>
</head>

<body>
    <section class="container">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h3 class="text-warning">
                    Welcome To <a href="/ELearning-Project/" class="text-warning"><span
                            class="text-primary">e</span>Learning</a>
                    <div>
                        Admin Side
                    </div>
                </h3>
            </div>
            <div class="col-10 col-sm-6 mt-3 mx-auto border border-warning py-3 shadow-sm">
                <h4 class="text-center my-4 ">Login</h4>
                <div class="d-flex my-3">
                    <input type="email" id="email" class="form-control text-box border-warning mx-2"
                        placeholder="Enter Your Email" required>
                </div>
                <div class="d-flex">
                    <input type="password" id="userPassword" class="form-control text-box border-warning mx-2"
                        placeholder="Password" required>
                </div>
                <div class="d-flex justify-content-end mt-4 mx-2">
                    <button type="submit" id="login" onclick="login()" class="btn-outline-warning btn-sm btn">
                        Login
                    </button>
                </div>
                <div class="position-absolute bg-dark" id="backdrop" style="opacity:0.6;top:0;left:0"></div>
            </div>
        </div>
    </section>
</body>

</html>