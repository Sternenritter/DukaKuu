<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body class="bg-yellow ud jcc aic w-100 g-5">
    <nav class="bg-yellow w-100 lr jcc aic">
        <img src="assets/DukaKuu.png" alt="" class="img-logo">
    </nav>

    <section class="registration ud aic jcc w-75">
        <div class="ud aic jcc">
            <h3>CREATE AN ACCOUNT HERE</h3>
            <span class="line-dark my-3"></span>
        </div>
        <div class="ud jss w-50">
            <label for="username"> <b>Username :</b></label>
            <input type="text" class="form-control w-100">
        </div>
        <div class="lr jss w-50 g-1">
            <div class="w-50">
                <label for="firstname"> <b>First name:</b></label>
                <input type="text" class="form-control w-100" name="">
            </div>
            <div class="w-50">
                <label for="lastname"> <b>Last name:</b></label>
                <input type="text" class="form-control w-100" name="">
            </div>
        </div>
        <div class="ud jss w-50">
            <label for="username"> <b>Email :</b></label>
            <input type="text" class="form-control w-100">
        </div>
        <div class="ud jss w-50">
            <label for="username"> <b>Password :</b></label>
            <input type="password" class="form-control w-100">
        </div>
        <div class="ud jss w-50">
            <label for="username"> <b>Confirm Password :</b></label>
            <input type="password" class="form-control w-100">
        </div>
        <div class="ud jss w-50 py-3">
            <button class="btn btn-primary w-100">SIGN UP</button>
        </div>
        <div class="lr jcc aic py-3 w-50">
            <h5 class="px-3">Already have an account? </h5>
            <a href="/"><button class="btn btn-outline-secondary " type="button">LOG IN</button></a>
        </div>
        <div class="py-4">
            <a href="/"><button class="btn btn-outline-secondary " type="button">Back to home</button></a>
        </div>

    </section>

</body>

</html>