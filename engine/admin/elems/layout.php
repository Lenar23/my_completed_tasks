<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" Content="<?=$desc?>">
  <link rel="stylesheet" href="../admin/style.css">
  <title><?=$title?></title>
</head>
  <body>
    <div>
      <header>
      <a href="/admin/add.php">add new page</a><br> 
	  <a href="/admin/logout.php">покинуть сайт</a>
      </header>
      <main>
	  <?php include 'info.php';?>
      <?= $content?>
      </main>
      <footer>
      footer
      </footer>
    </div>
  </body>
</html>