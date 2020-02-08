<?php
trait Stipendio {
    public $paga_ora;
    public $ore_lavorate;

    public function calc_stipendio() {
        try { //Provo codice
            $stip_giorno = $this->paga_ora * $this->ore_lavorate; //Guadagno all'ora
            $stip_medio_mese = $stip_giorno * 30; //Guadagno al mese
            return $stip_medio_mese;
        } catch (Exception $e) { //Prendo errore se presente
            echo '<br>Si è verificato un errore nella verifica dello stipendio '; //Stampo messaggio di errore
        }
    }
}

 ?>
