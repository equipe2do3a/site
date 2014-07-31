<?php

require_once '../conexao/conecta.inc';

$nome = $_POST['nome'];
$email = $_POST['email'];

//$arquivo = isset($_FILES["foto"]) ? $_FILES["foto"] : FALSE;
$arquivo = $_FILES["foto"];

$erro = $config = array();
$config["tamanho"] = 5242880;
$config["largura"] = 3000;
$config["altura"] = 3000;

if ($arquivo) {
    if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $arquivo["type"])) {
        $erro[] = "Arquivo em formato invalido! A imagem deve ser jpg, jpeg, gif ou png. Envie outro arquivo";
    } else {
        // Verifica tamanho do arquivo
        if ($arquivo["size"] > $config["tamanho"]) {
            $erro[] = "Arquivo em tamanho muito grande! A imagem deve ser de no m�ximo " . $config["tamanho"] . " bytes. Envie outro arquivo";
        }
        // dimensoes da imagem
        $tamanhos = getimagesize($arquivo["tmp_name"]);
        // Verifica largura
        if ($tamanhos[0] > $config["largura"]) {
            $erro[] = "Largura da imagem não deve ultrapassar " . $config["largura"] . " pixels";
        } // Verifica altura
        if ($tamanhos[1] > $config["altura"]) {
            $erro[] = "Altura da imagem não deve ultrapassar " . $config["altura"] . " pixels";
        }
    }

    if (sizeof($erro)) {
        foreach ($erro as $err) {
            echo " - " . $err . "<BR>";
        }
    }
    //executando o upload
    else {
        // Pega extenção do arquivo 
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);
        // Gera um nome unico para a imagem
        $imagem_nome = md5(uniqid(time())) . "." . $ext[1];
        // Caminho de onde a imagem ficar 
        $imagem_dir = "fotos/" . $imagem_nome;
        // Faz o upload da imagem 
        move_uploaded_file($arquivo["tmp_name"], $imagem_dir);
        echo "Sua foto foi enviada com sucesso!";
        echo "INSERT INTO usuarios (nome, email, foto) VALUES ('$nome','$email','$imagem_dir')";
        $sql = mysql_query("INSERT INTO usuarios (nome, email, foto) VALUES ('$nome','$email','$imagem_nome')");
        //dados inseridos com sucesso 
        if ($sql) {
            echo "Você foi cadastrado com sucesso.";
        }
    }
}