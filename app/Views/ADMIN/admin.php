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

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/app.css">
    <title>DUKAKUU®</title>
</head>

<body class="custom-dark">
    <nav class="app-navbar w-100 custom-dark lr jsb aic px-4">
        <div class="logo">
            <a href="/">
                <img src="assets/DukaKuu.png" alt="" class="img-logo">
            </a>
        </div>

        <div class="lr aic jcc g-1 color-white">
            <h3>Welcome</h3>
            <h3 class="color-yellow txt-uc">ADMINISTRATOR</h3>
        </div>
    </nav>
    <section class="w-100 lr aic">
        <div class="ud w-25 aic jsb custom-dark h-100-vh">
            <div class="ud w-100 aic h-fit">
                <button class="side-btn active" id="dash-btn">
                    <i class="fa-solid fa-warehouse font-large"></i>
                    DASHBOARD
                </button>
                <button class="side-btn" id="user-btn">
                    <i class="fa-solid font-large fa-users"></i>
                    USERS
                </button>
                <button class="side-btn" id="products-btn">
                    <i class="fa-solid font-large fa-boxes-packing"></i>
                    PRODUCTS
                </button>
                <button class="side-btn" id="profile-btn">
                    <i class="fa-solid font-large fa-address-card"></i>
                    PROFILE
                </button>
            </div>
            <div class="logout px-4 w-100">
                <a href="/">
                    <button class="btn-logout w-100">
                        LOGOUT
                    </button>
                </a>

            </div>

        </div>
        <?php include("PANELS/dashboard.php"); ?>
        <?php include("PANELS/users.php"); ?>
        <?php include("PANELS/products.php"); ?>
        <?php include("PANELS/profile.php"); ?>
    </section>
    <div class="branding ud jcc aic p-4 w-100">
        <h4 class="color-yellow">copyright DUKAKUU® 2022 </h4>
    </div>
</body>
<script>
    const user_panel = document.getElementById("user-panel");
    const dash_panel = document.getElementById("dashboard-panel");
    const products_panel = document.getElementById("products-panel");
    const profile_panel = document.getElementById("profile-panel");
    const user_panel_btn = document.getElementById("user-btn");
    const dash_panel_btn = document.getElementById("dash-btn");
    const products_panel_btn = document.getElementById("products-btn");
    const profile_panel_btn = document.getElementById("profile-btn");


    user_panel_btn.addEventListener("click", function() {
        user_panel.style.display = "inline-flex";
        dash_panel.style.display = "none";
        products_panel.style.display = "none";
        profile_panel.style.display = "none";

        //buttons
        user_panel_btn.classList.add("active");
        dash_panel_btn.className = "side-btn";
        products_panel_btn.className = "side-btn";
        profile_panel_btn.className = "side-btn";
    })
    dash_panel_btn.addEventListener("click", function() {
        user_panel.style.display = "none";
        dash_panel.style.display = "inline-flex";
        products_panel.style.display = "none";
        profile_panel.style.display = "none";

        //button toggle hardcode
        dash_panel_btn.classList.add("active");
        user_panel_btn.className = "side-btn";
        products_panel_btn.className = "side-btn";
        profile_panel_btn.className = "side-btn";
    })
    products_panel_btn.addEventListener("click", function() {
        user_panel.style.display = "none";
        dash_panel.style.display = "none";
        products_panel.style.display = "inline-flex";
        profile_panel.style.display = "none";

        //buttons
        products_panel_btn.classList.add("active");
        dash_panel_btn.className = "side-btn";
        user_panel_btn.className = "side-btn";
        profile_panel_btn.className = "side-btn";
    })
    profile_panel_btn.addEventListener("click", function() {
        user_panel.style.display = "none";
        dash_panel.style.display = "none";
        products_panel.style.display = "none";
        profile_panel.style.display = "inline-flex";

        //buttons
        profile_panel_btn.classList.add("active");
        dash_panel_btn.className = "side-btn";
        products_panel_btn.className = "side-btn";
        user_panel_btn.className = "side-btn";
    })

    const inpFile = document.getElementById("item_img");
    const PreviewImage = document.querySelector(".image_preview");

    inpFile.addEventListener("change", function() {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                PreviewImage.setAttribute("src", this.result);
            });

            reader.readAsDataURL(file);
        }


    })
    var module = document.getElementById("add-products-module");
    // var alert = document.getElementById("alert");

    function showModule() {
        module.style.display = "inline-flex";
    }

    function closeModule() {
        module.style.display = "none";
    }
    module.addEventListener('click', e => {
        if (e.target == module) {
            module.style.display = "none";
        }
    }, {
        capture: true
    })

    var UserModule = document.getElementById("add-users-module");
    // var alert = document.getElementById("alert");

    function showUserModule() {
        UserModule.style.display = "inline-flex";
    }

    function closeUserModule() {
        UserModule.style.display = "none";
    }
    UserModule.addEventListener('click', e => {
        if (e.target == UserModule) {
            UserModule.style.display = "none";
        }
    }, {
        capture: true
    })
</script>


</html>