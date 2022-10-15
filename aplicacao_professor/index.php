<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/style.css" />
    <title>Home</title>
    <script src="./js/menu.js" defer></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="menu_container">
          <img src="./image/icon-home.svg" alt="Botão home" id="btnHome" />

          <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Pesquisar..." />
            <img src="./image/icon-lupa.svg" id="btnBusca" alt="Buscar" />
          </div>

          <ul>
            <li>
              <a href="./src/page_impressos.php"> Impressos </a>
            </li>
            <li>
              <a href="./src/page_meus_envios.php"> Meus envios </a>
            </li>
            <li>
              <a href="./src/enviar_arquivo.php"> Novo envio </a>
            </li>
          </ul>
          <div class="notificacion_profile">
            <a href="./src/notificacoes.php"
              ><img src="./image/icon-notification.svg" alt="Icone de notificação" />
            </a>
            <a href="#"><img src="./image/icon-profile.svg" alt="Icone do perfil" /> </a>
          </div>
        </div>
      </nav>
    </header>
    <main>

          <?php
            include "./src/config.php";

            //realiza query de consulta
            $result = $conn->query("SELECT * FROM Arquivo;");
            //guarda essa query na variavel $row
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
   
            // echo print_r($row);
   
            //array para gerar cards de notificações
            foreach ($row as $item) {
              //Caso a situação do Documento for 1 (Mas pode ser alterado para "Entregue"), ele será exibido nas notificações.
              if ($item["situacao"] == "0") { ?>

                      <div class="container_arquivoRece">
                        <div class="status_arquivo">
                        </div>
                        <div class="identificacao_envio">
                            <div class="ideti_remetente">
                              <img class="icon_person" src = "./image/icons8-pessoa-do-sexo-masculino-90.png" alt="icon do avatar de perfil">
                            </div>
                        </div>
                        <div class="info_arquivo">
                            <div>
                              <h4 class="text_title">
                              Titulo: <?= $item["titulo"] ?></h5>
                              <h5 class="text_subject"><?= $item["assunto"] ?></h5>
                              <h5 class="text_number_of_pages">N° de copias: <?= $item["qtd_impressao"] ?></h5>
                            </div>
                            <h5>Até <?= $item["data_entrega"] ?></h5>
                        </div>
                      </div>
                     
            <?php }
            }
          ?>    

    </main>
  </body>
</html>
