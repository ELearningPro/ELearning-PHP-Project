<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .hoverable {
        color: #ffc107;
        font-size: 20px;
        font-weight: 600;
        background: transparent;
        cursor: pointer;
        border-bottom: 1px solid #ffc107 !important;
        outline: none !important;
    }

    .selected {
        color: white;
        background: lightgray;
        border-right: 5px solid #ffc107 !important;
    }

    .hoverable:hover {
        border-right: 5px solid #ffc107 !important;
        background: lightgray;
        color: white !important;
    }
    </style>
</head>

<body onload="loadedSidebar()">
    <div class="col-3 px-0 bg-light shadow-lg">
        <div id="sideMenu" class="d-flex flex-column">
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)"
                name="dashboard">Dashboard</button>
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)"
                name="courses">Courese</button>
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)">Lessons</button>
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)">Students</button>
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)">Sell Reports</button>
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)">Payment Status</button>
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)">Feedback</button>
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)">Change-Password</button>
            <button class="px-3 d-block py-2 hoverable  border-0" onclick="activateLink(event)">Logout</button>
        </div>
    </div>
</body>
<script>
const baseurl = "/ELearning-Project/Admin/";
const loadedSidebar = () => {
    const path = location.pathname;

    const sideMenu = Array.prototype.slice.call(document.getElementById('sideMenu').children);
    sideMenu.map(current => {
        if (path.toLowerCase().includes(current.getAttribute("name"))) {
            current.classList.add("selected");
            // current.disabled = true;
            console.log(path)
        }
    })
}
const functions = {
    dashboard: baseurl + "dashboard.php",
    courses: baseurl + "courses",
}
const activateLink = (event) => {
    const sideMenu = Array.prototype.slice.call(document.getElementById('sideMenu').children);
    sideMenu.map(current => {
        // current.disabled = false;
        current.classList.remove("selected");
    })
    event.target.classList.add("selected")
    // event.target.disabled = true;
    location.replace(functions[event.target.getAttribute("name")]);
}
</script>

</html>