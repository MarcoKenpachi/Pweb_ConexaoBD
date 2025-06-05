<?php 

include 'conecta.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$login = $_POST['login'];
$telefone = $_POST['fone'];
$foto = "null";


$sql = "insert into tb_usuario values (null, '$nome', '$email', '$senha', '$login','$telefone', '$foto' )";
if ($conn->query($sql)) {
// echo "Registro inserido com sucesso!";
 echo "Nome: ".$nome." <br>  Email: ".$email." <br> Senha: ".$senha." <br> Login: ".$login." <br>   Foto: ".$foto."<br>  Número: ".$telefone."" ;
}

 

?>