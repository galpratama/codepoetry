<?php

class Lyrics extends Hivi { 

    function index () {
        
        $aku = $this->aku;
        $kamu = $this->kamu;
        $dia = $this->dia;

        // Ketika ku mendengar bahwa
        if ($aku->mendengar == true) {
            
            // kini kau tak lagi dengannya
            if ($kamu->denganDirinya == false ) {

                // Dalam benakku timbul tanya
                $aku->benak = new Tanya;

                // Masihkah ada dia, di hatimu bertahta?
                if ($kamu->benak == $dia OR $kamu->benak == $aku) {

                    // Namun siapkah kau 'tuk jatuh cinta lagi?
                    $kamu->cinta->ready();
                }
            }
        }

        // Meski bibir ini tak berkata
        $aku->bibir('berkata', false);

        // bukan berarti ku tak merasa ada yang berbeda di antara kita
        $aku->rasa = $kita->berbeda('true');

    }
}
