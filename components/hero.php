<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="header-hero-image">
    <div class="overlay">
        <div class="header-hero-image_details">
            <h1>Hello yall</h1>
            <p>Lorem ipsum dolor sit amet.</p>
            <button class="btn-hero">order now</button>
        </div>
    </div>
    <?php
    $imageDirectory = 'img/';
     $heroImage = 'hero-blurred.png';
    echo '<img src="' . $imageDirectory . $heroImage . '" alt="Hero Image" >';
    ?>
</div>

</body>
</html>