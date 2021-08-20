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
                    <a class="nav-link" href="#">EDIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#body">SAVE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <h2>Canditate Details</h2>
    <table class="table table-sm table-bordered table-success table-striped table-hover">
        <caption> List of Canditate</caption>
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">gender</th>
      <th scope="col">d_o_b</th>
      <th scope="col">country</th>
      <th scope="col">nrc</th>
      <th scope="col">phonenumber</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  
  </tbody>
</table>

<!-- opent code  -->
</table>

<!-- close database -->
    
   
    <footer class="page-footer" id="footer">
    
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