<?php 
session_start();

$updateMessage = "";

if(isset($_POST['update'])) {
    if($_POST['registerPassword'] == $_POST['newPasswordAgain']) {
        $GLOBALS['updateMessage'] = "Information Changed Successfully! Login Now.";
        $_SESSION['registeredEmail'] = $_POST['newEmail'];
        $_SESSION['registeredPassword'] = $_POST['newPassword'];
        $isRegistered = true; 
    } else {
        $GLOBALS['updateMessage'] = "Enter matching passwords";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Update Information</title>
</head>
<body>
<?php include 'header.php'; ?>
    <br>
<hr>
<div class="login-container">
            <div class="row login-elements">
                <div class="col-md-6 login-form-1">
                    <h3>Hello, <?php echo $_SESSION['registeredEmail']; ?></h3>
                    <h4>Please update your information</h4>
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <input name = "newEmail" type="text" class="form-control" placeholder="Enter new Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input name = "newPassword" type="password" class="form-control" placeholder="Enter new Password *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input name = "newPasswordAgain" type="password" class="form-control" placeholder="Reenter new Password *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name= "update" value="Update" />
                        </div>
                        <div class="form-group">
                            <a href="index.php" class="goToLogin">Log in</a> <br>
                            <?php echo $GLOBALS['updateMessage']; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>