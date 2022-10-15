<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Notificações</title>
    <script src="../js/menu.js" defer></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="menu_container">
          <a href="../index.php">
            <img src="../image/icon-home.svg" alt="Botão home" id="btnHome" />
          </a>

          <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Pesquisar..." />
            <img src="../image/icon-lupa.svg" id="btnBusca" alt="Buscar" />
          </div>

          <ul>
            <li>
              <a href="../src/page_impressos.php"> Impressos </a>
            </li>
            <li>
              <a href="../src/page_meus_envios.php"> Meus envios </a>
            </li>
            <li>
              <a href="../src/enviar_arquivo.php"> Novo envio </a>
            </li>
          </ul>
          <div class="notificacion_profile">
            <a href="../src/notificacoes.php"
              ><img src="../image/icon-notification.svg" alt="Icone de notificação" />
            </a>
            <a href="#"><img src="../image/icon-profile.svg" alt="Icone do perfil" /> </a>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container_notificacoes">
      <?php
         include "config.php";

         //realiza query de consulta
         $result = $conn->query("SELECT * FROM Arquivo;");
         //guarda essa query na variavel $row
         $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

         // echo print_r($row);

         //array para gerar cards de notificações
         foreach ($row as $item) {
           //Caso a situação do Documento for 1 (Mas pode ser alterado para "Entregue"), ele será exibido nas notificações.
           if ($item["situacao"] == "1") { ?>
                  <div class="nova_notificacao">
                        <div>
                           <img src="../image/icon-profile.svg" alt="Avatar do perfil "/>
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
         }
         ?>    
      </div>
    </main>
  </body>
</html>
