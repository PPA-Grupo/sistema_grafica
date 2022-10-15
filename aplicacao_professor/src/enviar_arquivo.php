<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../styles/style.css">
   <link rel="stylesheet" href="../styles/page_enviarArquivo.css">
   <title>Enviar arquivo para impressão</title>
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
   <main>
      
      <form action="handleFileRequest.php" method="POST" enctype="multipart/form-data">
      <div class="container_titlAssun">
         <label for="">Título: </label>
         <input type="text" name="titulo" id="titulo" placeholder="Adicione um título"/>
         <br/>
         <label for="">Assunto: </label>
         <input type="text" name="assunto" id="assunto" placeholder="Informe o assunto do arquivo"/> 
      </div>         

      <div class="info_envio">
         <div>
            <div>
               <label for="cars">Tipo do documento:</label> 
               <br/>
               <select name="tipoDoc" id="tipo_docs">
                  <option value="prova" >Prova </option>
                  <option value="avaliacao"> Avaliacao </option>
                  <option value="apostila"> Apostila </option>
               </select>
            </div>

            <div>
               <legend>Qual a cor das impressões:</legend>
               <input type="radio" name="cor" value="Preto e Branco">Preto e Branco
               <input type="radio" name="cor" value="Colorido">Colorido
               
            </div>
            
         </div>
       
         <div class="div_numCopia">
            <input type="number" name="nCopias" placeholder="Nº de cópias:">
            <input name="data" type="date">
         </div>
         
      </div>

      <div class="enviar_arquivo">  
         <input type="file" name="file" id="upload_pdf" accept=".pdf"/>
      </div>
      <input type="submit" name="submit" id="button_enviar"/>   
      </form>
   </main>
</body>
</html>