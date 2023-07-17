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
      height: auto;
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
  background-image: url("baner.png");
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
  </style>
</head>
<body>
  <div class="banner">
    <img src="baner.png" alt="Baner">
  </div>
    <div class="menu">
    <a href="https://i24n.pl/index.php">HOME</a>
    <a href="https://i24n.pl/mapy.php">MAPY</a>
    <a href="#">INFO</a>
  </div>
  <div class="container">
    <h1>Tunel pod Corsham i Bath</h1>
    <h2>08.07.2023!</h2>
    <p>Tunel pod Corsham i Bath to kompleks podziemnych tuneli i kopalni znajdujący się w hrabstwie Wiltshire w Anglii. Oficjalnie znany jako Corsham Tunnels, był wykorzystywany przez brytyjskie Ministerstwo Obrony w czasie wojny jako miejsce przechowywania sprzętu wojskowego i amunicji.</p>
    
    <h2>Nieoficjalne historie i teorie</h2>
    
    <ol>
      <li>
        <h3>Kodowanie Enigmy</h3>
        <p>Jedna z popularnych teorii mówi, że tunel pod Corsham był używany do rozkodowywania niemieckiej maszyny szyfrującej Enigma podczas II wojny światowej. Według tej teorii, brytyjscy kryptolodzy mieli tam tajne laboratoria, gdzie pracowali nad złamaniem szyfrów Enigmy.</p>
      </li>
      <li>
        <h3>Tajne badania nad UFO</h3>
        <p>Inna nieoficjalna historia sugeruje, że tunel pod Corsham był wykorzystywany do prowadzenia tajnych badań nad fenomenem UFO. Według tej teorii, brytyjskie władze miały tam specjalne sekcje badawcze, gdzie analizowano przypadki spotkań z niezidentyfikowanymi obiektami latającymi.</p>
      </li>
      <li>
        <h3>Bezpieczne schronienie dla elity</h3>
        <p>Istnieje także teoria, że tunel pod Corsham był przygotowywany jako bezpieczne schronienie dla brytyjskiej elity w przypadku wojny lub katastrofy. Według tej historii, tunel miał pełnić rolę tajnej kryjówki dla ważnych polityków i członków rodziny królewskiej w razie zagrożenia.</p>
      </li>
    </ol>
    <video class="thumbnail" controls controlsList="nodownload">
      <source src="film/Corsham_Tunels2023-07-09.mp4" type="video/mp4">
      Przeglądarka nie obsługuje odtwarzania filmów.
    </video>
    <a href="https://www.youtube.com/@syberianova3931"> >muzyka CMAZ< </a>
    <div class="thank-you-section">
      <h3>Podziękowania dla</h3>
      <p>Karoliny,Rafała,Grzegorza,</p>
      <p>Ola,Kajtka,Mateusza,Piotra</p>
      <p>Podziękowania dla Karoliny i Rafała za ich wsparcie przy tworzeniu tej strony.</p>
    </div>
    
    <div class="additional-videos" controls controlsList="nodownload">
      <h2>Dodatkowe filmy</h2>
      <ul>
        <li><video src="film/2.mp4" controls width="800" height="500"></video></li>
        <li><video src="film/a.mp4" controls width="800" height="500"></video></li>
        <li><video src="film/b.mp4" controls width="800" height="500"></video></li>
        <li><video src="film/c.mp4" controls width="800" height="500"></video></li>
        <li><video src="film/d.mp4" controls width="800" height="500"></video></li>
        <li><video src="film/e.mp4" controls width="800" height="500"></video></li>
        <li><video src="film/f.mp4" controls width="800" height="500"></video></li>
      </ul>
  <p>Strona została odwiedzona <?php include 'counter.php'; ?> razy.</p>
    </div>
  </div>
  

</body>
</html>
