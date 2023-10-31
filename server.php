
<?php

// File per gestire la logica del server leggendo il file json,
// sarà l'end-point della API

// salvo il file JSON in una variabile sotto forma di stringa (non ciclabile ancora)
$json_string = file_get_contents('task.json');

// la trasformo in un array php per essere utilizzata
$list = json_decode($json_string);

//se e quando mi arriva in post il dato lo aggiungo alla lista e la salvo in .json
if(isset($_POST['taskItem'])) {
  $newTask = $_POST['taskItem'];
  // pusho il nuovo elemento nella lista
  $list[] = $newTask;
  file_put_contents('task.json', json_encode($list));
}

// riporto i dati in .json restituendo la lista aggiornata con nuove task
header('Content-Type: application/json');
echo json_encode($list);