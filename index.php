<?php 
$hotels = [
  [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
  ],
  [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
  ],
  [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
  ],
  [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
  ],
  [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
  ],
];
/*
Stampare tutti i nostri hotel con tutti i dati disponibili.
-------ok
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-hotel</title>
</head>
<body>
  <div class="main_wrapper">

  <div class="hotels_container">
    <?php foreach ($hotels as $hotel): ?>

    <ul class="card">
        <?php foreach ($hotel as $key => $value ): ?>
        <li><?php echo $key . ': ' . $value ?></li>
        <?php endforeach ?>
    </ul>

    <?php endforeach  ?>
  </div>

  </div>
</body>
</html>