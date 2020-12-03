<style>
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

    input.isInvalid,
    textarea.isInvalid {
        color: red !important;
        border-color: red !important;
    }

    input.isInvalid+span,
    textarea.isInvalid+span {
        display: block !important;
        color: red !important;
        font-size: 12px !important;
    }
</style>
<section class="py-3">
    <h3 class="text-center py-2" style="position: sticky;top: 80px;z-index: 1;background: white;">Popular Courses</h3>
    <div class="row position-relative" id="cards" style="min-height: 100px;">
    </div>
</section>

<script>
    let data = '';
    let element = document.getElementById("cards");
    const courseDetailHandler = (id) => {
        localStorage.setItem("courseData", JSON.stringify(data.find(cur=>+cur.course_id=== +id)));
        location.replace("courseDetail.php");
    }
    element.innerHTML = `  <div id="dots5">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>`;
    const requestToServer = new XMLHttpRequest();
    requestToServer.open("GET", "getCourses.php", true)
    requestToServer.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    requestToServer.onreadystatechange = function() {
        data = JSON.parse(this.responseText);
        let innerElement = '';
        if (data) {
            data.map(cur => {
                innerElement += `
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card my-1">
            <div class="card-header text-center">
                <h5 class="card-title">${cur.course_name}</h5>
            </div>
            <img src="assets/CoursesImage/${cur.course_img}" class="card-img-top img-fluid" style="height:200px;width:100%" alt="card-img" />
            <div class="card-body">
                <small class="card-text text-muted mb-3 d-block" style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                    ${cur.course_desc}
                </small>
            </div>
            <div class="card-footer text-center border-grey d-flex justify-content-between align-items-center">
                <span>Price : <i class="fa fa-rupee-sign"></i> ${cur.course_price}</span>
                <button class="btn btn-outline-primary btn-sm" onclick="courseDetailHandler(${cur.course_id})">Buy</button>
            </div>
        </div>
        </div>`;
            });
        }

        element.innerHTML = innerElement;
    };
    if (!data)
        requestToServer.send();
</script>