<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" Content="<?=$desc?>">
  <link rel="stylesheet" href="/assets/style.css?v=5">
  <title><?=$title?></title>
</head>
  <body>
    <div>
      <header>
      <? include 'elems/header.php';?>
      </header>
      <main>
      <?= $content?>
      </main>
      <footer>
      footer
      </footer>
    </div>
  </body>
</html>