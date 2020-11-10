<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .hoverable {
            color: #ffc107;
            font-size: 20px;
            font-weight: 600;
            cursor: pointer;
            border-bottom: 1px solid #ffc107;
        }

        .selected {
            color: white;
            background: lightgray;
            border-right: 5px solid #ffc107;
        }

        .hoverable:hover {
            border-right: 5px solid #ffc107;
            background: lightgray;
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="col-3 px-0 bg-light shadow-lg">
        <div>
            <div class="px-3 py-2 selected hoverable">Dashboard</div>
            <div class="px-3 py-2 hoverable">Courese</div>
            <div class="px-3 py-2 hoverable">Lessons</div>
            <div class="px-3 py-2 hoverable">Students</div>
            <div class="px-3 py-2 hoverable">Sell Reports</div>
            <div class="px-3 py-2 hoverable">Payment Status</div>
            <div class="px-3 py-2 hoverable">Feedback</div>
            <div class="px-3 py-2 hoverable">Change-Password</div>
            <div class="px-3 py-2 hoverable">Logout</div>
        </div>
    </div>
</body>

</html>