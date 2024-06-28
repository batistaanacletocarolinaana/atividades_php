<!DOCTYPE html>
<?php
//comfigurações do banco de dados 
$username = "locahost";
$username = "root";
$password = "" ;
$dbname = "loja";

// conectar ao banco de dados 

$conn=new myysqli($servername,$username,$password,$dbname);
//verificar a conexão

if($conn->conncte_error){
    die ("conexão falhou:" .$conn->correct_error);
}

//verifica se a requisição foi feita via método POST

if ($_SERVER['REQUEST_METHOD']=='POST')  

     $nome = $_POST['nome']??";
     $email = $_POST ['email']??";
     $telefone = $_POST['telefone']??"";
     $cidade =$_POST['cidade']??";
     $estado=$_POST['estado']??";
     $cep =$_POST ['cep']??";
     $data_nascimemto= $_POST['data_nascimento']??";


//prepara a declaração SQL para inserção
$stmt = $conn->prepare ("INSERT INTO clientes(nome, email,telefone,endereço,cidade,estado,cep,data_nascimento) VALUES (?,?,?,?,?,?)");
 $stmt->bind_param("ssssssss",$nome,$email,$telefone,$endereco,$cidade,$estado,$cep,$data_nascimento);

 //executa a declaração 
 if ($stmt->excute()){
    echo "cliente cadatro com sucesso!";
 } else {
    echo "erro ao cadastrar cliente:" . $stmt->error;
 }
 // Fecha a declaração e a conexão

 $stmt->close();
 $conn->close();} else {
    header('location: formulario.html');
    exit;
 }

 ?>