<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <a href="eBooks.php">eBooks</a>
  </div>
    <h2>Toda la actualidad en eBook</h2>
    <p>Libros casi nuevos a un precio casi imposible.</p>

    <!--<div class="ebook">
      <a href="http://www.sensacine.com/peliculas/pelicula-128759/" target="_blank"><img src="../img/cell.jpeg" alt="ebook 1">
    <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
    </div></a>
    <div class="ebook">
      <a href="http://www.sensacine.com/peliculas/pelicula-50833/" target="_blank"><img src="../img/doctorsleep.jpeg" alt="ebook 2">
  <div>Una novela que entusiasmará a los millones de lectores de El resplandor y que encantará...</div>
    </div></a>
  <div class="ebook">
      <a href="http://www.sensacine.com/peliculas/pelicula-142485/" target="_blank"><img src="../img/elciclodelhombrelobo.jpeg" alt="ebook 3">
    <div>Una escalofriante revisión del mito del hombre lobo por el rey de la literatura de terror...</div>
    </div></a>
    <div class="ebook">
      <a href="http://www.sensacine.com/peliculas/pelicula-863/" target="_blank"><img src="../img/elresplandor.jpeg" alt="ebook 3">
    <div>Esa es la palabra que Danny había visto en el espejo. Y, aunque no sabía leer, entendió que era un mensaje de horror...</div>
    </div></a>
 </div>-->
  
        <?php
        //Conexion a BDE
        include "../services/connection.php";
        //Seleccion y muestra de base de datos
        $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook != '0'");

        if(!empty($result) && mysqli_num_rows($result) > 0) {
          //Datos de salida de cada fila (fila = row)
          $i=0;
          while ($row = mysqli_fetch_array($result)) {
            $i++;
            echo "<div class='ebook'>";
            //Añadimos la imagen la pagina con la etiqueta img de HTML
            echo "<img src=../img/".$row['img']." alt=".$row['Title']."'>";
            //Añadimos el titulo de la pagina con la etiqueta H2
            echo "<div class='desc'>".$row['Title']."</div>";
            echo "</div>";
            if ($i%3==0) {
              echo "<div> style='clear:both;'</div>";
            }
          }
        } else{
          echo "0 resultados";
        }

        ?>
</div>
<div class="column right">
    <h2>Top ventas</h2>
      <?php
      //Conexion a BDE
      include "../services/connection.php";
      //Seleccion y muestra de base de datos
      $result = mysqli_query($conn, "SELECT Books.Title FROM Books WHERE Top = '1'");
      if(!empty($result) && mysqli_num_rows($result) > 0) {
        //Datos de salida de cada fila (fila = row)
        while ($row = mysqli_fetch_array($result)) {
          echo "<p>".$row['Title']."</p>";
        }
      } else{
        echo "0 resultados";
      }

      ?>
</div>
  
</body>
</html>