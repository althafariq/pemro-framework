<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?php echo $title; ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #29275B;">
      <div class="container">
         <a class="navbar-brand fw-bold" href="#">Codeigniter 3</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <a class="nav-link active fw-semibold" aria-current="page"
                     href="<?= base_url() ?>">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link fw-semibold" href="<?= base_url() ?>mahasiswa">Mahasiswa</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link fw-semibold" href="<?= base_url() ?>aboutme">About Me</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>