
<?php

$ usuario = '' ;
$ senha = '' ;
$ banco de dados = '' ;
$ host = 'localhost' ;

$ mysqli = new mysqli( $ host , $ usuario , $ senha , $ database );

if ( $ mysqli -> erro ) {
    die(" Falha ao conectar ao banco de dados: " . $ mysqli -> error );
}
