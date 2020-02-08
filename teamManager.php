<?php

class TeamManager extends Dipendente { //Creo classe per owner azienda
    public $descrizione_progetto;
    private $assegnazione_dipendenti;

    public function __construct($nome_dipendente, $cognome_dipendente, $matricola_dipendente, $tel = NULL, $descrizione_progetto) { //Costruttore per dati dipendente
        parent::__construct($nome_dipendente, $cognome_dipendente, $matricola_dipendente, $tel);

        $this->descrizione_progetto = $descrizione_progetto;
    }
}
 ?>
