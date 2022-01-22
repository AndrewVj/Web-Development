<?php
session_start();

$registeredEmail = "";
$registeredPassword = "";
$message = "";


if(isset($_POST['login']) && isset($_SESSION['isRegistered'])) {
    if(($_POST['loginEmail'] == $_SESSION["registeredEmail"]) && ($_POST['loginPassword'] == $_SESSION["registeredPassword"])) {
        $_SESSION['isLoggedIn'] = true;
        header('Location: feeds.php');
    } else {
        $message = "Wrong detail entered";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniProject - Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="login-container">
            <div class="row login-elements">
                <div class="col-md-6 login-form-1">
                    <h3>Welcome back!</h3>
                    <h4>Please login to continue</h4>
                    <h5>First time users Sign Up first!</h5>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <input name="loginEmail" type="text" class="form-control" placeholder="Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input name="loginPassword" type="password" class="form-control" placeholder="Your Password *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btnSubmit" value="Login" /> <br>

                        </div>
                        <div class="form-group">
                            <a href="register.php" class="signUp">Sign Up</a>
                            <p class = "error">
                            <?php echo $message?>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>