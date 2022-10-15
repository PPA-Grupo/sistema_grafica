<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notificações</title>
    <link rel="stylesheet" href="../styles/style.css" />
    <script src="../js/menu.js" defer></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="menu_container">
          <img
            src="../image/icon-menu-hamburguer.svg"
            alt="Menu lateral - hamburguer"
            id="btnMenu"
          />

          <div id="menu" class="menu effect">
            <nav>
              <ul>
                <li>
                  <a href="../index.php">
                    <img src="../image/icon-recebidos.svg" alt="Icone de recebidos" />
                    Recebidos
                  </a>
                </li>
                <li>
                  <a href="../src/prova.php">
                    <img src="../image/icon-prova.svg" alt="Icone de prova" />
                    Prova
                  </a>
                </li>
                <li>
                  <a href="../src/atividade.php">
                    <img src="../image/icon-atividade.svg" alt="Icone de atividades" />
                    Atividade
                  </a>
                </li>
                <li>
                  <a href="../src/apostila.php">
                    <img src="../image/icon-apostila.svg" alt="Icone de apostilas" />
                    Apostila
                  </a>
                </li>
                <li>
                  <a href="../src/impressos.php">
                    <img src="../image/icon-impressos.svg" alt="Icone de impressos" />
                    Impresso
                  </a>
                </li>
                <li>
                  <a href="../src/nao_impresso.php">
                    <img src="../image/icon-naoImpresso.svg" alt="Icone de não impressos" />
                    Não impresso
                  </a>
                </li>
              </ul>

              <div>
                <img src="../image/buuton-close.svg" alt="butão voltar" id="btnClose" />
              </div>
            </nav>
          </div>

          <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Pesquisar..." />
            <img src="../image/icon-lupa.svg" id="btnBusca" alt="Buscar" />
          </div>

          <ul>
            <li>
              <a href="../index.php">
                <img src="../image/icon-home.svg" alt="Icone da home-page" />
              </a>
            </li>
            <li>
              <a href="../src/notificacoes.php"
                ><img src="../image/icon-notification.svg" alt="Icone de notificação" />
              </a>
            </li>
            <li>
              <a href="#"><img src="../image/icon-profile.svg" alt="Icone do perfil" /> </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <div class="container_notificacoes">
        <div class="nova_notificacao">
          <div>
            <img src="../image/icon-profile.svg" alt="Avatar do perfil " />
            <p>Nome do remetente</p>
          </div>
          <div>
            <h3>Título do arquivo</h3>
            <span>Assunto do arquivo</span>
          </div>
          <div>
            <p>10:40</p>
            <p>Hoje</p>
            <span>1</span>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>