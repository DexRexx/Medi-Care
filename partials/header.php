<?php
session_start();
require "config/database.php";

?>

<!DOCTYPE php>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medi-Care Hospital</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- link to fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <!-- link to favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link
      rel="shortcut icon"
      href="assets/images/apple-touch-icon.png"
      rel="apple-touch-icon"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- link to css -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body class="blog-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between"
      >
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Medi-Care</h1>
          <span>Hospital</span>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-page.php">About</a></li>
            <li class="dropdown">
              <a href="services.php"
                ><span>Services</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li><a href="services.php">Offers</a></li>
                <li class="dropdown">
                  <a href="services.php"
                    ><span>Pricing</span>
                    <i class="bi bi-chevron-down toggle-dropdown"></i
                  ></a>
                  <ul>
                    <li><a href="services.php">Fees & Insurance</a></li>
                    <li>
                      <a href="services.php">NHIS</a>
                    </li>
                  </ul>
                </li>
                <li><a href="services.php">Doctors</a></li>
              </ul>
            </li>
            <li><a href="media.php">Media & Events</a></li>
            <li class="dropdown">
              <a href="departments.php"
                ><span>Departments</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
              <ul>
                <li>
                  <a href="departments.php">Maternity And Antinental</a>
                </li>
                <li class="dropdown">
                  <a href="departments.php"><span>Eye Surgical</span> </a>
                </li>
                <li><a href="departments.php">Laboratory</a></li>
              </ul>
            </li>
            <li><a href="contact-page.php">Contact Us</a></li>
            <a class="btn-getstarted" href="appointment.php"
              >Book an Appointment</a
            >
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>