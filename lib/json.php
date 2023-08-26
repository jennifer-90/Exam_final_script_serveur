<?php


function exportJSON(object $user): void {
    $filename = $user->id . '_' . time() . '.json';
    // Envoi des headers HTTP au browser pour le téléchargement du fichier.
    header('Content-type: application/json');
    header('Content-disposition: attachment; filename="' . $filename . '"');
    // output du contenu au format json
    echo json_encode($user);
}

