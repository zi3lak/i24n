<?php
// Pobieranie danych z formularza
$name = $_POST['name'];
$comment = $_POST['comment'];

// Sprawdzanie, czy dane zostały przesłane
if ($name && $comment) {
  // Konfiguracja połączenia z bazą danych
  $servername = "localhost";
  $username = "i24n";
  $password = "Sharing2010!";
  $dbname = "i24n";

  // Tworzenie połączenia z bazą danych
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Sprawdzanie, czy połączenie zostało ustanowione
  if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
  }

  // Wstawianie komentarza do bazy danych
  $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";

  if ($conn->query($sql) === TRUE) {
    echo "Komentarz został dodany pomyślnie.";
  } else {
    echo "Wystąpił błąd podczas dodawania komentarza: " . $conn->error;
  }

  // Zamykanie połączenia z bazą danych
  $conn->close();
} else {
  echo "Wprowadź poprawne dane do formularza.";
}
?>
