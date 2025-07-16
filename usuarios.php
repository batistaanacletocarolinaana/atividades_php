<<!DOCTYPE html>
<html>
    <body>
        <?php
         class usuario{

            // atributos da classes 
            public      $nome;
            protected   $cpf;
            private     $endereço;

            //contrutor da classe 
            function usuario (){
                $this->preparausuario():
            }
            
           //metodos
           private function preparausuario (){
            $this-> nome = "anna"
            $this->cpf ="99999999999"
            $this->endereço="Rua fulano de tal numero 0"
           }

           public function getCpf (){
            return $this->cpf;
           }
           public function getNome(){
            return $this->nome;
           }
           function getEndereço(){
            return $this->endereço;
           }

         }

         //instamciando o objeto e acessando seus respectivos métodos
         $usu = new usuario ();

         $usu->getCpf();

         $usu->getNome();
        ?>
    </body>
</html>