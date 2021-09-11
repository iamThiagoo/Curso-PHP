<?php   

    // As classes anônimas são criadas em variáveis e não possuem nome.
    // Precisamos fechar elas com ";"
    // Vale ressaltar que você não poderá herdar ela

    $pessoa = new class(){

        public $nome = "Thiago";

        public function apresentacao(){
            
            echo "O meu nome é $this->nome <br>";
            
        }

    };

    echo $pessoa->nome;
    echo "<br>";
    $pessoa -> apresentacao();