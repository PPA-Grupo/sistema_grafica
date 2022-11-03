<?php
    include "config.php";

    // Capitura dos dados informados
    $titulo = $_POST["titulo"];
    $assunto = $_POST["assunto"];
    $cor = $_POST["cor"];
    $nCopias = $_POST["nCopias"];
    $data = $_POST["data"];

    // verificação de arquivo existente no input de upload de arquivos PDF
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode(".", $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        if ($fileError === 0) {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = "../../uploads".$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            echo "<script>
                  window.location.href='/ppa/ppa/aplicacao_professor/index.php';
                  alert('Inserido com sucesso!');
                  </script>";

        }

        $stmt->prepare("INSERT INTO arquivo (tipo, nome, tamanho_arquivo, qtd_impressao, data_envio, cor, titulo, assunto) VALUES (?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssiissss", $fileActualExt, $fileNameNew, $fileSize, $nCopias, $data, $cor, $titulo, $assunto);
        $stmt->execute();
    }

?>
