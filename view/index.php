<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/navigation-bar.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">LMS</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#body">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="page-header header container-fluid" id="header">
        <div class="overlay"></div>
        <div class="description">
            <h1>Welcome to the <en>SECURETRANCES HC&S </en>!</h1>
            <div style="padding:5dp"></div>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis. Suspendisse consectetur mi id libero fringilla, in pharetra sem ullamcorper.</p> -->
            <a class="btn btn-outline-light btn-lg download-button" href="./sign-in.php">login!</a>
            <a class="btn btn-outline-light btn-lg download-button" href="./sign-up.php">Sign up!</a>
            
        </div>
    </header>
    <div class="container features" id="body">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Lorem ipsum</h3>
                <img src="../assets/images/image2.jpg" class="img-fluid">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Lorem ipsum</h3>
                <img src="../assets/images/image3.jpg" class="img-fluid">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img class="card-img-top rounded-circle" src="../assets/images/image5.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Jane Doe</h4>
                    <p class="card-text">Job Description</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <p>1640 Riverside Drive, Hill Valley, California
            <br/>info@mywebsite.com
            <br/>+ 01 234 567 88
            <br/>+ 01 234 567 89</p>
        </div>
    <div>
    <div class="footer-copyright text-center">&copy; <?php echo date('Y'); ?> Logistics Zambia</div>
</footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="../assets/javascript/main.js"></script>
</body>
</html>