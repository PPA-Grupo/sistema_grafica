
<?php
$usuario = 'root' ;
$senha = '' ;
$banco_de_dados = 'ppa_database' ;
$host = 'localhost' ;

$mysqli = new mysqli( $host , $usuario , $senha , $banco_de_dados );

if ( $mysqli -> error ) {
    die(" Falha ao conectar ao banco de dados: " . $mysqli -> error );
}

// Inicialmente, meu objetivo é fazer a conexão entre a tela que José fez e o banco de dados seja possível
// o arquivo index.php tem a função de receber os dados do usuário, fazer a conexão com o banco de dados e 
// tentar fazer com que se algo for encontrano no banco , o valor retorne true, caso não ache nada que o valor 
// retorne false, e caso o valor retornado seja um administrador, que cheque no banco de dados e leve a tela 
// do administrador. 