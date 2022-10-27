<?php
include('conection/conexao.php'); 

if(isset($_POST['email']) || isset($_POST['senha'])){ // campo principal 
    
    if((strlen($_POST['email'])||strlen($_POST['senha'])) == 0){ // campo de tratamento 1 
       echo "<html><script>window.alert('Ainda existem campos que não foram preenchidos')</script></html>"; 
     } else {
         $email = $_POST['email'];  
         $senha = $_POST['senha'];

         $sql_busca = "SELECT * FROM professor WHERE email = '$email' AND senha = '$senha' "; 
         $slq_querry = $mysqli->query($sql_busca) or die("Falha ao executar a consulta SQL: " . $mysqli->error); 
         $retorno_sql = $slq_querry->num_rows; // váriavel que detém o número de respostas do banco
        //  passa a string $sql_busca como paramentro para uma querry da mysqli retornando true or false 
        // se false cai no die e rotorna a mensagem de falha, e se retornar true vai pro próximo if
         if($retorno_sql == 1 ){ 

            $usuario = $slq_querry->fetch_assoc(); // colcoa os valores da consulta sql_querry dentro de $usuário 
            if(!isset($_SESSION))
            {   
                session_start();      // se não existir uma sessão, crie uma sessão de usuário 
            }  
            $_SESSION['user']= $usuario['email']; 
            $_SESSION['name']= $usuario['email']; 

            header("location: Professor_aplicacao\home_professor.html"); 

         }  else { 
            echo "<html><script> alert('email ou senha incorretos') </script></html>" ; 
         }
     }
}; 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="estilo_login.css" rel="stylesheet">

</head>

<body>
    <section class="arealogin">
        <div class="login">
            <form method="POST">
                <h1>LOGIN</h1>
                <legend>Nº de Matrícula ou Email:</legend>
                <input type="text" name="email" autofocus>
                <legend>Nº SIAPE:</legend>
                <input type="password" id="siape" name ="senha" > 
                <div class="botao">
                    <input type="submit" name="entrar" value="ENTRAR">
                </div>
            </form>

        </div>

    </section>
</body>

</html>
