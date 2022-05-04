<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MonkeyLand - Enclosures</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
        <img src="../images/MonkeyLandLogo.png" height="130" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Our Animals</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#">View Enclosures<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="mav-item">
            <div class="container" style="position: relative">
                <button class="btn custom-btn" type="button">
                    <img src="../images/loginIcon.png" height="30" class="d-inline-block align-top" alt="" style="opacity: 0.6">
                    Login/Register
                </button>
            </div>
        </div>
    </div>
</nav>


<div class="container">
    <div class="green-custom-box ">
        <p style="text-align: center; font-size: 40px;color: white; margin-top: 35px;">Enclosures Management</p>
    </div>
</div>

<div class="container">
    <?php for ($i = 1; $i <= 12; $i++) {
    if (($i - 1) % 4 == 0){
    if ($i > 1){ ?>
</div>
<?php } ?>
<div class="row">
    <?php } ?>
    <div class="card" style="width: 16rem; margin: 1rem auto; border-radius: 25px; text-align: center">
        <img src="../images/enclosure.jpg" class="card-img-top"
             style="border-radius: 5% 5% 0% 0%;" alt=""">
        <div class="card-body">
            <h4 class="card-title">Enclosure <?php echo $i ?></h4>
            <a href="#" class="btn-list-custom btn">View Enclosure</a>
        </div>
    </div>
    <?php } ?>
</div>
</div>

<footer class="custom-footer">
    <div class="footer-right">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
    </div>

    <div class="footer-left">
        <p class="footer-links">
            <a class="link-1" href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Faq</a>
            <a href="mailto:m307624@alunos.ipb.pt">Contact</a>
        </p>

        <p>MonkeyLand S.A &copy; 2022</p>
    </div>
</footer>

</body>
</html>