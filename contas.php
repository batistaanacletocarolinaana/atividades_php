<!DOCTYPE html>
<html>
    <body>
        <?ph
        //radio button
        echo "<b>seu sistema operacional é: </b>" . $_POST["sistema"] . "<br><br>";
        //Checkbox
        if(isset($_POST["numeros"]))
        {
            echo "<b>os numeros de sua preferencia são : </b><BR>";

            //faz loop pelo array dos numeros 
            foreach($_POST ["numeros"] as $numeros)
            {
                echo "-" . $numero . "<BR><br>";
            
            }
        }
        else
        {
            echo "<b>voce nao escolheu numero preferido!</b><br><br>"
        }
        // 
        echo "<b>seu processadpr é: </b>" . $_POST["processador"] . "<BR>";

        p?>
    </body>
</html>