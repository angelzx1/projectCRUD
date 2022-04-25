<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profilestyle.css">
</head>
<body>
    <header>
        <div class ="picprofile">
            <img src="">
            <form method="POST" action="proc_upload_pic.php" enctype="multipart/form-data">
                Imagem:<input name="arquivo"type="file"><br><br>
                <input type="submit" value="Confirmar a troca de foto"><br><br>
                
            </form>
            <?php
                session_start();
                if(isset($_GET['nome']) && !empty($_GET['nome'])){
                    $nome = $_GET['nome'];
                     $email = $_GET['email'];
                    $sql = mysqli_query($conn,"SELECT * FROM users WHERE nome = '$nome'");
                    $sql2 = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
                    while($dados = mysqli_fetch_array($sql)){
                        $nome2 = $sql;
                        $email2 = $sql2;
                        }
                        if($nome == $nome2 && $email == $email2){
                            $_SESSION['msg'] = "<h1>Seja Bem-Vindo $nome!!</h1>";
                        }
                        else{
                            echo"Null";
                        }
                    
                } 
                
                ?>
            <?php


            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>
    </header>
</body>
</html>