<!-- File per gestire la logica del server leggendo il file json -->

<?php

// salvo il file JSON in una variabile sotto forma di stringa (non ciclabile ancora)
$json_string = file_get_contents('task.json');
var_dump($json_string);

// la trasformo in un array php per essere utilizzata
$list = json_decode($json_string);
var_dump($list);