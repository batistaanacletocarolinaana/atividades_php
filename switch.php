<!DOCTYPE html >
   <html>
    <body>
    <?php
    $nome =  'fulano';
    switch ($nome){
        case ' fulano ':
            echo 'e ai fulano';
            break;
            
            case ' sicrano':
                echo ' e ai sicrano';
                break ;

                 case  'beltrano':
                    echo 'e ai beltrano ';
                    break;

                    default : 
                    echo ' qual é o seu nome ?';
                    break ;
                 }

                 // resultado é : E ai fulano!
    
    ?>
    
    </body>
   </html>