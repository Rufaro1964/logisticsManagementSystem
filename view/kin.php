<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boostrap and css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/navigation-bar.css">

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <title>Document</title>
</head>
<body>
    <!-- navigation feild  -->

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
                    <a class="nav-link" href="licence.php">LICENCE TABLE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kin.php">KIN TABLE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-up.php">ADD USER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>

     <!-- table query field  -->
<div class="container mt-5" id="get">
<table id="table_id_kn" >
    <thead>
        <tr>
            <th>id</th>
            <th>user_id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>relationship</th>
            <th>phone</th>         
        </tr>
    </thead>
    
   
</table>
</div>   

<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id_kn').DataTable({
            "bProcessing":true,
            "sAjaxSource":"../database/get2.php",
            "aoColumns":[
                {mData:'id' },
                {mData: 'user_id' },
                {mData: 'firstname' },
                {mData: 'lastname' },
                {mData: 'relationship' },
                {mData: 'phone' }
            ]
        });
    } );
</script>
</body>
</html>