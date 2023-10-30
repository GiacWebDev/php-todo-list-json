<!-- File per gestire la logica del server leggendo il file json -->
<!-- sarà l'end-point della API -->
<?php

// salvo il file JSON in una variabile sotto forma di stringa (non ciclabile ancora)
$json_string = file_get_contents('task.json');

// la trasformo in un array php per essere utilizzata
$list = json_decode($json_string);



// riporto i dati in .json 
header('Content-Type: application/json');
echo json_encode($list);