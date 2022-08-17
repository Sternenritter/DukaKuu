<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body>
    <?php include("components/navbar.php"); ?>
    <section class="section-one ud w-100 p-4">
        <div class="lr jsb aic w-100">
            <div class="ud jsb w-50">
                <div class="text w-50 px-4">
                    <p class="f-lato italic">“Fashion is a form of self expression
                        and an aoutonomy at a particular era. ” - Sir Gon Di'z</p>

                    <div class="socials ud py-xthick">
                        <h5 class="f-lato">FOLLOW OUR SOCIAL MEDIA</h5>
                        <span class="line"></span>
                        <p class="f-xlarge">
                            <b>NEW ARRIVALS WILL BE POSTED ON OUR SOCIAL MEDIA</b>
                        </p>
                        <div class="social-links">
                            <ul class="lr jss g-5 aic lst-none w-100">
                                <li><i class="fa-brands fa-instagram"></i></li>
                                <li><i class="fa-brands fa-facebook-square"></i></li>
                                <li><i class="fa-brands fa-twitter-square"></i></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="lr aic g-5 w-50 py-thick jce">
                <img src="assets/fashion1.jpg" alt="" class="img-display animated-img">
                <img src="assets/fashion2.jpg" alt="" class="img-display animated-img">
                <div class="ud h-fit">
                    <a href="store"><button class="right-angle lr jcc aic">View more <i class="fa-solid fa-angle-right f-large px-3"></i> </button></a>
                </div>
            </div>
        </div>
        <div class="lr w-100 py-4">
            <div class="ud jce aic g-5">
                <a href="#section-two" class="ud jce aic g-5 color-darker">
                    <p class="rotate"><b>SCROLL DOWN</b> </p>
                    <img src="assets/mouse-cursor.png" class="img-sm" alt="">
                </a>
            </div>
            <div class="ud w-100 jcc aic g-5">
                <div class="desc ud jcc aic w-100">
                    <div class="top lr jcc py-3">
                        <h3>GET YOUR</h3>
                        <h3 class="special px-2 c-white td-under">CUSTOM FABRICS</h3>
                        <h3>AT</h3>
                    </div>
                    <div class="logo jcc aic">
                        <img src="assets/DukaKuu.png" class="img-logo" alt="">
                    </div>
                    <div class="bn jcc aic py-3">
                        <a href="store">
                            <button class="view-store lr jcc aic ">
                                VIEW STORE
                                <span class="material-symbols-outlined f-xlarge px-3">
                                    north_east
                                </span>
                            </button>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section-two ud w-100 p-4 bg-dark g-5" id="section-two">
        <div class="ud w-100 jcc aic c-white">
            <h3 class="f-lato">OUR CLIENTS</h3>
            <span class="line"></span>
        </div>
        <div class="lr w-100 g-5 aic jcc c-white py-4">
            <div class="ud jcc aic">
                <img src="assets/person1.jpg" class="img-round" alt="">
                <p class="w-50 py-3">
                    “Literally the only place I
                    come to find new clothes.
                    Simply the best”
                </p>
            </div>
            <div class="ud jcc aic">
                <img src="assets/person2.jpg" class="img-round" alt="">
                <p class="w-50 py-3">
                    “Literally the only place I
                    come to find new clothes.
                    Simply the best”
                </p>
            </div>
            <div class="ud jcc aic">
                <img src="assets/person3.jpg" class="img-round" alt="">
                <p class="w-50 py-3">
                    “Literally the only place I
                    come to find new clothes.
                    Simply the best”
                </p>
            </div>
            <div class="ud jcc aic">
                <img src="assets/person4.jpg" class="img-round" alt="">
                <p class="w-50 py-3">
                    “Literally the only place I
                    come to find new clothes.
                    Simply the best”
                </p>
            </div>
        </div>
    </section>
    <?php include("components/footer.php"); ?>
    <div class="sign-in-module ud jcc aic" id="module">
        <div class="error_messages">
            <!-- <span class="alert red w-100 my-2 lr jsb aic" id="alert">
                Error message.
                <button class="close-popup" onclick="closeAlert()"><i class="fa-solid fa-xmark"></i></button>
            </span>
            <span class="alert success w-100 my-2 lr jsb aic">
                Success message.
                <button class="close-popup" onclick="closeAlert()"><i class="fa-solid fa-xmark"></i></button>
            </span>
            <span class="alert warning w-100 my-2 lr jsb aic">
                Warning message.
                <button class="close-popup" onclick="closeAlert()"><i class="fa-solid fa-xmark"></i></button>
            </span> -->
        </div>
        <div class="bg-white p-4 s-in w-50 br-5 h-fit">
            <div class="header ud w-100">
                <div class="lr jsb w-100">
                    <h3>SIGN IN</h3>
                    <button class="btn btn-danger px-3" onclick="closeModule()"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <span class="line-dark"></span>
            </div>
            <form class="ud w-100 py-4">
                <div class="ud w-100">
                    <label for="user-email">E mail:</label>
                    <input type="email" name="" id="user-email" class="form-control" placeholder="Enter your email here">
                </div>
                <div class="ud w-100 py-4">
                    <label for="user-password">Password:</label>
                    <input type="password" name="" id="user-password" class="form-control" placeholder="Enter your password here">
                </div>
                <button id="login-btn" type="button" class="btn btn-primary w-100">LOG IN</button>
                <div class="lr jcc aic py-3">
                    <h5 class="px-3">Don't have an account? </h5>
                    <a href="register"><button class="btn btn-outline-secondary " type="button">SIGN UP</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    var module = document.getElementById("module");
    // var alert = document.getElementById("alert");

    function showModule() {
        module.style.display = "flex";
    }

    function closeModule() {
        module.style.display = "none";
    }

    function closeAlert() {
        els = document.getElementsByClassName('alert');
        for (i in els) {
            els[i].style.display = "none";
        }
    }
    //js onclick listener focusing on the back only-because I'm an ass dude 
    module.addEventListener('click', e => {
        if (e.target == module) {
            module.style.display = "none";
        }
    }, {
        capture: true
    })

    function addWarning(message) {
        let full_message = `<span class="alert warning w-100 my-2 lr jsb aic">` + message +
            `<button class="close-popup" onclick="closeAlert()"><i class="fa-solid fa-xmark"></i></button>
                            </span>`;
        $('#module>.error_messages').append(full_message);
    }

    function login(email, password) {
        if (validateLoginData(email, password)) {
            data = {
                'email': email,
                'password': password
            };
            $.ajax({
                url: '/customerLogin',
                type: 'POST',
                data: data,
                success: function(response) {}
            });

        }

    }

    function validateLoginData(email, password) {
        $('#module>.error_messages').html('');
        var formIsValid = true;
        var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        var password_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/

        if (!email_regex.test(email)) {
            addWarning('invalid email');
            $('#email_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#email_error').css('display', 'none');
        }

        if (!password_regex.test(password)) {
            addWarning('invalid password');
            $('#password_error').css('display', 'block');

            if (password.search(/(?=.*[a-z])/)) {
                addWarning('password must have at least one lowercase character');
                $('#password_no_lowercase_error').css('display', 'block');
            } else {
                $('#password_no_lowercase_error').css('display', 'none');
            }

            if (password.search(/(?=.*[A-Z])/)) {
                addWarning('password must have at least one uppercase character');
                $('#password_no_uppercase_error').css('display', 'block');
            } else {
                $('#password_no_uppercase_error').css('display', 'none');
            }

            if (password.search(/(?=.*[0-9])/)) {
                addWarning('password must have at least one numeric character');
                $('#password_no_numeric_error').css('display', 'block');
            } else {
                $('#password_no_numeric_error').css('display', 'none');
            }

            if (password.search(/(?=.{8,})/)) {
                addWarning('password must be at least 8 characters long');
                $('#password_length_error').css('display', 'block');
            } else {
                $('#password_length_error').css('display', 'none');
            }
            formIsValid = false;
        } else {
            $('#password_error').css('display', 'none');
        }

        return formIsValid;
    }

    $(document).ready(function() {
        $('#login-btn').on('click', function() {
            let email = $('#user-email').val();
            let password = $('#user-password').val();
            login(email, password);

        });
    });
</script>

</html>