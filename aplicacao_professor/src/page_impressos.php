<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../styles/style.css">
   <title>Home</title>
   <script src="../js/menu.js" defer></script>
</head>
<body>
   <header>
      <nav>
         <div class="menu_container">
            <a href="../index.php">
               <img src="../image/icon-home.svg" alt="Botão home" id="btnHome">
            </a>

            <div id="divBusca">
               <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
               <img src="../image/icon-lupa.svg" id="btnBusca" alt="Buscar"/>
             </div>

            <ul>
               <li> 
                  <a href="../src/page_impressos.php"> Impressos 
                  </a>   
               </li>
               <li> 
                  <a href="../src/page_meus_envios.php"> Meus envios 
                  </a>   
               </li>
               <li> 
                  <a href="../src/enviar_arquivo.php"> Novo envio 
                  </a>   
               </li>

            </ul>
            <div class="notificacion_profile">
               <a href="../src/notificacoes.php"><img src="../image/icon-notification.svg" alt="Icone de notificação">
               </a>
               <a href="#"><img src="../image/icon-profile.svg" alt="Icone do perfil">
               </a>
            </div>
            
         </div>
         
      </nav>
   </header>

</body>
</html>