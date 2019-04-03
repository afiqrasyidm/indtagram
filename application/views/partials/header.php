<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <a class="navbar-brand" href="<?php echo site_url('home/index'); ?>">Indtagram</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('user/register'); ?>">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('user/login'); ?>">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('gambar/upload'); ?>">Upload Gambar</a>
      </li>
    </ul>
  </div>
</nav>
