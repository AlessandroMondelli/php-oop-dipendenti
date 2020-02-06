<?php

class Dipendente { //Creo classe per dipendente
    public $nome_dipendente;
    public $cognome_dipendente;
    public $matricola_dipendente;
    private $ore_dipendente;
    private $telefono_dipendente;
    private $residenza_dipendente;

    public function getTel() {
        return $this->telefono_dipendente;
    }

    public function setTel($tel)
    {
        $this->telefono_dipendente = $tel;
    }

    public function getStip() {
        return $this->ore_dipendente;
    }

    public function setStip($ore)
    {
        $this->ore_dipendente = $ore;
    }

    public function __construct($nome_dipendente, $cognome_dipendente, $matricola_dipendente, $tel = NULL, $ore = NULL) { //Costruttore per dati dipendente
        $this->nome_dipendente = $nome_dipendente;
        $this->cognome_dipendente = $cognome_dipendente;
        $this->matricola_dipendente = $matricola_dipendente;
        $this->telefono_dipendente = $tel;
        $this->ore_dipendente = $ore;
    }

    public function printDip() { //Funzione di stampa dipendente
        echo 'Nome:' . $this->nome_dipendente . '<br>Cognome: ' .  $this->cognome_dipendente . '<br>Matricola: ' . $this->matricola_dipendente . '<br>Numero Cellulare: ' . $this->telefono_dipendente;
        if (isset($this->partita_iva)) { //Verifico se è presente anche la partita iva
            echo '<br>Partita IVA: ' . $this->partita_iva;
        }
        if (isset($this->ore_dipendente)) { //Verifico se sono presenti le ore lavorate
            try { //Provo codice
                $stip_giorno = $this->ore_dipendente * 9; //Guadagno all'ora
                $stip_medio_mese = $stip_giorno * 30; //Guadagno al mese
                echo '<br> Stipendio: €' . $stip_medio_mese;
            } catch (Exception $e) { //Prendo errore se presente
                echo '<br>Si è verificato un errore nella verifica dello stipendio '; //Stampo messaggio di errore
            }
        }
    }

}
 ?>
