<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&family=Barlow+Condensed:wght@300&family=Lato:wght@300&display=swap" rel="stylesheet">
    <!-- tab icon -->
    <link rel="icon" href="assets/DukaKuu.png" type="image/x-icon">

    <!-- fontawesome icons -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/app.css">
    <title>DUKAKUU®</title>
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
                    <h5 class="px-3">Already have an account? </h5>
                    <button class="btn btn-outline-secondary ">SIGN UP</button>
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