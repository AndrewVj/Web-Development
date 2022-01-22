<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedstyle.css">
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Feeds</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <br>
<hr>
    <?php 
        echo "Welcome, <b>".$_SESSION['registeredEmail']."</b>!";
    ?>
    <div class="feed-item">
        <div class="profile-info">
            <img class="profile-info-img" src="images/vertical1.jpg" alt="profile-pic">
            <p>Roman added this image</p>
        </div>
        <img class="main-image" src="images/Vertical1.jpg" alt="Vertical image 1" >
        <br>
        <div id="icons">
            <a href=""><i class="far fa-heart fa-lg"></i></a>
            <a href=""><i class="far fa-paper-plane fa-lg"></i></a>
            <a href=""><i class="far fa-comment fa-lg"></i></a>
        </div>
        <br>
        <br>
        <br>
    </div>
    <div class="feed-item">
        <div class="profile-info">
            <img class="profile-info-img" src="images/vertical2.jpg" alt="profile-pic">
            <p>John added this image</p>
        </div>
        <img class="main-image" src="images/Vertical2.jpg" alt="Vertical image 1" >
        <br>
        <div id="icons">
            <a href=""><i class="far fa-heart fa-lg"></i></a>
            <a href=""><i class="far fa-paper-plane fa-lg"></i></a>
            <a href=""><i class="far fa-comment fa-lg"></i></a>
        </div>
        <br>
        <br>
        <br>
    </div>
    <div class="feed-item">
        <div class="profile-info">
            <img class="profile-info-img" src="images/vertical3.jpg" alt="profile-pic">
            <p>Karan added this image</p>
        </div>
        <img class="main-image" src="images/Vertical3.jpg" alt="Vertical image 1" >
        <br>
        <div id="icons">
            <a href=""><i class="far fa-heart fa-lg"></i></a>
            <a href=""><i class="far fa-paper-plane fa-lg"></i></a>
            <a href=""><i class="far fa-comment fa-lg"></i></a>
        </div>
        <br>
        <br>
        <br>
    </div>
</body>
</html>