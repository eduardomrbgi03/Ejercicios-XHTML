<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Resultados del formulario</title>
</head>

<body>
  <h1>Resultados del formulario</h1>
  <?php
  /*while ($post = each($_POST))
  {
    echo $post[0] . " = " . $post[1];
  }*/
  
  if(!empty($_POST['fname'])&&!empty($_POST['lname'])&&!empty($_POST['email'])&&!empty($_POST['nota'])){
    
    echo "<p style='color:green'>Muchas gracias por su valoración</p>";
    $valoracion=$_POST['nota'];
    
    if($valoracion>='0'&&$valoracion<'5'){
      echo "<p>Nos ha <strong>suspendido</strong>, esperamos que no deje de visitarnos aunque tengamos mucho que mejorar.</p>\n";
      }
    else if(($valoracion=='5')){
      echo "<p>Nos ha dado un <strong>suficiente</strong>, esperamos mejorar para que mejore su opinión sobre nuestro sitio web.</p>\n";
      }
    else if(($valoracion=='6')){
      echo "<p>Nos ha dado un <strong>bien</strong>, vamos en el buen camino aunque podemos hacerlo mejor.</p>\n";
      }
    else if($valoracion>='7'&&$valoracion<='8'){
      echo "<p>Nos ha dado un <strong>notable</strong>, esperamos seguir mejorando nuestro sitio web.</p>\n";
      }
    else if($valoracion>='9'){
      echo "<p>Nos ha dado un <strong>sobresaliente</strong>, ¡nos alegra mucho conocer su excelente valoración!</p>\n";
      }
    }
    else {
      echo "<p style='color:red'>Por favor, cubra todos los campos del formulario y vuelva a enviarlo.</p>\n";
    }
    echo "<p><a href='lagosCovadonga.html'>Volver a la página anterior</a></p>\n";
?>
</body>
<html>