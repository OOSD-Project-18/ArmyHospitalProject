<?php

require_once 'core/init.php';
$user = new User();

if (!$user->isLoggedIn()) {
    Redirect::to('index.php');
} else {

    if (!$user->exists()) {
        Redirect::to(404);
    } else {
        $data = $user->data();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

    <body id='main'>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
                <a class="navbar-brand" href="viewhome.php">
                    <img src="stylesheets/Army.png" width="45" height="35" class="d-inline-block align-top" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="stylesheets/defaultprofileimg.jpg" width="25" height="25" class="d-inline-block align-top" alt="options">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="update.php">Edit profile </a>
                                <a class="dropdown-item" href="updatepassword.php">Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
        </header>

        <main>
            <?php include_once 'stylesheets/sidebar.html' ?>
            <div id="mySidebar" class="sidebar shadow text-center">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <img src="stylesheets/defaultprofileimg.jpg" alt="" width='250px' height="100px" class="img-fluid">
                <!--add profile img-->
                <p style="font-size: 25px;font-weight:bold;"><?php echo escape($data->user_first) . " " . escape($data->user_last); ?></p>
                <p style="color: gray"><?php echo escape($data->user_uid); ?></p>


            </div>

            <div>
                <button class="openbtn" onclick="openNav()">☰</button>
            </div>
            <div class="container py-1 mt-3" style="width: 30%">
                <div class="card p-3 text-center shadow-sm">
                    <h3>Search Patient</h3>
                    <hr>

                    <form action="functions/searchbar.php" method="post">
                        <input type="text" id="search" placeholder="Enter Patient's NIC Number" name="search" class="form-control mr-sm-2" required>
                        <br>
                        <input type="submit" id="submit" name="submit" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Search ID">
                    </form>

                </div>
            </div>

        </main>

    </body>

    </html>




<?php

}
