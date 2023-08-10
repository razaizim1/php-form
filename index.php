<?php


if (isset($_POST['submit_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $checkox = $_POST['terms_condition'];
    $city = $_POST['city'];
    echo $city;

    if (empty($name)) {
        $error =  'Enter your name';
    } elseif (empty($email)) {
        $error = "Enter your email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email";
    } elseif (empty($mobile)) {
        $error = "Enter your mobile number";
    } elseif (!is_numeric($mobile)) {
        $error = "Please enter numbers only";
    } elseif (strlen($mobile) != 11) {
        $error = "Number must be 11 digit";
    } elseif (empty($password)) {
        $error = "Enter your password";
    } elseif (empty($confirm_password)) {
        $error = "Enter your confirm password";
    }
}




?>

<!doctype html>
<html lang="en">

<head>
    <title>Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-4">
        <div class="col-md-7 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="border-bottom mb-3 pb-3">Registration Form</h2>
                    <!-- <?php if (isset($error)) : ?>
                        <div class="alert alert-danger">
                            <?php echo $error;  ?>
                        </div>
                    <?php endif; ?> -->

                    <!-- <?php if (isset($success)) : ?>
                        <div class="alert alert-success">
                            <?php echo $success;  ?>
                        </div>
                    <?php endif; ?> -->
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile Number:</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message:</label>
                            <textarea name="message" id="message" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" name="city" id="city">

                                <?php if (isset($_POST['city'])) : ?>
                                    <option value="<?php $_POST['city']; ?>"><?php echo $_POST['city']; ?></option>


                                <?php endif; ?>
                                <option>Select One</option>
                                <option value="New Delhi">New Delhi</option>
                                <option value="Istanbul">Istanbul</option>
                                <option value="Jakarta">Jakarta</option>
                            </select>
                        </div>

                        <div class="mb-3">
                        <?php echo $city; ?>
                            <label for="inputName" class="form-label">Gender:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="male" name="gender" id="male">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="female" name="gender" id="female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="terms_condition" checked id="terms_condition">
                                <label class="form-check-label" for="terms_condition">
                                    Accept Terms & Conditions.
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="submit_btn" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>