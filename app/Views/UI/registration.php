<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("components/header.php"); ?>
</head>

<body class="bg-yellow ud jcc aic w-100 g-5">
    <nav class="bg-yellow w-100 lr jcc aic">
        <img src="assets/DukaKuu.png" alt="" class="img-logo">
    </nav>

    <section class="registration ud aic jcc w-75 py-4">
        <div class="ud aic jcc">
            <h3>CREATE AN ACCOUNT HERE</h3>
            <span class="line-dark my-3"></span>
        </div>
        <div class="ud jss w-50">
            <label for="username"> <b>Username :</b></label>
            <input id="username" type="text" class="form-control w-100">
        </div>
        <div class="lr jss w-50 g-1">
            <div class="w-50">
                <label for="first_name"> <b>First name:</b></label>
                <input id="first_name" type="text" class="form-control w-100" name="">
            </div>
            <div class="w-50">
                <label for="last_name"> <b>Last name:</b></label>
                <input id="last_name" type="text" class="form-control w-100" name="">
            </div>
        </div>
        <div class="ud jss w-50">
            <label for="email"> <b>Email :</b></label>
            <input id="email" type="text" class="form-control w-100">
        </div>
        <div class="ud jss w-50">
            <label for="password"> <b>Password :</b></label>
            <input id="password" type="password" class="form-control w-100">
        </div>
        <div class="ud jss w-50">
            <label for="confirm_password"> <b>Confirm Password :</b></label>
            <input id="confirm_password" type="password" class="form-control w-100">
        </div>
        <div class="ud jss w-50 py-3">
            <button id="signupBtn" class="btn btn-primary w-100">SIGN UP</button>
        </div>
        <div class="lr jcc aic py-3 w-50">
            <h5 class="px-3">Already have an account? </h5>
            <a href="/"><button class="btn btn-outline-secondary " type="button">LOG IN</button></a>
        </div>
        <div class="py-4">
            <a href="/"><button class="btn btn-outline-secondary " type="button">Back to home</button></a>
        </div>

    </section>
    <?php include("components/footer.php"); ?>

</body>
<script>
    function validateRegistrationData() {
        var formIsValid = true;
        var username, first_name, last_name, email, password, confirm_password;

        var name_regex = /^[a-zA-Z]+([ a-zA-Z\-'\.]+)+$/;
        username = $('#username').val();
        first_name = $('#first_name').val();
        last_name = $('#last_name').val();

        var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        email = $('#email').val();

        var password_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/
        password = $('#password').val();
        confirm_password = $('#confirm_password').val();

        if (!name_regex.test(username)) {
            alert('invalid username');
            $('#username_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#username_error').css('display', 'none');
        }

        if (!name_regex.test(first_name)) {
            alert('invalid firstname');
            $('#first_name_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#first_name_error').css('display', 'none');
        }

        if (!name_regex.test(last_name)) {
            alert('invalid lastname');
            $('#last_name_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#last_name_error').css('display', 'none');
        }

        if (!email_regex.test(email)) {
            alert('invalid email');
            $('#email_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#email_error').css('display', 'none');
        }

        if (!password_regex.test(password)) {
            alert('invalid password');
            $('#password_error').css('display', 'block');

            if (password.search(/(?=.*[a-z])/)) {
                alert('password must have at least one lowercase character');
                $('#password_no_lowercase_error').css('display', 'block');
            } else {
                $('#password_no_lowercase_error').css('display', 'none');
            }

            if (password.search(/(?=.*[A-Z])/)) {
                alert('password must have at least one uppercase character');
                $('#password_no_uppercase_error').css('display', 'block');
            } else {
                $('#password_no_uppercase_error').css('display', 'none');
            }

            if (password.search(/(?=.*[0-9])/)) {
                alert('password must have at least one numeric character');
                $('#password_no_numeric_error').css('display', 'block');
            } else {
                $('#password_no_numeric_error').css('display', 'none');
            }

            if (password.search(/(?=.{8,})/)) {
                alert('password must be at least 8 characters long');
                $('#password_length_error').css('display', 'block');
            } else {
                $('#password_length_error').css('display', 'none');
            }
            formIsValid = false;
        } else {
            $('#password_error').css('display', 'none');
        }

        if (confirm_password != password) {
            alert('both passwords must match');
            $('#confirm_password_error').css('display', 'block');
            formIsValid = false;
        } else {
            $('#confirm_password_error').css('display', 'none');
        }

        return formIsValid;
    }

    $(document).ready(function() {
        $("#signupBtn").on("click", function() {
            if (validateRegistrationData()) {
                data = {
                    username: $('#username').val(),
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                };

                $.ajax({
                    url: '/registerCustomer',
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        if (response.status == 1) {
                            alert('You Have Been Registered Successfully');

                        } else if (response.status == 0) {
                            let errors = response.errors;
                            if (errors.username) {
                                alert('A user with the same username already exists, try a different one');
                            }
                            if (errors.email) {
                                alert('A user with the same email address already exists, try a different one');

                            }
                            if (!(errors.email || errors.username)) {
                                console.log(response);
                            }
                        } else {
                            console.log(response);
                        }
                    }
                });
            }
        });
    });
</script>

</html>