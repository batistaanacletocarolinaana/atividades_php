<!DOCTYPE html> 
<html>
    <body>
        <?php
        //Array com Chave => Valor 
        $listAlunosIdade = array (
        "leonardo" => 31,
        "gabriela" => 27,
        "bianca" => 07
        );

        //Array apenas com valor 
        $listacores = array (
            "vermelho",
            "amrelo",
            "verde",
            "laranja"

        );
        //acesso ao item do array $listaAlunoIdade [CHAVE]
        echo $listaAlunoIdade ["Leonardo"];
        
        echo "<br/>";
         
        echo $listacores [2];
        
        echo "<br/>a";

        //exibir em tela todo o conteúdo (chave e valor) de um array var_dump(array)
        var_dump ($ListaAlunosIdade);
        
        echo "<br />";

        var_dump($listaCores);

        ?>
    </body>
</html>