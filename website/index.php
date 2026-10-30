<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BerlinBeesten</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>Berlin/368 – Fernsehturm</title>
    <meta name="description" content="Een korte gids over de Berliner Fernsehturm voor studenten in Berlijn.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Permanent+Marker&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include __DIR__ . '/header.php'; ?>
    <main>
      <h1>BerlinBeesten</h1>
      <?php include __DIR__ . '/slideShow.php'; ?>
      <?php include __DIR__ . '/informatie.php'; ?>
      <?php include __DIR__ . '/omschrijving.php'; ?>
      <?php include __DIR__ . '/Route.php'; ?>
       <?php include __DIR__ . '/tickets.php'; ?>
    </main>
    <?php include __DIR__ . '/footer.php'; ?>
  </body>
</html>
