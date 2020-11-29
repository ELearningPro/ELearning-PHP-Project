<?php
session_start();
include("dbConfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        .text-box {
            border: 0;
            border-bottom: 1px solid;
            box-shadow: none !important;
            border-radius: 0;
            outline: none;
            transition: all 0.5s;
        }

        .text-box:focus {
            border-color: green !important;
            color: black;
        }


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

        input.isInvalid ,textarea.isInvalid {
            color: red !important;
            border-color: red !important;
        }

        input.isInvalid+span ,textarea.isInvalid+span {
            display: block !important;
            color: red !important;
            font-size: 12px !important;
        }
    </style>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <title>Sign Up - eLearning</title>
</head>

<body id="body">
    <section class="container pb-4 d-flex align-items-center justify-content-center">
        <div class="row mx-0">
            <div class="col-12 text-center my-4 sticky-top bg-white">
                <h3 class="text-warning">
                    Welcome To <a href="/ELearning-Project/" class="text-warning"><span class="text-primary">e</span>Learnig</a>
                </h3>
            </div>

            <div class="col-6 d-none d-md-block my-auto px-4">
                <svg class="img-fluid" id="becd4ed6-983c-4267-a9ef-ba1a19b5a08b" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="747.2108" height="570.00666" viewBox="0 0 747.2108 570.00666">
                    <path d="M265.36558,212.82328a4.77608,4.77608,0,0,0-4.78143,4.75948l-1.17461,510.43858a4.77609,4.77609,0,0,0,4.75948,4.78144l411.21267.94627a4.77609,4.77609,0,0,0,4.78143-4.75948L681.33773,218.551a4.77608,4.77608,0,0,0-4.75947-4.78143Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M280.59565,228.12384a4.77609,4.77609,0,0,0-4.78143,4.75948L274.70987,712.791a4.77607,4.77607,0,0,0,4.75947,4.78143l380.68224.876A4.77608,4.77608,0,0,0,664.933,713.689l1.10435-479.90768a4.77608,4.77608,0,0,0-4.75947-4.78143Z" transform="translate(-226.3946 -164.99667)" fill="#fff" />
                    <path d="M610.71032,436.51861l-280.5027-.64549a7.1557,7.1557,0,1,1,.03293-14.31136l280.5027.64549a7.1557,7.1557,0,0,1-.03293,14.31136Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M613.42553,303.19l-186.094-.42824c-2.62183-.006-4.73992-3.21467-4.73083-7.1666s2.14193-7.15079,4.76376-7.14476l186.094.42824c2.62214.006,4.73992,3.21467,4.73083,7.1666S616.04766,303.196,613.42553,303.19Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M613.33112,344.21586l-186.094-.42823c-2.62183-.006-4.73992-3.21468-4.73083-7.16661s2.14194-7.15079,4.76377-7.14475l186.094.42823c2.62214.006,4.73992,3.21468,4.73083,7.16661S615.95326,344.2219,613.33112,344.21586Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M610.60383,482.792l-280.5027-.64548a7.1557,7.1557,0,0,1,.03293-14.31136l280.50271.64548a7.1557,7.1557,0,0,1-.03294,14.31136Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M610.49735,529.06542l-280.5027-.64549a7.1557,7.1557,0,1,1,.03293-14.31136l280.5027.64549a7.1557,7.1557,0,1,1-.03293,14.31136Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M610.39087,575.33882l-280.5027-.64548a7.1557,7.1557,0,1,1,.03293-14.31137l280.5027.64549a7.1557,7.1557,0,0,1-.03293,14.31136Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M610.28438,621.61223l-280.5027-.64549a7.1557,7.1557,0,0,1,.03294-14.31136l280.5027.64549a7.1557,7.1557,0,0,1-.03294,14.31136Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M610.1779,667.88563l-280.5027-.64548a7.1557,7.1557,0,1,1,.03293-14.31137l280.5027.64549a7.1557,7.1557,0,1,1-.03293,14.31136Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <circle cx="134.61891" cy="151.44683" r="37.68669" fill="#3f3d56" />
                    <path d="M418.80659,436.077" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M577.07913,305.34939,577.078,216.1827a50.44769,50.44769,0,0,0-100.86823-2.21847h11.1029a39.39479,39.39479,0,0,1,39.30744-37.86834c.19183,0,.38636.00162.57819.00433a39.41934,39.41934,0,0,1,38.783,40.00228V305.396c.00217.22759.00217.45464,0,.6611a26.425,26.425,0,0,1-26.38749,26.07428q-.16255,0-.32513-.00163a26.43823,26.43823,0,0,1-26.07157-26.77656l.06069-88.56629a13.29569,13.29569,0,0,1,26.58636-.08724V284.333a5.54887,5.54887,0,1,0,11.09775,0l-.00109-67.72116a24.39255,24.39255,0,0,0-48.78022.084L502.1,305.28219a37.53446,37.53446,0,0,0,37.03439,37.94421c.155.00217.3067.00271.46168.00271a37.54415,37.54415,0,0,0,37.48307-37.05769C577.08129,305.88206,577.08129,305.59215,577.07913,305.34939Z" transform="translate(-226.3946 -164.99667)" fill="#f9a826" />
                    <rect y="567.89688" width="557.10645" height="2" fill="#3f3d56" />
                    <path d="M800.12184,288.40018h77.631V249.7941a39.602,39.602,0,0,0-11.36971-27.8762,38.26248,38.26248,0,0,0-27.44843-11.54915c-21.21455,0-38.25757,16.86463-38.801,38.39412-.00592.35357-.01184.68939-.01184,1.03123Z" transform="translate(-226.3946 -164.99667)" fill="#2f2e41" />
                    <path d="M784.451,498.49329h0A11.60485,11.60485,0,0,0,797.343,485.104l-2.94954-18.025H779.84555l-5.05167,16.50211A11.60486,11.60486,0,0,0,784.451,498.49329Z" transform="translate(-226.3946 -164.99667)" fill="#ffb9b9" />
                    <path d="M962.60386,713.48452l-17.27566,2.12157-89.106-186.69838L805.91058,715.60609l-18.18491-5.45547,16.97258-299.4448,80.01359-4.24315C915.06871,442.40185,938.91346,597.22064,962.60386,713.48452Z" transform="translate(-226.3946 -164.99667)" fill="#2f2e41" />
                    <path d="M796.15182,735.00333H759.90536a6.50031,6.50031,0,0,1-6.49468-6.22971h0a6.50032,6.50032,0,0,1,3.389-5.981l20.84769-11.33822,12.8449-3.42531c5.65461,6.47991,11.063,6.5137,16.2702,1.28449l1.70785,11.38568A12.45633,12.45633,0,0,1,796.15182,735.00333Z" transform="translate(-226.3946 -164.99667)" fill="#2f2e41" />
                    <path d="M951.93585,735.00333H915.6894a6.50031,6.50031,0,0,1-6.49468-6.22971h0a6.50033,6.50033,0,0,1,3.389-5.981l20.84769-11.33822,12.8449-3.42531c5.65461,6.47991,11.063,6.5137,16.2702,1.28449l1.70785,11.38568A12.45633,12.45633,0,0,1,951.93585,735.00333Z" transform="translate(-226.3946 -164.99667)" fill="#2f2e41" />
                    <path d="M774.99624,471.32217l22.42805-1.21232,13.94176-161.84568L800.81357,309.847a17.85719,17.85719,0,0,0-15.11409,15.82837Z" transform="translate(-226.3946 -164.99667)" fill="#f9a826" />
                    <circle cx="606.79334" cy="84.46963" r="29.70202" fill="#ffb9b9" />
                    <path d="M868.95159,300.384c-22.47578,65.62229-42.23825,70.2055-60.61636,43.64378,1.61856-19.7939,8.18861-35.83038,20.0034-47.88692,6.86063-4.70291,2.81061-13.63866-2.42465-23.03422l28.48969-9.69861C855.21546,275.37965,860.45768,287.7394,868.95159,300.384Z" transform="translate(-226.3946 -164.99667)" fill="#ffb9b9" />
                    <path d="M886.22725,409.19041c-32.54311,22.46717-61.81581,26.61988-81.22592,5.45547-6.78693-28.09813-8.18824-57.55542-4.89388-86.6668A31.09786,31.09786,0,0,1,814.06,305.4386l14.2786-9.2977,6.97088,22.125,26.97428-29.39893,20.3794,2.45958a15.044,15.044,0,0,1,13.15129,16.57973Z" transform="translate(-226.3946 -164.99667)" fill="#f9a826" />
                    <path d="M866.44207,227.02612l-7.377,23.47067-63.78052-1.13352a39.42711,39.42711,0,0,1,71.15756-22.33715Z" transform="translate(-226.3946 -164.99667)" fill="#2f2e41" />
                    <path d="M879.09818,473.26794a1.08511,1.08511,0,0,0-1.08632,1.08134L877.745,590.31889a1.08511,1.08511,0,0,0,1.08134,1.08632l93.42588.215a1.08509,1.08509,0,0,0,1.08632-1.08133l.26687-115.96961a1.08512,1.08512,0,0,0-1.08134-1.08633Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M882.55839,476.74417a1.08512,1.08512,0,0,0-1.08632,1.08134l-.2509,109.03311a1.0851,1.0851,0,0,0,1.08133,1.08632l86.48949.199a1.08512,1.08512,0,0,0,1.08632-1.08134l.2509-109.03311a1.08509,1.08509,0,0,0-1.08133-1.08632Z" transform="translate(-226.3946 -164.99667)" fill="#fff" />
                    <path d="M957.55913,524.09063,893.83,523.944a1.62574,1.62574,0,1,1,.00749-3.25148l63.72909.14665a1.62574,1.62574,0,1,1-.00748,3.25148Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M958.176,493.79889l-42.27982-.09729c-.59567-.00137-1.07689-.73036-1.07482-1.62822s.48664-1.62463,1.08231-1.62326l42.27982.09729c.59574.00137,1.07689.73036,1.07482,1.62822S958.77175,493.80026,958.176,493.79889Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M958.15456,503.11982l-42.27982-.0973c-.59567-.00137-1.07689-.73036-1.07482-1.62822s.48664-1.62463,1.08231-1.62326l42.27982.09729c.59574.00137,1.07689.73036,1.07482,1.62823S958.7503,503.12119,958.15456,503.11982Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M957.53494,534.60376l-63.7291-.14665a1.62574,1.62574,0,0,1,.00748-3.25148l63.7291.14665a1.62574,1.62574,0,0,1-.00748,3.25148Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M957.51074,545.1169l-63.72909-.14665a1.62575,1.62575,0,0,1,.00748-3.25149l63.7291.14665a1.62575,1.62575,0,0,1-.00749,3.25149Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M957.48655,555.63l-63.72909-.14665a1.62575,1.62575,0,1,1,.00748-3.25149l63.72909.14666a1.62574,1.62574,0,1,1-.00748,3.25148Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M957.46236,566.14316l-63.7291-.14665a1.62574,1.62574,0,1,1,.00749-3.25148l63.72909.14665a1.62574,1.62574,0,1,1-.00748,3.25148Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M957.43817,576.6563l-63.7291-.14666a1.62574,1.62574,0,0,1,.00748-3.25148l63.7291.14665a1.62575,1.62575,0,0,1-.00748,3.25149Z" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <circle cx="674.43441" cy="331.81338" r="8.56227" fill="#3f3d56" />
                    <path d="M913.95937,523.9903" transform="translate(-226.3946 -164.99667)" fill="#e6e6e6" />
                    <path d="M910.41453,481.52071h0a11.60485,11.60485,0,0,1-12.89194-13.38929l2.94954-18.025H915.02l5.05167,16.50211A11.60486,11.60486,0,0,1,910.41453,481.52071Z" transform="translate(-226.3946 -164.99667)" fill="#ffb9b9" />
                    <path d="M919.86933,454.34959l-22.428-1.21232L883.49952,291.29159l10.55248,1.58287a17.85718,17.85718,0,0,1,15.11409,15.82837Z" transform="translate(-226.3946 -164.99667)" fill="#f9a826" />
                </svg>
            </div>
            <div class="col-12 col-md-6 mt-3 position-relative border border-warning py-3 shadow-lg">
                <h4 class="text-center my-4 ">Sign Up</h4>
                <!-- <form id="formData" method="POST"> -->
                <div class="d-flex flex-column mx-3">
                    <div class="d-flex my-2">
                        <div class="mr-2">
                            <input type="text" id="firstName" name="firstName" onkeyup="isValid(event)" class="form-control text-box border-warning mr-2" placeholder="First Name" required>
                            <span class="d-none">Please enter valid first name</span>
                        </div>
                        <div>
                            <input type="text" id="lastName" name="lastName" onkeyup="isValid(event)" class="form-control text-box border-warning " placeholder="Last Name" required>
                            <span class="d-none">Please enter valid last name</span>
                        </div>
                    </div>
                    <input type="number" id="mobileNumber" name="mobileNumber" onkeyup="isValid(event)" class="form-control text-box border-warning my-2" placeholder="Enter Your Mobile Number" required><span class="d-none">Enter valid Mobile Number</span>
                    <input type="email" id="email" name="email" onkeyup="isValid(event)" class="form-control text-box border-warning my-2" placeholder="Enter Your Email" required>
                    <span class="d-none">Enter valid Email Address</span>
                    <input type="password" id="password" onkeyup="isValid(event)" name="password" class="form-control text-box border-warning my-2" placeholder="Password" required>
                    <span class="d-none">Password must be 8 characters</span>
                    <input type="password" id="confirmPassword" onkeyup="isValid(event)" name="confirmPassword" class="form-control text-box border-warning my-2" placeholder="Confirm Password" required>
                    <span class="d-none">Password was Not Match</span>
                    <div class="d-flex justify-content-end mt-4 mx-2">
                        <button type="submit" onclick="signup()" id="createAccount" name="createAccount" class="btn-outline-warning btn-sm btn">
                            Create Account
                        </button>
                    </div>
                    <div class="mt-4 border-bottom-1 py-3 shadow-lg text-center">
                        <div>Have an account ? <a href="/ELearning-Project/login.php"> Login Now</a></div>
                    </div>
                </div>
                <div class="position-absolute bg-dark" id="backdrop" style="opacity:0.6;    top:0;left:0"></div>
                <!-- </form> -->
            </div>
        </div>
    </section>
</body>
<script>
    const formData = {
        "firstName": "",
        "lastName": "",
        "mobileNumber": "",
        "email": "",
        "password": "",
        "confirmPassword": ""
    }
    const isValid = (event = false) => {
        let name, value;
        const emailValidation =
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (event) {
            name = event.target.name;
            value = event.target.value
        }
        formData[name] = value;
        let isCorrect = true;
        const {
            firstName,
            lastName,
            mobileNumber,
            email,
            password,
            confirmPassword
        } = formData;
        if (firstName.trim().length >= 3) {
            isCorrect = isCorrect && true;
            document.getElementById("firstName").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("firstName").classList.add("isInvalid")
        }
        if (lastName.trim().length >= 3) {
            isCorrect = isCorrect && true;
            document.getElementById("lastName").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("lastName").classList.add("isInvalid")
        }
        if (mobileNumber.trim().length === 10) {
            isCorrect = isCorrect && true;
            document.getElementById("mobileNumber").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("mobileNumber").classList.add("isInvalid")
        }
        if (emailValidation.test(email)) {
            isCorrect = isCorrect && true;
            document.getElementById("email").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("email").classList.add("isInvalid")
        }
        if (password.trim().length >= 8) {
            isCorrect = isCorrect && true;
            document.getElementById("password").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("password").classList.add("isInvalid")
        }
        if (confirmPassword.trim() && confirmPassword === password) {
            isCorrect = isCorrect && true;
            document.getElementById("confirmPassword").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            if (password.trim())
                document.getElementById("confirmPassword").classList.add("isInvalid")
        }
        return isCorrect;
    }
    const signup = () => {
        if (isValid()) {
            let data = [];
            for (key in formData) {
                data.push(key + '=' + formData[key]);
            }
            data = data.join('&');
            let backdrop = document.getElementById("backdrop");
            backdrop.classList.add("h-100")
            backdrop.classList.add("w-100")
            let button = document.getElementById("createAccount");
            button.innerHTML = `Please Wait..
              <div id="dots5">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                `;
            const requestToServer = new XMLHttpRequest();
            requestToServer.open("POST", "signupvarification.php", true)
            requestToServer.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            requestToServer.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    button.innerHTML = "Account Created";
                    backdrop.classList.remove("h-100")
                    backdrop.classList.remove("w-100")
                    if (this.response === "ESS") {
                        location.replace("login.php");
                    }
                    if (this.response === "EAE") {
                        button.innerHTML = "Create Account";
                        let test = document.createElement("div");
                        let text = document.createTextNode("Email Already Exists");
                        test.appendChild(text);
                        document.getElementById("body").appendChild(test);
                    }
                }
            };
            console.log(formData, data)
            requestToServer.send(data);
        }
    }
</script>

</html>