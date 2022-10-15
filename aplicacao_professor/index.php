<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recebidos</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <script src="./js/menu.js" defer></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="menu_container">
          <img
            src="./image/icon-menu-hamburguer.svg"
            alt="Menu lateral - hamburguer"
            id="btnMenu"
          />

          <div id="menu" class="menu effect">
            <nav>
              <ul>
                <li>
                  <a href="#">
                    <img src="./image/icon-recebidos.svg" alt="Icone de recebidos" srcset="" />
                    Recebidos
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="./image/icon-prova.svg" alt="Icone de prova" srcset="" />
                    Prova
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="./image/icon-atividade.svg" alt="Icone de atividades" srcset="" />
                    Atividade
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="./image/icon-apostila.svg" alt="Icone de apostilas" srcset="" />
                    Apostila
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="./image/icon-impressos.svg" alt="Icone de impressos" srcset="" />
                    Impresso
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img
                      src="./image/icon-naoImpresso.svg"
                      alt="Icone de não impressos"
                      srcset=""
                    />
                    Não impresso
                  </a>
                </li>
              </ul>

              <div>
                <img src="./image/buuton-close.svg" alt="butão voltar" id="btnClose" />
              </div>
            </nav>
          </div>

          <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Pesquisar..." />
            <img src="./image/icon-lupa.svg" id="btnBusca" alt="Buscar" />
          </div>

          <ul>
            <li>
              <a href="#"> <img src="./image/icon-home.svg" alt="Icone da home-page" /> </a>
            </li>
            <li>
              <a href="./src/notificacoes.php"
                ><img src="./image/icon-notification.svg" alt="Icone de notificação" />
              </a>
            </li>
            <li>
              <a href="#"><img src="./image/icon-profile.svg" alt="Icone do perfil" /> </a>
            </li>
          </ul>
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
          <div class="card">
            <div class="tempo_espera"></div>
            <div class="image">
              <img
                class="icon_person"
                src="./image/icons8-pessoa-do-sexo-masculino-90.png"
                alt="icon.png"
              />
            </div>
            <div class="text_name">
              <h5>Nome do professor: <?= $item["nome"] ?></h5>
            </div>
            <div class="text_title">
              <h5>Titulo: Titulo do arquivo</h5>
            </div>
            <div class="text_subject">
              <h5>Assunto: Assunto do arquivo</h5>
            </div>
            <div class="text_number_of_pages">
              <h5>N° de copias: <?= $item["qtd_impressao"] ?></h5>
            </div>
            <div>
              <h5>Até <?= $item["data_envio"] ?></h5>
            </div>
          </div>
        </div>
    <?php }
    }
    ?>  
      

      </div>
    </main>
  </body>
</html>
