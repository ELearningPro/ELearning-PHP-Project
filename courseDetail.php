<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="css/all.min.css">
    <title>E-Learning Course Detail</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include('Covid19Data.php') ?>
    <div class="container-fluid">
        <?php include("header.php") ?>
        <div class="container">
            <div class="row m-0">
                <div class="col-12 text-warning text-center">
                    <h3 class="mt-4">
                        <u>Course Detail</u>
                    </h3>
                </div>
                <div class="col-12 p-4">
                    <div class="row">

                        <div class="col-6 d-flex justify-content-center" id="imgContainer">
                        </div>
                        <div class="col-6">
                            <h3 id="heading"></h3>
                            <div id="detailContainer"></div>
                        </div>
                        <div class="col-12 d-flex justify-content-end p-5">
                            <button class="btn btn-outline-warning" id="buyBtn">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php") ?>
    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script>
    const data = JSON.parse(localStorage.getItem("courseData"));
    console.log(data);
    if (data) {
        const imgContainer = document.getElementById("imgContainer");
        imgContainer.innerHTML = `<img src="assets/CoursesImage/${data.course_img}" class="img-fluid">`;
        document.getElementById("heading").innerHTML = data.course_name;
        const detailContainer = document.getElementById("detailContainer");
        detailContainer.innerHTML = data.course_desc;
        document.getElementById("buyBtn").innerText += ` RS.${data.course_price}`;
    }
</script>

</html>