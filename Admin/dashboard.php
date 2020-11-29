<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>E-Learning</title>
    <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
    <style>
        .card {
            cursor: pointer;
            transition: 0.4s all;
        }

        .card:hover {
            box-shadow: 0 0 6px 3px #ccc !important;
        }
    </style>

    <title>eLearning Admin Panel</title>
</head>

<body class="vh-100">
    <?php include("header.php") ?>
    <div class="row mx-0" style="height: inherit;">
        <?php include("sidebar.php") ?>
        <div class="col-9 position-relative">
            <!-- <div id="backdrop" class="bg-light" style="opacity:0.6;top:0;left:0">
            </div>
            <div id="loader"></div> -->
            <div class="p-4 d-flex flex-wrap flex-grow-1" id="dashData">
                <div class="card m-2 shadow-lg p-5 flex-grow-1 text-center">
                    <h4>Courses</h4>
                    <h5>0</h5>
                </div>
                <div class="card m-2 shadow-lg p-5 flex-grow-1 text-center">
                    <h4>Users</h4>
                    <h5>0</h5>
                </div>
                <div class="card m-2 shadow-lg p-5 flex-grow-1 text-center">
                    <h4>Feedback</h4>
                    <h5>0</h5>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
<script>
    // const loader = () => {
    //     let backdrop = document.getElementById("backdrop");
    //     backdrop.classList.add("h-100")
    //     backdrop.classList.add("w-100")
    //     let load = document.getElementById("loader");
    //     load.innerHTML = `<div id="dots5">
    //                 <span></span>
    //                 <span></span>
    //                 <span></span>
    //                 <span></span>
    //             </div>
    //             `;
    // }
    // const closeLoader = () => {
    //     let backdrop = document.getElementById("backdrop");
    //     backdrop.classList.remove("h-100")
    //     backdrop.classList.remove("w-100")
    //     let load = document.getElementById('loader');
    //     load.innerHTML = "";
    // }
    // loader();
    const result = fetch("getDashboardInfo.php", {
        method: "GET",
    }).then(res => {
        return res.json();
    });
    result.then(res => {
        const element = document.getElementById("dashData");
        let Data = '';
        // closeLoader();
        res.map(cur => {
            Data += `<div class="card m-2 shadow-lg p-5 flex-grow-1 text-center">
                    <h4>${cur.type}</h4>
                    <h5>${cur.total}</h5>
                </div>`;
        });
        element.innerHTML = Data;
    }).catch(er => {
        console.log(er)
    })
</script>

</html>