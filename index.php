<?php
include_once 'traits/stipendio.php'; //Includo file che contiene trait per stipendio
include_once 'dipendente.php'; //Includo file che contiene classe dipendente
include_once 'teamManager.php'; //Includo file che contiene classe team manager
include_once 'owner.php'; //Includo file che contiene classe dipendente

$dipendente = new Dipendente('Pippo','Rossi','237AB','39841002');
$dipendente_2 = new Dipendente('Paperino','Bianchi','512NX','47612402');
$dipendente_3 = new Dipendente('Topolino','Neri','251HJ','89710223');

$team_manager = new TeamManager('Minnie','Gialli','612GW','3881726490','Sito Web Boolean');

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
            <div id="owner" class="dipendenti">
                <h2>Capo Aziendale</h2>
                <div id="own" class="dipendente">
                    <p><?php $owner->printDip(); //Richiamo funzione per stampare i dati del capo a schermo ?></p>

                </div>
            </div>
            <div id="team-manager" class="dipendenti">
                <h2>Team Manager</h2>
                <div id="manager" class="dipendente">
                    <p><?php $team_manager->printDip(); //Richiamo funzione per stampare i dati del capo a schermo ?></p>
                    <p><?php $team_manager->paga_ora = 15;
                        $team_manager->ore_lavorate = 8;
                        $stipendio_man = $team_manager->calc_stipendio(); //Richiamo funzione per calcolare stipendio
                        echo "Stipendio: €" . $stipendio_man;
                        ?>
                    </p>
                </div>
            </div>
            <div class="dipendenti">
            <h2>Dipendenti</h2>
                <div class="dipendente">
                    <p><?php $dipendente->printDip(); //Richiamo funzione per stampare i dati del dipendente a schermo?></p>
                    <p><?php $dipendente->paga_ora = 7;
                        $dipendente->ore_lavorate = 8;
                        $stipendio_dip_1 = $dipendente->calc_stipendio(); //Richiamo funzione per calcolare stipendio
                        echo "Stipendio: €" . $stipendio_dip_1;
                        ?>
                    </p>
                </div>
                <div class="dipendente">
                    <p><?php $dipendente_2->printDip(); //Richiamo funzione per stampare i dati del dipendente a schermo ?></p>
                    <p><?php $dipendente->paga_ora = 7;
                        $dipendente->ore_lavorate = 4;
                        $stipendio_dip_2 = $dipendente->calc_stipendio(); //Richiamo funzione per calcolare stipendio
                        echo "Stipendio: €" . $stipendio_dip_2;
                        ?>
                    </p>
                </div>
                <div class="dipendente">
                    <p><?php $dipendente_3->printDip(); //Richiamo funzione per stampare i dati del dipendente a schermo ?></p>
                    <p><?php $dipendente->paga_ora = 7;
                        $dipendente->ore_lavorate = 8;
                        $stipendio_dip_3 = $dipendente->calc_stipendio(); //Richiamo funzione per calcolare stipendio
                        echo "Stipendio: €" . $stipendio_dip_3;
                        ?>
                    </p>
                </div>
            </div>
        </main>
    </body>
</html>
