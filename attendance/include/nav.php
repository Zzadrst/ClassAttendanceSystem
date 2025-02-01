<?php
require_once("icons.php");
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="img/bupc_logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                    </div>
                    <div class="col-auto">
                        <h4 class="d-inline-block h-font align-text-top">BICOL UNIVERSITY</h4> <br>
                        <h5 class="d-inline-block h-font align-text-top">POLANGUI CAMPUS</h5> <br>
                        <h6 class="d-inline-block h-font align-text-top">Polangui, Albay</h6>
                    </div>
                </div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark js-navbar-close" aria-current="page" href="homepage.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark js-navbar-close" href="archive.php">ARCHIVE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark js-navbar-close" href="class.php">CLASS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark js-navbar-close" href="absentees.php">ABSENTEES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link user_btn_orange js-navbar-close" href="contact.php">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">LOGOUT</a>
                </li>
            </ul>

            

            <form class="d-flex ml-auto mb-3" role="search" action="search_results.php" method="get">
                <div class="input-group">
                    <input name="searchkey" class="form-control border-1 border-info rounded-pill" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info rounded-pill shadow-none" type="submit"><?php echo ICONSEARCH; ?></button>
                </div>
            </form>
        </div>
    </div>
</nav>
