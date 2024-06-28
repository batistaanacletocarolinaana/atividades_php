<!DOCTYPE html>
<html>
    <body>
        <?php
        //exemplos//
        class pessoa {
            //propriedades da classe pessoa
            protected $nome;
            protected $idade;
            // contrutor da classe pessoa 
            public function__contruct9($nome,$idade){
                $this->nome= $nome;
                $this->idade=$idade;
            } 
            //metodos para exibir informações da pessoa 
            public function exibirinformacoes(){
                echo "nome:".$this->nome . "<br>";
                echo "idade:" . $this->idade . "<br>";
            }
        }
        ?>

        <?php
        required_once 'pessoa.php';
        //propiedade especifica da classe funcionario
        private $salario;
        //contrutor da class funcionario 
        public function__contruct($nome, $idade,$salario){
            //hama o contrutor da class pai
            parent::__contruct($nome,$idade);
            $this->salario = $salario;
        }
        //metodo para exibirinformações do funcionario 
        public function exibirinformacoes(){
            //chama o metodo exibirinformacoes da classe pai 
            parent::exibirinformacoes();
            echo "salario" .$this->salario . "<br>";
        }
        ?>

        <?php
        require_once 'funcionario.php';

        //cria uma instancia da classe funcionario
        $funcionario = new funconario ("diego",30,5000);

        //Exibe as informações do funcionario 
        $funcionario->exibirinformacoes();
        ?>

    </body>
</html>