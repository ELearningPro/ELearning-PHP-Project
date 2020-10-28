<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    #server_alert {
        transform: translateX(-190px);
        transition: 0.4s all;
        animation: alertCome 2s ease-out;
        top: 0;
        z-index: 1000000 !important;
    }

    @keyframes alertCome {
        0% {
            transform: translateX(-190px);
        }

        40% {
            transform: translateX(5px);
        }

        100% {
            transform: translateX(-190px);
        }
    }
    </style>
</head>

<body>
    <?php
    // Database Connection
    $isConnectToDb=mysqli_connect("localhost","root","","elearning");
    
    // Check if database exists or server is no
    if($isConnectToDb){
        echo '<div id="server_alert" class="alert text-center alert-primary position-fixed" style="z-index:2" role="alert">
        Server Conected
        </div>';
    }else{
        echo '<div id="server_alert" class="alert text-center alert-danger position-fixed" style="z-index:2" role="alert">
                Server Not Conected
            </div>';
        // exit();
    }
//     echo '<script>
// setTimeout(() => {
//     document.getElementById("server_alert").classList.add("d-none")
// }, 4000)
// </script>';
?>
</body>

</html>