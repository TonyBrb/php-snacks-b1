<?php 
$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt deserunt ea culpa autem blanditiis quaerat, reiciendis quas cumque officia nam quo sequi nihil ipsam magni mollitia praesentium incidunt doloremque id!
Laudantium, voluptatum! Eaque ipsam, sint magnam adipisci culpa similique perferendis rerum dolore aut ipsum reiciendis, molestiae excepturi quam recusandae, sunt amet debitis maiores repellat accusantium! Nemo vero eaque accusantium dicta.
Totam accusamus exercitationem ipsa ea. Assumenda praesentium doloribus eaque tempore hic? Delectus sit provident incidunt repellendus in. Ipsum, quam molestias ut tenetur quo ea aliquid sequi facere, sint deserunt omnis.";

$array = explode('.', $paragrafo);

var_dump($array);
echo "<br>";

for ($i = 0; $i < count($array); $i++) {
  echo $array[$i] . ".<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>