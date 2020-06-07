<?php

    interface EquipamentoeletronicoInterface {
        public function ligar();
        public function desligar();
    }

    //------------------------------------------------------

    class Geladeira implements EquipamentoeletronicoInterface {
        public function abrirPorta() {
            echo 'Abrir a porta';
        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }

  
    class Tv implements EquipamentoeletronicoInterface  {
        public function trocarCanal() {
            echo 'Trocar canal';

        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }

    }

    $x = new Geladeira();
    $y = new Tv();
    
    //---------------------------------------------------------

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function respirar() {
            echo 'Respirar O2';
        }

        public function andar() {
            echo 'Andar';
        } 

        public function conversar(){
            echo 'Conersar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'Respirar';
        }

        public function nadar() {
            echo 'Nadar';
        } 

        public function esguichar() {
            echo 'Esguicha água';
        } 

    }

    //---------------------------------------------------------

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface {
        public function voar();
    }

    class Papagaio implements AveInterface {
        public function voar() {
            echo 'Voo';
        }
        
        public function comer() {
            echo 'Comer';
        } 
        

    }

?>