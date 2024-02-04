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
        <img class="card-front-image card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
        <div class="card-faders">
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+fall+guys.png?format=auto&quality=80" />
        </div>
      </div>
      <div class="card" data-color="green">
        <img class="card-front-image card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
        <div class="card-faders">
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+minecraft.png?format=auto&quality=80" />
        </div>
      </div>
      <div class="card" data-color="brown">
        <img class="card-front-image card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
        <div class="card-faders">
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
          <img class="card-fader card-image" src="https://assets.codepen.io/1468070/game+cover+-+tetris.png?format=auto&quality=80" />
        </div>
      </div>
    </div>
  </div>
</body>
</html>