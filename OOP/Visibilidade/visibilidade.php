<?php

    // Temos 3 formados de visibilidade: public, private, protected
    // public: Pode ser acessado por todos e de qualquer forma.

    // private: Pode ser acessada APENAS pela classe criada e para acessá-la de fora da classe precisa colocá-la
    // dentro de uma função pública;

    // protected: Pode ser acessada pela classe de origem e as quais recebem a sua herança, para acessá-la de fora
    //da classe é preciso colocá-la dentro de uma função pública;

    class Pessoa{
        public $nome;
        private $senha;
        protected $idade;

        public function dados($nome, $idade, $senha){
            $this->nome = $nome;
            $this->$idade = $idade;
            $this->senha = $senha;
        }

        public function senha(){
            echo $this->senha;
        }
    }

    $thiago = new Pessoa;
    $thiago -> dados("Thiago", 17, "1234");
    
    // echo $thiago -> senha; Para acessar a senha é preciso de uma função pública

    $thiago -> senha();

    // As visibilidades private e protected são bem parecidas, a única diferença é que a private só pode ser usada
    // dentro da classe de origem enquanto a protected pode ser usada na origem e nas herdeiras.