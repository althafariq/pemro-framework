<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?php echo $title; ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.6.0.slim.js">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
   </script>

   <!-- Favicons -->
   <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/apple-touch-icon.png"
      sizes="180x180">
   <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32"
      type="image/png">
   <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16"
      type="image/png">
   <link rel="manifest" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/manifest.json">
   <link rel="mask-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/safari-pinned-tab.svg"
      color="#712cf9">
   <link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon.ico">
   <meta name="theme-color" content="#712cf9">


   <style>
   .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
   }

   @media (min-width: 768px) {
      .bd-placeholder-img-lg {
         font-size: 3.5rem;
      }
   }

   .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
   }

   .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
   }

   .bi {
      vertical-align: -.125em;
      fill: currentColor;
   }

   .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
   }

   .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
   }
   </style>


   <!-- Custom styles for this template -->
   <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">
   <style type="text/css">
   /* Chart.js */
   @keyframes chartjs-render-animation {
      from {
         opacity: .99
      }

      to {
         opacity: 1
      }
   }

   .chartjs-render-monitor {
      animation: chartjs-render-animation 1ms
   }

   .chartjs-size-monitor,
   .chartjs-size-monitor-expand,
   .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1
   }

   .chartjs-size-monitor-expand>div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0
   }

   .chartjs-size-monitor-shrink>div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0
   }
   </style>
   <style type="text/css">
   @font-face {
      font-family: Roboto;
      src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
   }
   </style>

   <!-- Custom fonts for this template-->
   <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

   <!-- Custom styles for this template-->
   <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->

   <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #29275B;">
      <div class="container">
         <a class="navbar-brand fw-bold" href="<?= base_url() ?>mahasiswa"
            style="background-color: #29275B; box-shadow: none">Codeigniter 3</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <a class="nav-link active fw-semibold" aria-current="page" href="<?= base_url() ?>">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link fw-semibold" href="<?= base_url() ?>mahasiswa">Mahasiswa</a>
               </li>
               <!-- <li class="nav-item">
                  <a class="nav-link fw-semibold" href="<?= base_url() ?>aboutme">About Me</a>
               </li> -->

               <!-- <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                     <div class="container">
                        <div class="row">
                           <div class="col">
                              <img class="img-profile rounded-circle"
                                 src="<?= base_url(); ?>assets/img/undraw_profile.svg">
                           </div>
                           <div class="col">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                           </div>
                        </div>
                        <!-- <span class="nav-link fw-semibold">Douglas McGee</span>
                        <img style="width: 32px; height: 32px;" class="img-profile rounded-circle"
                        src="<?= base_url(); ?>assets/img/undraw_profile.svg"> -->
               <!-- </div>
                  </a>
                  <!-- Dropdown - User Information -->
               <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                     aria-labelledby="userDropdown">
                     <a class="dropdown-item" href="<?= base_url() ?>aboutme">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                     </a>
                     <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                     </a>
                     <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="<?= base_url() ?>auth/logout/" data-toggle="modal"
                        data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                     </a>
                  </div>
               </li> -->

               <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                  <ul class="navbar-nav">
                     <li class="nav-item dropdown">
                        <a class="nav-link fw-reguler dropdown-toggle" href="<?= base_url(); ?>aboutme" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           <?= $user['name']; ?>
                           <img style="margin-left: 3px;" width="24" class="img-profile rounded-circle"
                              src="<?= base_url(); ?>assets/img/profile/default.png">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-light">
                           <li>

                              <a class="dropdown-item" href="<?= base_url() ?>aboutme"><i
                                    class="bi bi-person-fill"></i>About Me</a>
                           </li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="<?= base_url() ?>auth/logout">Logout</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>


            </ul>
         </div>
      </div>
   </nav>