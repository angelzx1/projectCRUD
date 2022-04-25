<?php
require 'connection.php';
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);

SESSION_START();
$_SESSION['nome_user'] = $nome;
$_SESSION['email_user'] = $email;



if(isset($_SESSION['nome_user']) && !empty($_SESSION['nome_user']) && isset($_SESSION['email_user']) && !empty($_SESSION['email_user'])){
    $sql = mysqli_query($conn,"SELECT * FROM users WHERE nome = '$nome'");
    while($dados = mysqli_fetch_array($sql)){
        $nome2 = $dados['nome'];
        $email2 = $dados['email'];
    }
    if($nome == $nome2 && $email == $email2){
        header("Location: profileuser.php");
    }
    else{
        echo"Este usuário não existe";
    }
    


    
    
}
else{
    header("Location: login.php");
}