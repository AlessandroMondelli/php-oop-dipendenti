<?php
include_once 'dipendente.php'; //Includo file che contiene classe dipendente
include_once 'owner.php'; //Includo file che contiene classe dipendente

$dipendente = new Dipendente('Pippo','Rossi','237AB','39841002');
$dipendente_2 = new Dipendente('Paperino','Bianchi','512NX','47612402');
$dipendente_3 = new Dipendente('Topolino','Neri','251HJ','89710223');

$owner = new Owner('Paperina','Verdi','000AA','34721823','0124511AADW1241');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gestione Dipendenti</title>
        <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Gestione Dipendenti</h1>
        </header>
        <main>
            <div class="owner">
                <h2>Capo Aziendale</h2>
                <div class="dipendente">
                    <p><?php $owner->printDip(); //Richiamo funzione per stampare i dati del capo a schermo ?></p>
                </div>
            </div>
            <div class="dipendenti">
            <h2>Dipendenti</h2>
                <div class="dipendente">
                    <p><?php $dipendente->printDip(); //Richiamo funzione per stampare i dati del dipendente a schermo ?></p>
                </div>
                <div class="dipendente">
                    <p><?php $dipendente_2->printDip(); //Richiamo funzione per stampare i dati del dipendente a schermo ?></p>
                </div>
                <div class="dipendente">
                    <p><?php $dipendente_3->printDip(); //Richiamo funzione per stampare i dati del dipendente a schermo ?></p>
                </div>
            </div>
        </main>
    </body>
</html>
