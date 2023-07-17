<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Strona z komentarzami</title>
  <style>
    /* Stylizacja komentarzy */
    .comment {
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid #ccc;
    }
    
    .comment .name {
      font-weight: bold;
    }
    
    .comment .date {
      font-style: italic;
      color: #666;
    }
    
    .comment .content {
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <h1>Artykuł</h1>
  <p>Tutaj znajduje się treść artykułu.</p>

  <h2>Komentarze</h2>

  <?php
  // Tablica z przykładowymi komentarzami
  $comments = [
    [
      'name' => 'Jan Kowalski',
      'date' => '2023-07-12',
      'content' => 'Bardzo interesujący artykuł. Dziękuję za udostępnienie!'
    ],
    [
      'name' => 'Anna Nowak',
      'date' => '2023-07-13',
      'content' => 'Ciekawe spostrzeżenia. Mam nadzieję, że napiszesz więcej na ten temat.'
    ],
    [
      'name' => 'Piotr Wiśniewski',
      'date' => '2023-07-14',
      'content' => 'Dziękuję za informacje. Bardzo przydatne.'
    ]
  ];

  // Wyświetlanie komentarzy
  foreach ($comments as $comment) {
    echo '<div class="comment">';
    echo '<p class="name">' . $comment['name'] . '</p>';
    echo '<p class="date">' . $comment['date'] . '</p>';
    echo '<p class="content">' . $comment['content'] . '</p>';
    echo '</div>';
  }
  ?>

  <h3>Dodaj komentarz</h3>

  <!-- Formularz dodawania komentarza -->
  <form action="submit_comment.php" method="post">
    <label for="name">Imię:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="comment">Komentarz:</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br>

    <input type="submit" value="Dodaj komentarz">

  </form>
</body>
</html>
