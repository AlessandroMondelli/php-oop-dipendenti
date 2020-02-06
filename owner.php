<?php

class Owner extends Dipendente { //Creo classe per owner azienda
    public $partita_iva;
    private $fatturato;

    public function __construct($nome_dipendente, $cognome_dipendente, $matricola_dipendente, $tel = NULL, $partita_iva) { //Costruttore per dati dipendente
        parent::__construct($nome_dipendente, $cognome_dipendente, $matricola_dipendente, $tel);

        $this->partita_iva = $partita_iva;
    }
}
 ?>
