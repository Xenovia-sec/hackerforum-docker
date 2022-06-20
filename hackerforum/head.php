<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/76767a61ed.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>BLACK SEA FORUM</title>
    <style>
        /* Modify the background color */

        .navbar-custom {
            background-color: rgb(20, 20, 20);
        }

        /* Modify brand and text color */

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: red;
        }

        .navbar-custom .navbar-text2 {
            color: whitesmoke;
        }

        .footer-custom {
            background-color: rgb(20, 20, 20);
        }

        /* Modify brand and text color */

        .footer-custom .footer-brand,
        .footer-custom .footer-text {
            color: red;
        }

        .footer-custom .footer-text2 {
            color: whitesmoke;
        }

        body {
            background-color: rgb(20, 20, 20);
        }

        .list-group-custom {
            background-color: rgb(20, 20, 20);
            color: aliceblue;
            max-height: 5rem;
        }

        .list-group-custom:hover {
            background-color: #262525;
            color: aliceblue;
            max-height: 5rem;
        }

        .list-group-header-custom {
            background-color: rgb(20, 20, 20);
            color: aliceblue;
            max-height: 5.5rem;
        }

        .add-image {
            background-image: url(assets/img/advertisement.gif);
        }

        .list-group-item-custom {}

        .dropdown-custom {
            background-color: rgb(20, 20, 20);
        }

        .dropdown-custom .dropdown-text {
            color: whitesmoke;
            border-bottom: 0.1rem solid grey;
        }

        .dropdown-custom .dropdown-text:hover {
            background-color: #262525;
            color: aliceblue;
        }

        .menu {
            list-style: none;
            display: block;
        }

        .menu li {
            display: inline;
            margin: 10px;
            position: relative;
        }
        .cke_chrome {
    border: 1px solid black !important;
}
    </style>
</head>

<body>
    <!--- <div class="container p-5 text-center"><img width="250px" height="125px"
            src="https://yeppuu.com/uploads/images/2022/02/image_750x500_6210cdeaa97dc.jpg" class="rounded-circle" ">
        </div> --->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item active">
                            <a class="nav-link navbar-text" aria-current="page" href="index.php">
                                <i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="threads.php?topic=3"><i class="fa-solid fa-newspaper"></i> What's
                                News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="members.php"><i class="fa-solid fa-user"></i> Member List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="threads.php?topic=7"><i class="fa-solid fa-database"></i> Databases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="upgrades.php"><i class="fa-solid fa-star"></i> Upgrades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="#"><i class="fa-solid fa-plus"></i> Extras</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->