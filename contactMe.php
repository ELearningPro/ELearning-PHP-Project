<section class="py-3">
    <div id="feed_alert" class="alert text-center alert-danger position-fixed" style="z-index:2" role="alert"></div>
    <h4 class="my-4 text-center">Your Feedback</h4>
    <div class="row">
        <div class="col-12 col-sm-7 align-self-center p-relative">
            <!-- <input type="text" placeholder="Name" class="form-control my-3"> -->
            <div>
                <input type="text" id="stud_name" name="stud_name" onkeyup="isValid(event)" class="form-control text-box border-warning mr-2 my-3" placeholder="Name">
                <span class="d-none">Please enter name</span>
            </div>
            <div>
                <textarea id="feedback" name="feedback" onkeyup="isValid(event)" class="form-control text-box border-warning my-3" placeholder="How can we help you..?"></textarea>
                <span class="d-none">Please enter Feedback</span>
            </div>
            <!-- <input type="text" placeholder="Subject" class="form-control my-3">
            <input type="text" placeholder="Email" class="form-control my-3"> -->
            <!-- <textarea placeholder="How can we help you..?" style="height:150px" class="form-control my-3"></textarea> -->
            <div class="d-flex">
                <button onclick="sendFeedBack()" class="btn btn-outline-primary btn-sm ml-auto" id="sendFeedback">Send Us</button>
            </div>
            <div class="position-absolute bg-dark" id="backdrop" style="opacity:0.6;top:0;left:0"></div>
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
<script>
    const formData = {
        "stud_name": "",
        "feedback": "",
    }
    const isValid = (event = false) => {
        let name, value;
        if (event) {
            name = event.target.name;
            value = event.target.value
        }
        console.log(name, value)
        formData[name] = value;
        let isCorrect = true;
        const {
            stud_name,
            feedback,
        } = formData;
        if (stud_name.trim().length >= 2) {
            isCorrect = isCorrect && true;
            document.getElementById("stud_name").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("stud_name").classList.add("isInvalid")
        }
        if (feedback.trim().length >= 3) {
            isCorrect = isCorrect && true;
            document.getElementById("feedback").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("feedback").classList.add("isInvalid")
        }

        return isCorrect;
    }
    const sendFeedBack = () => {
        console.log("test")
        if (isValid()) {
            let data = [];
            for (key in formData) {
                data.push(key + '=' + formData[key]);
            }
            data = data.join('&');
            let backdrop = document.getElementById("backdrop");
            backdrop.classList.add("h-100")
            backdrop.classList.add("w-100")
            let button = document.getElementById("sendFeedback");
            button.innerHTML = `Please Wait..
            <div id="dots5">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            `;
            const requestToFeedbackServer = new XMLHttpRequest();
            requestToFeedbackServer.open("POST", "feedbackBack.php", true)
            requestToFeedbackServer.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            requestToFeedbackServer.onreadystatechange = function() {
                const element = document.getElementById('feed_alert');
                element.classList.add('feedback_alert')
                if (this.readyState === 4 && this.status === 200) {
                    button.innerHTML = "Send";
                    backdrop.classList.remove("h-100")
                    backdrop.classList.remove("w-100")
                    if (this.response === "FSS") {
                        element.classList.remove('alert-danger')
                        element.classList.add('alert-success')
                        element.innerHTML = "Feedback send successfuly";
                        document.getElementById("name").value = "";
                        document.getElementById("feedback").value = "";
                        // location.replace("login.php");
                    }
                    if (this.response === "FSE") {
                        element.classList.add('alert-danger')
                        element.classList.remove('alert-success')
                        element.innerHTML = "Something went wrong";
                        button.innerHTML = "Send";
                    }
                } else {
                    element.classList.add('alert-danger')
                    element.classList.remove('alert-success')
                    element.innerHTML = "Something went wrong";
                    button.innerHTML = "Send";
                    backdrop.classList.remove("h-100")
                    backdrop.classList.remove("w-100")

                }
                setTimeout(() => {
                    element.classList.remove("d-none");
                    element.classList.remove('feedBack_alert');
                }, 4000);
            };
            console.log(formData, data)
            requestToFeedbackServer.send(data);
        }
    }
</script>