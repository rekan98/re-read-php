<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Estilos enlazados-->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>

  <div class="logo">Re-Read</div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>


<div class="row">
  
  <div class="column left">

    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php">Libros</a>
      <a href="ebooks.php">eBooks</a>
    </div>

    <h3>Toda la actualidad en eBook</h3>
      <!--<div class="ebook">
        <a target="_blank" href="https://www.casadellibro.com/libro-la-espada-del-destino-saga-geralt-de-rivia-2-edicion-coleccion-ista/9788498890433/1693161">
      <img src="../img/1.jpg" alt="ebook 1">
        <div>La espada del destino</div>
      </div> -->

      <?php
        include '../services/connection.php';

        $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook != '0'");

        if (!empty($result) && mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_array($result)){
            echo "<div class='ebook'>";
            echo "<img src=../img/".$row['img']." alt'".$row['Title']."'>";
            echo "</div>";
          }
        } else {
          echo "0 resultados";
        }
      ?>
</div>

<div class="column right">
  <h2>Top ventas</h2>
  <p>Cien años de soledad.</p>
  <p>Crónica de una muerte anunciada.</p>
  <p>El otoño del patriarca.</p>
  <p>El general en su laberinto.</p>
</div>
  
</body>
</html>
