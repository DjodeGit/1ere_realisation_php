<?php

    $n = $_POST["nom"];      
    $p = $_POST["prenom"];   
    $v = $_POST["ville"];    

    
    echo "<!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <title>Résultat</title>
        <style>
            body { font-family: Arial; padding: 20px; }
            h1 { text-decoration: underline; }
        </style>
    </head>
    <body>
        <h1>Résultat dU formulaire</h1>
        <p>Bonjour !</p>
        <p>Je suis <strong>$n $p</strong>.</p>
        <p>J'habite à <strong>$v</strong>.</p>
        <a href='formulaire.html'>Retour au formulaire</a>  
    </body>
    </html>";

?>