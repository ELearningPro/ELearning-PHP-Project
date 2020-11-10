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
    <title>Courses</title>
</head>

<body class="vh-100">
    <?php include("header.php") ?>
    <div class="row mx-0" style="height: inherit;">
        <?php include("sidebar.php") ?>
        <div class="col-9 p-3">
            <h3 class="my-2 py-2 text-center shadow-sm border">Courses Details</h3>
            <table style="width:100%" class="p-2 shadow-lg table table-responsive-md table-hover table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Course Name</th>
                        <th>Course Author</th>
                        <th>Selling Price</th>
                        <th>Original Price</th>
                    </tr>
                </thead>
                <tbody id="courses">

                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    let data = '';
    const requestToServer = new XMLHttpRequest();
    requestToServer.open("GET", "getCourses.php", true)
    requestToServer.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    requestToServer.onreadystatechange = function() {
        data = JSON.parse(this.responseText);
        let table = document.getElementById("courses");
        let row = '';
        data.map((cur, index) => {
            row += `<tr><td>${index+1}</td>`;
            for (key in cur) {
                row += `<td>${cur[key]}</td>`;
            }
            row += "</tr>";
        });
        table.innerHTML = row;
    };
    if (!data)
        requestToServer.send();
</script>

</html>