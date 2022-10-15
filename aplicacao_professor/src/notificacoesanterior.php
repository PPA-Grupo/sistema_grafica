<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Recebidos</title>
   <link rel="stylesheet" href="../styles/style.css">
   <script src="../js/menu.js" defer></script>

</head>
<body>
   <header>
      <nav>
         <div class="menu_container">
            <img src="../image/icon-menu-hamburguer.svg" alt="Menu lateral - hamburguer" id="btnMenu">

            <div id="menu" class="menu effect">
               <nav>
                  <ul>
                     <li>
                        <a href="#"> <img src="../image/icon-recebidos.svg" alt="Icone de recebidos" srcset="">
                           Recebidos
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img src="../image/icon-prova.svg" alt="Icone de prova" srcset="">
                           Prova
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img src="../image/icon-atividade.svg" alt="Icone de atividades" srcset="">
                           Atividade
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img src="../image/icon-apostila.svg" alt="Icone de apostilas" srcset="">
                           Apostila
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img src="../image/icon-impressos.svg" alt="Icone de impressos" srcset="">
                           Impresso
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <img src="../image/icon-naoImpresso.svg" alt="Icone de não impressos" srcset="">
                           Não impresso
                        </a>
                     </li>
                  </ul>
                  
                  <div>
                     <img src="../image/buuton-close.svg" alt="butão voltar" id="btnClose">
                  </div>
               </nav>
           </div>

            <div id="divBusca">
               <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
               <img src="../image/icon-lupa.svg" id="btnBusca" alt="Buscar"/>
             </div>

            <ul>
               <li> 
                  <a href="../index.php"> <img src="../image/icon-home.svg" alt="Icone da home-page"> 
                  </a>  
               </li>
               <li> 
                  <a href="../src/notificacoes.php"><img src="../image/icon-notification.svg" alt="Icone de notificação">
                  </a>
               </li>
               <li>
                  <a href="#"><img src="../image/icon-profile.svg" alt="Icone do perfil">
                  </a>
               </li>
            </ul>
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