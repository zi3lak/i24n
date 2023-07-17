<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tunel pod Corsham i Bath</title>
  <style>
    body {
      background-color: #333333;
      color: #ffffff;
      font-family: "Arial Black", sans-serif;
      font-size: 16px;
    }
    
    h1 {
      text-align: center;
    }
    
        .banner {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    
    .banner img {
      width: 840px;
      height: 220px;
    }
    
        .menu {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    
.menu {
  display: flex;
  justify-content: center;
  background-color: #333333;
}

.menu a {
  display: inline-block;
  position: relative;
  padding: 10px 100px;
  background-color: transparent;
  background-image: url("baner2.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  color: white;
  text-decoration: none;
  margin: 0 10px;
  overflow: hidden;
}

.menu a::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
  border-radius: 50%;
  opacity: 0;
  transition: all 0.3s ease;
}

.menu a:hover::after {
  transform: translate(-50%, -50%) scale(2);
  opacity: 1;
}

    .container {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      margin: 20px auto;
      max-width: 800px;
    }
    
    .thumbnail {
      display: block;
      max-width: 100%;
      height: auto;
      margin: 20px auto;
    }
    
    .thank-you-section {
      text-align: center;
      margin-top: 20px;
    }
    
    .additional-videos {
      margin-top: 40px;
    }
    
    .additional-videos h2 {
      text-align: center;
    }
    
    .additional-videos ul {
      list-style-type: none;
      padding: 0;
    }
    
    .additional-videos li {
      display: block;
      max-width: 100%;
      height: auto;
      margin: 20px auto;
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: transparent;
      background-image: url("baner.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-size: 16px;
      margin-top: 20px;
}
    #image-gallery img {
      width: 800px;
      height: 800px;
    }
  </style>
</head>
<body>
  <div class="banner">
    <img src="baner2.png" alt="Baner">
  </div>
    <div class="menu">
    <a href="https://i24n.pl/index.php">HOME</a>
    <a href="https://i24n.pl/mapy.php">MAPY</a>
    <a href="#">INFO</a>
  </div>
  <div class="container">
    <h1>Mapy Corsham i Bath</h1>
    <h2>08.07.2023</h2>
      <h1>Mapy</h1>
  <div id="image-gallery">
    <?php
    $folder = 'foty';
    $allowedExtensions = array('bmp', 'png','jpg');

    $files = scandir($folder);
    foreach ($files as $file) {
      $extension = pathinfo($file, PATHINFO_EXTENSION);
      if (in_array($extension, $allowedExtensions)) {
        echo '<img src="' . $folder . '/' . $file . '" alt="' . $file . '">';
      }
    }
    ?>
  </div>
    </div>
    

  </div>
  

</body>
</html>
