<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>galeria</title>
  <style>
    #image-gallery img {
      width: 450px;
      height: 450px;
    }
  </style>
</head>
<body>
  <h1>Galeria</h1>
  <a href="https://i24n.pl/index.php"> >>>Wróć do głównej<<< </a>
  <div id="image-gallery">
    <?php
    $folder = 'galeria';
    $allowedExtensions = array('bmp', 'png', 'jpg', 'HEIC');

    $files = scandir($folder);
    foreach ($files as $file) {
      $extension = pathinfo($file, PATHINFO_EXTENSION);
      if (in_array($extension, $allowedExtensions)) {
        echo '<img src="' . $folder . '/' . $file . '" alt="' . $file . '">';
      }
    }
    ?>
  </div>
</body>
</html>