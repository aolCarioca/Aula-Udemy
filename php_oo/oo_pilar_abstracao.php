<?php
    
    //modelo

    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters e setters (overloading / sobrecarga do métodos)

        function __set($atributo, $valor){
            $this->$atributo = $valor;
            
        }

        function __get($atributo){
            return $this->$atributo;
            
        }

        /*
        function setNome($nome) {
            $this->nome = $nome; 
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone; 
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos; 
        }

        function getNome(){
            return $this->nome;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }
        */


        //métodos
        function resumirCadFunc() {
            return $this->__get('nome') . " o seu telefone é " . $this-> __get('telefone') .  " e os seguintes denpendente " . $this->__get('numFilhos') . " filhos";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos; 

        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('telefone', '21 991649796');
    $y->__set('numFilhos', 2);
    echo $y->resumirCadFunc();
    //echo $y->__get('nome') . ' o seu telefone é ' . $y->__get('telefone') . ' e os seguintes dependente ' . $y->__get('numFilhos') . ' filho(s)'; 

    echo '<hr />';

    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('telefone', '21 987313295');
    $x->__set('numFilhos', 5);
    echo $x->resumirCadFunc();
    //echo $x->__get('nome') . ' o seu telefone é ' . $x->__get('telefone') . ' e os seguintes dependente ' . $x->__get('numFilhos') . ' filho(s)'; 
   

?>
