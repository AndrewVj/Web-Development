<?php 
session_start();
$isRegistered = false;
$registerMessage = "";

if(isset($_POST['register'])) {
    if($_POST['registerPassword'] == $_POST['registerPasswordAgain']) {
        $GLOBALS['registerMessage'] = "Registered Successfully! Login Now.";
        $_SESSION['registeredEmail'] = $_POST['registerEmail'];
        $_SESSION['registeredPassword'] = $_POST['registerPassword'];
        $_SESSION['isRegistered'] = true; 
    } else {
        $GLOBALS['registerMessage'] = "Enter matching passwords";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniProject - Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
            <div class="row login-elements">
                <div class="col-md-6 login-form-1">
                    <h3>Sign Up</h3>
                    <h4>Please sign up with your email</h4>
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <input name = "registerEmail" type="text" class="form-control" placeholder="Enter Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input name = "registerPassword" type="password" class="form-control" placeholder="Enter Your Password *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input name = "registerPasswordAgain" type="password" class="form-control" placeholder="Reenter Your Password *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name= "register" value="Register" />
                        </div>
                        <div class="form-group">
                            <a href="index.php" class="goToLogin">Log in</a> <br>
                            <?php echo $GLOBALS['registerMessage']; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>