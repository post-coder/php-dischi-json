<?php 

// leggere il file json
$discsString = file_get_contents( __DIR__ . './dischi.json');

// convertirlo in array php
// la stringa è in formato json
$disc_list = json_decode($discsString);



// gestirlo (se serve)
// controlliamo se riceviamo un parametro get "discIndex"
if(isset($_GET['discIndex']) && $_GET['discIndex'] != '') {

    // mi salvo l'indice in una variabile
    $disc_index = $_GET['discIndex'];

    // var_dump($disc_list[$disc_index]);
    // prendo solo l'album dall'array che corrisponde all'indice ricevuto
    $selected_album = $disc_list[$disc_index];

    // convertiamo l'album in json
    $album_json = json_encode($selected_album);

    // scriviamo tutto in pagina
    header('Content-Type: application/json');
    echo $album_json;

} else {

    // riconvertirlo in json
    $discs_string = json_encode($disc_list);

    // stamparlo in pagina
    header('Content-Type: application/json');
    echo $discs_string;

}




