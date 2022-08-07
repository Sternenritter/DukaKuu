<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body>
    <nav class="app-navbar w-100 custom-dark lr jsb aic px-4">
        <div class="logo">
            <img src="assets/DukaKuu.png" alt="" class="img-logo">
        </div>
        <div class="nav-options">
            <ul class="lr jcc aic td-none lst-none c-white p-0 m-0">
                <li class="px-3 c-white"><a href="">NEW ARRIVALS</a></li>
                <li class="px-3 c-white"><a href="">MENSWEAR</a></li>
                <li class="px-3 c-white"><a href="">LADIESWEAR</a></li>
                <li class="px-3 c-white"><a href="">KIDS</a></li>
            </ul>
        </div>
        <div class="lr aic jcc">
            <button class="btn btn-primary lr jcc aic px-3" onclick="showModule()">
                SIGN IN
                <span class="material-symbols-outlined px-2">
                    login
                </span>
            </button>
        </div>

    </nav>
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
                <img src="assets/img1.jpg" alt="" class="img-display">
                <img src="assets/img2.jpg" alt="" class="img-display">
                <div class="ud h-fit">
                    <button class="right-angle lr jcc aic">View more <i class="fa-solid fa-angle-right f-large px-3"></i> </button>
                </div>
            </div>
        </div>
        <div class="lr w-100 py-4">
            <div class="ud jce aic g-5">
                <p class="rotate"><b>SCROLL DOWN</b> </p>
                <img src="assets/mouse-cursor.png" class="img-sm" alt="">
            </div>
            <div class="ud w-100 jcc aic g-5">
                <div class="desc ud jcc aic w-100">
                    <div class="top lr jcc py-3">
                        <h3>GET YOUR</h3>
                        <h3 class="px-2 c-white td-under">CUSTOM FABRICS</h3>
                        <h3>AT</h3>
                    </div>
                    <div class="logo jcc aic">
                        <img src="assets/DukaKuu.png" class="img-logo" alt="">
                    </div>
                    <div class="bn jcc aic py-3">
                        <button class="view-store lr jcc aic ">
                            VIEW STORE
                            <span class="material-symbols-outlined f-xlarge px-3">
                                north_east
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section-two ud w-100 p-4 bg-dark g-5">
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
    <div class="sign-in-module jcc aic" id="module">
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
                    <input type="email" name="" id="" class="form-control" placeholder="Enter your email here">
                </div>
                <div class="ud w-100 py-4">
                    <label for="user-email">Password:</label>
                    <input type="password" name="" id="" class="form-control" placeholder="Enter your password here">
                </div>
                <button class="btn btn-primary w-100" type="submit">LOG IN</button>
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


    function showModule() {
        module.style.display = "flex";
    }

    function closeModule() {
        module.style.display = "none";
    }
    //js onclick listener focusing on the back only-because I'm an ass dude 
    module.addEventListener('click', e => {
        if (e.target == module) {
            module.style.display = "none";
        }
    }, {
        capture: true
    })
</script>

</html>