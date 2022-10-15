<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug</title>
</head>
<body>
    
    
    
        <?php
        include "config.php";

        $result = $conn->query("SELECT * FROM Arquivo;");
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        echo print_r($row);

        foreach ($row as $item) { ?>
            <div>
               <div>
                  <p>Nome do remetente: <?= $item["nome"] ?></p>
               </div>
               <div>
                  <h3>Título do arquivo: <?= $item["id_arquivo"] ?></h3>
                  <span>Impressão Concluída: <?= $item["situacao"] ?></span>
               </div>
               <div>
                  <p>Data de Conclusão: <?= $item["data_entrega"] ?></p>
               </div>
            </div>

            <hr>
        <?php }
        ?>
    
    
</body>
</html>