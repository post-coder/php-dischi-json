<?php 

// leggere il file json
$discsString = file_get_contents( __DIR__ . './dischi.json');

// convertirlo in array php
// la stringa è in formato json
$disc_list = json_decode($discsString);


// gestirlo (se serve)
// array_splice($disc_list, 0, 1);



// riconvertirlo in json
$discs_string = json_encode($disc_list);

// stamparlo in pagina
header('Content-Type: application/json');

echo $discs_string;
