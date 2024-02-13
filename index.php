<?php
session_start();
require('src/services/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Home</title>
</head>

<body>
  <header>
    <div class="div-header">
    <nav>
      <ul>
        <li><a href="./edit.php?"><?php echo $_SESSION['username']; ?></a></li>
        <li><a href="./index.php?">Home</a></li>
        <li><a href="./login.php?status=1">Logout</a></li>
      </ul>
    </nav>
    </div>
  </header>
  <div class="container">
    <div id="cards">
      <div class="card" data-color="blue">
        <img class="card-front-image card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
        <div class="card-faders">
          <img class="card-fader card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
          <img class="card-fader card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
          <img class="card-fader card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
          <img class="card-fader card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
          <img class="card-fader card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
          <img class="card-fader card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
          <img class="card-fader card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
          <img class="card-fader card-image" src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3JtNjg1ZGVzaWduLXRuLXJlbWl4LTAwMWMuanBn.jpg" />
        </div>
      </div>
      <div class="card" data-color="green">
        <img class="card-front-image card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
        <div class="card-faders">
          <img class="card-fader card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
          <img class="card-fader card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
          <img class="card-fader card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
          <img class="card-fader card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
          <img class="card-fader card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
          <img class="card-fader card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
          <img class="card-fader card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
          <img class="card-fader card-image" src="https://w0.peakpx.com/wallpaper/174/20/HD-wallpaper-interno-smartphone-icio.jpg" />
        </div>
      </div>
      <div class="card" data-color="brown">
        <img class="card-front-image card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
        <div class="card-faders">
          <img class="card-fader card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
          <img class="card-fader card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
          <img class="card-fader card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
          <img class="card-fader card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
          <img class="card-fader card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
          <img class="card-fader card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
          <img class="card-fader card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
          <img class="card-fader card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW5pvztNxRgCEZct0OJtina8FEdjSYRjYefg&usqp=CAU" />
        </div>
      </div>
    </div>
  </div>
</body>
</html>