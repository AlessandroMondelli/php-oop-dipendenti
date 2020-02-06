<?php

class Dipendente { //Creo classe per dipendente
    public $nome_dipendente;
    public $cognome_dipendente;
    public $matricola_dipendente;
    private $telefono_dipendente;
    private $residenza_dipendente;

    public function getTel() {
        return $this->telefono_dipendente;
    }

    public function setTel($tel)
    {
        $this->telefono_dipendente = $tel;
    }

    public function __construct($nome_dipendente,$cognome_dipendente,$matricola_dipendente, $tel = NULL) { //Costruttore per dati dipendente
        $this->nome_dipendente = $nome_dipendente;
        $this->cognome_dipendente = $cognome_dipendente;
        $this->matricola_dipendente = $matricola_dipendente;
        $this->telefono_dipendente = $tel;
    }

    public function printDip() { //Funzione di stampa dipendente
        echo 'Nome:' . $this->nome_dipendente . '<br>Cognome: ' .  $this->cognome_dipendente . '<br>Matricola: ' . $this->matricola_dipendente . '<br>Numero Cellulare:' . $this->telefono_dipendente;
    }

}

 ?>
