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
            <input id="uName" type="text" class="form-control w-100">
        </div>
        <div class="lr jss w-50 g-1">
            <div class="w-50">
                <label for="fName"> <b>First name:</b></label>
                <input id="fName" type="text" class="form-control w-100" name="">
            </div>
            <div class="w-50">
                <label for="lName"> <b>Last name:</b></label>
                <input id="lName" type="text" class="form-control w-100" name="">
            </div>
        </div>
        <div class="ud jss w-50">
            <label for="email_field"> <b>Email :</b></label>
            <input id="email_field" type="text" class="form-control w-100">
        </div>
        <div class="ud jss w-50">
            <label for="password_field"> <b>Password :</b></label>
            <input id="password_field" type="password" class="form-control w-100">
        </div>
        <div class="ud jss w-50">
            <label for="cPassword"> <b>Confirm Password :</b></label>
            <input id="cPassword" type="password" class="form-control w-100">
        </div>
        <div class="ud jss w-50 py-3">
            <button id="signUp_btn" class="btn btn-primary w-100">SIGN UP</button>
        </div>
        <div class="lr jcc aic py-3 w-50">
            <h5 class="px-3">Already have an account? </h5>
            <a href="/"><button class="btn btn-outline-secondary " type="button">LOG IN</button></a>
        </div>
        <div class="py-4">
            <a href="/"><button class="btn btn-outline-secondary " type="button">Back to home</button></a>
        </div>

    </section>
    <?php if (isset($validation)) : ?>
        <div>
            <?= $validation->listErrors() ?>
        </div>
    <?php endif ?>

</body>
<script>
    function validatRegistrationData() {
        var formIsValid = true;
        var username, first_name, last_name, email, password, confirm_password, password_text;

        var name_regex = /^[a-zA-Z]+([ a-zA-Z\-'\.]+)+$/;
        username = $('#uName');
        first_name = $('#fName');
        last_name = $('#lName');

        var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        email = $('#email_field');

        var password_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/
        password = $('#password_field');
        password_text = password.val();


        confirm_password = $('#cPassword').val();

        if (!name_regex.test(username.val())) {
            $('#username_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#username_error').css('display', 'none');
        }

        if (!name_regex.test(first_name.val())) {
            $('#first_name_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#first_name_error').css('display', 'none');
        }

        if (!name_regex.test(last_name.val())) {
            $('#last_name_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#last_name_error').css('display', 'none');
        }

        if (!email_regex.test(email.val())) {
            $('#email_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#email_error').css('display', 'none');
        }

        if (!password_regex.test(password_text)) {
            $('#password_error').css('display', 'block');

            if (password_text.search(/(?=.*[a-z])/)) {
                $('#password_no_lowercase_error').css('display', 'block');
            } else {
                $('#password_no_lowercase_error').css('display', 'none');
            }

            if (password_text.search(/(?=.*[A-Z])/)) {
                $('#password_no_uppercase_error').css('display', 'block');
            } else {
                $('#password_no_uppercase_error').css('display', 'none');
            }

            if (password_text.search(/(?=.*[0-9])/)) {
                $('#password_no_numeric_error').css('display', 'block');
            } else {
                $('#password_no_numeric_error').css('display', 'none');
            }

            if (password_text.search(/(?=.{8,})/)) {
                $('#password_length_error').css('display', 'block');
            } else {
                $('#password_length_error').css('display', 'none');
            }
            formIsValid = false;
        } else {
            $('#password_error').css('display', 'none');
        }

        if (confirm_password != password_text) {
            $('#confirm_password_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#confirm_password_error').css('display', 'none');
        }

        return formIsValid;
    }

    function registerUser(userData) {
        $.ajax({
                method: "POST",
                url: "/register",
                data: userData
            })
            .done(function(msg) {
                // alert(msg);
            });
    };
    $(document).ready(function() {
        $('#signUp_btn').on('click', function() {
        console.log(validatRegistrationData());
            if (validatRegistrationData()) {
                data = {
                    "username": $('#uName').val(),
                    "first_name": $('#fName').val(),
                    "last_name": $('#lName').val(),
                    "email": $('#email_field').val(),
                    "password": $('#password_field').val()
                }
                registerUser(data);
            }
        })
    });
</script>

</html>